<?php
$kalimat = $_GET["kata"];
$kunci = $_GET["key"];
$plain_text=str_split($kalimat);
$n=count($plain_text);
$key=str_split($kunci);
$m=count($key);
$decrypted_text='';
for($i=0;$i<$n;$i++){
	if(ord($plain_text[$i]) >= 65 && ord($plain_text[$i]) <= 90){
		$bataskode = 65;
		$decrypted_text.=chr(((ord($plain_text[$i]) - ord($key[$i%$m]) + 26)%26) +$bataskode);
	}elseif (ord($plain_text[$i]) >= 97 && ord($plain_text[$i]) <= 122) {
		$bataskode = 97;
		$decrypted_text.=chr(((ord($plain_text[$i]) - ord($key[$i%$m]) + 26)%26) +$bataskode);
	}else{
		$decrypted_text.=chr(((ord($plain_text[$i]) - ord($key[$i%$m]))%256));
	}
}

echo "kalimat CHIPPERTEXT : ";
for($i=0;$i<$n;$i++){
	echo $kalimat[$i];
}
echo "<br>";
echo "hasil dekripsi =";
echo $decrypted_text;
?>