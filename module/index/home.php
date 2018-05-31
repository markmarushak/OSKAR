<?php
require_once('module/auth.php');

setPage('section-1', $db->fetchRows($db->select('Home', 'id,name,content', '','')));
showPage();?>