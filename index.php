<?php require'connect.php'; ?>
<?php session_start(); ?>
<?php
require('connection.php');
//connect attorneys
mysqli_select_db($connection, $database_connection);
$query_parea = "SELECT * FROM parea where location = 'index'";
$parea = mysqli_query($connection, $query_parea) or die(mysqli_error());
$row_parea = mysqli_fetch_assoc($parea);
$totalRows_parea = mysqli_num_rows($parea);
$id = $row_parea["id"];
?>
<?php
	$settings = $connection->query("select * from settings where id='1'");
	$row_settings = $settings->fetch_array(MYSQLI_BOTH);
?>
<?php
require('connection.php');
// cases PHP
	$maxRows_cases = 5;
	$pageNum_cases = 0;
	if (isset($_GET['pageNum_cases'])) {
		$pageNum_cases = $_GET['pageNum_cases'];
	}
	$startRow_cases = $pageNum_cases * $maxRows_cases;

	mysqli_select_db($connection, $database_connection);
	$query_cases = "SELECT * FROM cases where status = 'active' order by id DESC";
	$query_limit_cases = sprintf("%s LIMIT %d, %d", $query_cases, $startRow_cases, $maxRows_cases);
	$cases = mysqli_query($connection, $query_limit_cases) or die(mysqli_error());
	$row_cases = mysqli_fetch_assoc($cases);

	if (isset($_GET['totalRows_cases'])) {
		$totalRows_cases = $_GET['totalRows_cases'];
	} else {
		$all_cases = mysqli_query($connection, $query_cases);
		$totalRows_cases = mysqli_num_rows($all_cases);
	}
	$totalPages_cases = ceil($totalRows_cases/$maxRows_cases)-1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include"assets/include/tag.php"; ?>
	<title>Adv Mahbub Alam | Lockers IT Solution</title>
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
	<?php include"assets/include/top-bar-dark.php"; ?>
	<!--top-bar-dark end here-->
	<!--navigation -->
	<!-- Static navbar -->
	<?php include"assets/include/navbar.php"; ?>
	<!--navbar-default-->
	<!--rev slider start-->
	<?php include"assets/include/slider1.php"; ?>
	<!--revolution end-->
	<div class="divide60"></div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="center-heading">
					<h2>Experience</h2>
					<span class="center-line"></span>
					<p class="sub-text margin40"><?php echo $row_settings['exp']; ?></p>
				</div>
			</div>
		</div><!--center heading end-->
		<div class="divide30"></div>
	</div><!--services container-->
	<div class="intro-text-1 light">
		<div class="container">
			<div class="divide30"></div>
			<div class="row">
				<div class="center-heading">
					<h2>Services By Me</h2>
					<span class="center-line"></span>
				</div>
				<?php do { ?>
					<div class="col-md-4 margin30">
						<ul class="services-me list-unstyled">
							<li><a href="practice.php?id=<?php echo $row_parea['id']; ?>"><i class="fa fa-<?php echo $row_parea['icon']; ?>"></i> <?php echo $row_parea['name']; ?></a></li>
						</ul>
					</div><!--my services-->
				<?php } while ($row_parea = mysqli_fetch_assoc($parea)); ?>
				<div class="center-heading col-md-12">
					<a href="practice-area.php" class="btn btn-theme-bg btn-ico btn-lg">View More <i class="fa fa-search"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="divide60"></div>
		<div class="row">
			<div class="col-sm-12">
				<div class="center-heading">
					<h2>মামলার সংক্ষিপ্ত বিবরণ:</h2>
					<span class="center-line"></span>
				</div>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>পূর্ব তারিখ</th>
								<th>বাদী / বিবাদী</th>
								<th>পক্ষে</th>
								<th>পরবর্তী তারিখ</th>
								<th>ধার্য</th>
								<th>থানা</th>
								<th>মামলা নং</th>
								<th>আদালত</th>
							</tr>
						</thead>
						<tbody>
							<?php do { ?>
								<tr>
									<th scope="row"><?php echo $row_cases['fday']; ?></th>
									<td><?php echo $row_cases['badi']; ?></td>
									<td><?php echo $row_cases['side']; ?></td>
									<td><?php echo $row_cases['lday']; ?></td>
									<td><?php echo $row_cases['type']; ?></td>
									<td><?php echo $row_cases['thana']; ?></td>
									<td><?php echo $row_cases['event']; ?></td>
									<td><?php echo $row_cases['court']; ?></td>
								</tr>
							<?php } while ($row_cases = mysqli_fetch_assoc($cases)); ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="center-heading col-md-12">
				<a href="open-case.php" class="btn btn-theme-bg btn-ico btn-lg">View More <i class="fa fa-search"></i></a>
			</div>
		</div>
		<div class="divide30"></div>
	</div><!--services container-->
	<div class="blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 margin30">
					<div class="services-box wow animated fadeInDown">
						<div class="services-box-icon">
							<i class="pe-7s-diamond"></i>
						</div><!--services icon-->
						<div class="services-box-info">
							<h4><?php echo $row_settings['success']; ?>+ success case</h4>
							<p>I am very happy to complite all my cases by bles of Allah</p>
						</div>
					</div><!--service box-->
				</div>
				<div class="col-sm-6 ">
					<div class="services-box wow animated fadeInUp">
						<div class="services-box-icon">
							<i class="pe-7s-download"></i>
						</div><!--services icon-->
						<div class="services-box-info">
							<h4>Free Discuss & Solution</h4>
							<p>Get an appointment for free support.</p>
						</div>
					</div><!--service box-->
				</div>
			</div>
		</div>
	</div><!--full wide 2 columns content end-->
	<div class="intro-text-1 light">
		<div class="divide30"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h4 class="animated slideInDown">Advocate Mahbub Alam</h4>
					<p>Get an appointment to discuss about any case.</p>                   
				</div>
				<div class="col-sm-4">
					<a href="contact.php" class="btn border-theme btn-lg">Contact now</a>
				</div>
			</div>
		</div>
	</div> <!--intro text end-->
	<?php include"assets/include/footer.php"; ?>
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
</html>
