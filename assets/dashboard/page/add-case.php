<?php
	require'connect.php';
	if(isset($_POST['add'])){
		$Fday = $_POST['fday'];
		$Badi = $_POST['badi'];
		$Side = $_POST['side'];
		$Lday = $_POST['lday'];
		$Type = $_POST['type'];
		$Thana = $_POST['thana'];
		$Event = $_POST['event'];
		$Court = $_POST['court'];
		$Details = $_POST['details'];
		$Status = $_POST['status'];
		$sql = $connection->query("INSERT INTO cases (fday, badi, side, lday, type, thana, event, court, details, status)Values('{$Fday}', '{$Badi}', '{$Side}', '{$Lday}', '{$Type}', '{$Thana}', '{$Event}', '{$Court}', '{$Details}', '{$Status}')");// value insert into database
	}
?>
<head>
	<?php include"assets/include/tag.php"; ?>
	<title>Add New Case | Adv Mahbub Alam | Lockers IT Solution</title>
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
					<h4>Add New Case</h4>
				</div>
				<div class="col-sm-6 hidden-xs text-right">
					<ol class="breadcrumb">
						<li><a href="dashboard.php?page=home">Home</a></li>
						<li><a href="dashboard.php?page=open-case">Open Case</a></li>
						<li class="active">Add Case</li>
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
						<p class="margin30">Add New Case On your List.</p>
						<section>
							<label class="label">পূর্ব তারিখ  *</label>
							<label class="input">
								<i class="icon-append fa fa-calendar"></i>
								<input type="text" name="fday" id="fday" placeholder="তারিখ" required>
							</label>
						</section>
						<section>
							<label class="label">বাদী / বিবাদী *</label>
							<label class="input">
								<i class="icon-append fa fa-user"></i>
								<input type="text" name="badi" id="badi" placeholder="নাম" required>
							</label>
						</section>
						<section>
							<label class="label">পক্ষে *</label>
							<label class="input">
								<i class="icon-append fa fa-tag"></i>
								<input type="text" name="side" id="side" placeholder="পক্ষে" required>
							</label>
						</section>
						<section>
							<label class="label">পরবর্তী তারিখ *</label>
							<label class="input">
								<i class="icon-append fa fa-calendar"></i>
								<input type="text" name="lday" id="lday" placeholder="তারিখ" required>
							</label>
						</section>
						<section>
							<label class="label">ধার্য *</label>
							<label class="input">
								<i class="icon-append fa fa-bookmark"></i>
								<input type="text" name="type" id="type" placeholder="ওয়ারেন্ট" required>
							</label>
						</section>
						<section>
							<label class="label">থানা *</label>
							<label class="input">
								<i class="icon-append fa fa-twitter"></i>
								<input type="text" name="thana" id="thana" placeholder="থানার নাম" required>
							</label>
						</section>
						<section>
							<label class="label">মামলা নং *</label>
							<label class="input">
								<i class="icon-append fa fa-anchor"></i>
								<input type="text" name="event" id="event" placeholder="মামলা নং" required>
							</label>
						</section>
						<section>
							<label class="label">আদালত</label>
							<label class="input">
								<i class="icon-append fa fa-legal"></i>
								<input type="text" name="court" id="court" placeholder="আদালাত এর নাম" required>
							</label>
						</section>
						<section>
							<label class="label">বর্ণনা *</label>
							<label class="textarea">
								<i class="icon-append fa fa-comment"></i>
								<textarea rows="4" name="details" id="details"></textarea>
							</label>
						</section>
						<section>
							<label class="label">আবস্থা *</label>
							<input type="radio" name="status" value="active" required> খোলা<br>
							<input type="radio" name="status" value="inactive"> বন্ধ
						</section>
					</fieldset>
					<footer>
						<button type="reset" class="btn btn-theme-bg btn-lg ">Reset</button>
						<button type="submit" name="add" id="add" class="btn btn-theme-bg btn-lg pull-right">Add</button>
					</footer>
					<div class="message">
						<i class="fa fa-check"></i>
						<p>New Case successfully Added.</p>
						<p><a href="dashboard.php?page=open-case">Back to view Open Case.</a></p>
						<p><a href="dashboard.php?page=closed-case">Back to view Closed Case.</a></p>
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