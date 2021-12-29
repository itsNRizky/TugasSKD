<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&display=swap" rel="stylesheet">
	<title>Document</title>
</head>
<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	body{
		background-color: #2A7DFF;
		display: flex;
		justify-content: center;
		align-items: center;
		height: 100vh;
		font-family: 'Poppins', sans-serif;
	}
	.form-container{
		background-color: white;
		padding:20px;
		border-radius: 10px;
		border:1px solid #ABABAB;
		box-shadow: 0px 10px 5px rgba(0,0,0,0.5);
	}
	form{
		display: flex;
		justify-content: center;
		align-items: flex-start;
	}
	.left{
		flex: 1;
	}
	.right{
		flex:1;
	}
	.form-sec{
		margin: 10px;
	}
	h1, p{
		text-align: center;
		margin-bottom: 10px;
		color: #2A7DFF;
	}

	p{
		font-weight: 200;
	}

	.form-sec label{
		font-size: 18px;
		display: block;
	}

	.form-sec input{
		padding: 5px;
		font-size: 18px;
		border-radius: 5px;
		border:none;
		border: 1px solid #AFAFAF;
	}

	.form-sec textarea{
		width: 100%;
		resize: none;
		font-size: 16px;
	}

	.side label{
		display: inline-block;
	}
	.submit{
		background-color: #2A7DFF;
		border:none;
		border-radius: 5px;
		color:white;
		padding:5px;
		margin-left: 5px;
		font-size: 20px;
		cursor: pointer;
	}
	.submit:active{
		transform: translateY(5px);
	}
</style>
<body>
	<?php 
	session_start();
	require 'koneksi.php';
	require 'func.php';
	if(isset($_POST["regist"])){
		
		#Pengecekkan apakah passwordnya sama
		if ($_POST["password"] == $_POST["password2"]){
			if(regist($_POST) > 0){
				echo "<script>
						alert('Akun berhasil terdaftar silahkan cek email dan melakukan login');
						document.location.href = 'index.php';
					 </script>";
			} else{
				mysqli_error($db);
			}
		}
		$error_pwd = true;

	}



	 ?>
	<section class="form-container">
		<h1>Registrasi Mahasiswa</h1>
		<p>Silakan memasukkan data diri anda</p>
		<form action="" method="post">
			<div class="left">
				<div class="form-sec">
					<label for="nama">Nama</label>
					<input required="true" type="text" name="nama">	
				</div>
				<div class="form-sec">
					<label for="alamat">Alamat</label>
					<input required="true" type="text" name="alamat">	
				</div>
				<div class="form-sec">
					<label for="username">Username</label>
					<input required="true" type="text" name="username" onkeypress="return runScript(event)">
				</div>
			</div>
			<div class="right">
				<div class="form-sec">
					<label for="email">Email</label>
					<input required="true" type="email" name="email">	
				</div>
				<div class="form-sec">
					<label for="password">Password</label>
					<input required="true" type="password" name="password" pattern="(?=.*\d)(?=.*[!@#$%^&*_=+-])(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Harus 8 atau lebih karakter, memiliki setidaknya 1 huruf kapital dan huruf kecil, harus terdapat angka, dan harus memiliki karakter spesial(!@#$%^&*_=+-)">
				</div>
				<div class="form-sec">
					<label for="password2">Konfirmasi Password</label>
					<input required="true" type="password" name="password2">
				</div>
				<input type="hidden" value="0" name="aktif"> 
				<input class="submit" type="submit" name="regist" value="Submit">
			</div>
		</form>
		<?php if (isset($error_pwd)): ?>
			<p style="color: red;">Password dengan Password Konfirmasi Berbeda!!</p>
		<?php endif; ?>
	</section>
	<script language="javascript" src="./mask.js"></script>
</body>
</html>