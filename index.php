<?php
 include "koneksi.php";
 $sql = "select * from mahasiswa";
 $hasil = mysqli_query($koneksi,$sql);
?>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h3>Daftar Mahasiswa</h3>
				<a href="tambah.php" class="btn btn-primary" role="button">Tambah Data</a>
				<table class="table table-striped table-bordered table-hover">
					<tr>
						<th>No.</th>
						<th>N I M</th>
						<th>Nama Mahasiswa</th>
						<th>Alamat</th>
						<th>Kota</th>
						<th>Aksi</th>
					</tr>
					<?php
						$no =0;
						while($data=mysqli_fetch_array($hasil)){
							$no++;
					?>		
						<tr>
							<td><?php echo "$no"; ?></td>
							<td><?php echo $data['nim']; ?></td>
							<td><?php echo $data['nama']; ?></td>
							<td><?php echo $data['alamat']; ?></td>
							<td><?php echo $data['kota']; ?></td>
							<td><a href="edit.php?id=<?php echo $data['nim']; ?>"><input type="button" class="btn btn-primary" name="edit" value="Edit"></a>&nbsp<a href="delete.php?id=<?php echo $data['nim']; ?>"><input type="button" class="btn btn-danger" name="delete" value="Hapus"></a></td>
						</tr>
					<?php } ?>
					
				</table>
			<?php
				
			?>
			</div>
		</div>
	</div>
	
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
</body>