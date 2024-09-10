<?php
if(User::loggedIn()){

	if($userStatus == 1){
	?>
	<div class='sidebar'>
		<div class='sidebar-area'>
			<div class='row' style='margin-bottom: 20px;'>
				<div class='col-md-6'>
					<div class='user-profile'>
						<img src='images/3678412 - doctor medical care medical help stethoscope.png' class='img-responsive' style='max-height: 80px;' />
					</div>
				</div>
				<div class='col-md-6'>
					<div class='user-names'>
						<?php echo "$userFirstName";  ?>
					</div>

					<div class='user-role'>
						<?php echo "$userRole";  ?>
					</div>
				</div>
			</div>
			<ul class='sidebar-menu'>
				<li><a href='index.php'><img class='sidebar-menu-icon' src='images/Dashboard.png' /> Dashboard</a></li>
				<li><a href='profile.php?token=<?php echo $userToken; ?>'><img class='sidebar-menu-icon' src='images/Profile.png' />  Profile</a></li>
				<li><a href='patients.php'><img class='sidebar-menu-icon' src='images/Patient Book.png' />  Patients Book</a></li>
				<li><a href='add-doctors.php'><img class='sidebar-menu-icon' src='images/add doctors.png' />  Add Doctors</a></li>
				<li><a href='doctors-record.php'><img class='sidebar-menu-icon' src='images/doctors_record.png' /> Doctors' Records</a></li>
				<li><a href='appointments.php'><img class='sidebar-menu-icon' src='images/Appointment.png' />  Appointment</a></li>

				<li><a href='add-outbreak.php'> <img class='sidebar-menu-icon' src='images/Outbreak.png' /> Add Outbreaks</a></li>
				<li><a href='outbreaks.php'><img class='sidebar-menu-icon' src='images/Outbreak.png' />  Likely Outbreaks</a></li>
				<li><a href='hiv.php'><img class='sidebar-menu-icon' src='images/hiv.png' />  HIV</a></li>
				<li><a href='reports.php'><img class='sidebar-menu-icon' src='images/hiv report.png' />  HIV Reports</a></li>
			</ul>
		</div>
	</div>
	<?php
	} else {
	?>

	<div class='sidebar'>
		<div class='sidebar-area'>
			<div class='row' style='margin-bottom: 20px;'>
				<div class='col-md-6'>
					<div class='user-profile'>
						<img src='images/3678412 - doctor medical care medical help stethoscope.png' class='img-responsive' style='max-height: 80px;' />
					</div>
				</div>
				<div class='col-md-6'>
					<div class='user-names'>
						<?php echo "$userFirstName";  ?>
					</div>

					<div class='user-role'>
						<?php echo "$userRole";  ?>
					</div>
				</div>
			</div>
			<ul class='sidebar-menu'>
				<li><a href='index.php'><img class='sidebar-menu-icon' src='images/Dashboard.png' />  Dashboard</a></li>
				<li><a href='profile.php?token=<?php echo $userToken; ?>'> <img class='sidebar-menu-icon' src='images/Profile.png' /> Profile </a> </li>
				<li><a href='patients.php'><img class='sidebar-menu-icon' src='images/Patient Book.png' />  Patients Book</a></li>
				<li><a href='new-patient.php'> <img class='sidebar-menu-icon' src='images/Add Patient.png' /> Add Patient</a></li>
				<li><a href='appointments.php'><img class='sidebar-menu-icon' src='images/Appointment.png' />  Appointment</a></li>

				<li><a href='outbreaks.php'> <img class='sidebar-menu-icon' src='images/Outbreak.png' />  Outbreaks</a></li>
				<li><a href='hiv.php'><img class='sidebar-menu-icon' src='images/hiv.png' />  HIV</a></li>
				<li><a href='reports.php'><img class='sidebar-menu-icon' src='images/hiv report.png' />  HIV Reports</a></li>
			</ul>
		</div>
	</div>

<?php
}

} else if(Patient::isPatientIn() ) {
?>

<div class='sidebar'>
		<div class='sidebar-area'>
			<div class='row' style='margin-bottom: 20px;'>
				<div class='col-md-6'>
					<div class='user-profile'>
						<img src='images/3678443 - ambulance fast fast hospital.png' class='img-responsive' style='max-height: 80px;' />
					</div>
				</div>
				<div class='col-md-6'>
					<div class='user-names'>
						<?php echo Patient::getP($_SESSION['patient'], "name");  ?>
					</div>

					<div class='user-role'>
						<?php echo "Patient";  ?>
					</div>
				</div>
			</div>
			<ul class='sidebar-menu'>
			<li><a href='patient-data.php'><img class='sidebar-menu-icon' src='images/Your data.png' />  Your Data</a></li>
				<li><a href='book-appointments.php'><img class='sidebar-menu-icon' src='images/Appointment.png' />  Book an Appointment</a></li>
				<li><a href='p-sent-appointments.php'><img class='sidebar-menu-icon' src='images/book_appointment.png' /> Sent Appointments</a></li>
				<li><a href='p-reply-appointments.php'><img class='sidebar-menu-icon' src='images/reply_appointment.png' /> Replies</a></li>
				<li><a href='logout.php'> <img class='sidebar-menu-icon' src='images/logout.png' /> Logout</a></li>

			</ul>
		</div>
	</div>

<?php
}
