
<div class="modal-header" align="center">
    <img class="img-responsive" id="img_logo" src="/hht-project/images/logo.PNG">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <!--  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> -->
     </button>
 </div>

 <!-- Begin # DIV Form -->
<div id="div-forms">

    <!-- Begin # Login Form -->
    <form id="formLogin" action="loginProcess.php" method="POST">
        <div >
            <div id="div-login-msg">
                <!--
                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                <span id="text-login-msg">Veuillez introduire votre email et votre mot de passe.</span>
                -->
            </div>
            <div>

                <span id="text-login-msg">Email : </span>
                <input id="email" name="email" class="form-control" type="email" placeholder="Email (type ERROR for error effect)" required>
            </div>
            <div>
                <span id="text-login-msg">Mot de passe : </span>
                <input id="password" class="form-control" type="password" placeholder="Password" name="password" required>
            </div>
        </div>
        <div class="modal-footer">
            <div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
            </div>
            <!--  <div>
                 <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
            </div>-->
        </div>
    </form>
</div>