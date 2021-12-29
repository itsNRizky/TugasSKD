<?php 

$kalimat = $_GET["kata"];
$key = $_GET["key"];

for ($i = 0; $i < strlen($kalimat); $i++){
	$kode[$i] = ord($kalimat[$i]); //ord() merubah satu huruf ASCII ke desimal
	if ($kode[$i] >= 65 && $kode[$i] <= 90){ //Cek apakah char tsb = huruf kapital
		$b[$i] = ($kode[$i] + $key); //geser sesuai kunci
		while ( $b[$i] > 90) { //jika keluar dari huruf kapital, maka akan kembali ke huruf kapital pertama (A)
			$b[$i] %= 90;
			$b[$i] += 64;
		}

	} elseif ($kode[$i] >= 97 && $kode[$i] <= 122){ //Cek apakah char tsb = huruf kecil
		$b[$i] = ($kode[$i] + $key); //geser sesuai kunci
		while ( $b[$i] > 122) {//jika keluar dari huruf kecil, maka akan kembali ke huruf kecil pertama (a)
			$b[$i] %= 122;
			$b[$i] += 96;
		}
	} 
	else{ // Selain huruf kapital dan huruf kecil
		$b[$i] = ($kode[$i] + $key); //geser sesuai kunci
		$b[$i] %= 256;

		//NOTE KLO MISAL KUNCI = '3' DAN CHAR = '<'(des: 62); 62 + 3 = 65; < = A??? BRRTI TUBRUKAN SAMA 'X' (des: 88) 88+3 = 91 -> 91 mod 90 = 1 -> 1+64 = 61
	}
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