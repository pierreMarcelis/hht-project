<?php
// connect to the database
$mysqli = new mysqli('localhost', 'root', '', 'hhtdocuments');
// Query the database
   // "SELECT ID, EMAIL, FIRST_NAME, LAST_NAME, PASSWORD, HHT_ROLE FROM HHT_USERS";

$resultSet = $mysqli->query("SELECT * FROM HHT_USERS");
// Count the returned rows
if($resultSet->num_rows != 0) {
// Turn the results into an array
 //   while()  {
  //      $id = $rows['id'];
  //      $email = $rows['email'];
   //     $firstName = $rows['first_name'];
   //     $lastName = $rows['last_name'];
   //     $passoword = $rows['PASSWORD'];
     //   $hhtRole = $rows['hht_role'];
     //   echo "<p>ID: $id<br /> Name: $firstName $lastName <br/> Password : $passoword <br/> Role: $hhtRole </p>";
    //}

    echo "<table id=\"userList\" class=\"table table-striped table-bordered dt-responsive nowrap\" cellspacing=\"0\" width=\"100%\">"; // start a table tag in the HTML


    echo "<tr><td>" . 'id' . "</td><td>" . 'Email' . "</td><td>" . 'First Name' . "</td><td>" . 'Last Name' . "</td><td>" . 'password' . "</td><td>" . 'Role' . "</td></tr>";
    while($row = $rows = $resultSet->fetch_assoc()){   //Creates a loop to loop through results
        echo "<tr><td>" . $rows['id'] . "</td><td>" . $rows['email'] . "</td><td>" . $rows['first_name'] . "</td><td>" . $rows['last_name'] . "</td><td>" . $rows['PASSWORD'] . "</td><td>" . $rows['hht_role'] . "</td></tr>";  //$row['index'] the index here is a field name
    }

    echo "</table>"; //Close the table in HTML


// Display the results

} else {
    echo "Aucun résultat pour la requete choisie";
}
?>


