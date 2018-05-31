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
    $send = $db->update('question_answer', [
        'id' => $data['id'],
        'group_ru' => $data['group_ru'],
        'groups' => $data['groups'],
        'question' => $data['question'],
        'answer' => $data['answer']
    ], '','id=?', $_POST['id']);

    if ($send) {
        $data['out'] = '1';
        echo json_encode($data);
    }else{
        $data['out'] = '0';
        echo json_encode($data);
    }
}