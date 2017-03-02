<?php
include 'securityAccessCheck.php';

$email = $_POST['emailToRemove'];

// Security checks : get the connected user check admin role

// Get posted values from the adding user form (addUser.php)
// $email = $_REQUEST['emailToRemove'];

// prevent mysql injection
$email = stripcslashes($email);


// connect to the database
$mysqli = new mysqli('localhost', 'root', '', 'hhtdocuments');
// Check If user exist

$query = "DELETE FROM hht_users WHERE email = '$email'";

if ($mysqli->query($query) === TRUE) {
    echo " The user $email has been removed from the system ";
} else {
    echo " The user $email doesn't exist in the system ";
}

$mysqli->close();
header("location:listAllUsers.php");
?>

