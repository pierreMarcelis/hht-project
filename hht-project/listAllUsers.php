<html>

<head>
    <meta charset="UTF-8">
    <title>Humanity Help Team Intranet : Liste des utilisateurs</title>

    <link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">;
    <script src="./bootstrap-3.3.7-dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="./jquery/jquery-3.1.1.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script type="text/javascript">
        function deleteUser() {
            $('#formDelete').submit();
        }


        function displayModal() {
            $('#myModal').modal();
        }


    </script>
<body>
<?php
session_start();
?>
<div>
    <?php include 'header.php';?>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                <button onclick="deleteUser()" type="button" class="btn btn-primary">Supprimer utilisateur</button>
            </div>
        </div>
    </div>
</div>
<?php

##  *** creating variables that we need for database connection
$DB_USER = "root";
$DB_PASS = "";
$DB_HOST = "localhost";
$DB_NAME = "hhtdocuments";

$connexion = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
// Check connection
if($connexion === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT
         id,
         email,
         firstName,
         lastName,
         hhtRole,
         password
       FROM HHT_USERS  ORDER  by id DESC";

if($result = mysqli_query($connexion, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class=\"table table-bordered\">";
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>email</th>";
        echo "<th>Prénom</th>";
        echo "<th>Nom</th>";
        echo "<th>Role</th>";
        echo "<th>MAJ</th>";
        echo "<th>DELETE</th>";
        echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['firstName'] . "</td>";
            echo "<td>" . $row['lastName'] . "</td>";
            echo "<td>" . $row['hhtRole'] . "</td>";
            echo '<td>update</td>';
            echo "<td>";
            echo '<form id="formDelete"  action="./deleteUserProcess.php"  method="POST">';
            echo '<div class="form-group">';
            echo '<input type="hidden" name="emailToRemove" value='.$row['email'].'/>';
	       // echo '<input id="deleteButton" class="btn btn-default" type="submit" value="Supprimer" ></input>';
            echo '<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" onclick="displayModal()">Supprimer</button>';
            echo '</div>';
            echo '</form>';
             echo '</td>';
            echo '</tr>';
       }
       echo '</table>';
                 // Close result set
                 mysqli_free_result($result);
             } else{
                 echo "No records matching your query were found.";
             }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
         }

         // Close connection
         mysqli_close($connexion);
?>
</body>
</html>

