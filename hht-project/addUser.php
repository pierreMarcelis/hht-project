<!DOCTYPE html>
<html>
<head>
    <title>Humanity Help Team Intranet Add user page</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div id="addUser">
    <form action="addUserProcess.php" method="POST">
        <p>
            <label>Username :</label>
            <input type="text" id="email" name="email"/>
        </p>
        <p>
            <label>Password  :</label>
            <input type="password" id="password" name="password"/>
        </p>

        <p>
            <label>Firstname :  :</label>
            <input type="firstName" id="firstName" name="firstName"/>
        </p>

        <p>
            <label>LastName : </label>
            <input type="lastName" id="lastname" name="lastname"/>
        </p>

        <p>
            <label>Role : </label>
        <div class="uk-button uk-form-select" data-uk-form-select>
            <select name="hht_role">
                <option value="A">Administrateurs</option>
                <option value="M"  selected="selected">Membres</option>
                <option value="V">Visiteurs</option>

            </select>
        </div>
        </p>
        <p>
            <input type="submit" id="btn" value="addUser" />
        </p>
    </form>

</div>

</body>
</html>

  //      $email = $rows['email'];
   //     $firstName = $rows['first_name'];
   //     $lastName = $rows['last_name'];
   //     $passoword = $rows['PASSWORD'];
     //   $hhtRole = $rows[''];