<?php
// Common Header file to be included on all pages
error_reporting(E_ALL & ~E_NOTICE);
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>

	<header>
	<div class="container">
		<div class="col6">
			<img src="images/car-logo.png" class="logo" width="80">
		</div>
		<div class="col6">
			<ul class="topnav">
				<li><a href="home.php">Home</a></li>
				<?php
				if(!isset($_SESSION['user_id'])) {
				?>
				<li><a href="home.php#about_us">About Us</a></li>
				<li><a href="login.php" class="sign_in">Sign in</a></li>
				<?php
				} else {
				?>
				<li><a href="rides.php">Explore Rides</a></li>
				<li><a href="my-rides.php">My Rides</a></li>
				<li><a href="logout.php" class="sign_out">Sign Out</a></li>
				<?php
				}
				?>
				<li><a href="home.php#get_app" id="get_app_button" class="btn-r">Get our App</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>

	<div class="header-bottom">
		<div class="container">
			<div class="bottomnav">
				<?php
				if(isset($_SESSION['customer_name'])) {
				?>
				<p><?php echo 'Hello, '. $_SESSION['customer_name'].'!';?> </p>
				<?php
				} else {
				?>
				<p>RTO certified #1 Service in India </p>
				<?php }
				?>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</header>