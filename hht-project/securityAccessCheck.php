<?php
session_start();

if(!isset($_SESSION['email']) || !isset($_SESSION['hhtRole']) || $_SESSION['hhtRole'] !='A') {
    header("location:index.php");
}
?>