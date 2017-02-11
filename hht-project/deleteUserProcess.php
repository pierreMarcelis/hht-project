<?php
session_start();

$email = $_REQUEST['emailToRemove'];
// Create connection
$conn = new mysqli('localhost', root, '', 'hhtdocuments');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM hht_users WHERE email = '$email'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
header("location:listAllUsers.php");
?>
