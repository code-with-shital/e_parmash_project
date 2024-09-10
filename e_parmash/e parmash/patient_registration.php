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
	<style><?php include 'C:\xampp\htdocs\e parmash\css\style.css'; ?></style>
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
				<!-- Main div code -->
	<div id="main">
		<form action="connect.php" method="POST">
	<!-- create account div -->
	<div class="login">
	<table cellspacing="2" align="center" cellpadding="8" border="0">
	<tr>
	<td align="right">Enter Name :</td>
	<td><input type="text" placeholder="Enter user here" id="t1" class="tb" name="name" required/></td>
	</tr>
	<tr>
	<td align="right">Enter Email ID :</td>
	<td><input type="text" placeholder="Enter Email ID here" id="t2" class="tb" name="emailid" required/></td>
	</tr>
	<tr>
	<td align="right">Enter Password :</td>
	<td><input type="password" placeholder="Enter Password here" id="t4" class="tb" name="password" required/></td>
	</tr>
	<tr>
	<td align="right">Enter Confirm Password :</td>
	<td><input type="password" placeholder="Enter Password here" id="t5" class="tb" name="cpassword" required/></td>
	</tr>
	<tr>
	<td></td>
	<td>
	<input type="reset" value="Clear Form" onclick="clearFunc()" id="res" class="btn" />
	<input type="submit" value="Create Account" class="btn" onclick="registration()" /></td>
	</tr>
	</table>
	</div>
	<!-- create account box ending here.. -->
	</div>
	<!-- Main div ending here... -->
    <script>
        function registration()
	{

		var name= document.getElementById("t1").value;
		var email= document.getElementById("t2").value;
		var pwd= document.getElementById("t4").value;			
		var cpwd= document.getElementById("t5").value;
		
        //email id expression code
		var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
		var letters = /^[A-Za-z]+$/;
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		if(name=='')
		{
			alert('Please enter your name');
		}
		else if(!letters.test(name))
		{
			alert('Name field required only alphabet characters');
		}
		else if(email=='')
		{
			alert('Please enter your user email id');
		}
		else if (!filter.test(email))
		{
			alert('Invalid email');
		}
		
		else if(pwd=='')
		{
			alert('Please enter Password');
		}
		else if(cpwd=='')
		{
			alert('Enter Confirm Password');
		}
		else if(!pwd_expression.test(pwd))
		{
			alert ('Upper case, Lower case, Special character and Numeric letter are required in Password filed');
		}
		else if(pwd != cpwd)
		{
			alert ('Password not Matched');
		}
		else if(document.getElementById("t5").value.length < 6)
		{
			alert ('Password minimum length is 6');
		}
		else if(document.getElementById("t5").value.length > 12)
		{
			alert ('Password max length is 12');
		}
		else
		{				                            
               alert('Thank You for Login & You are Redirecting to Login page');
			   // Redirecting to other page or website code. 
			   window.location = "login-patient.php"; 
		}
	}
	function clearFunc()
	{
		document.getElementById("t1").value="";
		document.getElementById("t2").value="";
		document.getElementById("t4").value="";
		document.getElementById("t5").value="";
	}
    </script>


				

			</div>



		</div>
	</div>
</body>
</html>
