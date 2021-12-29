<?php 
require 'koneksi.php';
$queries=("SELECT password, role FROM user where username='$uname'");
$ceklogin=mysqli_query($db, $queries);
$result=mysqli_fetch_array($ceklogin);

 ?>