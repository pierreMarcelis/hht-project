<?php
session_start();

// Get posted values from the login form (login.php)
    $email = $_POST['email'];
    $password = $_POST['password'];
    // prevent mysql injection
    $email = stripcslashes($email);
    $password = stripcslashes($password);
   // $email = mysqli_real_escape_string($email);
    // $password = mysqli_real_escape_string($password);
    //$passwordSecure=md5($password);
    // connect to the database
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
        header("location:welcome.php");

    }
// Display the results

} else {
    echo "No authorised user";
    header("location:login.php");
}
?>