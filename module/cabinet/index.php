<?php
$_auth = 1;require_once('module/auth.php');
setPage('list', $db->fetchIDRows($db->select('Users',    "uLogin, (SELECT SUM(oSum) FROM Opers WHERE ouID=uID AND oOper='GIVE') AS RSUM", '', 0, 'RSUM desc', 3), false, 'uLogin'));
setPage('currs', $_currs);

$min =$db->fetch($db->select('Random', 'number', "name=?", 'min'));
$max =$db->fetch($db->select('Random', 'number', "name=?", 'max')) ;



setPage('min',$min);
setPage('max',$max);

useLib('balance');
prepareStat();
showPage();?>