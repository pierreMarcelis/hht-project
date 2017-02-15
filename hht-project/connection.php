<?php
$dbUser = "root";
$dbPassword = "";
$dbHost = "localhost";
$dbName = "hhtdocuments";

// connect to the database
$connexion = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

// Check connection
if($connexion === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


?>