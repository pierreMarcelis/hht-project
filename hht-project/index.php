<?php

session_start();
if (isset($_SESSION['email']) && $_SESSION['hhtRole']) {
	echo "Welcome " . $_SESSION['email'] . $_SESSION['hhtRole'] ."!";
	echo "<h2><a href = \"logout.php\">Sign Out</a></h2>";
} else {
	echo "Please log in first to see this page.";
	header("location:login.php");
}
	echo "<p>TestAfter</p>";
?>


