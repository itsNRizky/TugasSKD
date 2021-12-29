<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require "composer/vendor/autoload.php";
$mail = new PHPMailer(true);
$mail->SMTPDebug = 0;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
//ganti dengan email dan password yang akan di gunakan sebagai email pengirim
$mail->Username = 'its.nrizky@gmail.com';
$mail->Password = 'novian291122';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
//ganti dengan email yg akan di gunakan sebagai email pengirim
$mail->setFrom('its.nrizky@gmail.com', 'Tim Pendaftaran Mahasiswa');
$mail->addAddress($_POST['email'], $_POST['nama']);
$mail->isHTML(true);
$mail->Subject = "Aktivasi Pendaftaran Mahasiswa";
$mail->Body = "Selemat, anda berhasil membuat akun. Untuk mengaktifkan akun anda silahkan klik link dibawah ini.
 <a href='http://localhost/SKD/TugasTerstruktur2/activation.php?t=".$token."'>http://localhost/SKD/TugasTerstruktur2/activation.php?t=".$token."</a>  ";
$mail->send();
echo 'Message has been sent';


