<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "PhoenixCinema";
	// Create connection

	$conn = new mysqli($servername, $username, $password,$dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	//echo "Connected successfully" . "<br >";
?>