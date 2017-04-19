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
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
		<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

		<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	  <link rel="stylesheet" href="/resources/demos/style.css">
	  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  <script>
	  $( function() {
	    $( "#datepicker" ).datepicker();
	  } );
	  </script>

	</head>
	<body>
		<div id="header-wrapper" class="wrapper">
			<div id="header" class="container">
				<a href="" id="logo"></a>
				<ul id="topnav" class="navbar clearfix">
					<li><a href="admin.php">Home</a></li>
					<li><a href="view.php">View Managers</a></li>
					<li><a href="price.php">Set Price Plan</a></li>
					<li><a href="registered.php">Registered Users Usage</a></li>
					<li><a href="walkin.php">Walkin Users Usage</a></li>
					<li><a href="../php/logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
		<div id="main-wrapper" class="wrapper">
			<div id="main" class="container">
						<div id="content">
							<div class="module">
									<h4>Manager Credentials</h4>
									<form action="add1.php" method="post" class="tabular" id="dateRangeForm">
									<div class="form-row">
									<label for="first_name">Name</label>
									<input type="text" name="name" id="first_name" value=""  required/>
									</div>
									<div class="form-row">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" value="" required/>
									</div>
									<div class="form-row">
										<label for="password">Password</label>
										<input type="password" name="password" id="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required/><br/>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<span class="suggestion">1upper case,1lower case,1 special chrecter and minimum length 8</span>
									</div>
									<div class="form-row">
										<label for="password_confirm">Confirm Password</label>
										<input type="password" name="password_confirm" id="password_confirm" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required/><br/>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<span class="suggestion">1upper case,1lower case,1 special chrecter and minimum length 8</span>
									</div>
									<div class="form-row">
										<label for="mobile_no">Mobile No</label>
										<input  type="text" name="mobile_no" id="mobile_no" pattern="[7-9]{1}[0-9]{9}" required></input>
										<span class="suggestion">most likely present number</span>
									</div>
									<div class="form-row center">
										<input type="submit" value="Add Manager" id="btnSubmit"/>
									</div>
								</form>
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