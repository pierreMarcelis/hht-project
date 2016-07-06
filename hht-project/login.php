<?php
include("config.php");
session_start();
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// escape variables for security
    $myusername = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $sql = "SELECT * FROM HHT_USERS where EMAIL= '$myusername' and PASSWORD='$mypassword'";


    if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
    }

    $result = $mysqli->query($sql);

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        session_register("myusername");
        $_SESSION['login_user'] = $myusername;

        header("location: welcome.php");
    } else {
        $error = "Your Login Name or Password is invalid";
    }


    mysql_close($connection); // Closing Connection
}
?>
