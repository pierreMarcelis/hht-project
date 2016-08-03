<?php

//::if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
//// GET post values
 //   $myusername = isset($_POST['username']) ? $_POST['username'] : '';
  //  $password = isset($_POST['password']) ? $_POST['password'] : '';
 
//Connection creation
// $db_conn = new mysqli('localhost', 'root', '', 'hhtdocuments');

//if(mysqli_connect_errno()) {
 //   echo 'Connection to the database failed'.mysqli_connect_error();
 //s   exit;
// ::s}
// $query = 'SELECT * FROM HHT_USERS ' 
 //        ."where EMAIL='$myusername' " 
 //s        ." and PASSWORD='$password')";

//while ($row = $query->fetch_assoc()) {
   
//    $_SESSION['username']=$row['EMAIL'];
//    $_SESSION['role']=$row['HHT_ROLE'];
//}
//}



session_start();
include("config.php"); //Establishing connection with our database
 
$error = ""; //Variable for storing our errors.
if(isset($_POST["submit"]))
{
if(empty($_POST["username"]) || empty($_POST["password"]))
{
$error = "Both fields are required.";
}else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
 
// To protect from MySQL injection
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($db, $username);
$password = mysqli_real_escape_string($db, $password);
//$password = md5($password);
 
//Check username and password from database
$sql="SELECT * FROM HHT_USERS WHERE EMAIL='$username' and PASSWORD='$password')";


$result=mysqli_query($db,$sql);

if ($result == false) {
    $errorMessage = "The query failed to execute : \n"
                   . "Your Query: ".$sql."\n"
                   . " Error: (errno:".mysql_errno().") Error : ".mysql_error();
				  
    die($errorMessage);
} else {
	
//$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 $tab= mysqli_fetch_array($result);
foreach ($tab as $row)  {
	echo "Coucou";
	$login_user = isset($row['EMAIL']) ? $row['EMAIL'] : null;
	echo $login_user;
	// Initializing Session
	$_SESSION['username'] = isset($row['EMAIL']) ? $row['EMAIL'] : null;
}
//If username and password exist in our database then create a session.
//Otherwise echo error.
 
if(empty($_SESSION['username']))
{

$error = "Incorrect username or password.";
}else
{
 
header("location: home.php"); // Redirecting To Other Page
}
 
}
}
}
?>
