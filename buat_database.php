<?php
$host = "localhost";
$username = "root";
$password = "";

//create connection
$conn = mysqli_connect($host, $username, $password);
//check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

//create database
$sql = "CREATE DATABASE radhiya1";
if (mysqli_query($conn, $sql)) {
	echo "Database created succesfully";
}
else {
	echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>