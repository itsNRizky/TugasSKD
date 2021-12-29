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
	$username = $_SESSION["username"];
	?>
	<h1>Berhasil Login!</h1>
	<h1>Username: <?php echo $username; ?></h1>
	<a href="logout.php">Logout</a>
</body>

</html>