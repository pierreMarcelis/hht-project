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
        $passoword = $rows['PASSWORD'];
        $hhtRole = $rows['hht_role'];
        echo "<p>ID: $id<br/> Email : $email <br/> Name: $firstName $lastName <br/> Password : $passoword <br/> Role: $hhtRole </p>";

        $_SESSION['email']   = $email;
        $_SESSION['hhtRole']   = $hhtRole;
        $_SESSION['password']   = $passoword;

        if ($hhtRole == 'A') {
            header("location:userManagement.php");
        } elseif ($hhtRole == 'M') {

        } else {
            echo "<p>No authorised user</p>";
            header("location:index.php");
        }
        header("location:welcome.php");

    }

} else {
    echo "<p>No authorised user</p>";
    header("location:index.php");
}
?>