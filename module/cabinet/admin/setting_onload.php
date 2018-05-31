<?php
$_auth = 1;
require_once('module/auth.php');

if ($_POST){

    $data = $_POST;
    foreach ($data as &$a) {
        if (!preg_match('//u', $a)) {
            $a = iconv("cp1251","UTF-8",$a);
        }
    }
    $send = $db->update('game_bg', [
        'bg' => $_POST['background']
    ], '','id=?', (int)$_POST['id']);

    if ($send) {
        $data['out'] = '1';
        echo json_encode($data);
    }else{
        $data['out'] = '0';
        echo json_encode($data);
    }
}
