<?php
    session_start();
    $email = $_SESSION['email'];
    $hhtRole = $_SESSION['hhtRole'];

    if(!isset($email)) {
        header("location:index.php");
    }

    if(!isset($hhtRole)) {
        header("location:index.php");
    }

    if($hhtRole != 'A') {
        header("location:index.php");
    }
?>