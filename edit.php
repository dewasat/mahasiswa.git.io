<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<?php
	include "koneksi.php";
	$nim = $_GET['id'];
	$sql="Select * from mahasiswa where nim='$nim'";
	$hasil = mysqli_query($koneksi,$sql);
	while ($data=mysqli_fetch_array($hasil)) {
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
			   <form action="simpanedit.php" method="post" >
					<div class="form-group">
						<label for="nim">NIM</label>
						<input type="text" name="nim" class="form-control" value="<?php echo $data['nim']; ?>" readonly>
					</div>
					<div class="form-group">
						<label for="nama">Nama Mahasiswa</label>
						<input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>">
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat']; ?>">
					</div>
					<div class="form-group">
						<label for="kota">KOTA</label>
						<input type="text" name="kota" class="form-control" value="<?php echo $data['kota']; ?>">
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button> 
				</form>	
			</div>
		</div>
	</div>
	<?php	
	} ?>
?>