<?php
	include 'koneksi.php';
	$nim=$_POST['nim'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$kota=$_POST['kota'];

	$sqltambah="insert into mahasiswa values('$nim','$nama','$alamat','$kota')";
	$sukses=mysqli_query($koneksi,$sqltambah);
	if(!$sukses){
		echo "Gagal menyimpan data";
	}else{
		echo"Data berhasil tersimpan";
		header("location:index.php");
	}
?>