<?php
$servername = "matt-smith-v4";
$username = "inf124db063";
$password = "wfnt59hFDjjZ";
$dbname = "inf124db063";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully";
?>