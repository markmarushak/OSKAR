<?php

/*
BONUS - by system						0	0	0		0	0	0		+$	0	0
PENALTY									0	0	0		0	0	0		-$	0	0

CASHIN - add funds from p.sys			0	0	0		0	0	0		+$	0	0
	[needs 'oParams2' filled date, batch or set via opConfirm 'params']
CASHOUT - withdraw to p.sys				$$	0	0		-$	0	+$		0	0	-$

EX - exchange							$$	0	0		-$	+$	0		0	-$	0
EXIN									0	0	0		0	0	0		+$	0	0 (cid2)

TR - send								$$	0	0		-$	0	+$		0	0	-$
TRIN - receive							0	0	0		0	0	0		+$	0	0 (uid2)

BUY - buy item							$$	0	0		-$	+$	0		0	-$	0
SELL - sell item 						0	0	0		0	0	0		+$	0	0
BUY2 - use service 						$$	0	0		-$	+$	0		0	-$	0
SELL2 - provide service					0	0	0		0	0	0		+$	0	0

REF - referral comission N				0	0	0		0	0	0		+$	0	0

GIVE - make deposit						$$	0	0		-$	+$	0		0	0	0
TAKE - withdraw to balance				0	0	0		0	0	0		+$	-$	0

CALCIN - periodically by system			0	0	0		0	0	0		+$	0	0
CALCOUT									$$	0	0		0	0	0		-$	0	0
----------------------------------
0 = Ожидание (подтверждения)
1 = Ожидает пополнения
2 = Ожидает обработки (выполнения)
3 = Выполнена
4 = Отклонена
5 = Отменена

Двойные операции:
Пополнение+обмен (cid2, sum2)
Пополнение+покупка (vid, amount)
пополнение+вклад (pid)
Обмен (cid2, sum2)+вывод
*/

function opUser($uid)
{
    global $db;
    return $db->count('Users', 'uID=?d and (uState=1 or uState=2)', array($uid));
}

function _zr($z, $cid)
{
    global $_cfg, $_currs;
    $r = $_currs[$cid]['cNumDec'];
    if ($r <= 0)
        $r = $_cfg['UI_NumDec'];
    return round($z, $r);
}

function opCalcComis($cid, $oper, $sum, $by_admin)
{
    global $db, $_cfg, $_currs;
    $c = $_currs[$cid];
    if (!$c)
        return 'psys_wrong';
    $prfx = 'c' . $oper;
    if (!$by_admin and !$c[$prfx . 'Mode'] and ($oper != 'EXIN') and ($oper != 'TRIN'))
        return 'oper_disabled';
    if ($c[$prfx . 'Int'] and (round($sum) != $sum))
        return 'sum_not_int';
    if ($sum < $c[$prfx . 'Min'])
        return 'sum_min';
    if (($c[$prfx . 'Max'] > 0) and ($sum > $c[$prfx . 'Max']))
        return 'sum_max';
    $csum = _zr(calcPerc($sum, $c[$prfx . 'Comis'], 6), $cid);
    if ($csum < $c[$prfx . 'ComisMin'])
        $csum = 0 + $c[$prfx . 'ComisMin'];
    elseif (($c[$prfx . 'ComisMax'] > 0) and ($csum > $c[$prfx . 'ComisMax']))
        $csum = 0 + $c[$prfx . 'ComisMax'];
    return _zr($csum, $cid);
}

function opCalcExSum($is_out, $cid, $sum)
{
    global $db, $_cfg, $_currs;
    if ($sum <= 0)
        return 'ex_sum_wrong';
    $c = $_currs[$cid];
    $zc = $_cfg['Bal_Rate' . $c['cCurrID']];
    if ($zc <= 0)
        return 'ex_rate_not_set';
    try
    {
        if ($is_out)
            return _zr($sum * $zc * (1 + $c['cEXOut'] / 100), $cid);
        else
            return _zr($sum / ($zc * (1 - $c['cEXIn'] / 100)), $cid);
    }
    catch (Exception $e)
    {
    }
    return 'ex_overflow';
}

function opCalcEx($cid, $cid2, $sum)
{
    if ($cid != 1)
        if (is_string($sum = opCalcExSum(true, $cid, $sum)))
            return $sum;
    if ($cid2 != 1)
        $sum = opCalcExSum(false, $cid2, $sum);
    return $sum;
}

// Operations

function opOperChkAWD($o)
{
    global $db, $_cfg;
    $oper = $o['oOper'];
    $uid = $o['ouID'];
    $cid = $o['ocID'];
    $sum = $o['oSum'] - $o['oComis'];
    if (!$_cfg["Bal_AWD$oper"] or (($oper == 'EXIN') and ($cid == 1)))
        return false;
    if ($cid == 1)
    {
        $params = array(
            'cid2' => $db->fetch1($db->select('AddInfo', 'aDefCurr', 'auID=?d', array($uid)))
        );
        return opOperCreate($uid, 'EX', 1, $sum, $params, 'Auto', true, true);
    }
    else
        return opOperCreate($uid, 'CASHOUT', $cid, $sum, array(), 'Auto', true, true);
}

function opOperCreateInfo($uid, $oper, $cid, $sum, $params = array(), $memo = '')
{
    global $db, $_currs;
    $params = asArray($params);
    $n = array(
        'oid' => $oid,
        'oper' => $oper,
        'cid' => $cid,
        'sum' => $sum,
        'psys' => $_currs[$cid]['cName'],
        'curr' => $_currs[$cid]['cCurr']
    );
    $a = array(
        'oCTS' => timeToStamp(),
        'oATS' => timeToStamp(time() + HS2_UNIX_HOUR),
        'ouID' => $uid,
        'oOper' => $oper,
        'ocID' => $cid,
        'oSum' => $sum,
        'oComis' => valueIf($params['comis'] > 0, _zr(calcPerc($sum, $params['comis'], 6), $cid), 0),
        'oParams' => arrayToStr($params),
        'oBatch' => $params['batch'],
        'oTag' => $params['tag'],
        'oTS' => timeToStamp(),
        'oState' => 3,
        'oMemo' => $memo,
        'oNTS' => timeToStamp()
    );
    $oid = $db->insert('Opers',	$a);
    $params = array_merge($params, $n);
    $params['url'] = fullURL(moduleToLink('balance/oper'));
    if ($usr = opReadUser($uid))
    {
        SendMailToUser($usr['uMail'], "Oper$oper",
            opUserConsts($usr, $params),
            $usr['uLang']
        );
        sendMailToAdmin("Oper$oper", opUserConsts($usr, $params));
    }
    opEvent('Oper', $uid, $params);
    opOperChkAWD($a);
    return $oid;
}

function opOperCreate($uid, $oper, $cid, $sum, $params = array(), $memo = '', $and_complete = false, $by_admin = false)
{
    global $db, $_cfg, $_currs;
    if ($uid < 0)
        $uid = _uid();
    $sum = _zr($sum, $cid);
    $params = asArray($params);
    if (!$oper)
        return 'oper_empty';
    if (!$uid)
        return 'user_empty';
    if (!opUser($uid))
        return 'user_wrong';
    if (!$cid)
        return 'psys_empty';
    if (!$_currs[$cid])
        return 'psys_wrong';
    if (!$by_admin and !$_currs[$cid]['c' . $oper . 'Mode'] and ($oper != 'EXIN') and ($oper != 'TRIN'))
        return 'oper_disabled';
    if ($sum <= 0)
        return 'sum_wrong';
    if (is_string($csum = opCalcComis($cid, $oper, $sum, $by_admin)))
        return $csum; // 'sum_wrong'
    if ($params['comis'] > 0)
        $csum += _zr(calcPerc($sum, $params['comis'], 6), $cid);
    if (($sum - $csum) < 0)
        return 'sum_wrong';
    if (in_array($oper, array('CASHOUT', 'EX', 'TR', 'BUY', 'BUY2', 'GIVE')))
        if ((0 + $db->fetch1($db->select('Wallets', 'wBal', 'wuID=? and wcID=?', array($uid, $cid)))) < $sum)
            return 'low_bal1';
    if ($oper == 'EX')
    {
        if ($params['cid2'] == $cid)
            return 'psys2_equal_psys';
        if (!$params['cid2'])
            return 'psys2_empty';
        $params['psys'] = $_currs[$params['cid2']]['cName'];
        if (!$params['psys'])
            return 'psys2_wrong';
        $params['sum2'] = opCalcEx($cid, $params['cid2'], $sum - $csum);
        if (is_string($params['sum2']))
            return $params['sum2']; // 'sum2_wrong'
    }
    if ($oper == 'TR')
    {
        if ($params['uid2'] == $uid)
            return 'user2_equal_user';
        if (!$params['uid2'])
            return 'user2_empty';
        $params['user'] = $db->fetch1($db->select('Users', 'uLogin', 'uID=? and (uState=1 or uState=2)', array($params['uid2'])));
        if (!$params['user'])
            return 'user2_not_found';
    }
    $oid = $db->insert('Opers',
        array(
            'oCTS' => timeToStamp(),
            'oATS' => timeToStamp(time() + HS2_UNIX_HOUR),
            'ouID' => $uid,
            'oOper' => $oper,
            'ocID' => $cid,
            'oSum' => $sum,
            'oComis' => $csum,
            'oParams' => arrayToStr($params),
            'oBatch' => $params['batch'],
            'oTag' => $params['tag'],
            'oTS' => 0, // complete date
            'oState' => 0,
            'oMemo' => $memo,
            'oNTS' => 0 // date of modify (by admin / system)
        )
    );
    if (!$oid)
        return 'db_error';
    if (in_array($oper, array('CASHIN', 'CASHOUT')))
    {
        $w = $db->fetch1Row($db->select('Users LEFT JOIN Wallets ON (wcID=?d AND wuID=uID)',
            '*', 'uID=?d', array($cid, $uid)));
        $params2 = opDecodeUserCurrParams($w);
        $params2['date'] = timeToStamp();
        $params2['memo'] = textVarReplace(
            exValue('Invoice ##id#, #user#', textLangFilter(exValue($_cfg['Bal_' . $oper . 'Text'], $memo), $w['uLang'])),
            array('id' => $oid, 'user' => $w['uLogin'])
        );
        $db->update('Opers', array('oParams2' => arrayToStr($params2)), '', 'oID=?d', array($oid));
    }
    if ($and_complete)
    {
        if (is_string($err = opOperConfirm($uid, $oid, array(), $by_admin)))
            return $err;
        if (is_string($err = opOperComplete($uid, $oid, array(), $by_admin)))
            return $err;
    }
    return $oid;
}

function opOperConfirm($uid, $oid, $params = array(), $by_admin = false)
{
    global $db, $_cfg, $_currs;
    if (is_array($oid))
    {
        if ($o = $db->fetch1Row($db->select('Opers', '*', 'oID=?d and ouID=?d', array($id = $oid['oid'], $uid))))
            if ($o['oState'] <= 1)
            {
                $err = opOperConfirm($uid, $id, array());
                if (($o['ocID'] == 1) or ($_currs[$o['ocID']]['c' . $o['oOper'] . 'Mode'] == 2))
                {
                    if ($err === 'limit_exceeded')
                        $err = opOperConfirm($uid, $id, array(), true);
                    elseif (!is_string($err) and ($o['oOper'] != 'CASHIN'))
                        opOperComplete($uid, $id, array());
                    if (is_string($err))
                        sendMailToAdmin('OperRequired',
                            opUserConsts(opReadUser($uid), array('oid' => $id, 'url' => fullURL(moduleToLink('balance/admin/oper')))));
                }
                $oid = exValue($id, $o['oTag']);
                showInfo('Completed', moduleToLink('balance/oper') . "?id=$oid");
            }
        showInfo('*Error', moduleToLink('balance'));
    }
    $params = asArray($params);
    if (!($o = $db->fetch1Row($db->select('Opers LEFT JOIN Currs ON cID=ocID', '*', 'oID=?d' . valueIf($uid > 0, ' and ouID=?d'), array($oid, $uid)))))
        return 'oper_not_found';
    if (!(($o['oState'] < 2) or (($o['oState'] == 2) and ($oper != 'CASHIN'))))
        return 'oper_state_wrong';
//	if (!$by_admin and (stampToTime($o['oATS']) < time()))
//		return 'oper_expired';
    $uid = $o['ouID'];
    $oparams = strToArray($o['oParams']);
    $oparams2 = strToArray($o['oParams2']);
    $a = array(
        'oTS' => timeToStamp(),
        'oState' => 2
    );
    $cid = $o['ocID'];
    $sum = $o['oSum'];
    $res = 'oper_unknown';
    switch ($o['oOper'])
    {
        case 'BONUS':
        case 'PENALTY':
        case 'EXIN':
        case 'TRIN':
        case 'SELL':
        case 'SELL2':
        case 'REF':
        case 'CALCIN':
        case 'CALCOUT':
            $res = true;
            break;
        case 'CASHIN':
            $res = true;
            if ($params) // from status
            {
                if ($params['sum'] === '?')
                    $params['sum'] = $sum;
                $params['date'] = timeToStamp($params['date']);
                $a['oParams2'] = arrayToStr($params);
                $oparams2 = $params;
            }
            if (!$oparams2['date'])
                $res = 'data_date_wrong';
            elseif (!$oparams2['batch'])
                $res = 'data_batch_wrong';
            elseif ($db->count('Opers', 'ocID=?d and oBatch=? and oState=3', array($cid, $oparams2['batch'])))
                $res = 'batch_exists';
            $a['oBatch'] = '?' . $oparams2['batch'];
            break;
        case 'CASHOUT':
            if (!$by_admin and ($o['cCASHOUTLimitPer'] > 0))
            {
                $outsum = $db->fetch1($db->select('Opers', 'SUM(oSum)',
                    "(ouID=?d) and (oOper=?) and (ocID=?d) and (oState=3) and (oTS>?)",
                    array($uid, 'CASHOUT', $cid, timeToStamp(time() - ($o['cCASHOUTLimitPer'] * HS2_UNIX_HOUR)))));
                if (($sum + $outsum) > $o['cCASHOUTLimit'])
                {
                    $res = 'limit_exceeded';
                    break;
                }
            }
            $res = opChangeBalance($uid, $cid, -$sum, 0, $sum, true, $oid, '');
            break;
        case 'EX':
            if ($params)
            {
                $a['oParams'] = arrayToStr($params);
                $oparams = $params;
            }
            $res = opChangeBalance($uid, $cid, -$sum, 0, $sum, true, $oid, '');
            break;
        case 'TR':
            if ($params)
            {
                $a['oParams'] = arrayToStr($params);
                $oparams = $params;
            }
            if (opUser($oparams['uid2']))
                $res = opChangeBalance($uid, $cid, -$sum, 0, $sum, true, $oid, '');
            else
                $res = 'user2_wrong';
            break;
        case 'BUY':
        case 'GIVE':
            $res = opChangeBalance($uid, $cid, -$sum, 0, $sum, !$oparams['nocheck'], $oid, '');
            break;
        case 'TAKE':
            $res = opChangeBalance($uid, $cid, 0, -$sum, $sum, !$oparams['nocheck'], $oid, '');
            break;
    }
    if (is_string($res))
        return $res;
    $db->update('Opers', $a, '', 'oID=?d', array($oid));
    return true;
}

function opOperComplete($uid, $oid, $params = array(), $by_admin = false, $aparams = array())
{
    global $db, $_cfg;
    if (!$db->update('Opers', array('oPTS' => timeToStamp()), '', 'oID=?d and oState=2 and oPTS<?' . valueIf($uid > 0, ' and ouID=?d'),
        array($oid, timeToStamp(time() - 3 * HS2_UNIX_MINUTE), $uid)))
        return 'oper_not_found';
    $o = $db->fetch1Row($db->select('Opers LEFT JOIN Currs ON cID=ocID LEFT JOIN Users ON uID=ouID',
        'Opers.*, Currs.*, Users.uLogin', 'oID=?d', array($oid)));
    if ($o['oState'] != 2)
        return 'oper_state_wrong';
    $uid = $o['ouID'];
    $params = asArray($params);
    $oparams = strToArray($o['oParams']);
    $oparams2 = strToArray($o['oParams2']);
    $a = array(
        'oTS' => timeToStamp(),
        'oState' => 3,
        'oPTS' => 0
    );
    if ($params['tag'])
    {
        $o['oTag'] = $params['tag'];
        $a['oTag'] = $params['tag'];
    }
    if ($by_admin)
        $a['oNTS'] = timeToStamp();
    $cid = $o['ocID'];
    $sum = $o['oSum'] - $o['oComis'];
    if ($sum < 0)
        return 'oper_sum_wrong';
    $n = array(
        'oid' => $oid,
        'oper' => $o['oOper'],
        'tag' => $o['oTag'],
        'cid' => $cid,
        'sum' => $sum,
        'psys' => $o['cName'],
        'curr' => $o['cCurr']
    );
    $res = 'oper_unknown';
    switch ($o['oOper'])
    {
        case 'CALCIN':
            if ($o['oTag'] > 0)
                $a['oMemo'] = $o['oMemo'] . '#' . $o['oTag'];
        case 'EXIN':
        case 'TRIN':
        case 'BONUS':
        case 'SELL':
        case 'SELL2':
        case 'REF':
            $res = opChangeBalance($uid, $cid, $sum, 0, 0, false, $oid, $o['oMemo']);
            if (($o['oOper'] == 'EXIN') and $_cfg['Const_IntCurr'] and ($oparams['cid2'] == 1))
                if (!is_string($woid = opOperCreate($uid, 'CASHOUT', $cid, $sum, array(), 'Auto', false, $by_admin)))
                {
                    opOperConfirm($uid, $woid, array(), $by_admin);
                    if ($o['cCASHOUTMode'] == 2)
                        opOperComplete($uid, $woid, array(), $by_admin);
                    $p = strToArray($db->fetch1($db->select('Opers', 'oParams2', 'oID=?d', array($oparams['initid']))));
                    $p['newid'] = $woid;
                    $db->update('Opers', array('oParams2' => arrayToStr($p)), '', 'oID=?d', array($oparams['initid']));
                }
            break;
        case 'PENALTY':
        case 'CALCOUT':
            $res = opChangeBalance($uid, $cid, -$sum, 0, 0, !$by_admin, $oid, $o['oMemo']);
            break;
        case 'CASHOUT':
            if ($params['date']) // fake send ??? direct params
            {
                $params['date'] = timeToStamp($params['date']);
                $a['oParams2'] = arrayToStr($params);
                $oparams2 = $params;
            }
            elseif (!$oparams2['batch'] or ($oparams2['batch'] == '-')) // real send
            {
                include_once('lib/psys.php');
                if (!$aparams['apipass']) // NO psys direct access params
                    opDecodeCurrParams($o, $r, $r, $aparams);
                $c = getCIDs($o['cCID']);
                if ($c[3] and $aparams['apipass']) // psys access password is set?
                {
                    // pay SUM-COMIS from $aparams to $oparams2
                    $r = sendMoney($o['cCID'], $aparams, $oparams2, $sum, $oparams2['memo']);
                    $db->update('Opers', array('oMemo' => '~' . $r['result']), '', 'oID=?d', array($oid));
                    if (!$r['batch'])
                    {
                        $res = 'send_error';
                        break;
                    }
                    $oparams2['date'] = timeToStamp();
                    $oparams2['batch'] = $r['batch'];
                }
            }
            $n['acc'] = $oparams2['acc']; // payee acc
            $n['batch'] = $oparams2['batch'];
        case 'CASHIN':
            if ($oparams2['cid'] and ($oparams2['cid'] != $cid))
                return 'psys_wrong';
            if (isset($oparams2['sum'])) // SUM from SCI
            {
                $sum = _zr($oparams2['sum'], $cid);
                $a['oSum'] = $sum;
                if (is_string($res = opCalcComis($cid, $o['oOper'], $sum, $by_admin)))
                    break;
                $a['oComis'] = $res;
                if (($sum -= $res) < 0)
                {
                    $res = 'data_sum_wrong';
                    break;
                }
                $n['sum'] = $sum;
            }
            if (!$oparams2['date'])
                $res = 'data_date_wrong';
            elseif (!$oparams2['batch'])
                $res = 'data_batch_wrong';
            elseif (!$r['batch'] and $db->count('Opers', 'ocID=?d and oBatch=? and oState=3', array($cid, $oparams2['batch'])))
                $res = 'batch_exists';
            else
            {
                $a['oCTS'] = $oparams2['date'];
                $a['oBatch'] = $oparams2['batch'];
                $a['oMemo'] = $oparams2['memo'];
                if ($o['oOper'] == 'CASHIN')
                {
                    $res = opChangeBalance($uid, $cid, $sum, 0, 0, false, $oid, $a['oMemo']);
                    if ($oparams2['acc']) // try fill currency property 'acc'
                    {
                        $w = $db->fetch1Row($db->select('AddInfo LEFT JOIN Wallets ON (wcID=?d AND wuID=auID)',
                            'AddInfo.aDefCurr, Wallets.*', 'auID=?d', array($cid, $uid)));
                        $p = opDecodeUserCurrParams($w);
                        if (!$p['acc']) // first time ('acc' empty)
                        {
                            $t = time();
                            $key = $cid . $uid . $t;
                            $p = array(
                                'wParams' => encodeArrayToStr(array('acc' => $oparams2['acc']), $key),
                                'wMTS' => timetostamp($t)
                            );
                            $db->update('Wallets', $p, '', 'wcID=?d and wuID=?d', array($cid, $uid));
                        }
                        if (!$w['aDefCurr'])
                            $db->update('AddInfo', array('aDefCurr' => $cid), '', 'auID=?d', array($uid));
                    }
                    if (!is_string($res) and $_cfg['Const_IntCurr'] and ($cid > 1))
                    {
                        $err = opOperCreate($uid, 'EX', $cid, $sum, array('cid2' => 1), 'Auto', true, true);
                        if (!is_string($err))
                        {
                            $o2 = $db->fetch1Row($db->select('Opers', 'ocID, oSum, oComis, oParams', 'oID=?d', array($err)));
                            $o2params = strToArray($o2['oParams']);
                            $n['cid2'] = $o2params['cid2'];
                            $n['sum2'] = $o2params['sum2'];
                            global $_currs;
                            $n['psys2'] = $_currs[$n['cid2']]['cName'];
                            $n['curr2'] = $_currs[$n['cid2']]['cCurr'];
                        }
                    }
                }
                else
                    $res = opChangeBalance($uid, $cid, 0, 0, -$o['oSum'], false, $oid, $o['oMemo']);
            }
            break;
        case 'EX':
            $res = opChangeBalance($uid, $cid, 0, 0, -$o['oSum'], false, $oid, $o['oMemo']);
            if ($res === true)
            {
                $cid2 = $oparams['cid2'];
                $sum2 = $oparams['sum2'];
                $batch = 'EX' . str_pad($oid, 6, '0', STR_PAD_LEFT);
                $a['oBatch'] = $batch;
                $n['batch'] = $batch;
                $n['course'] = round($sum2 / $sum, 4);
                global $_currs;
                $n['psys2'] = $_currs[$cid2]['cName'];
                $n['curr2'] = $_currs[$cid2]['cCurr'];
                opOperCreate($uid, 'EXIN', $cid2, $sum2,
                    array('oid' => $oid, 'sum2' => $sum, 'cid2' => $cid, 'batch' => $batch, 'initid' => $params['initid']), $o['oMemo'], true, true);
            }
            break;
        case 'TR':
            if ($usr2 = opReadUser($oparams['uid2']))
            {
                $res = opChangeBalance($uid, $cid, 0, 0, -$o['oSum'], false, $oid, $o['oMemo']);
                if ($res === true)
                {
                    $batch = 'TR' . str_pad($oid, 6, '0', STR_PAD_LEFT);
                    $a['oBatch'] = $batch;
                    $n['to'] = $usr2['uLogin'];
                    $n['batch'] = $batch;
                    opOperCreate($oparams['uid2'], 'TRIN', $cid, $sum,
                        array('oid' => $oid, 'uid2' => $uid, 'user' => $o['uLogin'], 'batch' => $batch), $o['oMemo'], true, $by_admin);
                }
            }
            else
                $res = 'user2_wrong';
            break;
        case 'BUY':
            $res = opChangeBalance($uid, $cid, 0, 0, -$o['oSum'], false, $oid, $o['oMemo']);
            break;
        case 'GIVE':
            if ($oparams['bonus'] > 0)
                opOperCreateInfo($uid, 'BONUS', $cid, $oparams['bonus']);
            $res = opChangeBalance($uid, $cid, 0, $sum + $oparams['bonus'], -$o['oSum'], false, $oid, $o['oMemo']);
            if ($o['oTag'] > 0)
                $a['oMemo'] = $o['oMemo'] . '#' . $o['oTag'];
            break;
        case 'TAKE':
            $res = opChangeBalance($uid, $cid, $sum, 0, -$o['oSum'], false, $oid, $o['oMemo']);
            if ($o['oTag'] > 0)
                $a['oMemo'] = $o['oMemo'] . '#' . $o['oTag'];
            break;
    }
    if (is_string($res))
    {
        $db->update('Opers', array('oPTS' => 0), '', 'oID=?d', array($oid));
//		if (!$by_admin)
        sendMailToAdmin('OperNotComplete',
            opUserConsts(opReadUser($uid), array('oid' => $oid, 'url' => fullURL(moduleToLink('balance/admin/oper')))));
        return $res;
    }
    $db->update('Opers', $a, '', 'oID=?d', array($oid));
    $oparams = array_merge($oparams, $n);
    $oparams['url'] = fullURL(moduleToLink('balance/oper'));
    if ($usr = opReadUser($uid))
    {
        useLib('sms');
        if (function_exists('smsToUser'))
            smsToUser($uid, $usr['aTel'], 'Oper' . $o['oOper'], opUserConsts($usr, $oparams), $usr['uLang']);
        sendMailToUser($usr['uMail'], 'Oper' . $o['oOper'],
            opUserConsts($usr, $oparams),
            $usr['uLang']
        );
        sendMailToAdmin('Oper' . $o['oOper'],
            opUserConsts($usr, $oparams));
    }
    opEvent('Oper', $uid, $oparams);
    opOperChkAWD($o);
    return true;
}

function opOperCancel($uid, $oid, $params = array(), $by_admin = false)
{
    global $db, $_cfg;
    $params = asArray($params);
    if (!($o = $db->fetch1Row($db->select('Opers', '*', 'oID=?d' . valueIf($uid > 0, ' and ouID=?d'), array($oid, $uid)))))
        return 'oper_not_found';
    if ($o['oState'] >= 3)
        return 'oper_state_wrong';
    $uid = $o['ouID'];
    $oparams = strToArray($o['oParams']);
    $oparams2 = strToArray($o['oParams2']);
    $a = array(
        'oTS' => timeToStamp(),
        'oState' => ($by_admin ? 4 : 5)
    );
    if ($by_admin)
        $a['oNTS'] = timeToStamp();
    $cid = $o['ocID'];
    $sum = $o['oSum'];
    if ($o['oState'] == 2)
    {
        $res = 'oper_unknown';
        switch ($o['oOper'])
        {
            case 'BONUS':
            case 'PENALTY':
            case 'CASHIN':
            case 'EXIN':
            case 'TRIN':
            case 'SELL':
            case 'SELL2':
            case 'REF':
            case 'CALCIN':
            case 'CALCOUT':
                $res = true;
                break;
            case 'CASHOUT':
            case 'EX':
            case 'TR':
            case 'BUY':
            case 'GIVE':
                $res = opChangeBalance($uid, $cid, $sum, 0, -$sum, false, $oid, '');
                if (!is_string($res) and ($o['oOper'] == 'CASHOUT') and $_cfg['Const_IntCurr'] and ($cid > 1))
                    opOperCreate($uid, 'EX', $cid, $sum, array('cid2' => 1), 'Auto', true, true);
                break;
            case 'TAKE':
                $res = opChangeBalance($uid, $cid, 0, $sum, -$sum, false, $oid, '');
                break;
        }
        if (is_string($res))
            return $res;
    }
    $db->update('Opers', $a, '', 'oID=?d', array($oid));
    return true;
}

// Change balance

function opChangeBalance($uid, $cid, $z1, $z2, $z3, $chk_before = true, $oid = 0, $memo = '')
{
    if (($uid <= 0) or ($cid <= 0))
        return 'bal_wrong';
    $z1 = _zr($z1, $cid);
    $z2 = _zr($z2, $cid);
    $z3 = _zr($z3, $cid);
    if (($z1 == 0) and ($z2 == 0) and ($z3 == 0))
        return true;
    $z = $z1 + $z2 + $z3;
    global $db;
    $w = $db->fetch1Row(
        $db->select('Wallets', 'wBal, wLock, wOut', 'wcID=?d and wuID=?d', array($cid, $uid))
    );
    if (($w['wBal'] + $z1) < 0)
        return 'low_bal1';
    if (($w['wLock'] + $z2) < 0)
        return 'low_bal2';
    if (($w['wOut'] + $z3) < 0)
        return 'low_bal3';
    if (!$w)
        $db->query('INSERT INTO Wallets (wcID, wuID) VALUES (?d, ?d) ON DUPLICATE KEY UPDATE wMTS=wMTS', array($cid, $uid));
    try
    {
        $db->beginJob();
        if (!$db->update('Wallets',
            array(
                'wBal=' => "wBal+$z1",
                'wLock=' => "wLock+$z2",
                'wOut=' => "wOut+$z3"
            ),
            '', "wcID=?d and wuID=?d and (wBal+$z1>=0) and (wLock+$z2>=0) and (wOut+$z3>=0)", array($cid, $uid)
        ))
            xAbort();
        if ($z != 0)
            if (!$db->update('Users', array('uBal=' => "uBal+$z"), '', "uID=?d and (uBal+$z>=0)", array($uid)))
                xAbort();
    }
    catch (Exception $e)
    {
        $db->cancelJob();
        return 'low_bal';
    }
    $db->endJob();
    opAddHist('BAL', $uid, '', $memo, 0, $cid, $z, $oid);
    return true;
}

// Currs support

function opDecodeCurrParams($crec, &$p, &$p_sci, &$p_api)
{
    $key = $crec['cID'] . $crec['cCID'] . stampToTime($crec['cMTS']);
    $p = decodeArrayFromStr($crec['cParams'], $key);
    $p_sci = decodeArrayFromStr($crec['cParamsSCI'], $key, 2);
    $p_api = decodeArrayFromStr($crec['cParamsAPI'], $key, 3);
}

function opDecodeUserCurrParams($wrec)
{
    $key = $wrec['wcID'] . $wrec['wuID'] . stampToTime($wrec['wMTS']);
    return decodeArrayFromStr($wrec['wParams'], $key);
}

function opEditToCurrParams($fields, $old, $new, $fn = '')
{
    if (!is_array($old))
        $old = array();
    foreach ($fields as $f => $v)
        if (!is_int($f))
        {
            $is_pass = ((substr($f, -3) == 'key') or (substr($f, -4) == 'pass'));
            if ($new[$f] or !$is_pass)
            {
                if ($new[$f] and $v[1] and !preg_match('/^' . $v[1] . '$/', $new[$f]))
                    return $fn . $f . '_wrong';
                if (!$is_pass)
                    $new[$f] = strip_tags($new[$f]);
                elseif ($new[$f] == '-')
                    $new[$f] = '';
                $old[$f] = $new[$f];
            }
        }
    foreach ($old as $f => $v)
        if (sEmpty($v))
            unset($old[$f]);
    return $old;
}

function opCurrParamsToEdit($fields, $fn = '', $readonly = false)
{
    $res = array();
    foreach ($fields as $f => $v)
    {
        if (is_int($f))
            $res[$f] = $v;
        else
        {
            $fi = ($fn ? $fn . '[' . $f . ']' : $f);
            if ($f == '_url')
            {
                $url = fullURL(moduleToLink('balance/status'));
                $res[$fi] =
                    array('X', $v[0], 0, "<a href=\"$url\" target=\"_blank\">$url</a>");
//				$res[$fn . '[hideurl]'] =
//					array('C', 'Hide URL');
            }
            else
            {
                $is_pass = ((substr($f, -3) == 'key') or (substr($f, -4) == 'pass'));
                $res[$fi] =
                    array(
                        valueIf($is_pass, '*', valueIf($v[3], 'S', 'T')),
                        $v[0],
                        array($fn . $f . '_wrong' => '{!en!}wrong format{!ru!}неверный формат'),
                        $v[3],
                        'comment' => $v[2],
                        'readonly' => $readonly
                    );
            }
        }
    }
    return $res;
}

function prepareStat()
{
    global $db;
    setPage('stats', $db->fetchIDRows($db->select('Currs',
        "*, 
		(SELECT SUM(oSum) FROM Opers WHERE ouID=?d AND ocID=cID AND oOper='REF' AND oState=3) AS ZREF,
		(SELECT SUM(oSum) FROM Opers WHERE ouID=?d AND ocID=cID AND oOper='CALCIN' AND oState=3) AS ZCALCIN,
		(SELECT SUM(oSum) FROM Opers WHERE ouID=?d AND ocID=cID AND ((cID=1 AND oOper='EXIN') OR (cID>1 AND oOper='CASHIN')) AND oState=3) AS ZIN,
		(SELECT SUM(oSum) FROM Opers WHERE ouID=?d AND ocID=cID AND ((cID=1 AND oOper='EX') OR (cID>1 AND oOper='CASHOUT')) AND oState=3) AS ZOUT,
		(SELECT SUM(dZD) FROM Deps WHERE duID=?d AND dcID=cID AND dState=1) AS ZINDEPO
		",
        'cDisabled=0', array(_uid(), _uid(), _uid(), _uid(), _uid()), 'cID'), false, 'cID'));
}

?>