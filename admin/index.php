<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
</head>
<body>
	<h1 align="center">LOGIN</h1>
	<!-- cek pesan notifikasi -->
	<?php 
	if(isset($_POST['pesan'])){
		if($_POST['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_POST['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_POST['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br/>
	<form method="post" action="cek_login.php" align="center">
		<table align="center">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>			
	</form>
</body>
</html>