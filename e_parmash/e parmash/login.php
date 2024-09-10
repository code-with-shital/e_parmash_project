<?php
require_once "importance.php";

if(User::loggedIn()){
	Config::redir("index.php");
}
?>

<html>
<head>
	<title>Login - <?php echo CONFIG::SYSTEM_NAME; ?> </title>
	<?php require_once "inc/head.inc.php";  ?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}


.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #cb2027;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

.fa-android {
  background: #a4c639;
  color: white;
}

.fa-dribbble {
  background: #ea4c89;
  color: white;
}

.fa-vimeo {
  background: #45bbff;
  color: white;
}

.fa-tumblr {
  background: #2c4762;
  color: white;
}
.fa-reddit {
  background: #ff5700;
  color: white;
}

</style>



</head>
<body>




  <?php require_once "inc/header.inc.php"; ?>
<header id="home">
        <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(/slider/t3.jpg)">
                    <div class="caption">
                        <h1 class="animated fadeInLeftBig">e-Paramarsh<span> Healthcare</span></h1>
                        <p class="animated fadeInRightBig">One Stop For All Your Heatlth Problems</p>

                    </div>
                </div>


                    </div>
                </div>





					<div class='content-body'>

						<?php
							if(isset($_GET['attempt'])){


								$status = $_GET['attempt'];

								if($status == 1){
									$header = "Login as an Admin";
								} else {
									$header = "Login as a Doctor";
								}

								echo "<center><div class='badge-header'>$header</div></center>";



								if(isset($_POST['login-email'])){
									$email = $_POST['login-email'];
									$password = $_POST['login-password'];

									if($email == "" || $password == ""){
										Messages::error("You must fill in all the fields");
									} else {
										User::login($email, $password, $status);
									}

								}

							?>
							<div class='row'>
								<div class='col-md-3'></div>
								<div class='col-md-6'>
									<div class='form-holder'>
										<?php Db::form(array("Email", "Password"), 3, array("login-email", "login-password"), array("text", "password"), "Login"); ?>
									</div>
								</div>
								<div class='col-md-3'></div>
							</div>
							<?php
								
							} else {

						?>

						<center><div class='badge-header'>Login As:</div></center>
						<div class='row'>
							<div class='col-md-2'></div>
							<div class='col-md-8'>
								<div class='row' style='margin-top: 70px;'>
									<div class='col-md-4'>
										<center>
											<div class='img-login-icons'>
												<img  class='img-responsive' src='images/3678411 - hospital medical nurse.png' alt='login as a doctor' />
											</div>
											<center><a href='login.php?attempt=1'><div class='badge-header'>Admin</div></a></center>

										</center>
									</div>
									<div class='col-md-4'>

										<center>
											<div class='img-login-icons'>
												<img  class='img-responsive' src='images/3678412 - doctor medical care medical help stethoscope.png' alt='login as a doctor' />
											</div>
											<center><a href='login.php?attempt=2'><div class='badge-header'>Doctor</div></a></center>
										</center>
									</div>

									<div class='col-md-4'>

										<center>
											<div class='img-login-icons'>
												<img  class='img-responsive' src='images/3678443 - ambulance fast fast hospital.png' alt='login as a doctor' />
											</div>
											<center><a href='login-patient.php'><div class='badge-header'>Patient</div></a></center>
										</center>
									</div>

								</div>
							</div>
							<div class='col-md-2'></div>
							<?php } ?>
						</div>
			</div>
		</div>
	</div>
<!--/#services-->
    <section id="about-us" class="parallax">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <h2>About us</h2>
                        <p>e-Paramarsh have the mission of providing specialized tertiary medical care services at affordable prices to under
                           served communities across the country. This private healthcare provider stands apart from others in it’s vision of 
                           making healthcare for all a reality for ordinary people in rural and remote regions. Every single individual working
                            in a ‘e-Paramarsh’ Healthcare- from doctors to management- is united in the endeavor to deliver top quality healthcare
                             to all. This Healthcare is a leader in establishing specialized hospitals in places that lack access to healthcare,
                              specifically super specialty tertiary care. Each of it’s initiative is based on three tenets of healthcare- Affordability, Accessibility & Quality.</p>

                        <h3 style="text-align:left"> Our Mission </h3>
                        <p>Our mission is to provide the best quality medical service with utmost responsibility and compassion. Our management ensures that every patient gets the best possible treatment whether preventive or diagnostic .</p>

                         <h3 style="text-align:left"> Our Vision </h3>
                        <p>e-Paramarsh aspires to be the preferred healthcare partner for the community. We will initiate all our endeavors based on the 3 tenets of healthcare – Affordability, Accessibility and Quality. </p>


                    </div>
                </div>
<div class="col-sm-6">
                    <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <p class="lead">Patient Satisfaction</p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="95">95%</div>
                            </div>
                        </div>
                        <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
                            <p class="lead">Hospitality</p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="90">75%</div>
                            </div>
                        </div>
                        <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                            <p class="lead">Skilled Experties </p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="80">80%</div>
                            </div>
                        </div>
                        <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <p class="lead">Affordability </p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="95">85%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#about-us-->




   <!-- footer -->
			<footer>
				<div class="container">
					 <a href="#contact">Contact Us</a></p>





					<div class="social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-google"></i></a>
					</div>

					<p class="copy-right">Copyright &copy; 2022 <a href="#">e-Paramarsh</a> | All rights reserved. </p>
				</div>
			</footer>

</body>
</html>
