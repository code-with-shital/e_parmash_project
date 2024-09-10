<?php
require_once "importance.php";


?>

<html>
<head>
	<title>Patient Data - <?php echo CONFIG::SYSTEM_NAME; ?></title>
	<?php require_once "inc/head.inc.php";  ?>
</head>
<body>
	<?php require_once "inc/header.inc.php"; ?>
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-md-2'><?php require_once "inc/sidebar.inc.php"; ?></div>
			<div class='col-md-10'>
				<div class='content-area'>
				<div class='content-header'>
					Patient Data <small>here is your data</small>
				</div>
				<div class='content-body'>
					<div class='form-holder'>

						<hr />
						<?php Patient::getPatientData($_SESSION['patient']); ?>
					</div>
				</div>
				</div>

			</div>

		</div>
	</div>
</body>
</html>
