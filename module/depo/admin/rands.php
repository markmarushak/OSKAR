<?php

$_auth = 90;
require_once('module/auth.php');

$table = 'Random';
$id_field = 'id, name, number';

$list = [];
    $list= $db->fetchRows($db->select($table, $id_field, '', 0));
setPage('list', $list);

showPage();