<?php
session_start();

$email_check = $_SESSION['email'];
echo "Login name = $email_check";


$mysqli = new mysqli('localhost', 'root', '', 'hhtdocuments');
// Query the database
$resultSet = $mysqli->query("SELECT * FROM HHT_USERS WHERE email = '$email_check'");
// Count the returned rows
if($resultSet->num_rows != 0) {
// Turn the results into an array
    while($rows = $resultSet->fetch_assoc())  {
        $id = $rows['id'];
        $email = $rows['email'];
        $firstName = $rows['first_name'];
        $lastName = $rows['last_name'];
        $password = $rows['PASSWORD'];
        $hhtRole = $rows['hht_role'];
        echo "<p>ID: $id<br/> Email : $email <br/> Name: $firstName $lastName <br/> Password : $password <br/> Role: $hhtRole </p>";

        $_SESSION['email']   = $email;
        $_SESSION['hhtRole']   = $hhtRole;

    }
// Display the results

} else {
    echo "No authorised user";
    header("location:login.php");
}


?>