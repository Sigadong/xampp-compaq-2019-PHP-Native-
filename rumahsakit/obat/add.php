<?php 
include_once('../_header.php');
 ?>
	<div class="box">
		<h1>Obat</h1>
		<h4><small>Tambah Data Obat</small>
			<div class="pull-right">
				<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-cevron-left"></i> Kembali</a>
			</div>
		</h4>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<form action="proses.php" method="post">
					<div class="form-group">
						<label for="nama">Nama Obat</label>
						<input type="text" name="nama" id="nama" class="form-control" required autofocus>
					</div>
					<div class="form-group">
						<label for="nama">Keterangan Obat</label>
						<textarea name="ket" id="ket" class="form-control" required></textarea>
					</div>
					<div class="form-group pull-right">
						<input type="submit" name="add" value="Simpan" class="btn btn-success">
					</div>
				</form>
			</div>
		</div>
	</div>

<?php include_once('../_footer.php'); ?>