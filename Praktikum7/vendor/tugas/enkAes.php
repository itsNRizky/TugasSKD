<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Implementasi Advanced Encruption Standard 128 bit Dengan PHP</title>
</head>

<body>
	<?php
	use PhpAes\Aes;

	include './enkAes.php';
	if (isset($_POST['tekan'])) {
		$nama = $_POST['nama'];
		$z = "abcdefghijuklmno0123456789012345"; //ini kunci
		$aes = new Aes($z);
		$enkrip = $aes->encrypt($nama);
		echo "\n\n Hasil Enkripsi: \n" . ($enkrip) . "\n";
		$decrypted = $aes->decrypt($enkrip);
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "\n\n Hasil Dekripsi: \n" . stripslashes($decrypted) . "\n";
	}
	?>
	<form action="" method="post">
		<textarea name="nama"></textarea>
		<input type="submit" name="tekan" value="Enkrip">
	</form>
</body>

</html>