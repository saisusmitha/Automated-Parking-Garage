<?xml version="1.0" encoding="UTF-8"?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<base href="" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title>Home &ndash; Park a Lot</title>
		<meta name="description" content="Software Engineering Project" />
		<meta name="keywords" content="parking, garage, automation" />
		<link rel="stylesheet" type="text/css" href="media/css/style.css" media="screen, projection" />
		<!--[if IE]><link rel="stylesheet" type="text/css" href="media/css/ie.css" media="screen, projection" /><![endif]-->
		<!-- Vendor libraries -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js"></script>
		
		<script type="text/javascript" src="media/js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="media/js/common.js"></script>
		<script type="text/javascript" src="media/js/pay.js"></script>
		<style type="text/css">

		</style>
	</head>
	<body>
			<div id="header-wrapper" class="wrapper">
			<div id="header" class="container">
				<a href="" id="logo"></a>
				<ul id="topnav" class="navbar clearfix">
				<li><a href="base.php">Home</a></li>
				</ul>
			</div>
		</div>
		<div id="main-wrapper" class="wrapper">
			<div id="main" class="container">
				<div id="content">
					<div class="module">
						<h3 class="panel-title display-td" >Payment Details For Walk-in Customers </h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
					</div>
					<div class="module">
						<form action="php/proceed.php" method="post" class="tabular">
							<div class="form-row">
                                    <label for="">CARD NUMBER</label>
                     	
                                        <input 
                                            type="text"
                                            name="cardNumber"
                                            placeholder="Valid Card Number"
                                            autocomplete="cc-number"
                                            required autofocus 
                                        />
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    
                            </div>
                          
                            <div class="form-row">
                                    <label for=""><span class="">EXPIRATION</span>&nbsp;&nbsp;DATE</label>
                                    <input 
                                        type="text"  
                                        name="cardExpiry"
                                        placeholder="MM / YY"
                                        autocomplete="cc-exp" 
                                        required />
                            </div>
                            
                            <div class="form-row">
                                    <label for="">CV CODE</label>
                                    <input 
                                        type="text" 
                                        name="cardCVC"
                                        placeholder="CVC"
                                        autocomplete="cc-csc"
                                        required />
                            </div>

                            <div class="form-row center">
	                            <div class="col-xs-12">
	                                <button class="subscribe btn btn-success btn-lg btn-block" type="button">Proceed to Pay</button>
	                            </div>
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