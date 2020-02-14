<?php
	
	$con = mysqli_connect("localhost", "root", "", "t-vintage");

	// chack connection
	if (mysqli_connect_error()) {
		echo "Failed to connect to MYSQL: " . mysqli_connect_error();
	}
?>