<?php 
	
	session_start();
	if ($_SESSION['user'] == "") {
		
		header("Location: index.php");
	}
	
	include '../config.php';
	
	$SQLSt = "UPDATE users SET password = '"
	. $_REQUEST['password'] . "'";
		
	mysql_query($SQLSt);

	mysql_close($con);

	header("Location: ../dashboard.php");
?>