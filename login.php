<?php
    session_start();

    if( isset($_SESSION['id']) ) header('Location: intranet.php');
    else include_once "./public/view/login.php";
    // echo json_encode($_SESSION);