<?php require'connect.php'; ?>
<?php session_start(); ?>
<?php 
$profile = $connection->query("select * from profile where id='1'");
$row_profile = $profile->fetch_array(MYSQLI_BOTH);
?>
<?php
require('connection.php');
//connect edu
mysqli_select_db($connection, $database_connection);
$query_edu = "SELECT * FROM edu";
$edu = mysqli_query($connection, $query_edu) or die(mysqli_error());
$row_edu = mysqli_fetch_assoc($edu);
$totalRows_edu = mysqli_num_rows($edu);
$id = $row_edu["id"];
?>
<?php
	$settings = $connection->query("select * from settings where id='1'");
	$row_settings = $settings->fetch_array(MYSQLI_BOTH);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include"assets/include/tag.php"; ?>
	<title>Adv Mahbub Alam | Lockers IT Solution</title>
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
					<h4>About Me</h4>
				</div>
				<div class="col-sm-6 hidden-xs text-right">
					<ol class="breadcrumb">
						<li><a href="iindex.php">Home</a></li>
						<li class="active">About</li>
					</ol>
				</div>
			</div>
		</div>
	</div><!--breadcrumbs-->
	<div class="divide80"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<img src="assets/img/<?php echo $row_profile["proimage"]; ?>" class="img-responsive img-thumbnail" alt="">
			</div><!--team col-->
			<div class="col-md-9 margin20">
				<h3 class="heading">Advocate Mahbub Alam</h3>
				<ul class="list-unstyled highlight-list">
					<li><i class="fa fa-phone"></i> +880-<?php echo substr($row_profile['phone'], 1, 4); ?>-<?php echo substr($row_profile['phone'], 5, 10); ?></li>
					<li><i class="fa fa-envelope"></i> <?php echo $row_profile["email"]; ?></li>
					<li><i class="fa fa-map-marker"></i> <?php echo $row_profile["address"]; ?></li>
					<li><i class="fa fa-facebook"></i> <a href="http://fb.com/<?php echo $row_profile["facebook"]; ?>/" target="_blank"><?php echo $row_profile["facebook"]; ?></a></li>
					<li><i class="fa fa-globe"></i> <a href="http://advmahbub.com/" target="_blank">www.advmahbub.com</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="tabs-container">
					<div class="tabs-left">
						<ul class="nav nav-tabs">
							<li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"> Education</a></li>
							<li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">Work Experience</a></li>
						</ul>
						<div class="tab-content ">
							<div id="tab-1" class="tab-pane active">
								<?php do { ?>
									<h4><?php echo $row_edu['name']; ?><strong class="pull-right"><?php echo $row_edu['year']; ?></strong></h4>
									<strong><?php echo $row_edu['ins']; ?></strong>	
									<p>Result: <?php echo $row_edu['gread']; ?> <?php echo $row_edu['point']; ?></p>
								<?php } while ($row_edu = mysqli_fetch_assoc($edu)); ?>
							</div>
							<div id="tab-2" class="tab-pane">
								<strong>Donec quam felis</strong>
								<p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects
								and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath </p>
								<p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite
								sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet.</p>
							</div>
						</div>
					</div>
				</div>
			</div><!--column end-->
		</div>
	</div><!--team-->
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
