<?php
 	require "config.php";
?>
<?php
	// Retrieve a list of user accounts
	$sql = "SELECT user_id, firstName, email FROM user";
	$result = $conn->query($sql);
	
	// Check if there are users in the database
	if ($result->num_rows > 0) {
		$users = $result->fetch_all(MYSQLI_ASSOC);
	} else {
		$users = [];
	}

?>
<!DOCTYPE html>

<html>
	<head>
		<title>Skyline Rentals</title>
		<link rel="stylesheet" type="text/css" href="css/headerfooter.css">
        
		
	</head>
	<body>
        <header>	
            <h1 class="head1">Skyline Rentals</h1>
            <hr id="top">
            <img src="images/logo.jpg" alt="skyline logo" class="logo">
            <ul class="menu1">
                <li><a href="" class="list1">Language</a></li>
                <li><a href="" class="list1">Feedbacks</a></li>
                <li><a href="Contact us.html" class="list1">Contact us</a></li>
                <li><a href="" class="list1">About us</a></li>
            </ul>
            <button class="loginbuttn">Admin LOGGED</button>
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
			<h1 style="text-align:center">Welcome to the Admin Dashboard</h1><br><br>
			
			<h3>User Accounts</h3><br>
			<table border="1">
				<thead>
					<tr>
						<th>User ID</th>
						<th>Username</th>
						<th>Email</th>
						
					</tr>
				</thead>
				<tbody>
					<?php foreach ($users as $user) : ?>
						<tr>
							<td><?php echo $user["user_id"]; ?></td>
							<td><?php echo $user["firstName"]; ?></td>
							<td><?php echo $user["email"]; ?></td>
							
						</tr>
					<?php endforeach; ?>
			
				</tbody>
			</table><br>
			<form method="POST" action="deleteaccount.php">
			User ID: <input type="text" name="uid">
			<button type="submit" name="delete">Delete</button>
					</div><br><br><br>
			<a href="login.php"><button style="logout">LOGOUT</button></a>
        </main>    
			
		<footer style="margin-top: 200px;">
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