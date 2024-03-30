<?php
	if(isset($_GET['id'])){
		$ID = $_GET['id'];
		$message = $connection->query("select * from message where id='$ID'");
		$row_message = $message->fetch_array(MYSQLI_BOTH);
	}
?>
<head>
	<?php include"assets/include/tag.php"; ?>
	<title>Message | Adv Mahbub Alam | Lockers IT Solution</title>
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
					<h4>View Message</h4>
				</div>
				<div class="col-sm-6 hidden-xs text-right">
					<ol class="breadcrumb">
						<li><a href="dashboard.php?page=home">Home</a></li>
						<li><a href="dashboard.php?page=message">Message</a></li>
						<li class="active">Message Details</li>
					</ol>
				</div>
			</div>
		</div>
	</div><!--breadcrumbs-->
	<div class="divide80"></div>
	<div class="container shortcodes">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">Received Date & Time:</h4>
					</div>
					<div class="panel-body"><?php echo $row_message['date']; ?></div>
					<div class="panel-heading">
						<h4 class="panel-title">Name:</h4>
					</div>
					<div class="panel-body"><?php echo $row_message['name']; ?></div>
					<div class="panel-heading">
						<h4 class="panel-title">Email:</h4>
					</div>
					<div class="panel-body"><?php echo $row_message['email']; ?></div>
					<div class="panel-heading">
						<h4 class="panel-title">Phone:</h4>
					</div>
					<div class="panel-body"><?php echo $row_message['phone']; ?></div>
					<div class="panel-heading">
						<h4 class="panel-title">Subject:</h4>
					</div>
					<div class="panel-body"><?php echo $row_message['subject']; ?></div>
					<div class="panel-heading">
						<h4 class="panel-title">Message </h4>
					</div>
					<div class="panel-body"><?php echo $row_message['message']; ?></div>
				</div>
				<a href="dashboard.php?page=message" class="btn btn-theme-bg btn-lg">Back to message</a>
			</div>
		</div>
	</div>
	<div class="divide60"></div>
	<?php include"assets/dashboard/footer.php"; ?>
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
</body>