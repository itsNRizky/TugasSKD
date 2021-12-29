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
	$pesanAMD5 = md5($pesanA);

	if (isset($_POST['send'])) {
		$pesanB = $_POST['pesan'];
		$pesanBMD5 = md5($pesanB);
		$_SESSION['pesanA'] = $pesanAMD5;
		$_SESSION['pesanB'] = $pesanBMD5;
		header("Location: akhir.php");
	}
 	?>	
 	<form action="" method="POST">
 		<p><label for="pesan">Rubah pesan!</label></p>
 		<textarea name="pesan" ><?php echo $pesanA; ?></textarea>
 		<input type="submit" value="kirim" name="send">
 	</form>
</body>
</html>
