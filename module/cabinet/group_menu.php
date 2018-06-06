<?php

require_once('module/auth.php');

$min =$db->fetch($db->select('Random', 'number', "name=?", 'min'));
$max =$db->fetch($db->select('Random', 'number', "name=?", 'max')) ;
$rands = rand($min['number'],$max['number']);
$db->update('Plans',['pPerc' => $rands], 'pPerc', 'pID=?','1');

setPage('max_rate', $db->fetch1Row($db->select('Plans','pMax','pID=?',1)));

showPage();