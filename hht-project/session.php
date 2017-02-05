<?php
session_start();

$connexion = mysqli_connect('localhost', 'root', '', 'hhtdocuments');
$myquery = "SELECT * FROM HHT_USERS WHERE email = '".$_SESSION['email']."' AND PASSWORD = '".$_SESSION['passsord']."'";
echo "Query : ".$myquery;
$resultSet = mysqli_query($connexion,$myquery);
$rowcount = mysqli_num_rows($resultSet);
echo "Rows = ".$rowcount;
if($rowcount != 1) {
    mysqli_free_result($resultSet);
    mysqli_close($connexion);
    echo "<p>No authorised user</p>";
    header("location:login.php");
} else {
    mysqli_free_result($resultSet);
    mysqli_close($connexion);
}
?>