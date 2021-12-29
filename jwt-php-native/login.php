<?php
require_once('./vendor/autoload.php');

use Firebase\JWT\JWT;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit();
}

$json = file_get_contents('php://input');
$input = json_decode($json);

$db = mysqli_connect("localhost", "root", "", "skd_prak_sembilan");
$queries = ("SELECT * FROM user where username='$input->username' and password='$input->password'");
$ceklogin = mysqli_query($db, $queries);
$result = mysqli_fetch_array($ceklogin);

if (empty($result) || $input->password !== $result['password']) {
    echo json_encode([
        'message' => 'Data tidak sesuai'
    ]);
    exit();
}

$expired_time = time() + (15 * 60);

$payload = [
    'email' => $input->email,
    'exp' => $expired_time
];

$access_token = JWT::encode($payload, $_ENV['ACCESS_TOKEN_SECRET']);
echo json_encode([
    'accessToken' => $access_token,
    'expiry' => date(DATE_ISO8601, $expired_time)
]);

$payload['exp'] = time() + (60 * 60);
$refresh_token = JWT::encode($payload, $_ENV['REFRESH_TOKEN_SECRET']);

setcookie('refreshToken', $refresh_token, $payload['exp'], '', '', false, true);
