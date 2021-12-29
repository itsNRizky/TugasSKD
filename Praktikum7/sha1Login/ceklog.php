<?php
session_start();
include 'koneksi.php';
$username = $password = "";
if($_POST['submit']){
	$username = $_POST['username'];
	$password = strtolower($_POST['password']);
	$password_sha1 = sha1($password);

	$data = mysqli_query($db, "SELECT * FROM akun WHERE username = '$username'");
	$akun = mysqli_fetch_array($data);

	if ($akun['password'] == $password_sha1){
		$_SESSION['login'] = $username;
		header("Location: dashboard.php");
	} else{
		echo '<script>alert("Password salah")</script>';
		header("Location: login.php");
	}

}
?>