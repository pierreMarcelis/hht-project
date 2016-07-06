<?php
include("config.php");
    
session_start();
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
// escape variables for security
    $myusername = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);



// Building the sql query
    $sql = "SELECT * FROM HHT_USERS where EMAIL= '$myusername' and PASSWORD='$password'";

// on envoie la requête 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());  
$countResult=0;
// on fait une boucle qui va faire un tour pour chaque enregistrement 
while($data = mysql_fetch_array($req))  
    { 
    // on affiche les informations de l'enregistrement en cours 
    echo '<b>'.$data['ID'].' '.$data['FIRST_NAME'].$data['FIRST_NAME'].$data['LAST_NAME'].$data['EMAIL'].$data['HHT_ROLE'].'</b> ('.$data['PASSWORD'].')';  
    $countResult = $countResult+1;
    }  
    echo $countResult;
// on ferme la connexion à mysql 
mysql_close($db);  
    
    
    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        session_register("myusername");
        $_SESSION['login_user'] = $myusername;

        header("location: welcome.php");
    } else {
        $error = "Your Login Name or Password is invalid";
        header("location: index.php");
    }
}
?>