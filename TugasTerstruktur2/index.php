<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	session_start();
	if(empty($_SESSION['login'])){
		header("Location: login.php");
	}
	require 'koneksi.php';
	$username = $_SESSION["username"];
	//data akun
	$queries = ("SELECT * FROM users where username='$username'");
	$data = mysqli_query($db, $queries);
	$result = mysqli_fetch_array($data);
	 ?>

	 <h1>Selamat datang <?php echo $result["nama"]; ?>!</h1>
	 <p>Alamat: <?php echo $result["alamat"] ?></p>
	 <p>Email: <?php echo $result["email"] ?></p>

	 <a href="logout.php">Keluar</a>
</body>
</html>