<?php
session_start();
// Security checks : get the connected user check admin role

// Get posted values from the adding user form (addUser.php)
$email = $_POST['email'];

// prevent mysql injection
$email = stripcslashes($email);


// connect to the database
$mysqli = new mysqli('localhost', 'root', '', 'hhtdocuments');
// Check If user exist

$resultSet = $mysqli->query("SELECT * FROM HHT_USERS WHERE email = '$email'");
// Count the returned rows
if($resultSet->num_rows != 0) {
    // the user exists

    $query = "DELETE FROM hht_users WHERE email = '$email'";
    $result= $mysqli->query($query);
    if($result) echo $mysqli->affected_rows.' user has been removed from the database.';
    $mysqli->close();

} else {
    echo " The user $email doesn't exist in the system ";
}
?>