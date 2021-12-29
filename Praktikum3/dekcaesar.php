<?php 

$key = $_GET["key"];
$nmfile = "enkripsi.txt";
$fp = fopen($nmfile, "r"); //buka file (mode r -> read)
$isi = fread($fp, filesize($nmfile));

for($i = 0; $i < strlen($isi); $i++){
	$kode[$i] = ord($isi[$i]);
	$b[$i] = ($kode[$i] - $key) % 256; //dekripsi
	$c[$i] = chr($b[$i]); //dari desimal ke ACII
}

echo "Kalimat ciphertext: ";
for($i = 0; $i < strlen($isi); $i++){
	echo $isi[$i];
}
echo "<br>";
echo "Hasil dekripsi: ";
for($i = 0; $i < strlen($isi); $i++){
	echo $c[$i];
}
echo "<br>";

 ?>

 <a href="index.php">Ke index</a>