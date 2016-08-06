<?php
include("class.login.php");
$error = ""; // Variable for storing our errors.
             
// If the session is opened
if (isset ( $_SESSION ['username'] ) != "") {
	header ( "Location: home.php" );
	exit ();
}

// If it is a Post
if (isset ( $_POST ["submit"] )) {
	// If one of de required parameters is empty.
}
if (empty ( $_POST ["username"] ) || empty ( $_POST ["password"] )) {
	$error = "Both fields are required.";
} else {
	// Define $username and $password
	$username = $_POST ['username'];
	$password = $_POST ['password'];
	
	
	$log = new Login();
	$log->encrypt = true; //set encryption
	//parameters here are (form name, form id and form action)
	$log->loginform("loginformname", "loginformid", "form_action.php");
}
?>
