<?php
require_once('module/auth.php');
if (_uid()) {
    setPage('reflogin', $db->fetch1($db->select('Users', 'uLogin', 'uID=?d', array($_user['uRef']))));
    setPage('refurl', $_GS['root_url'] . '?' . $_cfg['Ref_Word'] . '=' . $_user['uLogin']);
    $refs = array();
    $a = array(_uid());
    $n = $_cfg['Ref_Levels'];
    if ($n < 1) $n = 1;
    for ($i = 0; $i < $n; $i++) {
        $refs[$i]['perc'] = $_cfg['Ref__*Perc'][$i];
        $refs[$i]['users'] = $db->fetchIDRows($db->select('Users U LEFT JOIN AddInfo ON auID=uID', 'U.uID, U.uLogin, AddInfo.aCTS, 			(SELECT SUM(dZD) FROM Deps WHERE dState>=1 and duID=U.uID) AS ZDepo,			(SELECT SUM(oSum) FROM Opers WHERE oOper=? and ouID=?d and oState=3 and oTag=U.uID) AS ZRef', 'U.uRef ?i', array('REF', _uid(), $a), 'U.uLogin'), false, 'uID');
        stampTableToStr($refs[$i]['users'], 'aCTS');
        $a = array_keys($refs[$i]['users']);
    }
    setPage('refs', $refs);
}
showPage();
 ?>