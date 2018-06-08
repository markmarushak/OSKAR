<?php
$_auth = 1;
require_once('module/auth.php');
setPage('currs', $_currs);

$min =$db->fetch($db->select('Random', 'number', "name=?", 'min'));
$max =$db->fetch($db->select('Random', 'number', "name=?", 'max')) ;

setPage('avatar', $db->fetch1Row($db->select('Avatar', 'url_img','user_id=?',_uid())));

setPage('min',$min);
setPage('max',$max);

useLib('balance');
prepareStat();
showPage();?>