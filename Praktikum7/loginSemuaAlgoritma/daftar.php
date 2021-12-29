<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	include 'koneksi.php';
	$username = $password = $password_sha1 = $password_md5 = $password_sha256 = $email = $nama = '';
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = strtolower($_POST['password']);
		$password_md5 = md5($password);
		$password_sha1 = sha1($password);
		$password_sha256 = hash('sha256', $password);
		$email = $_POST['email'];
		$nama = $_POST['nama'];
	}

	mysqli_query($db, "INSERT INTO tb_pw(username, email, nama, md5, sha1, sha256) VALUES ('$username', '$email','$nama', '$password_md5', '$password_sha1', '$password_sha256');");
	?>
	<form action="" method="post">
		<label for="username">Username</label>
		<input type="text" name="username">
		<label for="password">Password</label>
		<input type="password" name="password">
		<label for="email">Email</label>
		<input type="email" name="email">
		<label for="nama">Nama</label>
		<input type="text" name="nama">
		<input type="submit" name="submit" value="Tambah">
	</form>
</body>
</html>