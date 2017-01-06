<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>Humanity Help Team Intranet Add user page</title>
   

	<link rel="stylesheet" type="text/css" href="/hht-project/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
	
	<script src="/hht-project/jquery/jquery-3.1.1.min.js"></script>
	<script src="/hht-project/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>

<body>
<div id="menu">
	<img  src="/hht-project/images/logo.PNG">
		<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestion des utilisateurs <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="addUser.php">Ajouter un utilisateur</a></li>
            <li><a href="listAllUsers.php">Lister tous les utilisateurs</a></li>
            <li><a href="#">Supprimer un utilisateur</a></li>
				</ul>
			</li>
			</ul>
			
			 <ul class="nav navbar-nav">
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestion des documents <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Ajouter un document</a></li>
            <li><a href="#">Lister tous les documents</a></li>
            <li><a href="#">Supprimer un document</a></li>
				</ul>
			</li>
			</ul>
			
			<form class="navbar-form navbar-left">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
    
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
		</nav>
	</div>
<div id="addUser">




    <form  class="navbar-form navbar-left" action="addUserProcess.php" method="POST">
	
        <div class="form-group">
            <label>Username :</label>
            <input type="text" id="email" name="email"/>
        </div>
        <div>
            <label>Password  :</label>
            <input type="password" id="password" name="password" />
        </div>

        <div>
            <label>Firstname :</label>
            <input type="firstName" id="firstName" name="firstName"/>
        </div>

        <div>
            <label>LastName : </label>
            <input type="lastName" id="lastname" name="lastname"/>
        </div>

        <div>
            <label>Role : </label>
            <select name="hht_role">
                <option value="A">Administrateurs</option>
                <option value="M"  selected="selected">Membres</option>
                <option value="V">Visiteurs</option>
            </select>
        </div>
        <div>
            <input type="submit" id="btn" value="addUser" />
        </div>
    </form>

</div>

</body>
</html>
