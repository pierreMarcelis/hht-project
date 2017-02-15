<?php
    session_start();
    include  "connection.php";
    // Get posted values from the adding user form (addUser.php)
    $email = $_REQUEST['emailToRemove'];

    // prevent mysql injection
    $email = stripcslashes($email);


    // sql to delete a record
    $sql = "DELETE FROM hht_users WHERE email = '$email'";

    if (mysqli_query($connexion, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($connexion);
    }

    mysqli_close($connexion);
    header("location:listAllUsers.php");
?>

