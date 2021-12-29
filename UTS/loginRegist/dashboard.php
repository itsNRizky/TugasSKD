<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background-color: #552b7b;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .logged {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .logged h1 {
            margin-bottom: 20px;
        }

        a {
            display: block;
            padding: 10px;
            border: 1px solid #552b7b;
            text-decoration: none;
            margin-top: 30px;
        }

        a:hover {
            background-color: #552b7b;
            color: white;
            transition: 0.5s;
        }
    </style>
    <?php
    session_start();
    if (empty($_SESSION['login'])) {
        header("Location: login.php");
    }
    require 'koneksi.php';
    $username = $_SESSION["username"];
    //data akun
    $queries = ("SELECT * FROM mahasiswa where username='$username'");
    $data = mysqli_query($db, $queries);
    $result = mysqli_fetch_array($data);
    ?>
    <section class="logged">
        <h1>Selamat datang <?php echo $result["nama"]; ?>!</h1>
        <p>Alamat: <?php echo $result["alamat"] ?></p>
        <p>Email: <?php echo $result["email"] ?></p>
        <a href="logout.php">Keluar</a>
    </section>
</body>

</html>