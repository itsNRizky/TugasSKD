<?php 
require 'koneksi.php';

$username= $_GET["username"];
$password= $_GET["password"];
$password_md5 = md5($password);

$queries=("SELECT * FROM user where username='$username' and password='$password_md5'");
$ceklogin=mysqli_query($db, $queries);
$result=mysqli_fetch_array($ceklogin);

if(!empty($result)){
	session_start();
	$_SESSION["username"] = $username;
	header("Location: dashboard.php");
} else{
	header("Location: index.php?error=True");
}
