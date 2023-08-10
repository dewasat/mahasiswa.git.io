<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbnm = "kampus";
$koneksi = mysqli_connect ($host, $user, $pass);
if ($koneksi) {
 $buka = mysqli_select_db($koneksi,$dbnm);
 if (!$buka) {
 die ("Database tidak dapat dibuka");
 }
} else {
 die ("Server MySQL tidak terhubung");
}
?> 
