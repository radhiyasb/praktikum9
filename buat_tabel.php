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
$sql = "CREATE TABLE kontak (
		id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nama VARCHAR(30) NOT NULL,
		jkel VARCHAR(10),
		email VARCHAR(40),
		alamat VARCHAR(50),
		kota VARCHAR(20),
		pesan TEXT)";
	if (mysqli_query($conn, $sql)) {
	echo "Table created succesfully";
	}
	else {
	echo "Error creating table: " . mysqli_error($conn);
	}

	mysqli_close($conn);
?>
