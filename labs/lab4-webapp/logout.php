<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Simple Web Application - Lab 4</title>
</head>
<body>
	<h1>SS-LBS-F19 - Lab 4</h1>
	<h2> A Simple Web Application</h2> 
   	<h2>Simple logout page by <font color="blue">Phu Phung</font>, customized by "YOUR NAME"</h2>
<?php 
	session_start();
	session_destroy();
	echo "Current time: " . date("Y-m-d h:i:sa") . "<br>\n";
?>
	<p>You are logged out. Please click <a href="login.php">here</a> to login again.</p>
</body>
</html>

