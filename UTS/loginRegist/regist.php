<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./../src/registStyle.css">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    require 'koneksi.php';
    require 'func.php';
    $error_pwd = false;
    if (isset($_POST["regist"])) {
        #Pengecekkan apakah passwordnya sama
        if ($_POST["password"] == $_POST["password2"]) {
            if (regist($_POST) > 0) {
                echo "<script>
        						alert('Akun berhasil terdaftar silahkan cek email dan melakukan login');
        						document.location.href = 'login.php';
        					 </script>";
            } else {
                mysqli_error($db);
            }
        }
        $error_pwd = true;
    }
    ?>
    <header>
        <h2 id='h-title'>UTS PSKD</h2>
        <ul>
            <li><a href="./../index.php">Crypting</a></li>
            <li><a href="regist.php">Regist</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </header>
    <main>
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
                    <?php if ($error_pwd) : ?>
                        <p style="color: red;">Konfirmasi password salah!</p>
                    <?php endif; ?>
                    <input class="submit" type="submit" name="regist" value="Submit">
                </div>
            </form>
        </section>
    </main>
    <footer>
        <p>V3420056 | V3420061 | V3420062 | V3420065 | V3420078</p>
    </footer>
</body>

</html>