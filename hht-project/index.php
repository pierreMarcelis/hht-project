<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: welcome.php");
}

include("class.login.php");
$log = new logmein();
$log->encrypt = true; //set encryption
//parameters here are (form name, form id and form action)
$log->loginform("loginformname", "loginformid", "form_action.php");

?>
<!DOCTYPE html>
<html>
<head>
<title>Login accessing to the HHT docume HHT documentnt applications.</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<h1>HHT Documents Login Session Example</h1>
<div id="login">
<h2>Login Form</h2>
<form action="login.php" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password"/>
<input name="submit" type="submit" value=" Login "/>
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>