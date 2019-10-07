<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Simple Web Application - Lab 5 - SS-LBS-F19</title>
</head>
<body>
	<h1>SS-LBS-F19 - Lab 5  - Session Hijacking and Protection</h1>
	<h2>Simple Web Application</h2> 
   	<h2>Simple Login Form by <font color="blue">Phu Phung</font>, customized by "Akpan"</h2>
<?php
	session_start();
	if (isset($_SESSION["logged"]) and $_SESSION["logged"] === TRUE) {
		echo "<script>alert('You have been logged in. Welcome back!');</script>";
		header("Refresh:0; url=index.php");
		exit();
  	}
	echo "Current time: " . date("Y-m-d h:i:sa") . "<br>\n";
?>
    <form action="index.php" method="POST">
    	Username:<input type="text" name="username" /> <br/>
		Password: <input type="password" name="password" /> <br/>
		<button type="submit">Login</button>
	</form>
</body>
 </html>

