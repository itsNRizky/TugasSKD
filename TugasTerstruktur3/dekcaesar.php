<?php 

$key = $_GET["key"];
$nmfile = "enkripsi.txt";
$fp = fopen($nmfile, "r"); //buka file (mode r -> read)
$isi = fread($fp, filesize($nmfile));

for ($i = 0; $i < strlen($isi); $i++){
	$kode[$i] = ord($isi[$i]); //ord() merubah satu huruf ASCII ke desimal
	if ($kode[$i] >= 65 && $kode[$i] <= 90){ //Cek apakah char tsb = huruf kapital
		$b[$i] = ($kode[$i] - $key); //geser sesuai kunci
		while ( $b[$i] < 65) { //jika keluar dari huruf kapital, maka akan kembali ke huruf kapital terakhir (Z)
			$b[$i] = 65 % $b[$i];
			$b[$i] = 91 - $b[$i];
		}

	} elseif ($kode[$i] >= 97 && $kode[$i] <= 122){ //Cek apakah char tsb = huruf kecil
		$b[$i] = ($kode[$i] - $key); //geser sesuai kunci
		while ( $b[$i] < 97) {//jika keluar dari huruf kecil, maka akan kembali ke huruf kecil pertama (a)
			$b[$i] = 97 % $b[$i];
			$b[$i] = 123 - $b[$i];
		}
	} 
	else{ // Selain huruf kapital dan huruf kecil
		$b[$i] = ($kode[$i] - $key); //geser sesuai kunci
		$b[$i] %= 256;

		//NOTE KLO MISAL KUNCI = '3' DAN CHAR = '<'(des: 62); 62 + 3 = 65; < = A??? BRRTI TUBRUKAN SAMA 'X' (des: 88) 88+3 = 91 -> 91 mod 90 = 1 -> 1+64 = 61
	}
	$c[$i] = chr($b[$i]); //rubah dari desimal ke ASCII
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