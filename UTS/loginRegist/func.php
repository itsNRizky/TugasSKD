<?php
require 'koneksi.php';

function regist($data)
{
    global $db;
    $nama = $data["nama"];
    $alamat = $data["alamat"];
    $username = $data["username"];
    $email = $data["email"];
    $password = hash('sha256', md5($data["password"]));

    //Pengecekkan email dengan yang di database
    $cekEmail = mysqli_query($db, "SELECT email FROM mahasiswa WHERE email = '$email'");
    if (mysqli_fetch_assoc($cekEmail) > 0) {
        echo '<script>
				alert("Email sudah terdaftar!");
			  </script>';
        return false;
    }

    //Memasukkan data ke database
    $query = "INSERT INTO mahasiswa VALUES
 			('$nama','$alamat','$username', '$email', 
 			 '$password');";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function login($data)
{
    global $db;
    $uname = $data["username"];
    $passwd = hash('sha256', md5($data["password"]));

    $queries = ("SELECT * FROM mahasiswa where username='$uname'");
    $ceklogin = mysqli_query($db, $queries);
    $result = mysqli_fetch_array($ceklogin);
    if (!empty($result)) {
        if ($result["password"] == $passwd) {
            $_SESSION["login"] = md5($uname);
            $_SESSION["username"] = $result['username'];
            header("Location: dashboard.php");
        }
    }
    $errorLogin = true;
    return $errorLogin;
}
