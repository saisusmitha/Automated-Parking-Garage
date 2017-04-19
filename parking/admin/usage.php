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
		<link rel="stylesheet" type="text/css" href="../media/css/style.css" media="screen, projection" />
		<!--[if IE]><link rel="stylesheet" type="text/css" href="media/css/ie.css" media="screen, projection" /><![endif]-->
		<script type="text/javascript" src="../media/js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="../media/js/common.js"></script>
		
	<body>			
		<div id="header-wrapper" class="wrapper">
			<div id="header" class="container">
				<a href="" id="logo"></a>
				<ul id="topnav" class="navbar clearfix">
					<li><a href="admin.php">Admin Home</a></li>
					<li><a href="price.php">Set Price Plan</a></li>
					<li><a href="walkin.php">Walkin History</a></li>
					<li><a href="Registered.php">Registered History</a></li>
					<li><a href="../php/logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
		<?php
		
		// code for calculating garage details
		
		
		
		?>
		
		<div id="main-wrapper" class="wrapper">
			<div id="main" class="container">
				<div id="wrap" class="clearfix">
					<div id="content">
							<p><em>Garage Statistics</em></p>
							<div>Total number of <strong>completed reservations</strong> to date: 0</div>
							<div>Total number of <strong>walk ins</strong> to date: 0</div>
							<div>Average parking <strong>length</strong>: half-an hour</div>
							<div>Percentage of reservations that end <strong>on time</strong>: ontime_percentage </div>
					</div>
					<div id="sidebar">
						<div class="how-to module">
							<h4>What is this?</h4>
							<p>As an administrator, you can view some helpful statistics about
								your garage. View such things as the average time spent parking, or
								the percentage of overstays/understays (for reservations), along
								with other garage statistics.</p>
						</div>
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