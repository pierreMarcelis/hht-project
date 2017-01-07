<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Humanity Help Team Intranet Add user page</title>
   

	<link rel="stylesheet" type="text/css" href="/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
	
	<script src="/jquery/jquery-3.1.1.min.js"></script>
	<script src="/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>

<body>

<div id="addUser">




    <form  class="navbar-form navbar-left" action="addUserProcess.php" method="POST">
	
        <div class="form-group">
            <label>Email : >/label>
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
            <input type="submit" id="btn" value="addUser" />
        </div>
    </form>

</div>

</body>
</html>
