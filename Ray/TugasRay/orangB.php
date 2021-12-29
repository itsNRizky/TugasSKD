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
	$pesanAMD5 = md5($pesanOrangA);

	if (isset($_POST['send'])) {
		$pesanOrangB = $_POST['pesan'];
		$pesanBMD5 = md5($pesanOrangB);
		$_SESSION['pesanOrangA'] = $pesanAMD5;
		$_SESSION['pesanOrangB'] = $pesanBMD5;
		header("Location: akhir.php");
	}
	?>
	<form action="" method="POST">
		<p><label for="pesan">Rubah pesan!</label></p>
		<textarea name="pesan"><?php echo $pesanOrangA; ?></textarea>
		<input type="submit" value="kirim" name="send">
	</form>
</body>

</html>