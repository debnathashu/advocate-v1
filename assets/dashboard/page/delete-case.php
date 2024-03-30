<?php
	if(isset($_GET['id'])){
		$ID = $_GET['id'];
		$cases = $connection->query("select * from cases where id='$ID'");
		$row_cases = $cases->fetch_array(MYSQLI_BOTH);
	}
?>
<?php
	if(isset($_POST['del'])){
		$ID = $_POST['confirm'];
		$sql = $connection->query("delete from cases where id='$ID'");
		header('Location: dashboard.php?page=open-case');
	}
?>
<head>
	<?php include"assets/include/tag.php"; ?>
	<title>Delete Case | Adv Mahbub Alam | Lockers IT Solution</title>
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
	<!--sky form pro css-->
	<link href="sky-form/css/sky-forms.css" rel="stylesheet">
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
					<h4>Delete Case</h4>
				</div>
				<div class="col-sm-6 hidden-xs text-right">
					<ol class="breadcrumb">
						<li><a href="dashboard.php?page=home">Home</a></li>
						<li><a href="dashboard.php?page=<?php if($row_cases['status']=='active'){echo 'open-case';}else{echo 'closed-case';} ?>"><?php if($row_cases['status']=='active'){echo 'Open Case';}else{echo 'Closed Case';} ?></a></li>
						<li class="active">Delete</li>
					</ol>
				</div>
			</div>
		</div>
	</div><!--breadcrumbs-->
	<div class="divide80"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 margin30 sky-form-columns contact-sky-option">
				<form action="" method="post" id="sky-form" class="sky-form sky-form-columns">
					<fieldset>	
						<section>
							<div class="team-wrap">
								<h2><?php echo $row_cases['event']; ?></h2>
								<h1><font color="red"><i class="fa fa-warning"></i></font></h1>
								<h1><font color="gray">Are you sure?</font></h1>
								<h5><font color="gray">You will not be able to recover this imaginary file!</font></h5>
								<input type="checkbox" name="confirm" id="confirm" value="<?php echo $row_cases["id"]; ?>" required >Yes! I want to delect <?php echo $row_cases["event"]; ?>.
							</div><!--team-wrap-->
						</section>
					</fieldset>
					<footer>
						<a href="dashboard.php?page=<?php if($row_cases['status']=='active'){echo 'open-case';}else{echo 'closed-case';} ?>" class="btn btn-theme-bg btn-ico btn-lg"><i class="fa fa-reply"></i> Cancel</a>
						<button type="submit" name="del" id="del" class="btn btn-theme-bg btn-lg pull-right">Delete it!  <i class="fa fa-trash"></i></button>
					</footer>
					<div class="message">
						<i class="fa fa-check"></i>
						<p>Case delete successfully.</p>
						<p><a href="dashboard.php?page=<?php if($row_cases['status']=='active'){echo 'open-case';}else{echo 'closed-case';} ?>">Back to <?php if($row_cases['status']=='active'){echo 'Open Case';}else{echo 'Closed Case';} ?>.</a></p>
					</div>
				</form>					
			</div>
		</div>
	</div><!--contact advanced container end-->
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
	<!--sky form plugin js-->
	<script src="sky-form/js/jquery.form.min.js" type="text/javascript"></script>
	<script src="sky-form/js/jquery.validate.min.js" type="text/javascript"></script>
	<script src="js/sky-forms-custom.js" type="text/javascript"></script>
	<!--FaceBook-->
	<?php include"assets/include/facebook.php"; ?>
</body>