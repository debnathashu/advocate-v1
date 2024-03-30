<?php
require('connection.php');
//connect attorneys
mysqli_select_db($connection, $database_connection);
$query_lnews = "SELECT * FROM lnews";
$lnews = mysqli_query($connection, $query_lnews) or die(mysqli_error());
$row_lnews = mysqli_fetch_assoc($lnews);
$totalRows_lnews = mysqli_num_rows($lnews);
$id = $row_lnews["id"];
?>
<head>
	<?php include"assets/include/tag.php"; ?>
	<title>View Legal News | Adv Mahbub Alam | Lockers IT Solution</title>
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
					<h4>View Legal News</h4>
				</div>
				<div class="col-sm-6 hidden-xs text-right">
					<ol class="breadcrumb">
						<li><a href="dashboard.php?page=home">Home</a></li>
						<li class="active">All Legal News</li>
					</ol>
				</div>
			</div>
		</div>
	</div><!--breadcrumbs-->
	<div class="divide80"></div>
	<div class="blog-masonary-wrapper">
		<div class="container mas-boxes">
			<?php do { ?>
				<div class="mas-boxes-inner">
					<img src="assets/img/legal-news/<?php echo $row_lnews['image']; ?>" alt="<?php echo $row_lnews['name']; ?>" class="img-responsive">
					<div class="mas-blog-inner">
						<h3><a href="view-legal-news.php?id=<?php echo $row_lnews['id']; ?>" target="_blank"><?php echo $row_lnews['name']; ?></a></h3>
						<ul class="list-inline post-detail">
							<li>by <a href="#"><?php echo $row_lnews['posted']; ?></a></li>
							<li><i class="fa fa-calendar"></i> <?php echo $row_lnews['date']; ?></li>                            
						</ul>
						<p><?php echo substr($row_lnews['news'], 0, 150); ?> . . .</p>
						<ul class="list-inline">
							<li>
								<a href="dashboard.php?page=update-legal-news&id=<?php echo $row_lnews['id']; ?>" class="btn btn-theme-bg btn-ico btn-sm pull-left">Change <i class="fa fa-edit"></i></a>
							</li>
							<li>
								<a href="dashboard.php?page=delete-legal-news&id=<?php echo $row_lnews['id']; ?>" class="btn btn-danger btn-ico btn-sm pull-right">Delete  <i class="fa fa-trash"></i></a>
							</li>
						</ul><!--social-->
					</div><!--blog inner-->
				</div>
			<?php } while ($row_lnews = mysqli_fetch_assoc($lnews)); ?>
		</div>
		<!--
		<div class="container">
			<ul class="pager">
				<li class="previous"><a href="#">← Previous Page</a></li>
				<li class="next"><a href="#">Next Page →</a></li>
			</ul>
		</div>
		-->
	</div><!--masonary wrapper-->
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
	<!--masonary js-->
	<script src="js/jquery.masonry.min.js" type="text/javascript"></script>
	<!--you tube player-->
	<script src="js/jquery.mb.YTPlayer.min.js" type="text/javascript"></script>       
	<!--customizable plugin edit according to your needs-->
	<script src="js/custom.js" type="text/javascript"></script>
	<script src="js/masonary-custom.js" type="text/javascript"></script>
	<!--FaceBook-->
	<?php include"assets/include/facebook.php"; ?>
</body>