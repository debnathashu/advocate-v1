<?php require'connect.php'; ?>
<?php session_start(); ?>
<?php
	if(isset($_GET['id'])){
		$ID = $_GET['id'];
		$lnews = $connection->query("select * from lnews where id='$ID'");
		$row_lnews = $lnews->fetch_array(MYSQLI_BOTH);
	}
?>
<?php
	$settings = $connection->query("select * from settings where id='1'");
	$row_settings = $settings->fetch_array(MYSQLI_BOTH);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include"assets/include/tag.php"; ?>
	<title><?php echo $row_lnews['name']; ?> | Legal News | Adv Mahbub Alam | Lockers IT Solution</title>
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
				<div class="col-sm-8">
					<h4><?php echo $row_lnews['name']; ?></h4>
				</div>
				<div class="col-sm-4 hidden-xs text-right">
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li><a href="legal-news.php">Legal News</a></li>
						<li class="active">View Legal News</li>
					</ol>
				</div>
			</div>
		</div>
	</div><!--breadcrumbs-->
	<div class="divide80"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div id="testi-carousel" class="owl-carousel owl-spaced">
					<div>
						<img src="assets/img/legal-news/<?php echo $row_lnews['image']; ?>" class="img-responsive" alt="">
					</div>
				</div>
			</div>
		</div><!--img slide row-->
		<div class="divide35"></div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="project-detail">
					<h3><?php echo $row_lnews['name']; ?></h3>
					<ul class="list-inline post-detail">
						<li>by <a href="#"><?php echo $row_lnews['posted']; ?></a></li>
						<li><i class="fa fa-calendar"></i> <?php echo $row_lnews['date']; ?></li>                            
					</ul>
					<br>
					<p>
						<?php echo $row_lnews['news']; ?>
					</p>
					<hr>
					<div class="divide30"></div>
					<div class="col-sm-10">
						<h4 class="animated slideInDown">Advocate Mahbub Alam</h4>
						<p>Get an appointment to discuss about any case.</p>                   
					</div>
					<div class="col-sm-2">
						<a href="contact.php" class="btn border-theme btn-lg">Contact now</a>
					</div>
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