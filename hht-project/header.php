<div id="headerAdmin">
    <div class="center-block">
        <div align="left">
            <img  src="/hht-project/images/logo.PNG"/>
        </div>

        <div align="right">
           <div class="btn-group">
                <h3>
               <span class="label label-default">Welcome <?php echo $_SESSION['firstName']." ".$_SESSION['lastName']." : ".$_SESSION['hhtRole']; ?></span>
                </h3>
                    <a href = "logout.php" class="btn btn-default">Se délogger</a>
           </div>
        </div>

    </div>
</div>
