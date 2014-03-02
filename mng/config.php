<?php

$dbhost = "mysql17.000webhost.com";  // Database Host
$dbuser = "a5614758_dash";       // Database User Name
$dbpassword = "nikki1209";   // User Password
$dbname = "a5614758_dashb";       // Database Name

$con=mysql_connect($dbhost,$dbuser,$dbpassword);
mysql_select_db($dbname) or die(mysql_error());
// Check connection
if (!$con)
  {
	  die('Could not connect: ' . mysql_error());
  }
  
?>