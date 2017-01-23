<!DOCTYPE html>
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
    <script>
        function reset() {

        }

        function backMainMenu() {
            var url = "userManagement.php";
            window.location(url);
        }
    </script>
<body>



<div id="addUser">

    <div class="container-fluid">
        <div align="center">
            <img  src="/hht-project/images/logo.PNG"/>
        </div>


        <div id="div-forms">

    <form  class="navbar-form navbar-left" action="addUserProcess.php" method="POST">
	
        <div class="form-group">
            <label>Email : </label>
            <input type="email" id="email" name="email"/>
        </div>
        <div>
            <label>Password  :</label>
            <input type="password" id="password" name="password" />
        </div>

        <div>
            <label>Prénom :</label>
            <input type="firstName" id="firstName" name="firstName"/>
        </div>

        <div>
            <label>Nom : </label>
            <input type="lastName" id="lastname" name="lastname"/>
        </div>

        <div>
            <label>Role : </label>
            <select name="hht_role">
                <option value="A">Administrateurs</option>
                <option value="M"  selected="selected">Membres</option>
            </select>
        </div>
        <div>
            <a href="userManagement.php">Retour au menu principal</a>
           <!-- <button onclick="reset()">Réinitialiser les valeurs</button>-->

            <input type="submit" id="btn" value="Ajouter utilisateur" />
        </div>
    </form>
        </div>

    </div>
</div>

</body>
</html>
