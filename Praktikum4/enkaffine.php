<?php 

$kalimat = $_GET["kata"];
$kunci1 = $_GET["key1"];
$kunci2 = $_GET["key2"];

for ($i = 0; $i < strlen($kalimat); $i++){
	$kode[$i] = ord($kalimat[$i]) - 65; //ord() merubah satu huruf ASCII ke desimal
	$b[$i]=(($kunci1*$kode[$i] ) + $kunci2) % 26; //proses enkripsi
	$c[$i] = chr($b[$i] + 65); //rubah dari desimal ke ASCII
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
 ?>

 <a href="index.php">Kembali ke index</a>