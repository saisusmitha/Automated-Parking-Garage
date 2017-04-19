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
				<ul id="topnav" class="navbar clearfix" style="">
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
			<form action="php/update_password.php" method="post" class="tabular">
				<fieldset>
				<legend>Create a new password</legend>
				<div class="form-row">
					<label for="email">Email</label>
					<input type="text" name="email" id="email" value="" />
				</div>
				<div class="form-row">
					<label for="newPassword">New Password</label>
					<input type="password" name="newPassword" id="newPassword" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" value="" /><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span class="suggestion">1upper case,1lower case,1 special chrecter and minimum length 8</span>
				</div>
				<div class="form-row">
					<label for="newPassword1">Re-type Password</label>
					<input type="password" name="newPassword1" id="newPassword1" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" value="" />
				</div>
				<div class="form-row center">
					<input type="submit" name="submit" value="submit" />
				</div>
				</fieldset>
			</form>
		</div>
		</div>
		<div id="sidebar">
			<div class="how-to module">
				<h4>What do I do?</h4>
				<p>It's easy, just enter your email and set your new Password. </p>
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