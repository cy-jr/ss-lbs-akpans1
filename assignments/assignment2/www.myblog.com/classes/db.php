<?php

    $dblink = mysqli_connect("localhost", "akpan1", "password","blog");
    if (mysqli_connect_errno()) {
    	printf("Connect failed: %s\n", mysqli_connect_error());
    	exit();
    }

?>
