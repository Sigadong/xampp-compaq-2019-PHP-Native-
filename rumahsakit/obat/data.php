<?php include_once('../_header.php');?>

		<div class="box">
			<h1>Obat</h1>
			<h4>
				<small>Data Obat</small>
				<div class="pull-right">
					<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
					<a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah Obat</a>
				</div>
			</h4>
			<!-- ini adlh form input pencarian -->
			<div style="margin-bottom: 20px;">
				<form action="" class="form-inline" method="post">
					<div class="form-group">
						<input type="text" name="pencarian" class="form-control" placeholder="Pencarian">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
					</div>
				</form>
			</div>
			<!-- ini adlh tampil data, aksi dan hasil pencarian -->
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>No.</th>
							<th>Nama Obat</th>
							<th>Keterangan</th>
							<th><i class="glyphicon glyphicon-cog"></i></th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$batas = 3;
						$hal = @$_GET['hal'];
						if (empty($hal)) {
							$posisi = 0;
							$hal = 1;
						} else {
							$posisi = ($hal - 1) * $batas;
						}
						$no = 1;
						if($_SERVER['REQUEST_METHOD'] == "POST") {
							$pencarian = trim(mysqli_real_escape_string($con, $_POST['pencarian']));
							if ($pencarian != '') {
								$sql = "SELECT * FROM tb_obat WHERE nama_obat like '%$pencarian%'";
								$query = $sql;
								$queryJml = $sql;
							} else {
								$query = "SELECT * FROM tb_obat LIMIT $posisi, $batas";
								$queryJml = "SELECT * FROM tb_obat";
								$no = $posisi + 1;
							}
						} else {
								$query = "SELECT * FROM tb_obat LIMIT $posisi, $batas";
								$queryJml = "SELECT * FROM tb_obat";
								$no = $posisi + 1;					 
						}
						$sql_obat = mysqli_query($con, $query) or die(mysqli_error($con));
						if (mysqli_num_rows($sql_obat) > 0) {
							while($data = mysqli_fetch_array($sql_obat)) { ?>
								<tr>
									<td><?=$no++?></td>
									<td><?=$data['nama_obat']?></td>
									<td><?=$data['ket_obat']?></td>
									<td class="text-center">
										<a href="edit.php?id=<?=$data['id_obat']?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
										<a href="del.php?id=<?=$data['id_obat']?>" onclick="return confirm('Yakin ingin menghapus Data?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
									</td>
								</tr>
								<?php 
							}
						} else {
							echo "<tr><td colspan=\"4\" align=\"center\">Data tidak ditemukan</td></tr>"; 
						}
						?>
					</tbody>
				</table>
			</div>	
			<?php  
				if(isset($_POST['pencarian']) && $_POST['pencarian'] == '') { ?>
					<div style="float:left;">
						<?php 
						$jml = mysqli_num_rows(mysqli_query($con, $queryJml));
						echo "Jumlah Data : <b>$jml</b>";
						 ?>
					</div>
					<?php 
				} else { 
					echo "<div style=\"float:left;\">";
					$jml = mysqli_num_rows(mysqli_query($con, $queryJml));
					echo "Data hasil pencarian : <b>$jml</b>";
					echo "</div>";
			    }
			    ?>
			    <div style="float:right;">
					<ul class="pagination pagination-sm" style="margin:0">
						<?php 
							$jml_hal = ceil($jml / $batas);
							for ($i=1; $i <= $jml_hal; $i++) { 
								if ($i != $hal) {
									echo "<li><a href=\"?hal=$i\">$i</a></li>";
								} else {
									echo "<li class=\"active\"><a>$i</a></li>";
								}
							}
						 ?>
					</ul>
				</div>
		</div>
<?php include_once('../_footer.php');?>