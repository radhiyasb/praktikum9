<?php
$host= "localhost";
$username = "root";
$password = "";
$dbname = "radhiya1";
$koneksi = mysqli_connect($host,$username,$password) or die("Koneksi gagal dibangun");
	mysqli_select_db ($koneksi,$dbname) or die("Database tidak dapat dibuka");

    //memindahkan nilai data form ke variabel sederhana agar mudah ditulis
$vnama 		= $_POST['nama'];
$vjkel	    = $_POST['jkel'];
$vemail 	= $_POST['email'];
$valamat 	= $_POST['alamat'];
$vkota 		= $_POST['kota'];
$vpesan 	= $_POST['pesan'];

$sql = "insert kontak set nama='$vnama', 
                            jkel='$vjkel', 
                            email='$vemail', 
                            alamat='$valamat', 
                            kota='$vkota', 
                            pesan='$vpesan'";

mysqli_query($koneksi, $sql) or die( mysqli_error($koneksi))  ;
mysqli_close($koneksi);

header("location:kontak.html");
?>