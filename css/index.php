<?php
    error_reporting(0);
    session_start();
    if($_SESSION['un4m3']){
        header('location: ../');
    }
    else
    header('location: ../');
?>