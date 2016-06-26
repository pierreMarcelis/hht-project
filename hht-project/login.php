 <?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$myusername=mysqli_real_escape_string($db,$_POST['username']); 
$mypassword=mysqli_real_escape_string($db,$_POST['password']); 
$passwordSecure=md5($mypassword);
$sql="SELECT id FROM HHT_USERS where EMAIL= '$myusername'' and passcode='$mypassword'";
$request=mysqli_query($db,$sql);
echo "Hello";
while($line = mysqli_fetch_array($request)){
	$id = isset($ligne2['id']) ? $ligne2['id'] : null;
	echo "Hello id before ";
	echo $id;
	echo "Hello id after ";
	session_start();
	$_SESSION['login_user']=$myusername;
	header("location: welcome.php");

}
$count=mysqli_num_rows($line);


if($count!=1)
{
$error="Your Login Name or Password is invalid";
}
}
?>
<form method="post">
<label>UserName :</label>
<input type="text" name="username"/><br />
<label>Password :</label>
<input type="password" name="password"/><br/>
<input type="submit" value=" Submit "/><br />
</form>