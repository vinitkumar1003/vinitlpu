<?php 
session_start();

$conn = mysqli_connect('sql308.epizy.com','epiz_33438650','6ROPvRSklc');
mysqli_select_db($conn,'epiz_33438650_elearn');
	
$email = $_POST['email'];
$password = $_POST['password'];

	if (empty($email)) {
		header("Location: login.php?error=Email is required");
	}else if (empty($password)){
		header("Location: login.php?error=Password is required&email=$email");
	}else {
		$s= "select * from admin where email = '$email' && password = '$password' ";
		$result = mysqli_query($conn, $s);
		$num = mysqli_num_rows($result);
		if($num == 1){
			$_SESSION['username'] = $email;
		   header('location:admin_home.php');
		}
		else{
			header('location:admin_login.php');
		}
	}
