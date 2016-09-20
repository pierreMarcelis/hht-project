<?php
include('session.php');
?>
    <html>
        <head>
            <title>Humanity Help Team Intranet login page</title>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>
				<p>Welcome <?php echo $email; $hhtRole; ?></p>
                <h2><a href = "logout.php">Sign Out</a></h2>

        </body>
</html>