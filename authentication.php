<?php
session_start();

if(!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== TRUE){
    $_SESSION['status'] = "Please Login to Access User Dashboard!";
    header('Location: login.php');
    exit(0);
}
?>