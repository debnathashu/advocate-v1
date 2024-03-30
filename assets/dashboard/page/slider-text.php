<?php
	require'connect.php';
	if(isset($_POST['add'])){
		$s1t = $_POST['s1t'];
		$s1d = $_POST['s1d'];
		$s2t = $_POST['s2t'];
		$s2d = $_POST['s2d'];
		$s3t = $_POST['s3t'];
		$s3d = $_POST['s3d'];
		$sql = $connection->query("UPDATE slider set name='{$Name}', phone='{$Phone}', email='{$Email}', position='{$Position}', note='{$Details}', social1='{$Facebook}', social2='{$Twitter}', social3='{$Linkedin}' where id='$ID'");// value insert into database
		// $FIFileName = $_FILES['image']['tmp_name'];
		// $FIRealName = $_FILES['image']['name'];
		// if($FIRealName){
			// if (is_uploaded_file($FIFileName)){
				// if(move_uploaded_file($FIFileName, "img/attorneys/$FIRealName")) { 
					// $sql = $connection->query("INSERT INTO attorneys (name, phone, email, position, note, social1, social2, social3, proimage)Values('{$Name}', '{$Phone}', '{$Email}', '{$Position}', '{$Details}', '{$Facebook}', '{$Twitter}', '{$Linkedin}', '{$FIRealName}')");// value insert into database
				// }						
			// }
		// }
	}
?>
<head>
	<?php include"assets/include/tag.php"; ?>
	<title>Slider Text | Adv Mahbub Alam | Lockers IT Solution</title>
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
					<h4>Text</h4>
				</div>
				<div class="col-sm-6 hidden-xs text-right">
					<ol class="breadcrumb">
						<li><a href="dashboard.php?page=home">Home</a></li>
						<li class="active">Slider</li>
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
						<p class="margin30">Add Slider Text.</p>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">Slider 1 *</h4>
							</div>
							<div class="panel-body">
								<section>
									<label class="label">Titel</label>
									<label class="input">
										<i class="icon-append fa fa-bookmark"></i>
										<input type="text" name="s1t" id="s1t" placeholder="Enter Titel">
									</label>
								</section>
								<section>
									<label class="label">Details</label>
									<label class="textarea">
										<i class="icon-append fa fa-file-text"></i>
										<textarea rows="4" name="s1d" id="s1d"></textarea>
									</label>
								</section>
							</div>
						</div>
						<br>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">Slider 2 *</h4>
							</div>
							<div class="panel-body">
								<section>
									<label class="label">Titel</label>
									<label class="input">
										<i class="icon-append fa fa-bookmark"></i>
										<input type="text" name="s2t" id="s2t" placeholder="Enter Titel">
									</label>
								</section>
								<section>
									<label class="label">Details</label>
									<label class="textarea">
										<i class="icon-append fa fa-file-text"></i>
										<textarea rows="4" name="s2d" id="s2d"></textarea>
									</label>
								</section>
							</div>
						</div>
						<br>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">Slider 3 *</h4>
							</div>
							<div class="panel-body">
								<section>
									<label class="label">Titel</label>
									<label class="input">
										<i class="icon-append fa fa-bookmark"></i>
										<input type="text" name="s3t" id="s3t" placeholder="Enter Titel">
									</label>
								</section>
								<section>
									<label class="label">Details</label>
									<label class="textarea">
										<i class="icon-append fa fa-file-text"></i>
										<textarea rows="4" name="s3d" id="s3d"></textarea>
									</label>
								</section>
							</div>
						</div>
						<br>
					</fieldset>
					<footer>
						<button type="reset" class="btn btn-theme-bg btn-lg ">Reset</button>
						<button type="submit" name="add" id="add" class="btn btn-theme-bg btn-lg pull-right">Add</button>
					</footer>
					<div class="message">
						<i class="fa fa-check"></i>
						<p>New Attorneys successfully Added.</p>
						<p><a href="dashboard.php?page=view-attorneys">Back to view all Attorneys.</a></p>
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