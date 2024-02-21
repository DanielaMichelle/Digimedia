<?php
    
    session_start();

    if( isset($_SESSION['id']) ) include_once './public/view/intranet.php';
    else header('Location: login.php');