<?php
session_start();

// Get posted values from the login form (login.php)
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
// prevent mysql injection
$email = stripcslashes($email);
$password = stripcslashes($password);

// $email = mysqli_real_escape_string($email);
// $password = mysqli_real_escape_string($password);
//$passwordSecure=md5($password);
// connect to the database
$connexion = mysqli_connect('localhost', 'root', '', 'hhtdocuments');
// Query the database
$myquery = "SELECT * FROM HHT_USERS WHERE email = '".$email."' AND PASSWORD = '".md5($password)."'";
$resultSet = mysqli_query($connexion,$myquery);
var_dump($resultSet);
$rowcount = mysqli_num_rows($resultSet);
echo "<p>$rowcount</p>";
if($rowcount == 1) {
// Turn the results into an array
    $rows = mysqli_fetch_assoc($resultSet);
    $id = $rows['id'];
    $email = $rows['email'];
    $firstName = $rows['firstName'];
    $lastName = $rows['lastName'];
    $hhtRole = $rows['hhtRole'];
    $_SESSION['email']=$email;
    $_SESSION['hhtRole']=$hhtRole;
    $_SESSION['firstName']=$firstName;
    $_SESSION['lastName']=$lastName;
    mysqli_free_result($resultSet);
    mysqli_close($connexion);

    if ($hhtRole == 'A') {
        header("location:userManagement.php");
    } elseif ($hhtRole == 'M') {
        header("location:documentManagement.php");
    } else {
        $_SESSION['feedback'] = 'No authorised user';
        $_SESSION['lastName']   = $lastName;
        header("location:index.php");
    }

} else {

    $_SESSION['feedback'] = 'No authorised user';
    header("location:index.php");
}
?>