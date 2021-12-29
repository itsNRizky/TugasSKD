<?php 

$kalimat = $_GET["kata"];
$kunci1 = $_GET["key1"];
$kunci2 = $_GET["key2"];

//Mencari a invers
$a_inv = 0;
$flag = 0;
for ($j = 0; $j < 26; $j++){
	$flag = ($kunci1*$j)%26;
	if ($flag == 1){
		$a_inv = $j;
	}
}

for($i = 0; $i < strlen($kalimat); $i++){
	$kode[$i] = ord($kalimat[$i]) - 65; //ord() merubah satu huruf ASCII ke desimal
	$x = $kode[$i] - $kunci2;
	$y = $a_inv * $x;
	$b[$i]= ((($y % 26) + 26) % 26); //proses enkripsi
	$c[$i] = chr($b[$i] + 65); //rubah dari desimal ke ASCII
}

echo "Kalimat ciphertext: ";
for($i = 0; $i < strlen($kalimat); $i++){
	echo $kalimat[$i];
}
echo "<br>";
echo "Hasil dekripsi: ";
for($i = 0; $i < strlen($kalimat); $i++){
	echo $c[$i];
}
echo "<br>";

 ?>

 <a href="index.php">Ke index</a>