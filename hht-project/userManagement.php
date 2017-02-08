<?php
echo "<p>Admin</p>";
session_start();

$email = $_SESSION['email'];
$hhtRole = $_SESSION['hhtRole'];

if(!isset($email)) {
    header("location:index.php");
}

if(!isset($hhtRole)) {
    header("location:index.php");
}

if($hhtRole != 'A') {
    header("location:index.php");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <title>Humanity Help Team Intranet Administration</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<body>

<div class="container-fluid">
    <div align="center">
        <img  src="/hht-project/images/logo.PNG"/>
    </div>

    <div class="panel panel-default">
        <div>

            <p>Welcome <?php echo $_SESSION['firstName']." ".$_SESSION['lastName']." : ".$_SESSION['hhtRole']; ?></p>
            <h2><a href = "logout.php">Sign Out</a></h2>
        </div>

        <div class="panel-heading">
            <h3 class="panel-title">Gestion des utilisateurs</h3>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"> <a href="addUser.php">Ajouter un utilisateur</a></span>
            </div>
            <!-- <div class="form-group">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"> <a href="#">Supprimer un utilisateur</a></span>
            </div>-->
            <div class="form-group">
                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"> <a href="listAllUsers.php">Lister les utilisateurs</a></span>
            </div>
            <div class="form-group">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"> <a href="#">Mettre à jour un utilisateur</a></span>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Gestion des fichiers</h3>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"> <a href="#">Ajouter un fichier</a></span>
            </div>
            <!-- <div class="form-group">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"> <a href="#">Supprimer un fichier</a></span>
            </div>-->
            <div class="form-group">
                <span class="glyphicon glyphicon-list-alt" aria-hidden="true"> <a href="#">Lister les fichiers</a></span>
            </div>
            <div class="form-group">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"> <a href="#">Mettre à jour un fichier</a></span>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</head>
</html>