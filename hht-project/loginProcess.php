<?php
	session_start();

// Get posted values from the login form (login.php)
    $email = $_POST['email'];
    $password = $_POST['password'];
    // prevent mysql injection
    $email = stripcslashes($email);
    $password = stripcslashes($password);
   
    $mysqli = new mysqli('localhost', 'root', '', 'hhtdocuments');
    // Query the database
    $resultSet = $mysqli->query("SELECT * FROM HHT_USERS WHERE email = '$email' AND PASSWORD = '$password'");
// Count the returned rows
	if($resultSet->num_rows != 0) {
// Turn the results into an array
    while($rows = $resultSet->fetch_assoc())  {
        $id = $rows['id'];
        $email = $rows['email'];
        $firstName = $rows['first_name'];
        $lastName = $rows['last_name'];
        $hhtRole = $rows['hht_role'];

        $_SESSION['email']   = $email;
        $_SESSION['hhtRole']   = $hhtRole;

        if ($hhtRole == 'A') {
            header("location:userManagement.php");
        } elseif ($hhtRole == 'M') {
            header("location:documentManagement.php");
        } else {
            echo "<p>No authorised user</p>";
            header("location:index.php");
        }

    }

} else {
    echo "<p>No authorised user</p>";
    header("location:index.php");
}
?>