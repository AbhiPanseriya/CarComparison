	<script type="text/javascript" src="http://www.carqueryapi.com/js/jquery.min.js"></script>
    <script type="text/javascript" src="http://www.carqueryapi.com/js/carquery.0.3.4.js"></script>
	<script type="text/javascript" src="./js/cardb.js"></script>

	<script id="gs-sdk" src='//www.buildquickbots.com/botwidget/v3/demo/static/js/sdk.js?v=3' key="21cacc37-4ce0-4d16-b694-2b1e76c08a65" ></script>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
<?php
session_start(); 
$conn = mysqli_connect("localhost:3307", "root", "","carcompare");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>

<!DOCTYPE html>
<html >
	<head>
		<title>Car comparison System</title>
  		
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CLato:300,400" rel="stylesheet"> 
		
		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Owl Carousel -->
		<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
		<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />
		
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>



		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body onload="myFunction()">
	
		<!-- Header -->
		<header id="header">
			<!-- Top Header -->
			<div id="top-header">
				<div class="container">
					<div class="header-social">
						<ul>
							<li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.plus.google.com"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
							<li><a href="https://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Top Header -->
			
			<!-- Center Header -->
			<!--<div id="center-header" width="100%">
					<div class="container">
					<div class="header-logo">
						<a href="#" class="logo"><img src="./img/logo.png" height="150px" width="150px" alt=""></a>
					</div>
				</div>
			</div>-->
			<!-- /Center Header -->
			
			<!-- Nav Header -->
			<div id="nav-header" width="100%">
				<div class="container">
					<nav id="main-nav">
						
						<ul class="main-nav nav navbar-nav">
							<li style="margin-top:-6; margin-left: -70">
							<a href="#" class="logo"><img src="./img/logo.png" height="50px" width="50px" alt=""></a>
							</li> 
							<li class="active"><a href="./home.php">Home</a></li>
							<li ><a href="./search.php">Search</a></li>
							<li><a href="./compare.php">Compare</a></li>
							<li><a href="./about_us.php">About Us</a></li>
							<li><a href="./contact_us.php">Contact Us</a></li>
							<?php if(isset($_SESSION['pass']))
							{?>
								<li><a href="./post.php">POST</a></li>
									<?php if(isset($_SESSION['logintype']))
									{?>
										<li><a href="./admin.php">Manage User</a></li>								
										<li ><a href="./logout.php" name="submit" value="logout" ><i class="fa fa-sign-in"></i> Logout</a></li>
									<?php }
									else 
								    {?>
									    <li><a href="./profile.php">Profile</a></li>
			    						<li ><a href="./logout.php" name="submit" value="logout" ><i class="fa fa-sign-in"></i> Logout</a></li>	
								 	<?php } 
   							}
   							else{
   							?>
   							<li ><a href="./login.php" name="submit" value="login" ><i class="fa fa-sign-in"></i> Login</a></li>
							<?php } ?>
						</ul>

					</nav>
					
				</div>
			</div>
			<!-- /Nav Header -->
		</header>
		<!-- /Header -->
		
	