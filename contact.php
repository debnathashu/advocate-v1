<?php require'connect.php'; ?>
<?php session_start(); ?>
<?php
	if(isset($_POST['submit'])){
		$Name = $_POST['name'];
		$Email = $_POST['email'];
		$Phone = $_POST['phone'];
		$Subject = $_POST['subject'];
		$Message = $_POST['message'];
	
		$sql = $connection->query("INSERT INTO message (name, email, phone, subject, message)Values('{$Name}', '{$Email}', '{$Phone}', '{$Subject}', '{$Message}')");
	}
?>
<?php
	$settings = $connection->query("select * from settings where id='1'");
	$row_settings = $settings->fetch_array(MYSQLI_BOTH);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include"assets/include/tag.php"; ?>
	<title>Contact | Adv Mahbub Alam | Lockers IT Solution</title>
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
	<?php include"assets/include/top-bar-dark.php"; ?>
	<!--top-bar-dark end here-->
	<!--navigation -->
	<!-- Static navbar -->
	<?php include"assets/include/navbar.php"; ?>
	<!--navbar-default-->
	<div class="breadcrumb-wrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h4>Contact With Me</h4>
				</div>
				<div class="col-sm-6 hidden-xs text-right">
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">Contact</li>
					</ol>
				</div>
			</div>
		</div>
	</div><!--breadcrumbs-->
	<div class="divide60"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-sm-offset-1 margin30 sky-form-columns contact-sky-option">
				<div class="row">
					<div class="col-md-12">
						<div class="center-heading">
							<h2>Get In Touch</h2>
							<span class="center-line"></span>
							<p>
								Please don't hesitate to contact with me, if you have any questions, comments or messages. I'll try to respond to everything!
							</p>
						</div>
					</div>                   
				</div><!--center heading row-->
				<div class="row margin40">
					<div class="col-md-4 margin30">
						<div class="contact-option-circle">
							<i class="fa fa-home"></i>
							<p>
								<?php echo $row_settings['addressr']; ?>, <?php echo $row_settings['address']; ?>
							</p>
						</div><!--contact option circle-->
					</div><!--contact option detail box col-->
					 <div class="col-md-4 margin30">
						<div class="contact-option-circle">
							<i class="fa fa-phone"></i>
							<p>
								+880 - <?php echo substr($row_settings['phone'], 1, 4); ?> - <?php echo substr($row_settings['phone'], 5, 10); ?>
							</p>
						</div><!--contact option circle-->
					</div><!--contact option detail box col-->
					<div class="col-md-4 margin30">
						<div class="contact-option-circle">
							<i class="fa fa-envelope"></i>
							<p><a href="mailto:<?php echo $row_settings['iemail']; ?>"><?php echo $row_settings['iemail']; ?></a></p>
						</div><!--contact option circle-->
					</div><!--contact option detail box col-->
				</div>
				<p class="margin30">
					I am waiting to here from you!
				</p>
				<form action="" method="post" id="sky-form" class="sky-form sky-form-columns">
					<fieldset>					
						<div class="row">
							<section class="col col-6">
								<label class="label">Name</label>
								<label class="input">
									<i class="icon-append fa fa-user"></i>
									<input type="text" name="name" id="name">
								</label>
							</section>
							<section class="col col-6">
								<label class="label">E-mail</label>
								<label class="input">
									<i class="icon-append fa fa-envelope-o"></i>
									<input type="email" name="email" id="email">
								</label>
							</section>
						</div>
						<section>
							<label class="label">Phone</label>
							<label class="input">
								<i class="icon-append fa fa-phone"></i>
								<input type="text" name="phone" id="phone">
							</label>
						</section>
						<section>
							<label class="label">Subject</label>
							<label class="input">
								<i class="icon-append fa fa-tag"></i>
								<input type="text" name="subject" id="subject">
							</label>
						</section>
						<section>
							<label class="label">Message</label>
							<label class="textarea">
								<i class="icon-append fa fa-comment"></i>
								<textarea rows="4" name="message" id="message"></textarea>
							</label>
						</section>
						<!--
						<section>
							<label class="checkbox"><input type="checkbox" name="copy"><i></i>Send a copy to my e-mail address</label>
						</section>
						-->
					</fieldset>
					<footer>
						<button type="submit" name="submit" id="submit" class="btn btn-theme-bg btn-lg ">Send message</button>
					</footer>
					<div class="message">
						<i class="fa fa-check"></i>
						<p>Your message was successfully sent!</p>
					</div>
				</form>					
			</div>
		</div>
	</div><!--contact advanced container end-->
	<div class="divide60"></div>
	<?php include"assets/include/footer.php"; ?>
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
</html>
