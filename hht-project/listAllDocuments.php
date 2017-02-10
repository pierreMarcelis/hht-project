<?php
session_start();
include 'header.php';



// connect to the database
$mysqli = new mysqli('localhost', 'root', '', 'hhtdocuments');
// Query the database

$resultSet = $mysqli->query("SELECT * FROM HHT_DOCUMENT");
// Count the returned rows
if($resultSet->num_rows != 0) {


    echo "<table id=\"docList\" class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">"; // start a table tag in the HTML
    echo "<tr><td>" . 'id' . "</td><td>" . 'Filename' . "</td><td>" . 'Filetype' . "</td><td>" . 'Filesize' . "</td><td>" . 'Filedownloadlink' . "</td><td>" . 'FileUploadDate' . "</td></tr>";
    while($row = $rows = $resultSet->fetch_assoc()){   //Creates a loop to loop through results
        echo "<tr><td>" . $rows['id'] . "</td><td>" . $rows['filename'] . "</td><td>" . $rows['filetype'] . "</td><td>" . $rows['filesizes'] . "</td><td>" . $rows['filedownloadlink'] . "</td><td>" . $rows['fileUploadDate'] . "</td></tr>";  //$row['index'] the index here is a field name
    }

    echo "</table>"; //Close the table in HTML


} else {
    echo "Aucun document dans le system";
}
?>
