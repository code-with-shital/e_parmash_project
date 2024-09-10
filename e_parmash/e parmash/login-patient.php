<?php
require_once "importance.php";

if(Patient::isPatientIn()){
	header("Location: patient-data.php");
	return;
}
?>

<html>
<head>
	<title><?php echo CONFIG::SYSTEM_NAME; ?></title>
	<?php require_once "inc/head.inc.php";  ?>
	<style><?php include 'C:\xampp\htdocs\e parmash\css\style1.css'; ?></style>
</head>
<body>
	<?php require_once "inc/header.inc.php"; ?>
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-md-2'><?php require_once "inc/sidebar.inc.php"; ?></div>
			<div class='col-md-7'>
				<div class='content-area'>
				<div class='content-header'>
					Patient's Data <small>Access and download your data</small>
				</div>
                </div>
               <div class="wrapper">
    <header>Login </header>
    </div>
<?php
            $emailid = "";
            $password = "";

            if(isset($_POST['emailid'])){
                $emailid = $_POST['emailid'];
                $password = $_POST['password'];
                Patient::authorize($emailid, $password);
            }

            $form = new Form(2, "post");
            $form->init();
            $form->textBox("Email ID", "emailid", "email", "$emailid", array("placeholder='Email'") );
            $form->textBox("Password", "password", "password", "$password", array("placeholder='Password'") );
            $form->close("Access Your Data");
        ?>
        <div class="pass-txt"><a href="change-password.php">Forgot password?</a></div>
        <div class="sign-txt">Not yet member? <a href="patient_registration.php">Register Now</a></div>
 
</body>
</html>
