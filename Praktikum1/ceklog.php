<?php 
require 'koneksi.php';
$queries=("SELECT role FROM user where username='$uname' and password='$passwd'");
$ceklogin=mysqli_query($db, $queries);
$result=mysqli_fetch_array($ceklogin);

 ?>