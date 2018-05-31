<?php
$_auth = 90;
require_once('module/auth.php');


setPage('list', $db->fetchRows($db->select('game_bg','id, groups, bg','','')));

showPage();