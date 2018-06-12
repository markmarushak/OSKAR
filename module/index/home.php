<?php
$_auth = 1;
require_once('module/auth.php');
setPage('avatar', $db->fetch1Row($db->select('Avatar', 'url_img','user_id=?',_uid())));
showPage();