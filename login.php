<?php require'connect.php'; ?>
<?php session_start(); ?>
<?php
	if(isset($_SESSION["UI"])){
		header('Location: dashboard.php?page=home');
	}
?>
<?php
	$settings = $connection->query("select * from settings where id='1'");
	$row_settings = $settings->fetch_array(MYSQLI_BOTH);
?>
<?php
if(isset($_POST['login'])){
	$Username = $_POST['username'];
	$Password = $_POST['password'];
	
	$result = $connection->query("select * from user where (username='$Username' AND password='$Password') OR (email='$Username' AND password='$Password')");
	$row = $result->fetch_array(MYSQL_BOTH);
	
	session_start();
	$_SESSION["UI"] = $row['id'];
	$_SESSION["Name"] = $row["name"];
	$_SESSION["usertype"] = $row["usertype"];
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include"assets/include/tag.php"; ?>
	<title>Login | Adv Mahbub Alam | Lockers IT Solution</title>
	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- custom css (blue color by default) -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
	<!-- font awesome for icons -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- flex slider css -->
	<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
	<!-- animated css  -->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="screen">
	<!--owl carousel css-->
	<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
	<link href="css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
	<!--mega menu -->
	<link href="css/yamm.css" rel="stylesheet" type="text/css">
	<!--popups css-->
	<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php include"assets/include/top-bar-dark.php"; ?>
	<!--top-bar-dark end here-->
	<!--navigation -->
	<!-- Static navbar -->
	<?php include"assets/include/navbar.php"; ?>
	<!--navbar-default-->
	<div class="breadcrumb-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h4>Login To Your Account</h4>
				</div>
				<div class="col-sm-6 hidden-xs text-right">
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">Login</li>
					</ol>
				</div>
			</div>
		</div>
	</div><!--breadcrumbs-->
	<div class="divide80"></div>
	<div class="container">
		<div class="row">  
			<div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
				<div class="login-form">
					<h3>Log In</h3>
					<form role="form" method="post">
						<?php
							// if(isset($_POST['login'])){
								// echo $mess;
							// }
						?>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" name="username" id="username" placeholder="Enter username" required>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
						</div>                   
						<div class="checkbox">
							<label><input type="checkbox"> Remember Me</label>
						</div>
						<button type="submit" name="login" id="login" class="btn btn-theme-bg">Login</button>
						<a href="forget-password.php">Forget Password?</a>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="divide60"></div>
	<?php include"assets/include/footer.php"; ?>
	<!--default footer end here-->
	<!--scripts and plugins -->
	<!--must need plugin jquery-->
	<script src="js/jquery.min.js"></script>        
	<!--bootstrap js plugin-->
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>       
	<!--easing plugin for smooth scroll-->
	<script src="js/jquery.easing.1.3.min.js" type="text/javascript"></script>
	<!--sticky header-->
	<script type="text/javascript" src="js/jquery.sticky.js"></script>
	<!--flex slider plugin-->
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<!--parallax background plugin-->
	<script src="js/jquery.stellar.min.js" type="text/javascript"></script>
	<!--digit countdown plugin-->
	<script src="js/waypoints.min.js"></script>
	<!--digit countdown plugin-->
	<script src="js/jquery.counterup.min.js" type="text/javascript"></script>
	<!--on scroll animation-->
	<script src="js/wow.min.js" type="text/javascript"></script> 
	<!--owl carousel slider-->
	<script src="js/owl.carousel.min.js" type="text/javascript"></script>
	<!--popup js-->
	<script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
	<!--you tube player-->
	<script src="js/jquery.mb.YTPlayer.min.js" type="text/javascript"></script>
	<!--customizable plugin edit according to your needs-->
	<script src="js/custom.js" type="text/javascript"></script>
	<!--FaceBook-->
	<?php include"assets/include/facebook.php"; ?>
</body>
</html>
