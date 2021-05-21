<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile | FashionBD</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrapreg.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Icon/css/font-awesome.min.css">
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
	.card{
		background: black!important;
		opacity: 0.8;
		
	}
	.form-group label
	{
		color: orange!important;
		font-size: 18px!important;
		
	}
	.form-group input,
	.form-group button,
	.form-group a{
		font-size: 15px!important;
	}
	h1{
		font-size: 80px;
		color: orange!important;
	}
	h2{
		font-size: 25px!important;
	}
</style>
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header-top"><!--header-top-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">  <!-- grid layout, clearfix-clear float -->
						<div class="logo pull-left">  <!-- pull left-float left (bootstrap) -->
						<img src="images/home/FashionBD (4).png" alt="" / height="150px">
						</div>
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href="account.html"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="wishlist.html"><i class="fa fa-star-o" aria-hidden="true"></i> Wishlist</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i><sup class="number badge bg-light rounded-circle">2</sup> Cart</a></li>
							</ul>
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
								<li><a href="index.html" class="active">Home</a></li> 
								<li><a href="about.html">About</a></li>
								<li><a href="feedback.html">Feedback</a></li>
								<li><a href="del_status.html">Delivery-status</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	<section>
		<div class="container my-5">
			<div class="row">
				<div class="col-md-5 offset-md-3">
					<!-- ekahane offset mane hocce se 3 ta column ke skip korbe tai from ta middle e ace -->
					<div class="card bg-info pos">
						<div class="card-header">
							<h1 class="text-danger text-center"><i class="fa fa-user-circle-o" aria-hidden="true"></i></h1>
							<h2 class="text-danger text-center">My Profile</h2>
						</div>
						<div class="card-body ">
							
							<form action="#" method="post">
								<div class="form-group">
									<label for="name">Full Name </label>
									<input type="text" name="username" id="name" class="form-control" required="" value="Priya Saha" autocomplete="off" >
									
								</div>
								<div class="form-group">
									<label for="number">Contact Number</label>
									<input type="text" name="number" id="number" class="form-control " required="" value="01766829719" >
									
								</div>
								<div class="form-group">
									<label for="email">E-mail address</label>
									<input type="email" name="email" id="email"  class="form-control "value="b180305047@gmail.com">
								</div>
								<div class="form-group">
									<label for="dob">Date of Birth</label>
									<input type="text" name="date" id="date" class="form-control " required="" value="28-8-2000" >
								</div>
								<div class="form-group">
									<label for="dis">Division</label>
									<input type="text" name="division" id="division" class="form-control " required="" value="Dhaka" >
								</div>
								<div class="form-group">
									<label for="name">Address</label>
									<input type="text" name="address" id="address" class="form-control" required="" value="Lokkhibazar,puran dahka" >
									
								</div>
								</div>
								
								<div class="card-footer text-center">
									<div class="form-group">
										<button type="submit" class="btn btn-success mx-3">Update</button>
										<a href="#" class="btn btn-primary mx-3 my-2">Change password</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer id="footer"><!--Footer-->
		<div class="footer-bottom"><!--footer bottom-->
			<div class="header_top">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 ">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="">&copy; fashionBD.com 2021 All Rights Reserved.</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/footer bottom-->
		</div>
		
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>