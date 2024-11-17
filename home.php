<?php
    session_start();
?>

<!DOCTYPE html>

<html>
	<head>
		<title>Skyline Rentals</title>
		<link rel="stylesheet" type="text/css" href="css/home.css">
		<link rel="stylesheet" type="text/css" href="css/headerfooter.css">
		<script src="js/home.js"></script>
	</head>
	<body>
	<header>	
		<h1 align="center" class="head1">Skyline Rentals</h1>
		<hr id="top">
		<img src="images/logo.jpg" alt="skyline logo" class="logo">
		<ul class="menu1">
			<li><a href="" class="list1">Language</a></li>
			<li><a href="" class="list1">Feedbacks</a></li>
			<li><a href="Contact us.html" class="list1">Contact us</a></li>
			<li><a href="" class="list1">About us</a></li>
		</ul>
        <a href="userprofile.php"><button class="loginbuttn">Profile</button></a>
		<hr id="bot"><br>
		<ul class="menu2">
			<li><a href="home.php" class="list2">Home</a></li>
			<li><a href="Reservation.html" class="list2">Resevartion</a></li>
			<li><a href="i" class="list2">Vehicles</a></li>
			<li><a href="i" class="list2">Locations</a></li>
		</ul><br>
		<hr class="hr3"><br><br>
	</header>
	<main>
		<div class="container">
			<div class="wrapper">
				<img src="Images/car.jpg">
				<img src="Images/SUV.webp">
				<img src="Images/van.jpg">
				<img src="Images/luxury.webp">
				<img src="Images/showroom.jpg">
			</div>
		</div>
		
		<div class="boxcover" >
			<div class="box1" >
				<img src="Images/NEW-CURRENT-CURRENT-DEALS.jpg" style="height: 160px;">
				<h2><button class="button1" type="button" id="btn1" onclick="loadData('btn1')">Current Deals</button></h2>
			</div>

			<div class="box2">
				<img src="Images/travel plan.jpg">
				<h2><button class="button2" type="button" id="btn2" onclick="loadData('btn2')">Travel Planning</button></h2>
			</div>

			<div class="box3">
				<img src="Images/programms.png">
				<h2><button class="button3" type="button" id="btn3" onclick="loadData('btn3')">Services</button></h2>
			</div>
		</div>

		<br><br>

		<div class="js1">
		<img id="image1" src="Images/home.jpg">
		</div>

		<br><br><br>

		<div class="js2">
		<p id="para" style="font-family: 'Bruno Ace SC', cursive;">Rent Your Dream Car with Us!"
			At our vehicle rental service company, we turn your dreams into reality. With an expansive fleet of meticulously maintained vehicles, we offer an array of choices to suit your desires. Whether it's a luxury sedan for a special occasion, an adventurous SUV for off-road exploration, or a sleek sports car to fulfill your driving fantasies, we've got you covered.			
			Our straightforward booking process, transparent pricing, and excellent customer service make renting your dream car a breeze. Experience the thrill of driving your dream vehicle without the hassle of ownership. Explore the world in style and comfort - RENT YOUR DREAM CAR today!</p>
		</div>
	</main>
			
		<footer>
			<hr class="hr3">
			<h2 style="font-family: cursive; font-size: 30px; margin-left: 30px; color:midnightblue ;">Skyline Rentals</h2>
			<div class="footerimg">
				<img src="Images/facebook.png" style="margin-right: 30px;">
				<img src="Images/twitter.png">
				<img src="Images/youtube.png" style="margin-left: 30px;">
			</div>
			<div class="footercontact">
				<p>+44 20 7946 0156 – Michel</p>
				<p>+44 20 7946 0142 – Jhon</p>
				<p>admin@skyline.com</p>
				<p>Addres:9503, New Street,
						  London,
						  SE69 5XE</p>
			</div>
			<div class="copyright">
				<p>​© 2023 The Skyline Rentals Corporation. </p>
			</div>
			
			<div class="footerlist">
				<ul>
					<li class="flitems"><a href="" class="list1">Terms of use</a></li>
					<li class="flitems"><a href="" class="list1">Privacy policy</a></li>
					<li class="flitems"><a href="sitemap.html" class="list1">Site Map</a></li>
				</ul>
			</div>
			
		</footer>
		
	</body>	
</html>