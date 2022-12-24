<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Informasi Terbaru</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-infoterbaru" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tanggal</th>
						<th>Judul</th>
						<th>Thumbnail</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("select * from tb_infoterbaru");
					while ($data= $sql->fetch_assoc()) {
					?>

					<tr>
						<td>
							<?php echo $data['id_tb']; ?>
						</td>
						<td>
							<?php echo $data['tanggal']; ?>
						</td>
						<td>
							<?php echo $data['headline_infoterbaru']; ?>
						</td>
						<td align="center">
							<img src="../dataFoto/info_terbaru/<?php echo $data['thumb_infoterbaru']; ?>" width="150px" />
						</td>
						<td>
							<a href="?page=edit-infoterbaru&kode=<?php echo $data['id_tb']; ?>" title="Ubah"
							 class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-infoterbaru&kode=<?php echo $data['id_tb']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
							</a>
						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->