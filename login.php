<?php
include 'admin_dbcon.php';
session_start();
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$input_error=array();
	if(empty($username)){
		$input_error['username']="error";
	}
	if(empty($password)){
		$input_error['password']="error";
	}
	if(count($input_error)==0){
		$username_check= mysqli_query($admin_dbcon,"SELECT * FROM `student_info` WHERE `username`='$username'");
		if(mysqli_num_rows($username_check)>0){
			$admin_dbcon=mysqli_fetch_assoc($username_check);

			if($admin_dbcon['password']=md5($password)){
				if($admin_dbcon['status']=='Active'){
				$_SESSION['user_login']=$username;
				header('location:student_dasbord.php');
			}else{
				echo "<script>
				alert('Your account inactive');
				window.location.href='login.php';
				</script>";
			}
				
				}else{
					echo "<script>
				alert('wrong password!');
				window.location.href='login.php';
				</script>";
			}
					
		}else{
			echo "<script>
				alert('Your username not found');
				window.location.href='login.php';
				</script>";
		}

	}
}

	

?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Login form</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="login_style.css" media="all" />
</head>
<body>
	<form action="" method="POST">
		<div class="login"> 
			<h2>অ্যাডমিন লগইন</h2>
				
				<div class="input"> 
					<input class="input2 <?php if(isset($input_error['username'])){echo $input_error['username'];}?>" type="text" name="username" placeholder="ইউজারনেম" />
					<i class="fa fa-id-card"></i>
					
					<input class="input2 <?php if(isset($input_error['password'])){echo $input_error['password'];}?>" type="password" name="password" placeholder="পাসওয়াড" />
					<i class="fa fa-lock"></i>
				</div>
				<button class="btn" type="submit" name="submit">লগইন</button>
				<a href="">ভুলে গেছেন <span>পাসওয়াড?</span></a>
		</div>
	</form>
</body>
</html>
