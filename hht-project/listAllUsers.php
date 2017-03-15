<html>

<head>
    <meta charset="UTF-8">
    <title>Humanity Help Team Intranet : Liste des utilisateurs</title>
    <script src="./jquery/jquery-3.1.1.min.js" ></script>
    <link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" />
    <script  type="text/javascript"  src="./bootstrap-3.3.7-dist/js/bootstrap.min.js" ></script>

    <script type="text/javascript">
        function deleteUser() {
            $('#formDelete').submit();
        }

        function displayModalDelete(emailToRemove) {
            $("#emailToRemove").val(emailToRemove);
            $('#deleteModal').modal();
        }

        function displayModalUpdate(emailToUpdate) {
            $("#emailToDetail").val(emailToUpdate);
            $('#formDetails').submit();
        }

    </script>
</head>
<body>

<div>
    <?php
        include 'securityAccessCheck.php';
        include 'header.php';
    ##  *** creating variables that we need for database connection
        include  "connection.php";

    ?>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Suppression utilisateur</h4>
            </div>


                <form id="formDelete"  action="./deleteUserProcess.php"  method="POST">
                    <div class="modal-body">

                    <div class="form-group">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <label for="exampleInputEmail1">Etes vous sure de supprimer l'utilisateur : </label>
                        <input type="email"  readonly="readonly" class="form-control" id="emailToRemove" aria-describedby="emailHelp" name="emailToRemove"/>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                        <button onclick="deleteUser()" type="submit" class="btn btn-primary">Supprimer utilisateur</button>
                    </div>
                </form>
        </div>
    </div>
</div>

<div>
    <form id="formDetails"  action="./detailUserProcess.php"  method="POST">
        <input type="hidden"  id="emailToDetail"  name="emailToDetail"/>
    </form>
</div>

<?php

$sql = "SELECT * FROM HHT_USERS  ORDER  by id DESC";

if($result = mysqli_query($connexion, $sql)){
    if(mysqli_num_rows($result) > 0){
        ?>
        <table class="table table-bordered">"
            <tr>
                <th>id</th>
                <th>email</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Role</th>
                <th>Détails</th>
                <th>Suppression</th>
            </tr>
            <?php
            while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['firstName'];?></td>
                    <td><?php echo $row['lastName'];?></td>
                    <td><?php echo $row['hhtRole'];?></td>
                    <td><?php echo "<button type=\"button\" class=\"btn btn-primary btn-lg\" onclick=\"displayModalUpdate('".$row['email']."')\">Détails</button>";?></td>
                    <td><?php echo "<button type=\"button\" class=\"btn btn-primary btn-lg\" onclick=\"displayModalDelete('".$row['email']."')\">Supprimer</button>";?></td>
                </tr>
                <?php
            }	// while
            ?>
        </table>
        <?php
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connexion);
}
// Close connection
mysqli_close($connexion);
?>
</body>
</html>