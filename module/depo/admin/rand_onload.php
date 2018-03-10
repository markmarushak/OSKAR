<?php
$auth=90;
require_once ('module/auth.php');
$min = $_POST['min'];
$max = $_POST['max'];

$db->update('Random', ['number'=>$min],'','name=?','min');
$db->update('Random', ['number'=>$max],'','name=?','max');