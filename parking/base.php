<?php
session_start();

?>
<?xml version="1.0" encoding="UTF-8"?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<base href="" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

		<meta Http-Equiv="Cache-Control" Content="no-cache">
		<meta Http-Equiv="Pragma" Content="no-cache">
		<meta Http-Equiv="Expires" Content="0"> 

		<title>Home &ndash; Park a Lot</title>
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
					<li><a href="base.php">Home</a></li>
					<li><a href="login.html">Login</a></li>
					<li><a href="register.html">Register</a></li>
				</ul>
			</div>
		</div>
		<div id="main-wrapper" class="wrapper">
			<div id="main" class="container">
				<div id="content">
					<div class="module">
						<h4>Welcome to Park a Lot. Park with Confidence!</h4>
						<p>Park a lot is an efficient, effective solution for parking, in the busy
							area of Metro Kamrup. Whether you need a place to park
							on your daily commute to work, or you just need parking for a night out
							on the town, Park a Lot is here to help you.
							<br/><strong>Walk Ins Welcome</strong>.</p>
							<?php
								  date_default_timezone_set("Asia/Calcutta");
				                  $temp_date = date("Y-m-d H");
				                  $current_date = date("Y-m-d");
				                  $current_time = substr($temp_date, 11, 13);

				                   $file = "data/day_1.txt";
				                   $file1 = "data/day_2.txt";
				                   $file2 = "data/day_3.txt";
				                   $file3 = "data/price_plan.txt";
				                   //$count = 0;


				                  $dateplus1 = date('Y-m-d', strtotime('+1 day'));
				                  $dateplus2 = date('Y-m-d', strtotime('+2 days'));


				                  $data = file_get_contents($file);
                                   $json_a = json_decode($data,true);
                                      //echo $data;
                                     // for ($i = 0, $len = count($json_a); $i < $len;$i++) {
                                      //echo $json_a[$i]['id']."--srikanth--".$id;
                                      
                                       	 foreach ($json_a as $key => $value){
								              foreach ($value as $key => $val){
									                $z = $current_time+1;
									                $s1_time = $current_time."-".$z;
								               // $mark=1;
									                if($current_date == $json_a[0]['current_date']){
									                if($key == $s1_time){
								                  //$start_time = $start_time +1;
								                  		$count = $val;
								                	}  
								          			} 

								          			
								          }
                                       }

                                      //}

                                      $data1 = file_get_contents($file1);
                                        $json_a1 = json_decode($data1,true);
                                      //echo $data;
                                      foreach ($json_a1 as $key => $value){
								              foreach ($value as $key => $val){
									                $z = $current_time+1;
									                $s1_time = $current_time."-".$z;
								               // $mark=1;
									                if($current_date == $json_a1[0]['current_date']){
									                if($key == $s1_time){
								                  //$start_time = $start_time +1;
								                  		$count = $val;
								                	}  
								          			} 
								          }
                                       }

                                      $data2 = file_get_contents($file2);
                                        $json_a2 = json_decode($data2,true);
                                      //echo $data;
                                      foreach ($json_a2 as $key => $value){
								              foreach ($value as $key => $val){
									                $z = $current_time+1;
									                $s1_time = $current_time."-".$z;
								               // $mark=1;
									                if($current_date == $json_a2[0]['current_date']){
									                if($key == $s1_time){
								                  //$start_time = $start_time +1;
								                  		$count = $val;
								                	}  
								          			} 
								          }
                                       }

                                       $data3 = file_get_contents($file3);
                                       $json_a3 = json_decode($data3,true);
                                      //echo $data;
                                      foreach ($json_a3 as $key => $value){
								              //foreach ($value as $key => $val){
									             
								               // $mark=1;
								              	$member_price = $value['member_price'];
								              	$guest_price = $value['guest_price'];
									                
								          //}
                                       }

                                      echo"<div>There are currently <strong>".$count."</strong> available spots in our garage</div>";
							?>
					<!--		<div>There are currently <strong><?php //echo $count; ?></strong> available spots in our garage.</div> -->
					
					</div>
					<div class="module">
						<h4>Garage Pricing</h4>
						<ul id="price-plans">
							<li class="guest-price">
								<strong><?php echo $guest_price."/hr"; ?></strong>
								<div>Guest Price</div>
							</li>
							<li class="member-price">
								<strong><?php echo $member_price."/hr"; ?></strong>
								<div>Member Price</div>
							</li>
						</ul>
					</div>
					
					<div class="module">
						<h4>Note to Garage Users</h4>
						<ul id="price-plans">
							<li class="guest-price">
								<strong>1hr</strong>
								<div>Minimum Parking Time</div>
							</li>
							<li class="member-price">
								<strong>2DAYS</strong>
								<div>Prior Reservation Time</div>
							</li>
						</ul>
					</div>

				</div>
				<div id="sidebar">
					<div class="module">
						<h4 class="header">Sign in</h4>
						<form action="php/login.php" method="post" class="tabular">
							<div class="form-row">
								&nbsp;&nbsp;&nbsp;<input type="radio" name="check" value="User" />User
								&nbsp;&nbsp;&nbsp;<input type="radio" name="check" value="Admin" />Admin
							</div>
							<div class="form-row">
								<label for="email">Email</label>
								<input type="text" name="email" id="email" required/>
							</div>
							<div class="form-row">
								<label for="password">Password</label>
								<input type="password" name="password" id="password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required/>
							</div>
							<div class="form-row center">
								<input type="submit" name="login" value="Sign in" onClick="" />
							</div>
							<div class="form-row center">
								<li style="list-style: none;"><a href="forgot_password.php">forgot password</a></li>
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