<?php

$_auth = 90;
require_once('module/auth.php');

if ($_POST['change_verf']){
    $data = [];
    $send = $db->update('Verification',['status' => $_POST['stat']],'','user_id=?', $_POST['id']);
    if ($send){
        $data['stat'] = 1;
        echo json_encode($data);
    }else{
        $data['stat'] = 0;
        echo json_encode($data);
    }
}

$list = $db->fetchRows($db->select('Verification','user_id, url_img, status','','',''));

setPage('list', $list);

showPage();