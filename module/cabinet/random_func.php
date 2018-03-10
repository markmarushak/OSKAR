<?php
$_auth = 1;require_once('module/auth.php');
$rand = $_POST['rand'];

if ($db->update('Plans',['pPerc' => $rand], 'pPerc', 'pID=?','1')) {
    header('Refresh: 0; url=http://2017grand-lottery2018.org/deposit?add');
    echo "ok";

} else {
    echo "Error updating record: ";
}


