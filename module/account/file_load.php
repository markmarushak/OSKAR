<?php

require_once('module/auth.php');

if( isset( $_POST['my_file_upload'] ) ){
    // ВАЖНО! тут должны быть все проверки безопасности передавемых файлов и вывести ошибки если нужно

    $uploaddir = 'assets/img/player/'; // . - текущая папка где находится submit.php

    // cоздадим папку если её нет
    if( ! is_dir( $uploaddir ) ) mkdir( $uploaddir, 0777 );

    $files      = $_FILES; // полученные файлы
    $done_files = array();

    // переместим файлы из временной директории в указанную
    foreach( $files as $file ){
        $file_name = $file['name'];

        if( move_uploaded_file( $file['tmp_name'], "$uploaddir/$file_name" ) ){
            $done_files[] = realpath( "$uploaddir/$file_name" );
        }
    }
//    $_SESSION['ava'] = $file_name;
    $ava = $db->fetch1Row($db->select('Avatar','user_id, url_img','user_id=?',_uid()));


    if (!$ava){
        unlink($ava['url_img']);
        $db->insert('Avatar',[
            'user_id' => _uid(),
            'url_img' => $uploaddir.$file_name
        ]);

    }else {
        unlink($ava['url_img']);
        $db->update('Avatar',[
            'url_img' => $uploaddir.$file_name
        ],'','user_id=?',_uid());
    }

    $data = $done_files ? array('files' => $done_files ) : array('error' => 'Ошибка загрузки файлов.');


    die( json_encode( $data ) );

}

// Verification

if( isset( $_POST['pasport_file_upload'] ) ){
    // ВАЖНО! тут должны быть все проверки безопасности передавемых файлов и вывести ошибки если нужно

    $uploaddir = 'assets/img/pasport/'; // . - текущая папка где находится submit.php

    // cоздадим папку если её нет
    if( ! is_dir( $uploaddir ) ) mkdir( $uploaddir, 0777 );

    $files      = $_FILES; // полученные файлы
    $done_files = array();

    // переместим файлы из временной директории в указанную
    foreach( $files as $file ){
        $file_name = $file['name'];

        if( move_uploaded_file( $file['tmp_name'], "$uploaddir/$file_name" ) ){
            $done_files[] = realpath( "$uploaddir/$file_name" );
        }
    }
//    $_SESSION['ava'] = $file_name;
    $ava = $db->fetch1Row($db->select('Verification','user_id, url_img','user_id=?',_uid()));


    if (!$ava){
        $db->insert('Verification',[
            'user_id' => _uid(),
            'url_img' => $uploaddir.$file_name
        ]);

    }else {
        unlink($ava['url_img']);
        $db->update('Verification',[
            'url_img' => $uploaddir.$file_name
        ],'','user_id=?',_uid());
    }

    $data = $done_files ? array('files' => $done_files ) : array('error' => 'Ошибка загрузки файлов.');


    die( json_encode( $data ) );

}
