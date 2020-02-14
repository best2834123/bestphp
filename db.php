<?php
	
	$con = mysqli_connect("35.240.235.166", "root", "rootmysql", "register");

	// chack connection
	if (mysqli_connect_error()) {
		echo "Failed to connect to MYSQL: " . mysqli_connect_error();
	}
?>