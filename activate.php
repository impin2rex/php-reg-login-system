<?php

session_start();

include 'dbcon.php';

if(isset($_GET['token'])){

	$token = $_GET['token'];

	$updatequery = " UPDATE signup SET status='active' WHERE token='$token' ";

	$query = mysqli_query($con,$updatequery);

	if($query){
		if(isset($_SESSION['msg'])){
			$_SESSION['msg'] = "Account updated successfully";
			header('location:login.php');
		}else{
			$_SESSION['msg'] = "You are logged out, Please login again.";
			header('location:login.php');
		}
	}else{

		$_SESSION['msg'] = "Account not updated!";
			header('location:reg.php');
	}
}

?>