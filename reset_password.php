<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Log In</title>
		<link href="css/Bootstraplogin.min.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
	    <link href="css/main.css" rel="stylesheet">
	    <link href="css/responsive.css" rel="stylesheet">
	    <style>
		body{
    background-image: url(projectpic/Wallpaper20160706_022528.jpeg);
    background-repeat: no-repeat;
    background-size: cover; 
    background-attachment: fixed;
    }
   	   .pos{
        opacity: 0.9;
    }

	</style>
	</head>
	<body>
		<?php
				include 'databasecon.php';
				
		if(isset($_POST['submit']))
		{
				if(isset($_GET['token']))
				{

					$token = $_GET['token'];

				$password = mysqli_real_escape_string($con, $_POST['pass']);
				$cpassword = mysqli_real_escape_string($con, $_POST['cpass']);

				$pass = password_hash($password, PASSWORD_BCRYPT);
				$cpass = password_hash($cpassword, PASSWORD_BCRYPT);

			

		if($password===$cpassword)
		{
			$updatquery = "update register set password='$pass' where token='$token' ";
				$iquery =mysqli_query($con,$updatquery);

		if($iquery){
			$_SESSION['msg'] = "Your Password has been updated";
			header('location:logincustomer.php');
		}else{
			$_SESSION['passmsg'] = "Your Password is not updated";
			header('location:reset_password.php');
		}
		}
		else{
			$_SESSION['passmsg'] = "Password Are not matching";
			header('location:reset_password.php');
			
		}
		}else{
			echo "Token Not Found";
		}
	}
		?>

		<div class="container my-5">
			<div class="row">
				<div class="col-md-5 offset-md-3">
					<!-- ekahane offset mane hocce se 3 ta column ke skip korbe tai from ta middle e ace -->
					<div class="card bg-info pos">
						<div class="card-header">
							<h2 class="text-danger text-center"> Register</h2>
						</div>
						<div class="card-body ">
							<p> 
								<?php
								if(isset($_SESSION['passmsg'])){

										 echo $_SESSION['passmsg'];

							}else
							{
								 echo $_SESSION['passmsg'] ="";
							}
								 ?> </p>
							
							<form action="" method="POST">
								
								
								
								<div class="form-group">
									<label for="pass">Your Password <span class="text-danger">*</span></label>
									<input type="password" name="pass" id="password" class="form-control " required="" placeholder="Please enter your password" >
								</div>
								<div class="form-group">
									<label for="cpass">Conform Password <span class="text-danger">*</span></label>
									<input type="password" name="cpass" id="cpassword" class="form-control " required="" placeholder="Please enter your password" >
								</div>
								
								<div class="card-footer text-center">
									
									<div class="form-group">
										<button type="submit" name= "submit" class="btn btn-success mx-5">Update Password</button>
									
									</div>
								</div>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- jquery v3.5.1 JS -->
		<script src="assets/js/jquery-3.5.1.slim.min.js"></script>
		<!-- Popper JS -->
		<script src="assets/js/popper.min.js"></script>
		<!-- Bootstrap v4.5.3 JS -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="assets/js/main.js"></script>
	</body>
</html>