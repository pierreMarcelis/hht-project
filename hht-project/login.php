<!DOCTYPE html>
    <html>
        <head>
            <title>Humanity Help Team Intranet login page</title>
            <link rel="stylesheet" type="text/css" href="style.css"/>
        </head>
        <body>
            <div id="formLogin">
                <form action="loginProcess.php" method="POST">
                    <p>
                        <label>Username :</label>
                        <input type="text" id="email" name="email"/>
                    </p>
                    <p>
                        <label>Password  :</label>
                        <input type="password" id="password" name="password"/>
                    </p>
                    <p>
                        <input type="submit" id="btn" value="Login" />
                    </p>
                </form>

            </div>

        </body>
</html>