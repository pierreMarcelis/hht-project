
<div class="modal-header" align="center">
    <img class="img-responsive" id="img_logo" src="/hht-project/images/logo.PNG">
 </div>

 <!-- Begin # DIV Form -->
<div id="div-forms">

    <!-- Begin # Login Form -->
    <form id="formLogin" action="loginProcess.php" method="POST">
        <div >

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

            <div>
                <?php
                session_start();
                $message = "";
                if(isset($_SESSION['FEEDBACK'])) {
                    $message =  $_SESSION['FEEDBACK'];
                }
                ?>

                <div class="form-group has-danger">
                    <div class="form-control-feedback">Error : <?php $message?></div>
                </div>

            </div>
        </div>
    </form>


</div>