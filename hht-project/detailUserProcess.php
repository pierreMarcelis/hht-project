<?php

include  "connection.php";
include  "securityAccessCheck.php";

// Get posted values from the adding user form (addUser.php)
$email = $_REQUEST['emailToDetail'];

$myquery = "SELECT * FROM HHT_USERS WHERE email = '".$email."'";

echo "<script>alert(\"$myquery\")</script>";
$resultSet = mysqli_query($connexion, $myquery);

$rowcount = mysqli_num_rows($resultSet);
if($rowcount == 1) {
// Turn the results into an array
  //  var_dump($resultSet);
    $rows = mysqli_fetch_assoc($resultSet);
    $id = $rows['id'];
    echo "<script>alert(\"iD: $id \")</script>";
    $firstName = $rows['firstName'];
    $lastName = $rows['lastName'];
    $hhtRole = $rows['hhtRole'];
} else {
    header("location:listAllUsers.php");
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Humanity Help Team Intranet : Liste des utilisateurs</title>
    <script src="./jquery/jquery-3.1.1.min.js" ></script>
    <link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" />
    <script  type="text/javascript"  src="./bootstrap-3.3.7-dist/js/bootstrap.min.js" ></script>

    <script type="text/javascript">
        function updateUser() {
            $('#updateUserForm').submit();
        }

        $('#roleToUpdate').val(<?php $hhtRole ?>);
    </script>

    <script>alert(\"iD: $id \")</script>
</head>

<body>
<!-- Modal Update -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Mettre à jour un utilisateur</h4>
            </div>

            <div id="div-update-user-form">

                <form id="updateUserForm" action="updateUser.php" method="POST">
                    <div >
                        <div class="form-group">
                            <label id="idUserLabel">idUser</label>
                            <input type="text" class="form-control" readonly="readonly" id="idUser" value="<?php $id ?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email : </label>
                            <input type="email" class="form-control" id="emailToUpdate" placeholder="Email" value="<?php $emailZ ?>">
                        </div>

                        <div>
                            <label>Prénom :</label>
                            <input type="firstName" id="firstNameToUpdate" name="firstNameToUpdate"  value="<?php $firstName ?>"/>
                        </div>

                        <div>
                            <label>Nom : </label>
                            <input type="lastName" id="lastnameToUpdate" name="lastnameToUpdate" value="<?php $lastName ?>" />
                        </div>
                        <div>
                            <label>Role : </label>
                            <select id="roleToUpdate" name="roleToUpdate" >
                                <option value="A">Administrateurs</option>
                                <option value="M">Membres</option>
                            </select>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                        <button onclick="updateUser()" type="submit" class="btn btn-primary">Mettre à jour utilisateur</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<?php

mysqli_free_result($resultSet);
mysqli_close($connexion);

?>

</body>
</html>