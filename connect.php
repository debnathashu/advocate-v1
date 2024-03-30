<?php
	$hostname_connection = "localhost";
	$database_connection = "litadv";
	$username_connection = "root";
	$password_connection = "";
	$connection = mysqli_connect($hostname_connection, $username_connection, $password_connection, $database_connection) or die("Sorry, we are having some problems.<br>Please contact with your provider.<br>Lockers IT Solution<br>Phone: +880-1685-282060<br>Email: it@brainlockerltd.com<br>Web: it.brainlockerltd.com");
	
	// if($connection->connect_errno){
		// echo $connection->connect_error;
		// die('Sorry, we are having some problem');
	// }
?>