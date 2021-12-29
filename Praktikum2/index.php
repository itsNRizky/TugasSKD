<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600&display=swap" rel="stylesheet">
	<title>Document</title>
</head>
<body>
	<?php
	session_start();
	if(isset($_SESSION['username'])){
		session_destroy();
	}
	require 'koneksi.php';
	if (isset($_POST["login"])){
		$uname = mysqli_real_escape_string($db, $_POST["username"]);
		$passwd = mysqli_real_escape_string($db, $_POST["password"]);

		#Cek dari database apakah ada data yang $uname dan $passwd nya sesuai kemudian ambil role nya
		require 'ceklog.php';
		if(!empty($result)){
			#Dari role diarahkan menuju halaman yang sesuai
			if($result["role"] == "admin"){
				$_SESSION["username"] = $uname;
				$_SESSION["role"] = $result["role"];
	
				header("Location: dashboardAdmin.php");
			} elseif ($result["role"] == "user") {
				$_SESSION["username"] = $uname;
				$_SESSION["role"] = $result["role"];
			
				header("Location: dashboard.php");
			}
		}
		$errorLogin = true;

		
	}

	 ?>
	
	<style type="text/css">
		*{
			padding: 0;
			margin: 0;
			box-sizing: border-box;
			font-family: 'Poppins', sans-serif;
		}
		body{
			background-color: #2A7DFF;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
		.login-form{
			background-color: white;
			border-radius: 10px;
			padding: 0px 20px 20px 20px;
			box-shadow: 0px 10px 5px rgba(0,0,0,0.5);
			border: 1px solid #B3B3B3;
		}

		textarea{
			display: block;
			margin:10px 0 20px 0;
			width: 100%;
			padding:10px;
			font-size: 20px;
			border:none;
			border-bottom: 1px solid #B3B3B3;
		}

		input{
			display: block;
			margin:10px 0 20px 0;
			width: 100%;
			padding:10px;
			font-size: 20px;
			border:none;
			border-bottom: 1px solid #B3B3B3;
		}

		h1, h2{
			text-align: center;
		}
		h2{
			margin: 20px 0;
			color:#2A7DFF;
		}
		.login{
			background-color: #2A7DFF;
			color:white;
			border-radius: 5px;
		}
		.login:hover{
			cursor: pointer;
		}
		.login:active{
			transform: translateY(5px);
		}
		footer{
			position: absolute;
			justify-content: center;
			bottom: 0;
		}

		footer p{
			color:white;
			font-weight: 400;
		}
	</style>
	<section class="login-form">
		<h2>LOGIN</h2>
		<p>Username</p>
		<form action="" method="post">
			<textarea onkeypress="return runScript(event)" rows="1" style="resize: none;" name="username"></textarea>
			<p>Password</p>
			<input type="password" name="password">
			<?php if(isset($errorLogin)): ?>
				<p style="color: red">Username or Password is incorrect!</p>
			<?php endif ?>
			<input class="login" type="submit" name="login" value="Sign In">
		</form>
	</section>
	<footer>
		<p>Novian Rizky Perdana | V3420056</p>
	</footer>
	<script language="javascript" src="mask.js"></script>
</body>
</html>