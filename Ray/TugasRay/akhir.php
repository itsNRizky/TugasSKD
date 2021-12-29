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

	$pesanOrangA = $_SESSION['pesanOrangA'];
	$pesanOrangB = $_SESSION['pesanOrangB'];

	if ($pesanOrangA != $pesanOrangB) {
		$msg = "Kedua pesan tidak sama! Terdapat perubahan di dalam pesan!";
	} else {
		$msg = "Kedua pesan sesuai, tidak ada perubahan di dalam pesan";
	}
	?>

	<p><?php echo $msg; ?></p>
	<a href="logout.php">Logout</a>
</body>

</html>