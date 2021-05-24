<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Delivery_status</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<link href="css/Bootstraplogin.min.css" rel="stylesheet">
		<style type="text/css">
			
			.text-danger{
				font-weight: bold;
				font-size: 30px!important;
				float: right!important;
			}
			body{
				background-image: url(projectpic/Wallpaper20160706_022528.jpeg);
				background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;
			}
			.pos{
				opacity: .8;
			}
			h2{
				color: orange !important;
		font-size: 3rem;
		/*font-weight: bold;*/
			}
			.textarea{
				font-size: 16px;
			}
			/*.mx-5 {
		margin-left: 6rem!important;
		}*/
		</style>
	</head>
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
					<li><a href="account.php"><i class="fa fa-user"></i> Account</a></li>
					<li><a href="wishlist.php"><i class="fa fa-star-o" aria-hidden="true"></i> Wishlist</a></li>
					<li><a href="cart.php"><i class="fa fa-shopping-cart"></i><sup class="number badge rounded-circle">2</sup> Cart</a></li>
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
					<li><a href="index.php" class="active">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="feedback.php">Feedback</a></li>
					<li><a href="del_status.php">Delivery-status</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</div><!--/header-bottom-->
</header><!--/header-->
<section class="bdy">
	<div class="container my-5 ">
		<div class="row">
			<div class="col-md-5 offset-md-3">
				<div class="card bg-dark pos">
					<div class="card-header">
						<h2 class="text text-center"> Delivery status</h2>
					</div>
					<div class="card-body">
						
						<form action="#" method="post">
							<div class="form-group text-light font-weight-bold">
								<div class="form-group text-light font-weight-bold">
									<div class="form-group">
										<label for="username">Name <span class="text-danger">*</span></label>
										<input type="text" name="username" id="username" class="form-control" required="" placeholder="Enter Your Name">
									</div>
									<label for="email">Email Address <span class="text-danger">*</span></label>
									<input type="email" name="email" id="email"  class="form-control" required="" placeholder="Enter Your Email">
								</div>
								
								
								<div class="card-footer">
									<div class="form-group text-center">
										<button type="submit" class="btn btn-success mx-3 my-2">Ok</button>
										<button type="reset" class="btn btn-danger mx-3 my-2">Reset</button>
									</div>
								</div>
								<div class="form-group">
									<label for="subject">Delivery status <span class="text-danger">*</span></label>
									<input type="text" name="subject" id="subject" class="form-control" required="">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="footer-bottom">
	<div class="header_top"><!--footer bottom-->
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