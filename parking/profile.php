<?php
session_start();
/*
if(isset($_SESSION['user_name'])){
    header('location:profile.php');
} */

if(!isset($_SESSION['user_name'])){
    header('location:base.php');
}

?>

<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<base href="" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title>Park a Lot</title>
		<meta name="description" content="Rutgers Software Engineering Project (Spring 2011)" />
		<meta name="keywords" content="parking, garage, automation" />
<!--
		<meta Http-Equiv="Cache-Control" Content="no-cache">
		<meta Http-Equiv="Pragma" Content="no-cache">
		<meta Http-Equiv="Expires" Content="0"> 
-->
		<link rel="stylesheet" type="text/css" href="media/css/style.css" media="screen, projection" />
		<!--[if IE]><link rel="stylesheet" type="text/css" href="media/css/ie.css" media="screen, projection" /><![endif]-->
		<script type="text/javascript" src="media/js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="media/js/common.js"></script>
		<SCRIPT LANGUAGE="JavaScript">

		<!-- //Begin
		function day_title(day_name) {
		document.write("<TD ALIGN=center WIDTH=35>"+day_name+"</TD>")
		}
		function hilite_today(day,mm) {
		if ((this_day == day) && (this_month == mm))
		document.write("<FONT COLOR=\"#FF0000\">")
		}
		function makeArray(n) {
		this.length=n;
		for (var i = 1; i <= n; i++)
		this[i] = 0
		return this
		}
		function fill_table(m_name,m_length,mm) {
		day=1
		document.write("<center><TABLE BORDER=3 CELLSPACING=3 CELLPADDING=%3><TR>")
		document.write("<TD COLSPAN=7 ALIGN=center><B>"+m_name+"   "+this_year+"</B><TR>")
		day_title("Sun")
		day_title("Mon")
		day_title("Tue")
		day_title("Wed")
		day_title("Thu")
		day_title("Fri")
		day_title("Sat")
		document.write("</TR><TR>")
		for (var i=1;i<start_day;i++) {
		document.write("<TD>")
		}
		for (var i=start_day;i<8;i++) {
		document.write("<TD ALIGN=center>")
		hilite_today(day,mm)
		document.write(day+"</TD><FONT COLOR='#000000'>")
		day++
		}
		document.write("<TR>")
		while (day <= m_length) {
		for (var i=1;i<=7 && day<=m_length;i++) {
		document.write("<TD ALIGN=center>")
		hilite_today(day,mm)
		document.write(day+"</TD><FONT COLOR='#000000'>")
		day++
		}
		document.write("</TR><TR>")
		}
		document.write("</TR></TABLE></center><BR>")
		start_day = i
		}
		// End -->
		</SCRIPT>

		<script language="JavaScript">
		  javascript:window.history.forward(1);
		</script>

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
				<div id="wrap" class="clearfix">
					<div id="content">
						<h4>Upcoming Reservations</h4>
						<SCRIPT LANGUAGE="JavaScript">
						month=new makeArray(12)
						month[1]="January"
						month[2]="February"
						month[3]="March"
						month[4]="April"
						month[5]="May"
						month[6]="June"
						month[7]="July"
						month[8]="August"
						month[9]="September"
						month[10]="October"
						month[11]="November"
						month[12]="December"
						month_length = new makeArray(12)
						month_length[1]=31
						month_length[2]=28
						month_length[3]=31
						month_length[4]=30
						month_length[5]=31
						month_length[6]=30
						month_length[7]=31
						month_length[8]=31
						month_length[9]=30
						month_length[10]=31
						month_length[11]=30
						month_length[12]=31
						today = new Date()
						this_day = today.getDate()
						this_month = today.getMonth()+1
						this_year = today.getYear();
						if (this_year < 2000)    // Y2K Fix, Isaac Powell
						this_year = this_year + 1900; // http://onyx.idbsu.edu/~ipowell
						begin_date = new Date("January 1, 19"+this_year)
						start_day = begin_date.getDay()+1
						if (start_day == 1){ 
						start_day = 8
						}
						for (var m = 1;m<=12;m++){
						fill_table(month[m],month_length[m],m)
						}
						// End -->
						</SCRIPT>
						<a class="more" href="reservation/list.php">View All</a>
					</div>
					<div id="sidebar">
						<div class="module">
							<h4><?php echo "Mr/Ms. ".$_SESSION["user_name"]; ?></h4>
							<ul class="strip">
								<li>Member since: <?php echo $_SESSION["time_stamp"]; ?></li>
								<?php 
								$file = "data/user_reserve.txt";
								$count=0;
								if (!is_file($file) xor !is_readable($file)) {
								    trigger_error("File Not readable");
								    echo json_encode(array("login"=>"EDE"));
								}


								$data = file_get_contents($file);
								$json_a = json_decode($data,true);

								foreach ($json_a as $key => $value){
								//echo "hii";
								    if($_SESSION["email"] == $value["email"]){
								  //    echo "hii11"; 
								               $count++;
								    }
								}


								?>
								<li>Total reservations: <?php echo $count; ?> </li>
								<?php

								$file = "data/user_reserve.txt";
								//$count=0;
								if (!is_file($file) xor !is_readable($file)) {
								    trigger_error("File Not readable");
								    echo json_encode(array("login"=>"EDE"));
								}


								$data = file_get_contents($file);
								$json_a = json_decode($data,true);
								$tally1 = 0;
								foreach ($json_a as $key => $value){
								//echo "hii";
								    if($_SESSION["email"] == $value["email"]){
								 	$tally1 = $tally1 + $value['duration'];
								    }
								}

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

								?>
								<li>Current tally: <?php $tally = $tally1 * $member_price; echo $tally; ?> 
								<a class="more" style="margin-left: 0px;" href="reservation/pay.php">Pay</a> </li>
							</ul>
							<hr />
							<dl>
								<dt>Reservations</dt>
								<dd><a href="reservation/list.php">List all reservations</a></dd>
								<dd><a href="reservation/create.php">Create a new reservation</a></dd>
								<dt>Vehicles</dt>
								<dd><a href="vehicle/list.php">List all vehicles</a></dd>
							</dl>
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