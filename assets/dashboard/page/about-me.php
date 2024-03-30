<?php
require('connection.php');
//connect edu
mysqli_select_db($connection, $database_connection);
$query_edu = "SELECT * FROM edu";
$edu = mysqli_query($connection, $query_edu) or die(mysqli_error());
$row_edu = mysqli_fetch_assoc($edu);
$totalRows_edu = mysqli_num_rows($edu);
$id = $row_edu["id"];
?>
<?php
	if(isset($_GET['id'])){
		$ID = $_GET['id'];
		$edu = $connection->query("select * from edu where id='$ID'");
		$row_edu = $edu->fetch_array(MYSQLI_BOTH);
		
	}
?>
<?php
require'connect.php';
//connect slider
$profile = $connection->query("select * from profile where id='1'");
$row_profile = $profile->fetch_array(MYSQLI_BOTH);
if(isset($_POST['updatep'])){
	$FIFileName = $_FILES['imagep']['tmp_name'];
	$FIRealName = $_FILES['imagep']['name'];
	if($FIRealName){
		if (is_uploaded_file($FIFileName)){
			if(move_uploaded_file($FIFileName, "assets/img/$FIRealName")) { 
				$sql = $connection->query("UPDATE profile set proimage='{$FIRealName}' where id='1'");// value insert into database
			}						
		}
	}
}
if(isset($_POST['updated'])){
	$Phone = $_POST['phone'];
	$Email = $_POST['email'];
	$Address = $_POST['address'];
	$FB = $_POST['fb'];
	$sql = $connection->query("UPDATE profile set phone='{$Phone}', email='{$Email}', address='{$Address}', facebook='{$FB}' where id='1'");// value insert into database
}
if(isset($_POST['add'])){
	$Ename = $_POST['ename'];
	$Iname = $_POST['iname'];
	$Year = $_POST['year'];
	$Gread = $_POST['gread'];
	$Point = $_POST['point'];
	$sql = $connection->query("INSERT INTO edu (name, year, ins, gread, point)Values('{$Ename}', '{$Year}', '{$Iname}', '{$Gread}', '{$Point}')");// value insert into database
}
if(isset($_POST['updatee'])){
	$ID = $_GET['id'];
	$Ename = $_POST['ename'];
	$Iname = $_POST['iname'];
	$Year = $_POST['year'];
	$Gread = $_POST['gread'];
	$Point = $_POST['point'];
	$sql = $connection->query("UPDATE edu set name='{$Ename}', year='{$Year}', ins='{$Iname}', gread='{$Gread}', point='{$Point}' where id='$ID'");// value insert into database
}
if(isset($_POST['del'])){
	$ID = $_POST['confirm'];
	$sql = $connection->query("delete from edu where id='$ID'");
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
					<a href="dashboard.php?page=about-me&slug=proimage" class="btn btn-theme-bg btn-ico btn-lg">Profile Image<i class="fa fa-image"></i></a>
					<a href="dashboard.php?page=about-me&slug=details" class="btn btn-theme-bg btn-ico btn-lg">Details<i class="fa fa-gears"></i></a>
					<a href="dashboard.php?page=about-me&slug=edu" class="btn btn-theme-bg btn-ico btn-lg">Education<i class="fa fa-graduation-cap"></i></a>
					
				</div>
			</div>
		</div>
		<?php
			if(isset($_GET['slug'])){
				$ID = $_GET['slug'];
				if($ID == 'proimage'){
					include"assets/dashboard/page/home/proimage.php";
				}else if($ID == 'details'){
					include"assets/dashboard/page/home/details.php";
				}else if($ID == 'edu'){
					include"assets/dashboard/page/home/edu.php";
				}else if($ID == 'add-edu'){
					include"assets/dashboard/page/home/add-edu.php";
				}else if($ID == 'edit-edu'){
					include"assets/dashboard/page/home/edit-edu.php";
				}else if($ID == 'delete-edu'){
					include"assets/dashboard/page/home/delete-edu.php";
				}
			}else{
				include"assets/dashboard/page/home/proimage.php";
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