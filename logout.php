<?php require'connect.php'; ?>
<?php
	session_start();
	unset($_SESSION["UI"]);
	session_destroy();
	header('Location: index.php');
?>