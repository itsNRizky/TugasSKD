<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Untuk Enkripsi</title>
</head>
<body>
	<form action="enkcaesar.php" method="get">
		Plainteks: <input type="text" name="kata"><br>
		Key: <input type="text" name="key" maxlength="5">
		<input type="submit" value="Kirim">
		<input type="reset" value="Ulangi">
	</form>
</body>
</html>