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
	if (isset($_POST['send'])) {
		$pesan = $_POST['pesan'];
		$_SESSION['pesanOrangA'] = $pesan;
		header("Location: orangB.php?");
	}

	?>
	<form action="" method="POST">
		<p><label for="pesan">Masukkan Pesan:</label></p>
		<textarea name="pesan" rows="5"></textarea>
		<input type="submit" value="kirim" name='send'>
	</form>
</body>

</html>