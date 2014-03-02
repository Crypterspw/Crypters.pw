<?php 

session_start();

if (!ctype_alnum($_REQUEST['username'])) {
	header("Location: login_failed.php");
}

if (!ctype_alnum($_REQUEST['password'])) {
	header("Location: login_failed.php");
}

include 'config.php';

$SQLSt = "SELECT * FROM users WHERE user = '" . $_REQUEST['username'] . "' AND password = '" . $_REQUEST['password'] . "'";

$result = mysql_query($SQLSt);

$myrows = mysql_num_rows($result);

if($myrows > 0)
{
	
	$row = mysql_fetch_row($result);
	
        $_SESSION['user'] = $row[1];
        header("Location: dashboard.php");
}
else
{
        header("Location: login_failed.php");
}

mysql_close($con);
?>