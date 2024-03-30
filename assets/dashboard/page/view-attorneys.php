<?php
require('connection.php');
//connect attorneys
mysqli_select_db($connection, $database_connection);
$query_attorneys = "SELECT * FROM attorneys";
$attorneys = mysqli_query($connection, $query_attorneys) or die(mysqli_error());
$row_attorneys = mysqli_fetch_assoc($attorneys);
$totalRows_attorneys = mysqli_num_rows($attorneys);
$id = $row_attorneys["id"];
?>
<head>
	<?php include"assets/include/tag.php"; ?>
	<title>View Attorneys | Adv Mahbub Alam | Lockers IT Solution</title>
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
					<h4>View Attorneys</h4>
				</div>
				<div class="col-sm-6 hidden-xs text-right">
					<ol class="breadcrumb">
						<li><a href="dashboard.php?page=home">Home</a></li>
						<li class="active">Attorneys</li>
					</ol>
				</div>
			</div>
		</div>
	</div><!--breadcrumbs-->
	<div class="divide80"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 margin20">
				<h3 class="center-heading">My Attorneys</h3>
			</div>
		</div>
		<div class="row">
			<?php do { ?>
				<div class="col-md-3 margin20">
					<div class="team-wrap">
						<img src="assets/img/attorneys/<?php echo $row_attorneys['proimage']; ?>" class="img-responsive" alt="<?php echo $row_attorneys['name']; ?>" title="<?php echo $row_attorneys['name']; ?>">
						<h4><?php echo $row_attorneys['name']; ?></h4>
						<span><?php echo $row_attorneys['position']; ?></span>
						<ul class="list-inline">
							<li>
								<a href="dashboard.php?page=update-attorneys&id=<?php echo $row_attorneys['id']; ?>" class="btn btn-theme-bg btn-ico btn-sm">Change <i class="fa fa-edit"></i></a>
							</li>
							<li>
								<a href="dashboard.php?page=delete-attorneys&id=<?php echo $row_attorneys['id']; ?>" class="btn btn-danger btn-ico btn-sm">Delete  <i class="fa fa-trash"></i></a>
							</li>
						</ul><!--social-->
					</div><!--team-wrap-->
				</div><!--team col-->
			<?php } while ($row_attorneys = mysqli_fetch_assoc($attorneys)); ?>
		</div>
	</div><!--team-->
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
	<!--FaceBook-->
	<?php include"assets/include/facebook.php"; ?>
</body>