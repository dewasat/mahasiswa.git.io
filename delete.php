<?php
include "koneksi.php";
$nim=$_GET['id'];
$sqlhapus="delete from mahasiswa where nim='$nim'";
$sukses=mysqli_query($koneksi,$sqlhapus);
if ($sukses) {
	echo "<script>alert('Data berhasil dihapus')</script>";
	echo "<script>window.open('index.php','_self')</script>";
} else {
	echo "<script>alert('Penghapusan data gagal')</script>";
	echo "<script>window.open('index.php','_self')</script>";
}