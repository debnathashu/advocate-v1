<?php
require('connection.php');
//connect attorneys
mysqli_select_db($connection, $database_connection);
$query_user = "SELECT * FROM user";
$user = mysqli_query($connection, $query_user) or die(mysqli_error());
$row_user = mysqli_fetch_assoc($user);
$totalRows_user = mysqli_num_rows($user);
$id = $row_user["id"];
?>
<?php
	if(isset($_GET['id'])){
		$ID = $_GET['id'];
		$usere = $connection->query("select * from user where id='$ID'");
		$row_usere = $usere->fetch_array(MYSQLI_BOTH);
		
	}
?>
<?php
	require'connect.php';
	if(isset($_POST['add'])){
		$Uname = $_POST['uname'];
		$Name = $_POST['name'];
		$PW = $_POST['pw'];
		$Utype = $_POST['ut'];
		$Email = $_POST['email'];
		$sql = $connection->query("INSERT INTO user (username, usertype, name, email, password)Values('{$Uname}', '{$Utype}', '{$Name}', '{$Email}', '{$PW}')");// value insert into database
	}
	if(isset($_POST['update'])){
		$ID = $_GET['id'];
		$Name = $_POST['name'];
		$PW = $_POST['pw'];
		$Utype = $_POST['ut'];
		$Email = $_POST['email'];
		if($PW){
			$sql = $connection->query("UPDATE user set usertype='{$Utype}', name='{$Name}', email='{$Email}', password='{$PW}' where id='$ID'");
		}else{
			$sql = $connection->query("UPDATE user set usertype='{$Utype}', name='{$Name}', email='{$Email}' where id='$ID'");
		}
	}
	if(isset($_POST['del'])){
		$ID = $_POST['confirm'];
		$sql = $connection->query("delete from user where id='$ID'");
	}
?>
<head>
	<?php include"assets/include/tag.php"; ?>
	<title>Dashboard | Adv Mahbub Alam | Lockers IT Solution</title>
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
					<h4>Users</h4>
				</div>
				<div class="col-sm-6 hidden-xs text-right">
					<ol class="breadcrumb">
						<li><a href="dashboard.php?page=home">Home</a></li>
						<li class="active">User</li>
					</ol>
				</div>
			</div>
		</div>
	</div><!--breadcrumbs-->
	<div class="divide80"></div>
	<div class="container shortcodes">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 text-center">
				<div class="buttons">
					<a href="dashboard.php?page=user&slug=all" class="btn btn-theme-bg btn-ico btn-lg">All User<i class="fa fa-users"></i></a>
					<a href="dashboard.php?page=user&slug=add" class="btn btn-theme-bg btn-ico btn-lg">Add New<i class="fa fa-user"></i></a>
				</div>
			</div>
		</div>
		<?php
			if(isset($_GET['slug'])){
				$ID = $_GET['slug'];
				if($ID == 'all'){
					include"assets/dashboard/page/home/all.php";
				}else if($ID == 'add'){
					include"assets/dashboard/page/home/add.php";
				}else if($ID == 'edit'){
					include"assets/dashboard/page/home/edit.php";
				}else if($ID == 'delete'){
					include"assets/dashboard/page/home/delete.php";
				}
			}else{
				include"assets/dashboard/page/home/all.php";
			}
		?>
		
	</div>
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
	<!--sky form plugin js-->
	<script src="sky-form/js/jquery.form.min.js" type="text/javascript"></script>
	<script src="sky-form/js/jquery.validate.min.js" type="text/javascript"></script>
	<script src="js/sky-forms-custom.js" type="text/javascript"></script>
</body>