<?php
session_start();
/*
 date_default_timezone_set("Asia/Calcutta");
        //$user_name = $_SESSION['user_name'];
         $temp_date = date("Y-m-d H");
          $current_date = date("Y-m-d");
          //$dateplus1 = date('Y-m-d', strtotime('+1 day'));
          //$dateplus2 = date('Y-m-d', strtotime('+2 days'));
          $current_time = substr($temp_date, 11, 13);
 					$file2 = "../data/user_reserve.txt";
                    $data2 = file_get_contents($file2);
                    $json_a2 = json_decode($data2,true);            
                     for ($i = 0, $len = count($json_a); $i < $len;$i++) {
                                      //echo $json_a[$i]['id']."--srikanth--".$id;
                                      if($current_date == $json_a[$i]['arrival_date']){
                                        if($json_a[$i]['start_time'] + $json_a[$i]['duration'] <= $current_time){
                                            $json_a[$i]['status'] = "Already Completed";
                                          }
                                          else if($current_time > $json_a[$i]['start_time'] &&  $current_time < $json_a[$i]['start_time'] + $json_a[$i]['duration']){
                                            $json_a[$i]['status'] = "Active";
                                          }
                                          else if($json_a[$i]['start_time'] >= $current_time){
                                            $json_a[$i]['status'] = "Yet to Complete";
                                          }
                                          else{
                                           $json_a[$i]['status'] = "Unknown";
                                          }
                                       } //773
                                       else{
                                          $json_a[$i]['status'] = "Yet To Complete";
                                        }

                      }
                      $jsondata = json_encode($json_a2, JSON_PRETTY_PRINT);
                      if(file_put_contents($file2, $jsondata)){ 
                               echo 'Data successfully saved';//header("location:../base.html");
                        }//
                      else {
                           echo 'Sorry Data Not saved successfully in "data/users.txt"';
                         }      
*/


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
		<script language="JavaScript">
		  javascript:window.history.forward(1);
		</script>
		
	<body>			
		<div id="header-wrapper" class="wrapper">
			<div id="header" class="container">
				<a href="" id="logo"></a>
				<ul id="topnav" class="navbar clearfix">
					<li><a href="../php/logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
		
		<div id="main-wrapper" class="wrapper">
			<div id="main" class="container">
				<div id="wrap" class="clearfix">
					<div class="module">				
						<h4>Garage Administration</h4>
						<p><b>Welcome <?php echo $_SESSION["user_name"]; ?></b></p>
						<ul class="admin-options navbar clearfix">
							<li><a href="add.php">Add Managers</a></li>
							<li><a href="view.php">View Managers</a></li>
							<li><a href="price.php">Set Price Plan</a></li>
							<li><a href="registered.php">Registered Users Usage</a></li>
							<li><a href="walkin.php">Walkin Users Usage</a></li>
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