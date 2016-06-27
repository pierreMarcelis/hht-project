 <?php
include("config.php");
session_start();
echo "Hello BEFORE POST";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$myusername=mysqli_real_escape_string($db,$_POST['username']); 
$mypassword=mysqli_real_escape_string($db,$_POST['password']); 
$passwordSecure=md5($mypassword);
$sql="SELECT * FROM HHT_USERS where EMAIL= '$myusername' and PASSWORD='$mypassword'";

echo "Hello BEFORE CALL SQL \n"; 
echo $sql;
$request=mysqli_query($db,$sql)  or die(mysqli_error($db));
echo "Hello AFTER CALL SQL \n"; 
$rows = mysql_num_rows($query) or die($query);
echo "Result Size : ";
echo $rows;
if ($rows == 1) {
	$_SESSION['login_user']=$username; // Initializing Session
	
	 $login_session = $row['EMAIL'];
	  echo $row['EMAIL']; 
	
   echo $login_session;
	header("location: welcome.php"); // Redirecting To Other Page
} else {
	$error = "Username or Password is invalid";
}
echo "Hello BEFORE CLOSING CONNEXION";
mysql_close($connection); // Closing Connection
}
echo "Hello END";

?>
<form method="post">
<label>UserName :</label>
<input type="text" name="username"/><br />
<label>Password :</label>
<input type="password" name="password"/><br/>
<input type="submit" value=" Submit "/><br />
</form>