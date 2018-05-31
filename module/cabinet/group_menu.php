<?php

$_auth = 1;
require_once('module/auth.php');

setPage('max_rate', $db->fetch1Row($db->select('Plans','pMax','pID=?',1)));

showPage();