<?php

require_once('module/auth.php');

//TODO: доделать вставку в базу
$min =$db->fetch($db->select('Random', 'number', "name=?", 'min'));
$max =$db->fetch($db->select('Random', 'number', "name=?", 'max')) ;
$rands = rand($min['number'],$max['number']);

if(!$db->update('Plans',['pPerc' => $rands], 'pPerc', 'user_id=?',_uid())){
    $db->insert('Plans',[
        'pName'=>$_user['uLogin'],
        'pMin'=>'1',
        'pMax'=>'9999999.999999',
        'pPerc'=>$rands,
        'pPer'=>0,// сколько часов
        'pNPer'=>0,// сколько интервалов
        'pClComis' => 100,
        'pReturn' => 100,
        'user_id' => _uid()
    ],'');
}


setPage('max_rate', $db->fetch1Row($db->select('Plans','pMax','pID=?',1)));

showPage();