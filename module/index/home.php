<?php
$_auth = 1;
require_once('module/auth.php');
setPage('avatar', $db->fetch1Row($db->select('Avatar', 'url_img','user_id=?',_uid())));
setPage('game_stat', $db->fetchRows($db->select('Deps LEFT JOIN  Users ON duID = uID LEFT JOIN AddInfo ON duID = auID','dID,aName,uLogin,dZD','', '','','10')));
showPage();