<?php
// Homepage template

include_once( __DIR__ . '/header.php');
?>

<section class="sec-1">
	<div class="container">
		<div class="col6">
			<br><br>
			<h1 class="heading">Share. Connect.<br>Contribute to<br>Society</h1>
			<br>
			<p style="font-size:18px;color: var(--darkblue)">Partner with us to drive your own livelihood and more.</p>
			<br>
		</div>
		<div class="col6">
			<img src="images/car.png" class="taxi-img">
		</div>
		<div class="clearfix"></div>
	</div>
</section>


<section class="sec-2">
	<div class="container">

		<h2 class="heading-2">How It Work</h2>
		<br><br>
		<div class="col3">
			<div class="box">
				<i class="fa fa-user icon-1"></i>
			<h3>Register Yourself</h3>
			</div>
		</div>
		<div class="col3">
			<div class="box">
				<i class="fa fa-automobile icon-1"></i>
			<h3>Explore all rides</h3>
			</div>
		</div>
		<div class="col3">
			<div class="box">
				<i class="fa fa-map-o icon-1"></i>
			<h3>Want ride? - Book a ride</h3>
			</div>
		</div>
		<div class="col3">
			<div class="box">
				<i class="fa fa-hand-o-up icon-1"></i>
			<h3>Have ride? - Post a ride </h3>
			</div>
		</div>
		<div class="clearfix"></div>

	</div>
</section>	


<section class="sec-3" id="about_us">
	<br><br>
	<div class="container">
		<h2 class="heading-3">About us</h2>
		<div class="clearfix"></div>
		<br><br>
		<div class="col6">
			<p class="p3">Welcome to our carpooling platform, the ultimate solution for booking, requesting, and enjoying affordable rides. With our intuitive interface, you can easily book rides that fit your schedule and budget. Need a ride? Simply request one and we'll connect you with available drivers in your area. We believe in cost-effective transportation that benefits both passengers and the environment. Say goodbye to expensive rides and hello to a community of shared journeys. Join us today and experience convenient, affordable, and eco-friendly commuting at your fingertips.
		
			</p>
		</div>
		<div class="col6">
			<img src="images/road.png" style="width: 80%; margin-top: -100px;">
		</div>
		<div class="clearfix"></div>
	</div>
</section>

<section class="sec-4" id="get_app">
	<div class="container">
		<div class="col6">
			<img src="images/app.png" style="width: 70%;">
		</div>
		<div class="content col-6">
			<h2 class="heading-3">Download the Carpool Mobile App</h2>
			<br>
			<p class="p3">
			Introducing our Carpool Mobile App - your ultimate solution for convenient, cost-effective, and eco-friendly commuting. Download our app today and experience a whole new way of getting around.</p>
			<br><p class="p3">
			Whether you need a ride to work, school, or social events, our app connects you with reliable drivers in your area who are heading in the same direction. Say goodbye to the hassle of waiting for public transportation or the expense of traditional ride-hailing services. Join our growing carpooling community and be part of a positive change in transportation.</p>
			<br><br>
			<a class="btn-r download-app" href=""> Download App </a>
		</div>
		<div class="clearfix"></div>

</div>
</section>


<section class="sec-5">
	<div class="container">
		<h2 class="heading-2" style="color: var(--white)">What Our Passengers say</h2>
		<br>
		<hr>
		<br>
		<div class="testimonial">
			<p class="p5" style="font-style: italic">
				"I have been using the carpool service for my daily commute, and I must say it has been a game-changer. Not only has it helped me save money on fuel and parking costs, but it has also  reduced my stress levels during rush hour traffic. It provides a convenient and reliable platform for connecting with fellow commuters in my area. The drivers are friendly and punctual, and the vehicles are well-maintained and comfortable. I appreciate the added benefit of contributing to the reduction of traffic congestion and environmental impact by sharing rides with others."
			</p>
			<br>
			<p class="p5" style="float:right"> - Dinesh Sharma </p>
			<br><br>
			<p class="p5" style="font-style: italic">
				"Nice service. Would like to use it again."
			</p>
			<br>
			<p class="p5" style="float:right"> - Priya Patil </p>
		</div>
	</div>
</section>

<?php
include_once( __DIR__ . '/footer.php');
?>