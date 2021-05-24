<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Registration</title>
		<link href="css/bootstrapreg.min.css" rel="stylesheet">
         <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
	    <link href="css/main.css" rel="stylesheet">
	    <link href="css/responsive.css" rel="stylesheet">
		<style type="text/css">
			.btn-danger {
   					 float: none !important;
   					margin-right: 76px!important;
                    margin-left: 76px!important;
            }

			body{
				background-image: url(projectpic/Wallpaper20160706_022528.jpeg);
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
			}
			.pos{
				opacity: 0.8;
				font-weight: bold;
			}
		</style>
	</head>
	<body>


			<?php
				include 'databasecon.php';
				
		if(isset($_POST['submit']))
		{
				$username = mysqli_real_escape_string($con, $_POST['username']);
				$number = mysqli_real_escape_string($con, $_POST['number']);
				$email = mysqli_real_escape_string($con, $_POST['email']);
				$division = mysqli_real_escape_string($con, $_POST['division']);
				$password = mysqli_real_escape_string($con, $_POST['pass']);
				$cpassword = mysqli_real_escape_string($con, $_POST['cpass']);
				$pass = password_hash($password, PASSWORD_BCRYPT);
				$cpass = password_hash($cpassword, PASSWORD_BCRYPT);
				$token = bin2hex(random_bytes(15));
				$emailquery =" select * from register where email='$email' ";
				$query = mysqli_query ($con,$emailquery);
				$emailcount = mysqli_num_rows($query);
				if($emailcount>0){
			
		?>
		<script>
			alert("Email Already Exists");
		</script>
		<?php
		}
		else{
		if($password===$cpassword)
		{
		$insertquery = "insert into register(username,number,email,division,password,cpassword, token, status) values('$username','$number','$email','$division','$pass','$cpass', '$token' , 'inactive')";
		
		$iquery =mysqli_query ($con, $insertquery);
		if($iquery){


			$subject = "Email Activation";
			$body = "Hi, $username. Click here too activate your account   http://localhost:7882/university_project/activate.php?token=$token";
			$sender = "From: hmhridoy65@gmail.com";
			if (mail($email, $subject, $body, $sender)) {
			$_SESSION['msg'] = "Check your mail to activate your account $email";
			header('location:logincustomer.php');
			} else {
					echo "Email sending failed...";
	
			}
			}else{
		?>
		<script>
			alert("Data Can't Insert");
		</script>
		<?php
			}
		}else{
		?>
		<script >
			alert("Password Are not matching");
		</script>
		<?php
		
		}
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
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li> 
								<li><a href="about.php">About</a></li>
								<li><a href="feedback.php">Feedback</a></li>
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
					<div class="card bg-info pos">
						<div class="card-header">
							<h2 class="text-danger text-center"> Register</h2>
						</div>
						<div class="card-body ">
							
							<form action=" <?php echo htmlentities($_SERVER['PHP_SELF']); ?> " method="POST">
								<div class="form-group">
									<label for="name">Full Name <span class="text-danger">*</span></label>
									<input type="text" name="username" id="name" class="form-control" required="" placeholder="Please enter your name" >
									
								</div>
								<div class="form-group">
									<label for="number">Contact Number <span class="text-danger">*</span></label>
									<input type="text" name="number" id="number" class="form-control " required="" placeholder="Please enter your contact number" >
									
								</div>
								<div class="form-group">
									<label for="email">E-mail address <span class="text-danger">*</span></label>
									<input type="email" name="email" id="email"  class="form-control "required="" placeholder="Please enter your email">
								</div>
							
								<div class="form-group">
									<label for="dis">Division <span class="text-danger">*</span></label>
									<select name="district" id="dis"  class="form-control" required="">
										<option value="dhaka">Dhaka</option>
										<option value="rangpur">Rangpur</option>
										<option value="madaripur">Chittagong</option>
										<option value="khulna">Khulna</option>
										<option value="ragsahi">Rajsahi</option>
										<option value="ragsahi">Mymensing</option>
										<option value="ragsahi">Barishal</option>
										
									</select>
								</div>
								<div class="form-group">
									<label for="name">Address <span class="text-danger">*</span></label>
									<input type="text" name="address" id="address" class="form-control" required="" placeholder="Please enter your address" >
									
								</div>
								<div class="form-group">
									<label for="dis">Password <span class="text-danger">*</span></label>
									<input type="password" name="pass" id="pass" class="form-control"required="" placeholder="Please enter your password" ><br>
								</div>
								<div class="form-group">
									<label for="cpass">Conform Password <span class="text-danger">*</span></label>
									<input type="password" name="cpass" id="cpass" class="form-control " required="" placeholder="Please enter your password" >
								</div>
								</div>
								<div class="card-footer text-center">
									<div class="form-group">
										<button type="submit" name="submit" class="btn btn-success mx-3">Register</button>
										<button type="reset" class="btn btn-danger mx-3">Reset</button>
										<a href="logincustomer.php" class="btn btn-primary mx-3 my-2">Back</a>
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