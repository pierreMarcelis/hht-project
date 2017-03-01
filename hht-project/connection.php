<?php
$dbUser = "root";
$dbPassword = "";
$dbHost = "localhost";
$dbName = "hhtdocuments";

// connect to the database
$connexion = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

// Check connection
// Check connection
if (!$connexion) {
    die("Connection failed: " . mysqli_connect_error());
}
?>