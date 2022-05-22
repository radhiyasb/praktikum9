<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "radhiya1";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

//create table
$sql = "CREATE TABLE admin (
		id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR(200),
		password VARCHAR(200))";
	if (mysqli_query($conn, $sql)) {
	echo "Table created succesfully";
	}
	else {
	echo "Error creating database: " . mysqli_error($conn);
	}

	mysqli_close($conn);
?>