<?php
$kalimat = $_GET["kata"];
$kunci = $_GET["key"];
$plain_text=str_split($kalimat);
$n=count($plain_text);
$key=str_split($kunci);
$m=count($key);
$encrypted_text='';
for($i=0;$i<$n;$i++){
	if(ord($plain_text[$i]) >= 65 && ord($plain_text[$i]) <= 90){
		$bataskode = 65;
		$encrypted_text.=chr(((ord($plain_text[$i]) - $bataskode + ord($key[$i%$m]) - $bataskode )%26) +$bataskode);
	}elseif (ord($plain_text[$i]) >= 97 && ord($plain_text[$i]) <= 122) {
		$bataskode = 97;
		$encrypted_text.=chr(((ord($plain_text[$i]) - $bataskode + ord($key[$i%$m]) - $bataskode)%26) +$bataskode);
	}else{
		$encrypted_text.=chr(((ord($plain_text[$i])+ord($key[$i%$m]))%256));
	}
}
	//digabungkan proses enkripsi
echo "kalimat ASLI : ";
for($i=0;$i<$n;$i++){
	echo $kalimat[$i];
}
echo "<br>";
echo "hasil enkripsi =";
echo $encrypted_text;
?>