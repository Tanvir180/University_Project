<?php
session_start();

include 'databasecon.php';

if (isset($_GET['token'])) {

		$token =$_GET['token'];

		$updatequery  =" update register set status='active' where token='$token' ";

		$query = mysqli_query($con,$updatequery);

		if ($query) {
			
			if (isset($_SESSION['msg'])) {
				
				$_SESSION['msg'] = "Account Update Successfully";
				header('location:logincustomer.php');
			}else{
				$_SESSION['msg'] = "You Are Logged Out";
				header('location:logincustomer.php');
			}
		}else{

			$_SESSION['msg'] = "Account not Update";
				header('location:registrationCust.php');
		}
	}
?>