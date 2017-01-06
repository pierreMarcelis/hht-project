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


<div class="modal-header" align="center">
    <img class="img-circle" id="img_logo" src="http://bootsnipp.com/img/logo.jpg">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
    </button>
</div>

<!-- Begin # DIV Form -->
<div id="div-forms">

    <!-- Begin # Login Form -->
    <form id="login-form">
        <div class="modal-body">
            <div id="div-login-msg">
                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                <span id="text-login-msg">Type your username and password.</span>
            </div>
            <input id="login_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
            <input id="login_password" class="form-control" type="password" placeholder="Password" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> Remember me
                </label>
            </div>
        </div>
        <div class="modal-footer">
            <div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
            </div>
            <div>
                <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
            </div>
        </div>
    </form>
    <!-- End # Login Fo