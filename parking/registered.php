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
		
	<body>			
		<div id="header-wrapper" class="wrapper">
			<div id="header" class="container">
				<a href="" id="logo"></a>
				<ul id="topnav" class="navbar clearfix">
					<li><a href="park_walkin.php">Home</a></li>
					<li><a href="walkin.php">Walkin Users History</a></li>
					<li><a href="php/logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
		
		<div id="main-wrapper" class="wrapper">
			<div id="main" class="container">
				<div id="wrap" class="clearfix">
					<div class="module">
						
						<?php 
								   date_default_timezone_set("Asia/Calcutta");
				                  //$temp_date = date("Y-m-d H");
				                   $current_date = date("Y-m-d");
				                  //$current_time = substr($temp_date, 11, 13);
								   //echo "<h4>Reservations Done By The Registered Users </h4>";
				                   $file = "data/user_reserve.txt";
				                   $file3 = "data/price_plan.txt";


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

                                       $data = file_get_contents($file);
                                   		$json_a = json_decode($data,true);   
                                      $tally = 0;
                                      for ($i = 0, $len = count($json_a); $i < $len;$i++) {
                                      //echo $json_a[$i]['id']."--srikanth--".$id;
                                      //if($current_date == $json_a[$i]['arrival_date']){
                                        //echo $json_a[$i]['id']."--srikanth--".$id;
                                        //echo "Hiii333222";
                                        //echo "<hr/>";
                                        
                                        $tally +=$json_a[$i]['duration']*$member_price;
                                       
                                        
                                      //}
                                      }

                                       echo "<h4>Reservations Done By The Registered Users &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;               Total Revenue:".$tally." </h4>";


				                   $data = file_get_contents($file);
                                   $json_a = json_decode($data,true);
                                      //echo $data;
                                     // for ($i = 0, $len = count($json_a); $i < $len;$i++) {
                                      //echo $json_a[$i]['id']."--srikanth--".$id;
                                      
                                      
                                      for ($i = 0, $len = count($json_a); $i < $len;$i++) {
                                      //echo $json_a[$i]['id']."--srikanth--".$id;
                                      //if($current_date == $json_a[$i]['arrival_date']){
                                        //echo $json_a[$i]['id']."--srikanth--".$id;
                                        //echo "Hiii333222";
                                        //echo "<hr/>";
                                        echo "<span>User Name: <b>".$json_a[$i]['user_name']."</b></span><br/>";
                                        echo "<span>Start Time(hours): <b>".$json_a[$i]['start_time']."</b></span><br/>";
                                        echo "<span>Duration(hours): <b>".$json_a[$i]['duration']."</b></span><br/>";
                                        echo "<span>Vehicle No: <b>".$json_a[$i]['vehicle_id']."</b></span><br/>";
                                        echo "<span>Tally: <b>".$json_a[$i]['duration']*$member_price."</b></span><br/>";
                                        echo "<span>Reserved Date: <b>".$json_a[$i]['arrival_date']."</b></span><br/><br/>";
                                        echo "<hr/>";
                                        
                                      //}
                                      }

						?>				
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