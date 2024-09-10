<?php
require_once "importance.php";

if(!Patient::isPatientIn()){
	Config::redir("login.php");
}
?>

<html>
<head>
	<title>Replied Appointments<?php echo CONFIG::SYSTEM_NAME; ?></title>
	<?php require_once "inc/head.inc.php";  ?>
</head>
<body>
	<?php require_once "inc/header.inc.php"; ?>
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-md-2'><?php require_once "inc/sidebar.inc.php"; ?></div>
			<div class='col-md-7'>
				<div class='content-area'>
				<div class='content-header'>
					Sent Appointments <small>View your sent appointments</small>
				</div>
				<div class='content-body'>
					<?php Appointment::loadPatientRepliedAppointment();  ?>
				</div>
				</div>

			</div>

			<div class='col-md-3'>
				<img src='images/doc-background-one.png' class='img-responsive' />
			</div> 

		</div>
	</div>
</body>
</html>
