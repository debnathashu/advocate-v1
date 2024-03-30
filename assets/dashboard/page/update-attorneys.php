<?php
	if(isset($_GET['id'])){
		$ID = $_GET['id'];
		$attorneys = $connection->query("select * from attorneys where id='$ID'");
		$row_attorneys = $attorneys->fetch_array(MYSQLI_BOTH);
	}
?>
<?php
	if(isset($_POST['change'])){
		$ID = $_POST['confirm'];
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
				if(move_uploaded_file($FIFileName, "assets/img/attorneys/$FIRealName")) { 
					$sql = $connection->query("UPDATE attorneys set name='{$Name}', phone='{$Phone}', email='{$Email}', position='{$Position}', note='{$Details}', social1='{$Facebook}', social2='{$Twitter}', social3='{$Linkedin}', proimage='{$FIRealName}' where id='$ID'");// value insert into database
				}						
			}
		}else{
			$sql = $connection->query("UPDATE attorneys set name='{$Name}', phone='{$Phone}', email='{$Email}', position='{$Position}', note='{$Details}', social1='{$Facebook}', social2='{$Twitter}', social3='{$Linkedin}' where id='$ID'");// value insert into database
		}
	}
?>
<head>
	<?php include"assets/include/tag.php"; ?>
	<title>Update Attorneys | Adv Mahbub Alam | Lockers IT Solution</title>
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
					<h4>Update Attorneys</h4>
				</div>
				<div class="col-sm-6 hidden-xs text-right">
					<ol class="breadcrumb">
						<li><a href="dashboard.php?page=home">Home</a></li>
						<li><a href="dashboard.php?page=view-attorneys">View More Attorneys</a></li>
						<li class="active">Update</li>
					</ol>
				</div>
			</div>
		</div>
	</div><!--breadcrumbs-->
	<div class="divide80"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2 margin30 sky-form-columns contact-sky-option">
				<form method="post" class="sky-form sky-form-columns">
					<fieldset>	
						<p class="margin30">Update Attorneys Name: <?php echo $row_attorneys['name']; ?></p>
						<section>
							<label class="label">Name *</label>
							<label class="input">
								<i class="icon-append fa fa-user"></i>
								<input type="text" name="name" id="name" value="<?php echo $row_attorneys['name']; ?>">
							</label>
						</section>
						<section>
							<label class="label">Position *</label>
							<label class="input">
								<i class="icon-append fa fa-bookmark"></i>
								<input type="text" name="position" id="position" value="<?php echo $row_attorneys['position']; ?>" required>
							</label>
						</section>
						<section>
							<label class="label">Phone *</label>
							<label class="input">
								<i class="icon-append fa fa-phone"></i>
								<input type="text" name="phone" id="phone" value="<?php echo $row_attorneys['phone']; ?>" required>
							</label>
						</section>
						<section>
							<label class="label">E-mail *</label>
							<label class="input">
								<i class="icon-append fa fa-envelope-o"></i>
								<input type="email" name="email" id="email" value="<?php echo $row_attorneys['email']; ?>">
							</label>
						</section>
						<section>
							<label class="label">Facebook</label>
							<label class="input">
								<i class="icon-append fa fa-facebook"></i>
								<input type="text" name="facebook" id="facebook" value="<?php echo $row_attorneys['social1']; ?>">
							</label>
						</section>
						<section>
							<label class="label">Twitter</label>
							<label class="input">
								<i class="icon-append fa fa-twitter"></i>
								<input type="text" name="twitter" id="twitter" value="<?php echo $row_attorneys['social2']; ?>">
							</label>
						</section>
						<section>
							<label class="label">Linkedin</label>
							<label class="input">
								<i class="icon-append fa fa-linkedin"></i>
								<input type="text" name="linkedin" id="linkedin" value="<?php echo $row_attorneys['social3']; ?>">
							</label>
						</section>
						<section>
							<label class="label">Profile Image *</label>
							<img src="assets/img/attorneys/<?php echo $row_attorneys['proimage']; ?>" alt="<?php echo $row_attorneys['name']; ?>" title="<?php echo $row_attorneys['name']; ?>" height="100px">
							<label class="input">
								<i class="icon-append fa fa-tag"></i>
								<input type="file" name="image" id="image"><span>Must be 500x500 pixel.</span>
							</label>
						</section>
						<section>
							<label class="label">Details *</label>
							Type<xmp>" <br> "</xmp> for line break
							<label class="textarea">
								<i class="icon-append fa fa-comment"></i>
								<textarea rows="4" name="message" id="message"><?php echo $row_attorneys['note']; ?></textarea>
							</label>
						</section>
						<section class="pull-right">
							<input type="checkbox" name="confirm" id="confirm" value="<?php echo $row_attorneys["id"]; ?>" required>Yes! I want to update <?php echo $row_attorneys["name"]; ?>.
						</section>
					</fieldset>
					<footer>
						<button type="reset" class="btn btn-theme-bg btn-lg ">Reset</button>
						<button type="submit" name="change" id="change" class="btn btn-theme-bg btn-lg pull-right">Update</button>
					</footer>
					<div class="message">
						<i class="fa fa-check"></i>
						<p><?php echo $row_attorneys["name"]; ?> successfully Updated.</p>
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