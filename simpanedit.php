<?php
	include 'koneksi.php';
	$nim=$_POST['nim'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$kota=$_POST['kota'];

	$sqledit="update mahasiswa set nama='$nama', alamat='$alamat', kota='$kota' where nim='$nim' ";
	$sukses=mysqli_query($koneksi,$sqledit);
	if(!$sukses){
		echo "Gagal menyimpan data";
	}else{
		echo"Data berhasil tersimpan";
		header("location:index.php");
	}
?>