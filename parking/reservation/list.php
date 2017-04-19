<?php
session_start();

?>
<?xml version="1.0" encoding="UTF-8"?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<base href="" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title>Home &ndash; Park a Lot</title>
		<meta name="description" content="Software Engineering Project" />
		<meta name="keywords" content="parking, garage, automation" />
		<link rel="stylesheet" type="text/css" href="../media/css/style.css" media="screen, projection" />
		<!--[if IE]><link rel="stylesheet" type="text/css" href="media/css/ie.css" media="screen, projection" /><![endif]-->
		<script type="text/javascript" src="../media/js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="../media/js/common.js"></script>
	</head>
	<body>
		<div id="header-wrapper" class="wrapper">
			<div id="header" class="container">
				<a href="" id="logo"></a>
				<ul id="topnav" class="navbar clearfix">
					<li><a href="../profile.php">Profile</a></li>
					<li><a href="create.php">Reserve</a></li>
					<li><a href="../php/logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
		<div id="main-wrapper" class="wrapper">
			<div id="main" class="container">
				<div id="wrap">
						<div class="module">
							<h4><?php echo $_SESSION["user_name"];?></h4>
							
							<p><b>Note: </b>You can only <b>edit</b> or <b>cancel</b> a reservation which is yet to complete and only 1 hour before start time of that particular reservation.</p>

							<h4>View Reservations</h4>
							<table class="reservations">
								<tr>
									<th>Arrival_Date</th>
									<th>Start_time</th>
									<th>Duration</th>
									<th>Vehicle_id</th>
									<th>edit</th>
									<th>cancel</th>
								</tr>
								<?php
								$file = "../data/user_reserve.txt";

								if (!is_file($file) xor !is_readable($file)) {
								    trigger_error("File Not readable");
								    echo json_encode(array("login"=>"EDE"));
								}

								$data = file_get_contents($file);
								$json_a = json_decode($data,true);
								


								foreach ($json_a as $key => $value){
								//echo "hii";
								    if($_SESSION["user_name"] == $value["user_name"]){
								  // echo "hii11"; 
								  	echo "<tr class='reservation'>";
									echo "<td>".$value["arrival_date"]."</td>";
									echo "<td>".$value["start_time"]."</td>";
									echo "<td>".$value["duration"]."</td>";
									echo "<td>".$value["vehicle_id"]."</td>";
									echo "<td>";
									echo "<a href='edit.php?id=".$value['id']."'>edit</a>";
									echo "</td>";
									echo "<td>";
									echo "<a href='cancel.php?id=".$value['id']."'>cancel</a>";
									echo "</td>";
									echo "</tr>";
								  
								    }
								}
								?>
								
							</table>
							
							<em>You don't have any other reservations to show.</em>
							<a href="create.php" class="more">Add Reservation</a>
						</div>
					</div>

			<!--	<div id="sidebar">
					<div class="module">
						<h4 class="header">Sign in</h4>
						<form action="php/login.php" method="post" class="tabular">
							<div class="form-row">
								&nbsp;&nbsp;&nbsp;<input type="radio" name="check" value="User" />User
								&nbsp;&nbsp;&nbsp;<input type="radio" name="check" value="Admin" />Admin
							</div>
							<div class="form-row">
								<label for="email">Email</label>
								<input type="text" name="email" id="email"  size="35" maxlength="255" required/>
							</div>
							<div class="form-row">
								<label for="password">Password</label>
								<input type="password" name="password" id="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required/>
							</div>
							<div class="form-row center">
								<input type="submit" name="login" value="Sign in" onClick="checkEmail(document.signupform.email.value)" />
							</div>
						</form>
					</div>
					
					<div class="module">
						<h4 class="header">Sign in as a Guest</h4>
						<form action="guest.html" method="post" class="tabular">
							<div class="form-row center">
								<input type="submit" name="login" value="Sign in" />
							</div>
						</form>
					</div>
					
				</div>		-->	
			</div>
		</div>
		<div id="footer-wrapper" class="wrapper">
			<div id="footer" class="container">
				<span>&copy; Park a Lot Inc. 2017 - 2018</span>
				<ul class="navbar cleafix">
					<li><a href="">Help</a></li>
					<li><a href="">Contact</a></li>
					<li><a href="">About Us</a></li>
				</ul>
			</div>
		</div>
	</body>
</html>