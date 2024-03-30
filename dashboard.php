<?php require'connect.php'; ?>
<?php
	session_start();
	if(isset($_SESSION["UI"])){
		$UI = $_SESSION["UI"];
		$UT = $_SESSION["usertype"];
	}else{
		header('Location: login.php');
	}
?>
<?php
	$settings = $connection->query("select * from settings where id='1'");
	$row_settings = $settings->fetch_array(MYSQLI_BOTH);
?>
<!DOCTYPE html>
<html lang="en">
<?php
	if(isset($_GET["page"])){
		$Name = $_GET["page"];
		include"assets/dashboard/page/$Name.php";
	}else{
		header('Location: index.php');
	}
?>
</html>
