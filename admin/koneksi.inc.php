<?php
$host= "localhost";
$username = "root";
$password = "";
$dbname = "radhiya1";
$koneksi = mysqli_connect($host,$username,$password) or die("Koneksi gagal dibangun");
	mysqli_select_db ($koneksi,$dbname) or die("Database tidak dapat dibuka");
?>