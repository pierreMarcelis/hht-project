<?php
session_start ();

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
	
	// To protect from MySQL injection
	$username = stripslashes ( $username );
	$password = stripslashes ( $password );
	// Encrypt the password un md5
	// $password = md5($password);
	// $password = hash('sha256', $password); // password hashing using SHA256
	
	// Connecting to and selecting a MySQL database named sakila
	// Hostname: 127.0.0.1, username: your_user, password: your_pass, db: sakila
	$mysqli = new mysqli ( 'localhost', 'root', '', 'hhtdocuments' );
	// Oh no! A connect_errno exists so the connection attempt failed!
	if ($mysqli->connect_errno) {
		// The connection failed. What do you want to do?
		// You could contact yourself (email?), log the error, show a nice page, etc.
		// You do not want to reveal sensitive information
		
		// Let's try this:
		$error = "Sorry, this website is experiencing problems.";
		
		// Something you should not do on a public site, but this example will show you
		// anyways, is print out MySQL error related information -- you might log this
		echo "Error: Failed to make a MySQL connection, here is why: \n";
		echo "Errno: " . $mysqli->connect_errno . "\n";
		echo "Error: " . $mysqli->connect_error . "\n";
		header ( "Location: index.php" );
		// You might want to show them something nice, but we will simply exit
		exit ();
	}
	
	// Perform an SQL query
	// Check username and password from database
	$sql = "SELECT ID, EMAIL, FIRST_NAME, LAST_NAME, PASSWORD, HHT_ROLE FROM HHT_USERS WHERE EMAIL=$username and PASSWORD=$password";
	
	if (! $result = $mysqli->query ( $sql )) {
		// Oh no! The query failed.
		$error = "Sorry, the website is experiencing problems.";
		
		// Again, do not do this on a public site, but we'll show you how
		// to get the error information
		echo "Error: Our query failed to execute and here is why: \n";
		echo "Query: " . $sql . "\n";
		echo "Errno: " . $mysqli->errno . "\n";
		echo "Error: " . $mysqli->error . "\n";
		header ( "Location: index.php" );
		exit ();
	}
	
	// Phew, we made it. We know our MySQL connection and query
	// succeeded, but do we have a result?
	if ($result->num_rows === 0) {
		// Oh, no rows! the selected user does't have access to the website
		$error = "We could not find a match for ID $username, sorry about that. Please try again.";
		header ( "Location: index.php" );
		exit ();
	}
	
	// Now, we know only one result will exist in this example so let's
	// fetch it into an associated array where the array's keys are the
	// table's column names
	$user = $result->fetch_assoc ();
	echo "The user  " . $user ['ID'] . " " . $user ['EMAIL'] . " " . $user ['FIRST_NAME'] . " " . $user ['LAST_NAME'] . " ", $user ['HHT_ROLE'] . "  has an access to the site";
	//
	// $_SESSION['id'] = $user['ID'];
	// $_SESSION['user'] = $user['EMAIL'];
	// $_SESSION['role'] = $user['HHT_ROLE'];
	//
	// header("Location: home.php");
	// The script will automatically free the result and close the MySQL
	// connection when it exits, but let's just do it anyways
	$result->free ();
	$mysqli->close ();
}
?>
