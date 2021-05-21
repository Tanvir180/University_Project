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

					$email = $_POST['email'];
					$password = $_POST['password'];

					$email_src = "select * from register where email='$email' && status='active' ";
					$query = mysqli_query ($con,$email_src);

					$email_count = mysqli_num_rows($query);

					if($email_count){

							$email_pass = mysqli_fetch_assoc($query);

							$db_pass = $email_pass['password'];

							$_SESSION['username'] = $email_pass['username'];

							$pass_decode = password_verify($password, $db_pass);


							if($pass_decode){

								echo "Login Successful";
						?>
							<script>
								location.replace("index.php");
							</script>
							<?php
					}else{

					

						?>
					<script>
					alert("Password Incorrect");
					</script>
					<?php

					}
					}else{

						
						?>
					<script>
					alert("Invalid Email");
					</script>
					<?php

					}
				}


?>




		<header id="header"><!--header-->
		<div class="header-top"><!--header-top-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">  <!-- grid layout, clearfix-clear float -->
						<div class="logo pull-left">  <!-- pull left-float left (bootstrap) -->
						<img src="images/home/FashionBD (4).png" alt="" / height="150px">
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-top-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9"><div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html" class="active">Home</a></li> 
								<li><a href="about.html">About</a></li>
								<li><a href="feedback.html">Feedback</a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	<section class="bdy">
		<div class="container my-5">
			<div class="row">
				<div class="col-md-5 offset-md-3">
					<!-- ekahane offset mane hocce se 3 ta column ke skip korbe tai from ta middle e ace -->
					<div class="card bg-dark pos">
						<div class="card-header">
							<h2 class="text-danger text-center"> LOG IN</h2>
						</div>
						<div class="card-body">
							
							<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">

								<div>
									<p class="bg-success text-white px-4">
										<?php 
										if(isset($_SESSION['msg'])){
											echo $_SESSION['msg'];
										}else{

											echo $_SESSION['msg'] = "You Are Logged Out. Login Again.";
										}

										 ?></p>
										
								</div>

								
								<div class="form-group text-light font-weight-bold">
									<label for="email">Email Address <span class="text-danger">&nbsp*</span></label>
									<input type="email" name="email" id="email"  class="form-control form-control-lg">
								</div>
								<div class="form-group text-light font-weight-bold">
									<label for="pass">Password<span class="text-danger">&nbsp*</span></label>
									<input type="password" name="password" id="pass"  class="form-control form-control-lg " required="">
								</div>

								<p class=" text-white">Don't Have Any Account? &nbsp &nbsp &nbsp <a href="registrationCust.html" class="txt">Registration</a></p>
								<p class=" text-white">Forgot Password &nbsp &nbsp &nbsp <a href="recover_email.php" class="txt text-danger">Click Here</a></p>
								<div class="card-footer text-center">
									<div class="form-group">
										<button type="submit" name="submit" class="btn btn-success mx-3 my-2">login</button>
										<button type="reset" class="btn btn-danger mx-3 my-2">Reset</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
		
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