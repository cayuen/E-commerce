<?php
$servername = "matt-smith-v4";
$username = "inf124db063";
$password = "wfnt59hFDjjZ";
$dbname = "inf124db063";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE Products (
	id INT(5) NOT NULL AUTO_INCREMENT UNIQUE KEY,
	name VARCHAR(100) NOT NULL,
	description VARCHAR(100) NOT NULL,
	size VARCHAR(100) NOT NULL,
	price FLOAT(5) NOT NULL)
)";	

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>