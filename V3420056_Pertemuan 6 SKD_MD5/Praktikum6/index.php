<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	$error = $_GET['error'];
	 ?>
	<form action="ceklog.php" action="GET">
		<label for="username">Username</label>
		<input type="text" name="username">
		<label for="password">Password</label>
		<input type="password" name="password">
		<input type="submit" value="Login">
	</form>
	<a href="daftar.php">Daftar klik disini</a>
	<?php if ($error): ?>
		<p style="color: red;">Username atau Password salah!</p>
	<?php endif; ?>
</body>
</html>