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
								<h4>Edit Reservation</h4>
								<?php
								if(isset($_GET['id']))
								{
									$id=$_GET['id'];
									/*
									if(isset($_POST['submit']))
									{
							          $ar_date = $_POST['arrival_date'];
							          $start_time = $_POST['start_time'];
							          $duration = $_POST['duration'];
									  $vehicle_id=$_POST['vehicle_id'];

									  $file = "../data/user_reserve.txt";

						              $data = file_get_contents($file);
						          //echo $data;
						             $json_a = json_decode($data,true);

						             for ($i = 0, $len = count($json_a); $i < $len; ++$i) {
						             	if($json_a[$i]['id'] == $id){
						             		$json_a[$i]['arrival_date'] = $ar_date;
						             		$json_a[$i]['start_time'] = $start_time;
						             		$json_a[$i]['duration'] = $duration;
						             		$json_a[$i]['vehicle_id'] = $vehicle_id;
						             		//$json_a[$i]['time_stamp'] = date("Y-m-d");

						             	}
									    
									}
									//file_put_contents('data.txt', json_encode($json_data));
						           
						            if(file_put_contents($file, $jsondata))
						            { 
						            	echo 'Data successfully saved';//header("location:../base.html");
						            	header('location:list.php');
						            }//
						            else {
						                echo 'Sorry Data Not saved successfully in "data/user_reserve.txt"';
						            }
						               
						             } */
						             date_default_timezone_set("Asia/Calcutta");
					                  $temp_date = date("Y-m-d H");
					                  $current_date = date("Y-m-d");
					                  $current_time = substr($temp_date, 11, 13);

					                  $dateplus1 = date('Y-m-d', strtotime('+1 day'));
                  					  $dateplus2 = date('Y-m-d', strtotime('+2 days'));
						            
						             $file = "../data/user_reserve.txt";

						              $data = file_get_contents($file);
						          //echo $data;
						             $json_a = json_decode($data,true);

						             for ($i = 0, $len = count($json_a); $i < $len;$i++) {
				                          //echo $json_a[$i]['id']."--srikanth--".$id;
				                          if($id == $json_a[$i]['id']){
				                            //echo $json_a[$i]['id']."--srikanth--".$id;
				                           $ar_date1 = $json_a[$i]['arrival_date'];
				                           $start_time1 = $json_a[$i]['start_time'];
				                           $duration1 = $json_a[$i]['duration'];
				                           $vehicle_id1 = $json_a[$i]['vehicle_id'];
				                          }
				                           //echo $ar_date1."-----".$start_time1."-----".$duration1."--------".$vehicle_id1;   
				                        }

						            if($ar_date1 == $current_date){
					                      //echo $current_date."----"."arrival". $ar_date1."<br/>";
					                       //echo $start_time1."----"."current". $current_time."<br/>";
					                      //$x = $start_time1-$current_time;
					                      //echo $x."<br/>";
					                  if($start_time1 - $current_time > 1){

						            	for ($i = 0, $len = count($json_a); $i < $len; ++$i) {
						             	if($json_a[$i]['id'] == $id){
						            
								?>
								<form action='edit1.php?id="<?php echo $id; ?>"' method="post" class="tabular">
									<div class="form-row">
										<label for="date">Date of arrival</label>
										<input type="text" name="arrival_date" id="datepicker" value="<?php echo $json_a[$i]['arrival_date']; ?>" />
										<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="suggestion">Please enter the date format in this order: yyyy-MM-dd</span>
									</div>
									<div class="form-row">
										<label for="time[hour]">Start time</label>
										<input type="text" id="time[hour]" name="start_time" value="<?php echo $json_a[$i]['start_time']; ?>"></input>
										<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="suggestion">Please enter the time in this format-- HH</span>
									</div>
									<div class="form-row">
										<label for="duration">Duration</label>
										<input type="text" name="duration" id="duration" value="<?php echo $json_a[$i]['duration']; ?>"></input>
										<span class="suggestion">1hr Minimum (hours)</span>
									</div>
									
									<div class="form-row">
										<label for="vehicle_id">Vehicle No</label>
										<input  type="text" name="vehicle_id" id="vehicle_id" value="<?php echo $json_a[$i]['vehicle_id']; ?>"></input>
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
										<input type="submit" value="Reserve Spot" name="submit"/>
									</div>
								</form>
								<?php
							} //105
						}	//104
					}	//102
					else{
						//header('location:list.php'); //popup that u have exceeded editing time Sorry

						?>
		        <script type="text/javascript"> 
		         location="list.php";                                                                                     
		         alert("Sorry  You can't Edit Now, You have exceeded editing time");                                                   
		         //header('location:../base.php');
		         </script>
		         <?php
					}
				} //97
				else if($ar_date1 == $dateplus1 || $ar_date1 == $dateplus2){
									for ($i = 0, $len = count($json_a); $i < $len; ++$i) {
						             if($json_a[$i]['id'] == $id){
						            
								?>
								<form action='edit1.php?id="<?php echo $id; ?>"' method="post" class="tabular">
									<div class="form-row">
										<label for="date">Date of arrival</label>
										<input type="text" name="arrival_date" id="datepicker" value="<?php echo $json_a[$i]['arrival_date']; ?>" />
										<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="suggestion">Please enter the date format in this order: yyyy-MM-dd</span>
									</div>
									<div class="form-row">
										<label for="time[hour]">Start time</label>
										<input type="text" id="time[hour]" name="start_time" value="<?php echo $json_a[$i]['start_time']; ?>"></input>
										<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="suggestion">Please enter the time in this format-- HH</span>
									</div>
									<div class="form-row">
										<label for="duration">Duration</label>
										<input type="text" name="duration" id="duration" value="<?php echo $json_a[$i]['duration']; ?>"></input>
										<span class="suggestion">1hr Minimum (hours)</span>
									</div>
									
									<div class="form-row">
										<label for="vehicle_id">Vehicle No</label>
										<input  type="text" name="vehicle_id" id="vehicle_id" value="<?php echo $json_a[$i]['vehicle_id']; ?>"></input>
										<span class="suggestion">most likely to arrive in</span>
									</div>
									
									<p class=" extra-info notice">Please Note: There is a 30 minute grace
										period given to every reservation made. If for some reason you do
										not show up for your reservation, you will still be charged for
										this 30 minutes. Be sure to cancel before hand if you cannot make it.
										<a href="#">Read more here</a>.
									</p>
									<div class="form-row center">
										<input type="submit" value="Reserve Spot" name="submit"/>
									</div>
								</form>
								<?php
							} //155
						}	//154

				}
				else{
					//header('location:list.php');
					?>
		        <script type="text/javascript"> 
		         location="list.php";                                                                                     
		         alert("Sorry You Can't edit now");                                                   
		         //header('location:../base.php');
		         </script>
		         <?php
				}
			} //34
								?>
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
