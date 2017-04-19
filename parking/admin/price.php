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
				<ul id="topnav" class="navbar clearfix" style="">
					<li><a href="admin.php">Home</a></li>
					<li><a href="add.php">Add Managers</a></li>
					<li><a href="view.php">View Managers</a></li>
					<li><a href="walkin.php">Walkin History</a></li>
					<li><a href="Registered.php">Registered History</a></li>
					<li><a href="../php/logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
		
		
		<div id="main-wrapper" class="wrapper">
		<div id="main" class="container">
		<div id="content">
		<div class="module">
			<form action="../php/new_price_plan.php" method="post" class="tabular">
				<fieldset>
				<legend>Create a new price plan</legend>
				<div class="form-row">
					<label for="member_price">Member Price</label>
					<input type="text" name="member_price" id="member_price" maxlength="2" pattern="[1-9][0-9]" value="" required/>
				</div>
				<div class="form-row">
					<label for="guest_price">Guest Price</label>
					<input type="text" name="guest_price" id="guest_price" maxlength="2" pattern="[1-9][0-9]" value="" required/>
				</div>
				<div class="form-row center">
					<input type="submit" name="set_price_plan" value="set_price_plan" />
				</div>
				</fieldset>
			</form>
		</div>
		</div>
		<div id="sidebar">
			<div class="how-to module">
				<h4>What do I do?</h4>
				<p>It's easy, just set prices your customers pay for parking. Each price
					is charged on an hourly basis for time spent parking.</p>
				<ol>
					<li>Set the hourly rate for a reservation.</li>
					<li>Set the hourly rate for a walk-in.</li>
					<li>As a safety measure, set the minumum allowable price to charge.</li>
				</ol>
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