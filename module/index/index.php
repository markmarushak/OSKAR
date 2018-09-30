<?php
require_once('module/auth.php');
setPage('demo', $_GS['demo']);


if  (!empty(_uid())){
    header('Location: /home');
}


showPage();