<?php
	$parea = mysqli_num_rows($connection->query("select * from parea"));
	$attorneys = mysqli_num_rows($connection->query("select * from attorneys"));
	$literature = mysqli_num_rows($connection->query("select * from literature"));
	$lnews = mysqli_num_rows($connection->query("select * from lnews"));
	$message = mysqli_num_rows($connection->query("select * from message"));
	$case_active = mysqli_num_rows($connection->query("select * from cases where status='active'"));
	$case_inactive = mysqli_num_rows($connection->query("select * from cases where status='inactive'"));
?>
<head>
	<?php include"assets/include/tag.php"; ?>
	<title>Dashboard | Adv Mahbub Alam | Lockers IT Solution</title>
	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- font awesome for icons -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- flex slider css -->
	<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen">
	<!-- animated css  -->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="screen"> 
	<!-- Revolution Style-sheet -->
	<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css">
	<link rel="stylesheet" type="text/css" href="css/rev-style.css">
	<!--owl carousel css-->
	<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
	<link href="css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
	<!--mega menu -->
	<link href="css/yamm.css" rel="stylesheet" type="text/css">
	<!--cube css-->
	<link href="cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css">
	<!-- custom css-->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php include"assets/dashboard/top-bar-dark.php"; ?>
	<!--top-bar-dark end here-->
	<!--navigation -->
	<!-- Static navbar -->
	<?php include"assets/dashboard/navbar.php"; ?>
	<!--navbar-default-->
	<div class="breadcrumb-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h4>Dashboard</h4>
				</div>
				<div class="col-sm-6 hidden-xs text-right">
					<ol class="breadcrumb">
						<li><a href="dashboard.php?page=home">Home</a></li>
					</ol>
				</div>
			</div>
		</div>
	</div><!--breadcrumbs-->
	<div class="divide80"></div>
	<div class="container shortcodes">
		<div class="row">
			<div class="col-md-4 margin30">
				<!--<h4 class="margin30">মামলার সংক্ষিপ্ত বিবরণ:</h4>-->
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Practice Areas</h3>
					</div>
					<div class="panel-body">
						Total: <?php echo $parea; ?><br>
						<a href="dashboard.php?page=view-practice">See all...</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 margin30">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Attorneys</h3>
					</div>
					<div class="panel-body">
						Total: <?php echo $attorneys; ?><br>
						<a href="dashboard.php?page=view-attorneys">See all...</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 margin30">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Case</h3>
					</div>
					<div class="panel-body">
						Active: <?php echo $case_active; ?> | <a href="dashboard.php?page=open-case">See all...</a><br>
						Inactive: <?php echo $case_inactive; ?> | <a href="dashboard.php?page=closed-case">See all...</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 margin30">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Legal News</h3>
					</div>
					<div class="panel-body">
						Total: <?php echo $lnews; ?><br>
						<a href="dashboard.php?page=legal-news">See all...</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 margin30">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Literature</h3>
					</div>
					<div class="panel-body">
						Total: <?php echo $literature; ?><br>
						<a href="dashboard.php?page=view-literature">See all...</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 margin30">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Message</h3>
					</div>
					<div class="panel-body">
						Total: <?php echo $message; ?><br>
						<a href="dashboard.php?page=message">See all...</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="divide60"></div>
	<?php include"assets/dashboard/footer.php"; ?>
	<!--default footer end here-->
	<!--scripts and plugins -->
	<!--must need plugin jquery-->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate.min.js"></script> 
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
	<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="js/revolution-custom.js"></script>
	<!--cube portfolio plugin-->
	<script src="cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
	<script src="js/cube-portfolio.js" type="text/javascript"></script>
	<script src="js/pace.min.js" type="text/javascript"></script>
	<!--FaceBook-->
	<?php include"assets/include/facebook.php"; ?>
</body>