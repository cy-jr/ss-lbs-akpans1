<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Simple Web Application - Lab 5 - SS-LBS-F19</title>
</head>
<body>
	<h1>SS-LBS-F19 - Lab 5 - Session Hijacking and Protection</h1>
	<h2>Simple Web Application</h2> 
   	<h2>Simple index page by <font color="blue">Phu Phung</font>, customized by "Akpan"</h2>
   	<?php $_SESSION["browser"] = $_SERVER["HTTP_USER_AGENT"]; ?>
<?php 
	session_start();
	$welcome = "Welcome back "; //default message for return users
	$username = $_POST["username"]; //username input from the user via HTTP Request POST
	$password = $_POST["password"]; //password input from the user via HTTP Request POST
  	/*for debug only*/echo "DEBUG>Received: username=\"" . $username .  "\" and password=\"" . $password . "\"<br>\n";
	if (isset($username) and isset($password) ){
	//the case username and password is provided
    	if (checklogin($username,$password)){ 
      		$_SESSION["logged"]=TRUE;
			$_SESSION["username"] = $username;
			$welcome = "Welcome "; //not previously logged-in 
    	}else{//failed
			redirect_login('Invalid username/password');
		}
	}else{//no username/password is provided
		//check if the session has NOT been logged in, redirect to the login page
		if ($_SESSION["logged"]!=TRUE) {
    		redirect_login('You have not logged in. Please login first!');
  		}
  		if($_SESSION["browser"] != $_SERVER["HTTP_USER_AGENT"]){
  			echo "Session Hijacking Detected!!!";
  			die();
  		}
	}
	//the main business logic implementation of the page
	echo "Current time: " . date("Y-m-d h:i:sa") . "\n";
	echo "<h2>" .  $welcome . "<font color='blue'>" . $_SESSION["username"] . "</font>!</h2>\n";
?>
	<a href="logout.php">Logout</a>
<?php	
	//supporting functions	
	function redirect_login($message){
		echo "<script>alert('" . $message . "');</script>\n";
		session_destroy();//clear all session variables 
		header("Refresh:0; url=login.php");
    	die();
	}
	function mockchecklogin($username, $password) {
		//we do mock-up check first
		if (($username== "akpans1@udayton.edu") and ($password == "sslbsf19")) 
		  return TRUE;
		return FALSE;
  	}
  		function checklogin($username, $password) {
		//access the real database to check the username/password
   		$dbconnection = mysqli_connect("localhost", "root", "seedubuntu","ss_lbs_f19");

   		$mysqli = new mysqli('localhost',
                             'root',
                             'seedubuntu',
                             'ss_lbs_f19');

   		if ($mysqli->connect_errno) {
            echo "Connection to the database falied..";
            exit();
        }
        $sql = "select * from users where username='". $username."' and password=password('".$password."');";

         echo "DEBUG$ sql: ".$sql."\n<br>";

        $result = $mysqli->query($sql);
        if($result->num_rows >= 1) return TRUE;
        {			
			$row = mysqli_fetch_assoc($result);

			if($row['username'] === $username){
				
				return true;
			}
		}
        if($result->num_rows == 1) {
        	return TRUE;	
        }
        return FALSE;
  	}
?>
</body>
</html>

