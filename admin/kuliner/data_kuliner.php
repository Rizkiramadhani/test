<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Kuliner</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-kuliner" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID Kuliner</th>
						<th>Nama Kuliner</th>
						<th>Foto Kuliner</th>
						<th>Lokasi</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("select * from tb_kuliner");
					while ($data= $sql->fetch_assoc()) {
					?>

					<tr>
						<td>
							<?php echo $data['id_tb']; ?>
						</td>
						<td>
							<?php echo $data['nama_kuliner']; ?>
						</td>
						<td align="center">
							<img src="../dataFoto/thumb_kuliner/<?php echo $data['thumb_kuliner']; ?>" width="150px" />
						</td>
						<td>
							<?php echo $data['lokasi_kuliner']; ?>
						</td>
						<td>
						    <a href="?page=data-ulasanpar&kode=kuliner<?php echo $data['id_tb']; ?>" title="Ulasan"
							 class="btn btn-warning btn-sm">
								<i class="fa fa-eye"></i>
							</a>
							<a href="?page=edit-kuliner&kode=<?php echo $data['id_tb']; ?>" title="Ubah"
							 class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-kuliner&kode=<?php echo $data['id_tb']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
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