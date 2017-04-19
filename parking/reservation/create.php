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
					<li><a href="../profile.php">Profile</a></li>
					<li><a href="../php/logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
		<div id="main-wrapper" class="wrapper">
			<div id="main" class="container">
						<div id="content">
							<div class="module">
								<h4>What time do you plan on arriving?</h4>
								<form action="create1.php" method="post" class="tabular" id="dateRangeForm">
									<div class="form-row">
										<label for="date">Date of arrival</label>
										<!-- <input type="date" min="2017-01-01" max="2019-01-01" name="arrival_date" id="txtDate" value="" placeholder="yyyy-MM-dd" required/> -->
										<input type="text" id="datepicker" name="arrival_date" required/>
										<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="suggestion">Please enter the date format in this order: yyyy-MM-dd</span>
									</div>

									<div class="form-row">
										<label for="time[hour]">Start time</label>
										<input type="text" id="time[hour]" name="start_time" placeholder="Enter start Hour Only(24 hours format)" pattern="[1-9][0-9]?" required></input>
										<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="suggestion">Please enter the time in 24hours format -- HH</span>
									</div>
									<div class="form-row">
										<label for="duration">Duration</label>
										<input type="text" name="duration" id="duration" placeholder="Enter Duration(Hours)" pattern="[1-9][0-9]?" required></input>
										<span class="suggestion">1hr Minimum</span>
									</div>
									
									<div class="form-row">
										<label for="vehicle_id">Vehicle No</label>
										<input  type="text" name="vehicle_id" id="vehicle_id" pattern="^[A-Z]{1,2}\d{2,3}[A-Z]{3}$" required></input>
										<span class="suggestion">most likely to arrive in</span>
										
									</div>
									
										<?php 
										echo "<h4>Following are the dates You can reserve:<br/>";
										date_default_timezone_set("Asia/Calcutta");        
								          $temp_date = date("Y-m-d H");
								          $current_date = date("Y-m-d");
								          $dateplus1 = date('Y-m-d', strtotime('+1 day'));
								          $dateplus2 = date('Y-m-d', strtotime('+2 days'));
								          $current_time = substr($temp_date, 11, 13);
								          echo "<p class='extra-info notice'><b>Today's Date:</b> ".$current_date."<br/>";
								          echo "<b>Tomorrow's Date:</b> ".$dateplus1."<br/>";
								          echo "<b>Day-after-Tomorrow's Date:</b> ".$dateplus2."<br/></p>";
										?>
									<div class="form-row center">
										<input type="submit" value="Reserve Spot" id="btnSubmit"/>
									</div>
								</form>
							</div>
						</div>
						<div id="sidebar">
							<div class="how-to module">
								<h4>Dear <?php echo $_SESSION['user_name'];?></h4>
								<h4>How to reserve a spot <?php $x= date("Y-m-d");?></h4>
								<ol>
									<li>Choose your duration. Reservations are set in 1hr blocks.</li>
									<li>Select the vehicle your most likely to arrive in.</li>
									<li>If you'd like for your reservation to occur on multiple occasions,
										set your level of recurrence.
									</li>
									<li><b>Vehicle No Format Should Be :</b><br/> 1)Start with either one or two Capital letters.
									     <br/>2)Following by 2 or 3 digits. 
									     <br/>3)Then Follows by 3 Capaital letters.
									     <br/>eg: AP23RTC, A23RTC, A234RTC, AP234RTC etc.
									</li>
									<li><b> Start Time </b>and <b>Duration </b>cannot take value "0" or Fractions and should be in 24 hour Format.</li>
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