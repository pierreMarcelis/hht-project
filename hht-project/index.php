<?php
// connect to the database
$mysqli = new mysqli('localhost', 'root', '', 'hhtdocuments');
// Query the database
   // "SELECT ID, EMAIL, FIRST_NAME, LAST_NAME, PASSWORD, HHT_ROLE FROM HHT_USERS";

$resultSet = $mysqli->query("SELECT * FROM HHT_USERS");
// Count the returned rows
if($resultSet->num_rows != 0) {
// Turn the results into an array
    while($rows = $resultSet->fetch_assoc())  {
        $id = $rows['id'];
        $email = $rows['email'];
        $firstName = $rows['first_name'];
        $lastName = $rows['last_name'];
        $passoword = $rows['PASSWORD'];
        $hhtRole = $rows['hht_role'];
        echo "<p>ID: $id<br /> Name: $firstName $lastName <br/> Password : $passoword <br/> Role: $hhtRole </p>";
    }
// Display the results

} else {
    echo "Aucun résultat pour la requete choisie";
}
?>


