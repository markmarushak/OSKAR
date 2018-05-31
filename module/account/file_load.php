<?php

if($_FILES){
    $data = $_FILES['ava']['name'];
    echo json_encode($data);
}