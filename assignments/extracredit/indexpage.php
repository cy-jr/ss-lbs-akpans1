<?php
session_start();
$times = 'times';
if(isset($_SESSION['views'])){
	$_SESSION['views'] = $_SESSION['views'] + 1;
	echo "You have visited this page " . $_SESSION['views'] . " times.";
}

else {
	$_SESSION['views'] = 1;
	$times = 'time';
	echo "You have visited this page " . $_SESSION['views'] . " time.";
}

?>
