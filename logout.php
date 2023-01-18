<?php
    session_start();

    if(!isset($_SESSION['session_email'])) {
        header('location:index.php');
        exit();
    }
    
    $_SESSION['session_username'] = "";
    $_SESSION['session_password'] = "";
    session_destroy();
    header('location:index.php');