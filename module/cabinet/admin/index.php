<?php
$_auth = 90;
require_once('module/auth.php');

setPage('list', $db->fetchRows($db->select('question_answer','id, group_ru, groups, question, answer','','')));
setPage('last_id',$db->fetch1Row( $db->select('question_answer' ,'id','','','id desc','1')));
showPage();