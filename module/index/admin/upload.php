<?php
$_auth = 90;
require_once ('module/auth.php');
$table = 'Home';



if (isset($_GET['id'])){
    $id = $_GET['id'];
    setPage('entity',$db->fetch($db->select($table, 'id,name,content', 'id=?',$id)));
    showPage();
}
