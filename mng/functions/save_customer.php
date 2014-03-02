<?php 
	
	session_start();
	if ($_SESSION['user'] == "") {
		
		header("Location: index.php");
	}
	
	include '../config.php';
	
	$SQLSt = "UPDATE customers SET customer = '"
	. $_REQUEST['customer'] . "', cpname = '" 
	. $_REQUEST['cpname'] . "', baddress = '" 
	. mysql_real_escape_string($_REQUEST['t1']) . "', phone1 = '" 
	. $_REQUEST['phone1'] . "', phone2 = '" 
	. $_REQUEST['phone2'] . "', fax = '" 
	. $_REQUEST['fax'] . "', email = '"	
	. $_REQUEST['email'] . "', saddress= '"
	. mysql_real_escape_string($_REQUEST['t2']) . "', note= '"
	. mysql_real_escape_string($_REQUEST['t3']) . "' WHERE id= " . $_REQUEST['id'];
		
	mysql_query($SQLSt);

	mysql_close($con);

	header("Location: ../dashboard.php?p=customers_list");
?>