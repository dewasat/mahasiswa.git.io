<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<form action="simpanbaru.php" method="post" >
					<div class="form-group">
						<label for="nim">NIM</label>
						<input type="text" name="nim" class="form-control" placeholder="NIM Mahasiswa">
					</div>
					<div class="form-group">
						<label for="nama">Nama Mahasiswa</label>
						<input type="text" name="nama" class="form-control" placeholder="Nama Mahasiswa">
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<input type="text" name="alamat" class="form-control" placeholder="alamat">
					</div>
					<div class="form-group">
						<label for="kota">KOTA</label>
						<input type="text" name="kota" class="form-control" placeholder="Kota">
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button> &nbsp <button type="reset" class="btn btn-success">Reset</button>
				</form>
			</div>
		</div>
	</div>
</body>