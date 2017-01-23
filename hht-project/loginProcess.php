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
$myquery = "SELECT * FROM HHT_USERS WHERE email = '".$email."' AND PASSWORD = '".$password."'";
$resultSet = mysqli_query($connexion,$myquery);
var_dump($resultSet);
$rowcount = mysqli_num_rows($resultSet);

echo "<p>Coucou</p>".$rowcount;
if($rowcount == 1) {
// Turn the results into an array
    $rows = mysqli_fetch_assoc($resultSet);
    $id = $rows['id'];
    $email = $rows['email'];
    $firstName = $rows['first_name'];
    $lastName = $rows['last_name'];
    $passoword = $rows['PASSWORD'];
    $hhtRole = $rows['hht_role'];
    echo "<p>Coucou</p>".$hhtRole;
    $_SESSION['EMAIL']=$email;
    $_SESSION['HHT_ROLE']=$hhtRole;
    $_SESSION['PASSWORD']=$passoword;
    $_SESSION['FIRST_NAME']=$firstName;
    $_SESSION['LAST_NAME']=$lastName;

    mysqli_free_result($resultSet);
    mysqli_close($connexion);

    if ($hhtRole == 'A') {
        header("location:userManagement.php");
    } elseif ($hhtRole == 'M') {
        header("location:documentManagement.php");
    } else {
        $_SESSION['FEEDBACK'] = 'No authorised user';
        $_SESSION['LAST_NAME']   = $lastName;
        header("location:index.php");
    }

} else {
    mysqli_free_result($resultSet);
    mysqli_close($connexion);
    $_SESSION['FEEDBACK'] = 'No authorised user';
    header("location:index.php");
}
?>