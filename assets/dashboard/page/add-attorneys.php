<?php
	require'connect.php';
	if(isset($_POST['add'])){
		$Name = $_POST['name'];
		$Position = $_POST['position'];
		$Phone = $_POST['phone'];
		$Email = $_POST['email'];
		$Facebook = $_POST['facebook'];
		$Twitter = $_POST['twitter'];
		$Linkedin = $_POST['linkedin'];
		$Details = $_POST['message'];
		$FIFileName = $_FILES['image']['tmp_name'];
		$FIRealName = $_FILES['image']['name'];
		if($FIRealName){
			if (is_uploaded_file($FIFileName)){
				if(move_uploaded_file($FIFileName, "img/attorneys/$FIRealName")) { 
					$sql = $connection->query("INSERT INTO attorneys (name, phone, email, position, note, social1, social2, social3, proimage)Values('{$Name}', '{$Phone}', '{$Email}', '{$Position}', '{$Details}', '{$Facebook}', '{$Twitter}', '{$Linkedin}', '{$FIRealName}')");// value insert into database
				}						
			}
		}
	}
?>
<head>
	<?php include"assets/include/tag.php"; ?>
	<title>Add New Attorneys | Adv Mahbub Alam | Lockers IT Solution</title>
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
					<h4>Add Attorneys</h4>
				</div>
				<div class="col-sm-6 hidden-xs text-right">
					<ol class="breadcrumb">
						<li><a href="dashboard.php?page=home">Home</a></li>
						<li><a href="dashboard.php?page=view-attorneys">All Attorneys</a></li>
						<li class="active">Add</li>
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
						<p class="margin30">Add New Attorneys On your Circle.</p>
						<section>
							<label class="label">Name *</label>
							<label class="input">
								<i class="icon-append fa fa-user"></i>
								<input type="text" name="name" id="name" placeholder="Enter name">
							</label>
						</section>
						<section>
							<label class="label">Position *</label>
							<label class="input">
								<i class="icon-append fa fa-bookmark"></i>
								<input type="text" name="position" id="position" placeholder="Enter position" required>
							</label>
						</section>
						<section>
							<label class="label">Phone *</label>
							<label class="input">
								<i class="icon-append fa fa-phone"></i>
								<input type="text" name="phone" id="phone" placeholder="Enter phone" required>
							</label>
						</section>
						<section>
							<label class="label">E-mail *</label>
							<label class="input">
								<i class="icon-append fa fa-envelope-o"></i>
								<input type="email" name="email" id="email" placeholder="Enter email">
							</label>
						</section>
						<section>
							<label class="label">Facebook</label>
							<label class="input">
								<i class="icon-append fa fa-facebook"></i>
								<input type="text" name="facebook" id="facebook" placeholder="Enter username">
							</label>
						</section>
						<section>
							<label class="label">Twitter</label>
							<label class="input">
								<i class="icon-append fa fa-twitter"></i>
								<input type="text" name="twitter" id="twitter" placeholder="Enter username">
							</label>
						</section>
						<section>
							<label class="label">Linkedin</label>
							<label class="input">
								<i class="icon-append fa fa-linkedin"></i>
								<input type="text" name="linkedin" id="linkedin" placeholder="Enter URL">
							</label>
						</section>
						<section>
							<label class="label">Profile Image *</label>
							<label class="input">
								<i class="icon-append fa fa-tag"></i>
								<input type="file" name="image" id="image" required><span>Must be 500x500 pixel.</span>
							</label>
						</section>
						<section>
							<label class="label">Details *</label>
							<label class="textarea">
								<i class="icon-append fa fa-comment"></i>
								<textarea rows="4" name="message" id="message"></textarea>
							</label>
						</section>
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