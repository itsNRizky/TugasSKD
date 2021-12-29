<?php 

$kalimat = $_GET["kata"];
$key = $_GET["key"];

for ($i = 0; $i < strlen($kalimat); $i++){
	$kode[$i] = ord($kalimat[$i]); //ord() merubah satu huruf ASCII ke desimal
	$b[$i] = ($kode[$i] + $key) % 256; //proses enkripsi
	$c[$i] = chr($b[$i]); //rubah dari desimal ke ASCII
}

echo "Kalimat asli: ";
for($i = 0; $i < strlen($kalimat); $i++){
	echo $kalimat[$i];
}
echo "<br>";
echo "Hasil enkripsi: ";
$hsl = "";
for ($i = 0; $i < strlen($kalimat); $i++){
	echo $c[$i];
	$hsl = $hsl . $c[$i];
}

echo "<br>";
//Menyimpan ke file
$fp = fopen("enkripsi.txt", "w"); //Buka file (mode w -> write)
fputs($fp, $hsl);
fclose($fp);

 ?>

 <a href="index.php">Kembali ke index</a>