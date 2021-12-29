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

	$pesanA = $_SESSION['pesanA'];
	$pesanB = $_SESSION['pesanB'];

	if ($pesanA != $pesanB) {
		$msg = "Kedua pesan tidak sama! Terdapat perubahan di dalam pesan!";
	} else{
		$msg = "Kedua pesan sesuai, tidak ada perubahan di dalam pesan";
	}
	 ?>

	<p><?php echo $msg; ?></p>
	<a href="logout.php">Logout</a>
</body>
</html>