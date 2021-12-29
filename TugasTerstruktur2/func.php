<?php 
require 'koneksi.php';

function regist($data){
	global $db;
	$nama = $data["nama"];
	$alamat = $data["alamat"];
	$username = $data["username"];
	$email = $data["email"];
	$password = $data["password"];
	$token = hash('sha256', md5(date('Y-m-d-s'))) ;
	$aktif = $data["aktif"];


	//Pengecekkan email dengan yang di database
	$cekEmail = mysqli_query($db, "SELECT email FROM users WHERE email = '$email'");
	if(mysqli_fetch_assoc($cekEmail) > 0){
		echo '<script>
				alert("Email sudah terdaftar!");
			  </script>';
		return false;
	}

	//Memasukkan data ke database
	$query = "INSERT INTO users VALUES
 			('$nama','$alamat','$username', '$email', 
 			 '$password', '$token', '$aktif');";
	mysqli_query($db, $query);

	include 'mail.php';
	
 	return mysqli_affected_rows($db);
}

function login($data){
	global $db;
	$uname = $_POST["username"];
    $passwd = $_POST["password"];
   
    $queries=("SELECT * FROM users where username='$uname'");
    $ceklogin=mysqli_query($db, $queries);
    $result = mysqli_fetch_array($ceklogin);
    if(!empty($result)){
        if($result["password"] == $passwd){
        	if ($result['aktif'] == '0'){
        	    echo '<script>
        	    		alert("Akun belum diaktivasi!");
        	    	  </script>';
	
        	    return false;
        	}

            $_SESSION["login"] = md5($uname);
            $_SESSION["username"] = $result['username'];
            header("Location: index.php");
        }
    }
    $errorLogin = true;
    return $errorLogin;
}
 ?>

