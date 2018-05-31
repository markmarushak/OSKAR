<?php
$_auth = 90;
require_once('module/auth.php');
$table = 'Home';

if($_POST){
    $post_id = $_GET['id'];
    $content = $_POST['content'];
    $upload = $db->update($table,['content' => $content], '', 'id=?', $post_id );
    if ($upload) {
        echo 'ура все получилось!';
    }
}
if (isset($_GET['upload']))
{
    echo '<pre>'.print_r($_GET['id'], true).'</pre>';
    if (_GETN('id'))
        $el = $db->fetch1Row($db->select($table, '*', "$id_field=?d", array(_GETN('id'))));
    if (!$el)
        goToURL(moduleToLink() . '?add');
    stampArrayToStr($el, 'fCTS', 0);
    setPage('el', $el, 2);
}

$table = 'Home';
$list = $db->fetchRows($db->select($table,'id, name, content', '', 0));

setPage('list', $list);
showPage();
