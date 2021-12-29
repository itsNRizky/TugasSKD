<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../src/loginStyle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;600&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <?php
    session_start();
    require 'koneksi.php';
    require 'func.php';
    $errorLogin = false;
    if (isset($_POST["login"])) {
        if (login($_POST) > 0) {
        } else {
            mysqli_error($db);
        }

        $errorLogin = true;
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
        <div class="left">
            <h1>Tugas Login Dengan Enkripsi Md5</h1>
            <img style="width: 500px" src="./../src/img1.png" alt="Gambar1">
        </div>
        <div class="right">
            <section class="login-form">
                <h1>Log In</h1>
                <form action="" method="POST">
                    <label for="username">
                        <p>Username</p>
                    </label>
                    <input type="text" name="username">
                    <label for="password">
                        <p>Password</p>
                    </label>
                    <input type="password" name="password">
                    <?php if ($errorLogin) : ?>
                        <p style="color: red;">Username atau password salah!</p>
                    <?php endif; ?>
                    <input id="login-btn" type="submit" value="Login" name="login">
                </form>
            </section>
        </div>
    </main>
    <footer>
        <p>V3420056 | V3420061 | V3420062 | V3420065 | V3420078</p>
    </footer>
</body>

</html>