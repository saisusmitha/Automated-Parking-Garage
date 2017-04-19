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
					<li><a href="admin.php">Home</a></li>
					<li><a href="add.php">Add Managers</a></li>
					<li><a href="price.php">Set Price Plan</a></li>
					<li><a href="registered.php">Registered Users Usage</a></li>
					<li><a href="walkin.php">Walkin Users Usage</a></li>
					<li><a href="../php/logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
		<div id="main-wrapper" class="wrapper">
			<div id="main" class="container">
				<div id="wrap">
						<div class="module">
							<h4>Garage Managers</h4>
							
							<table class="reservations">
								<tr>
									<th>Name</th>
									<th>Email Id</th>
									<th>Mobile No</th>
									<th>Joined Date</th>
									<th>delete</th>
								</tr>
								<?php
								$file = "../data/manager.txt";

								if (!is_file($file) xor !is_readable($file)) {
								    trigger_error("File Not readable");
								    echo json_encode(array("login"=>"EDE"));
								}

								$data = file_get_contents($file);
								$json_a = json_decode($data,true);
								


								foreach ($json_a as $key => $value){
								  // echo "hii11"; 
								  	echo "<tr class='reservation'>";
									echo "<td>".$value["name"]."</td>";
									echo "<td>".$value["email"]."</td>";
									echo "<td>".$value["mobile_no"]."</td>";
									echo "<td>".$value["time_stamp"]."</td>";
									echo "<td>";
									echo "<a href='cancel.php?id=".$value['id']."'>delete</a>";
									echo "</td>";
									echo "</tr>";
								  
								   
								}
								?>
								
							</table>
							
							<a href="add.php" class="more">Add Managers</a>
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