<?php
$key = 3;

$isi = "dzdvl#dvwhula#gdq#whpdqqbd#rehola";

for ($i=0;$i<strlen($isi);$i++){
    $dek[$i]=ord($isi[$i]);
    
    if ($dek[$i] >= 65 && $dek[$i] <= 99){
        $ch[$i] = ($dek[$i] - $key);
        while ($ch[$i]<65) {
            $ch[$i]= 65 % $ch[$i];
            $ch[$i]= 91 - $ch[$i];
        }
//   $ch[$i] = (($dek[$i] - $key)%26)+65;
// $ch[$i] = (99-(($dek[$i] - $key)%26))-$key;
   
//   if($ch[$i]<65){
//       $ch[$i]+=3;
//   }

    // echo $ch[$i];
    
    } elseif ($dek[$i] >= 97 && $dek[$i] <= 122){
    // 123 - (97 - $ascii)
//   $ch[$i] = ($dek[$i] - $key);
// $ch[$i] = (122-(($dek[$i] - $key)%26))-(2*$key);
    // echo $ch[$i];
    // if($ch[$i]<97){        
    //     // $ch[$i]= 123-(97 - $ch[$i]);
    //     $ch[$i]+=26;
    // }
        $ch[$i] = ($dek[$i] - $key);
        while ($ch[$i]<65) {
            $ch[$i]= 65 % $ch[$i];
            $ch[$i]= 91 - $ch[$i];
        }
//    
    }
    else{ // Selain huruf kapital dan huruf kecil
        $ch[$i] = ($dek[$i] - $key); //geser sesuai kunci
        $ch[$i] %= 256;

        //NOTE KLO MISAL KUNCI = '3' DAN CHAR = '<'(des: 62); 62 + 3 = 65; < = A??? BRRTI TUBRUKAN SAMA 'X' (des: 88) 88+3 = 91 -> 91 mod 90 = 1 -> 1+64 = 61
    }
    $ha[$i]=chr($ch[$i]);

}
// echo "kalimat ciphertext : ";
// for ($i=0; $i<strlen($isi); $i++){
//     echo $isi[$i];
// }

echo "<br>";
echo "hasil deskripsi = ";
for ($i=0; $i<strlen($isi); $i++){
    echo $ha[$i];
}
// echo "<br>"

?>
