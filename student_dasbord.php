<?php
include 'admin_dbcon.php';
session_start();
if(!isset($_SESSION['user_login'])){
	header('Location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="student_dasboard_style.css" media="all" />
    <title>FCTISOFTWARE DEVELOPMENT</title>
</head>
<body>
    

	<div class="header"> 
		<div class="row"> 
		
		<div class="col">
			<img src="fcti-soft-brand-icon.png" alt="" />
			</div>
		
		<div class="col">
			<div class="icon"> 
				<img class="img2" src="1.png" alt="" />
			</div>
		</div>
		</div>
	</div>
	
	
	<div class="content"> 
		<ul>

			<li><a href=""><i class="fas fa-tachometer-alt"></i></a>Dashboard</li>
			<li><a href=""><i class="fas fa-user-plus"></i></a>Admission</li>
			<li><a href=""><i class="fas fa-chalkboard-teacher"></i></a>Teachers</li>
			<li><a href=""><i class="fas fa-users"></i></a>Students</li>
			<li><a href=""><i class="fas fa-users"></i></a>Student Account</li>
			<li><a href=""><i class="fab fa-youtube"></i></a>Playlist</li>
			<li><a href=""><i class="fas fa-user-plus"></i></a>Visitor</li>
			<li><a href=""><i class="fas fa-user-plus"></i></a>Seminar</li>
			<li><a href=""><i class="fas fa-money-check-alt"></i></a>Payment</li>
			<li><a href=""><i class="fas fa-registered"></i></a>Registration</li>
			<li><a href=""><i class="fas fa-mail-bulk"></i></a>Bulk SMS</li>
			<li><a href=""><i class="fas fa-poll"></i></a>Results</li>
			<li><a href=""><i class="fas fa-bars"></i></a>Notice</li>
			<li><a href=""><i class="fas fa-link"></i></a>File Upload</li>
			<li><a href=""><i class="fas fa-history"></i></a>Routine</li>
			<li><a href=""><i class="fas fa-plus"></i></a>Course</li>
			<li><a href=""><i class="fas fa-id-card"></i></a>ID CARD</li>
			<li><a href=""><i class="fas fa-clock"></i></a>Attendance</li>
			
		</ul>
		
		
		 <ul>
        <li><a href="">Dashboard</a></li>
        <li><a href="">Student List</a></li>
        <li><a href="">Admisssion</a></li>
        <li><a href="">Setting</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
	</div>
	
	
	
	
	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>