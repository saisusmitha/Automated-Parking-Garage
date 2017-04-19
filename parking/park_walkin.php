<?php
session_start();

?>
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<base href="" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title>Park a Lot</title>
		<meta name="description" content="Software Engineering Project" />
		<meta name="keywords" content="parking, garage, automation" />
		<link rel="stylesheet" type="text/css" href="media/css/style.css" media="screen, projection" />
		<!--[if IE]><link rel="stylesheet" type="text/css" href="media/css/ie.css" media="screen, projection" /><![endif]-->
		<script type="text/javascript" src="media/js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="media/js/common.js"></script>
		<script language="JavaScript">
		  javascript:window.history.forward(1);
		</script>
	</head>
	<body>			
		<div id="header-wrapper" class="wrapper">
			<div id="header" class="container">
				<a href="" id="logo"></a>
				<ul id="topnav" class="navbar clearfix">
					<li><a href="php/logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
		
		
		<div id="main-wrapper" class="wrapper">
		<div id="main" class="container">
		<div id="content">
							<div class="module">
								<h4>Credentials of Walk-in User</h4>
								<form action="walkin_create.php" method="post" class="tabular" id="dateRangeForm">
									<div class="form-row">
										<label for="walkin_name">Name</label>
										<input  type="text" name="walkin_name" id="walkin_name" required></input>
									</div>
									<div class="form-row">
										<label for="time[hour]">Start time</label>
										<input type="text" id="time[hour]" name="start_time" pattern="[1-9][0-9]?" placeholder="Enter start Hour Only(24 hours format)" required></input>
										<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="suggestion">Please enter the time in 24hours format -- HH</span>
									</div>
									<div class="form-row">
										<label for="duration">Duration</label>
										<input type="text" name="duration" id="duration" pattern="[1-9][0-9]?" placeholder="Enter Duration(Hours)" required></input>
										<span class="suggestion">1hr Minimum</span>
									</div>
									
									<div class="form-row">
										<label for="vehicle_id">Vehicle No</label>
										<input  type="text" name="vehicle_id" id="vehicle_id" required></input>
										<span class="suggestion">most likely to arrive in</span>
									</div>
									<div class="form-row">
										<label for="mobile_no">Mobile No</label>
										<input  type="text" name="mobile_no" id="mobile_no" pattern="[7-9]{1}[0-9]{9}" required></input>
										<span class="suggestion">most likely present number</span>
									</div>
									<div class="form-row center">
										<input type="submit" value="Reserve Spot" />
									</div>
								</form>
							</div>				
		</div>
				<div id="sidebar">
								<div class="how-to module">
									<h4>Welcome Manager<br/>Name: Mrs/Ms.<?php date_default_timezone_set("Asia/Calcutta"); $x= date("Y-m-d");
									echo $_SESSION['manager_name']."<br/>";echo $x; ?></h4>
									<ul style= "list-style:none;">
										<li><a href="registered.php">Registered Users History</a></li>
										<li><a href="walkin.php">Walkin Users History</a></li>
									</ul>
								</div>
				</div>
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