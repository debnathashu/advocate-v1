<?php
require'connect.php';
//connect slider
$slider = $connection->query("select * from slider where id='1'");
$row_slider = $slider->fetch_array(MYSQLI_BOTH);
if(isset($_POST['updateb'])){
	$FIFileName = $_FILES['imageb']['tmp_name'];
	$FIRealName = $_FILES['imageb']['name'];
	if($FIRealName){
		if (is_uploaded_file($FIFileName)){
			if(move_uploaded_file($FIFileName, "assets/img/slider/$FIRealName")) { 
				$sql = $connection->query("UPDATE slider set si1='{$FIRealName}' where id='1'");// value insert into database
			}						
		}
	}
}
if(isset($_POST['updateu'])){
	$FIFileName = $_FILES['imageu']['tmp_name'];
	$FIRealName = $_FILES['imageu']['name'];
	if($FIRealName){
		if (is_uploaded_file($FIFileName)){
			if(move_uploaded_file($FIFileName, "assets/img/slider/$FIRealName")) { 
				$sql = $connection->query("UPDATE slider set si2='{$FIRealName}' where id='1'");// value insert into database
			}						
		}
	}
}
if(isset($_POST['updatet'])){
	$Text = $_POST['text'];
	$sql = $connection->query("UPDATE slider set text='{$Text}' where id='1'");// value insert into database
}
if(isset($_POST['updatee'])){
	$Exp = $_POST['exp'];
	$sql = $connection->query("UPDATE settings set exp='{$Exp}' where id='1'");// value insert into database
}
if(isset($_POST['updates'])){
	$Succ = $_POST['success'];
	$sql = $connection->query("UPDATE settings set success='{$Succ}' where id='1'");// value insert into database
}
if(isset($_POST['updatem'])){
	$Addressr = $_POST['addressr'];
	$Address = $_POST['address'];
	$Phone = $_POST['phone'];
	$Email = $_POST['email'];
	$Iemail = $_POST['iemail'];
	$Fax = $_POST['fax'];	
	$Skype = $_POST['skype'];	
	$FB = $_POST['fb'];	
	$TW = $_POST['tw'];	
	$Gplus = $_POST['gplus'];	
	$Link = $_POST['link'];	
	$About = $_POST['about'];	
	$FIFileName = $_FILES['logo']['tmp_name'];
	$FIRealName = $_FILES['logo']['name'];
	if($FIRealName){
		if (is_uploaded_file($FIFileName)){
			if(move_uploaded_file($FIFileName, "assets/img/$FIRealName")) { 
				$sql = $connection->query("UPDATE settings set logo='{$FIRealName}', addressr='{$Addressr}', address='{$Address}', phone='{$Phone}', email='{$Email}', iemail='{$Iemail}', fax='{$Fax}', skype='{$Skype}', fb='{$FB}', tw='{$TW}', gplus='{$Gplus}', link='{$Link}', about='{$About}' where id='1'");// value insert into database
			}						
		}
	}else{
		$sql = $connection->query("UPDATE settings set addressr='{$Addressr}', address='{$Address}', phone='{$Phone}', email='{$Email}', iemail='{$Iemail}', fax='{$Fax}', skype='{$Skype}', fb='{$FB}', tw='{$TW}', gplus='{$Gplus}', link='{$Link}', about='{$About}' where id='1'");// value insert into database
	}
}
?>
<head>
	<?php include"assets/include/tag.php"; ?>
	<title>Main Home | Adv Mahbub Alam | Lockers IT Solution</title>
	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- custom css (blue color by default) -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
	<!-- font awesome for icons -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- flex slider css -->
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
					<h4>Main Home</h4>
				</div>
				<div class="col-sm-6 hidden-xs text-right">
					<ol class="breadcrumb">
						<li><a href="dashboard.php?page=home">Home</a></li>
						<li class="active">Feature Slider</li>
					</ol>
				</div>
			</div>
		</div>
	</div><!--breadcrumbs-->
	<div class="divide80"></div>
	<div class="container">
		
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 margin20">
				<h3 class="center-heading">Home Settings</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-10 col-md-offset-1 text-center">
				<div class="buttons">
					<a href="dashboard.php?page=main-home&slug=si1" class="btn btn-theme-bg btn-ico btn-lg">Background Image<i class="fa fa-image"></i></a>
					<a href="dashboard.php?page=main-home&slug=si2" class="btn btn-theme-bg btn-ico btn-lg">User Image<i class="fa fa-user"></i></a>
					<a href="dashboard.php?page=main-home&slug=text" class="btn btn-theme-bg btn-ico btn-lg">Slider Text<i class="fa fa-comment"></i></a>
					<a href="dashboard.php?page=main-home&slug=exp" class="btn btn-theme-bg btn-ico btn-lg">Experience	<i class="fa fa-asterisk"></i></a>
					<a href="dashboard.php?page=main-home&slug=success" class="btn btn-theme-bg btn-ico btn-lg">Success	<i class="fa fa-magic"></i></a>
					<a href="dashboard.php?page=main-home&slug=more" class="btn btn-theme-bg btn-ico btn-lg">More	<i class="fa fa-gears"></i></a>
				</div>
			</div>
		</div>
		<?php
			if(isset($_GET['slug'])){
				$ID = $_GET['slug'];
				if($ID == 'si1'){
					include"assets/dashboard/page/home/si1.php";
				}else if($ID == 'si2'){
					include"assets/dashboard/page/home/si2.php";
				}else if($ID == 'text'){
					include"assets/dashboard/page/home/text.php";
				}else if($ID == 'exp'){
					include"assets/dashboard/page/home/exp.php";
				}else if($ID == 'success'){
					include"assets/dashboard/page/home/success.php";
				}else if($ID == 'more'){
					include"assets/dashboard/page/home/more.php";
				}
			}else{
				include"assets/dashboard/page/home/si1.php";
			}
		?>
	</div><!--skills and services-->
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
</body>