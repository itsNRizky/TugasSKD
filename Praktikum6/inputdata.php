<?php 
require 'koneksi.php';
$username = $_POST["username"];
$password = $_POST["password"];
$password_md5 = md5($password);
$email = $_POST["email"];
$nama = $_POST["nama"];

$sql = mysqli_query($db,"INSERT INTO user(username,password,email,nama) VALUES 
('$username','$password_md5','$email','$nama')");

header("Location: index.php");
 ?>