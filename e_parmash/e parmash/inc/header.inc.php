

<nav role="navigation" class="navbar navbar-default real-nav" >
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand"><img src='images/hospital-logo.png' class='img-responsive img-logo' style="height: 50px; margin-bottom: 100px;" /></a>
        </div>

        <div id="navbarCollapse" class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-right">

                <?php if(!User::loggedIn() && !Patient::isPatientIn() ) {?>
               <li><a href='login.php'>Login</a></li>
               <?php } else {
                ?>

              
			    <li><a href='logout.php'>Logout</a></li>
                <?php
               } ?>
            </ul>

        </div>
    </div>
</nav>
