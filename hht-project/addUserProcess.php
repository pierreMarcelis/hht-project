<?php
include  "connection.php";
include  "securityAccessCheck.php";

// Get posted values from the adding user form (addUser.php)
$email = $_POST['email'];
$password = $_POST['password'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastname'];
$hht_role = $_POST['hht_role'];

// prevent mysql injection
$email = stripcslashes($email);
$password = stripcslashes($password);
//$passwordSecure=md5($password);
$firstName = stripcslashes($firstName);
$lastName = stripcslashes($lastName);
$hht_role = stripcslashes($hht_role);

// connect to the database
//$mysqli = new mysqli('localhost', 'root', '', 'hhtdocuments');
// Check If user exist

$resultSet = $connexion->query("SELECT * FROM HHT_USERS WHERE email = '$email' AND PASSWORD = '$password'");
// Count the returned rows
if($resultSet->num_rows != 0) {
    // the user exists
    echo " The user $email could not be added, the user already exists";
} else {
// If not exist insert occurs

    $stmt = $connexion->prepare("insert into hht_users(first_name, last_name , email , hht_role) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $firstname, $lastname, $email, $hht_role);
    $stmt->execute();

    echo 'The user has been inserted into the database.';
    $stmt->close();
    $mysqli->close();
// INSERT INTO HHT_USERS(first_name, last_name , email , hht_role) VALUES ('Daubresse', 'Olivier', 'oli.daubresse@gmail.com', 'A');
}
?>