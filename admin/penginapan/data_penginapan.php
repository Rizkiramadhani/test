<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Penginapan</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-penginapan" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID Penginapan</th>
						<th>Nama Penginapan</th>
						<th>Foto Penginapan</th>
						<th>Lokasi</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("select * from tb_hotel");
					while ($data= $sql->fetch_assoc()) {
					?>

					<tr>
						<td>
							<?php echo $data['id_tb']; ?>
						</td>
						<td>
							<?php echo $data['nama_hotel']; ?>
						</td>
						<td align="center">
							<img src="../dataFoto/thumb_penginapan/<?php echo $data['thumb_hotel']; ?>" width="150px" />
						</td>
						<td>
							<?php echo $data['lokasi_hotel']; ?>
						</td>
						<td>
						    <a href="?page=data-ulasanpar&kode=penginapan<?php echo $data['id_tb']; ?>" title="Ulasan"
							 class="btn btn-warning btn-sm">
								<i class="fa fa-eye"></i>
							</a>
							<a href="?page=edit-penginapan&kode=<?php echo $data['id_tb']; ?>" title="Ubah"
							 class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-penginapan&kode=<?php echo $data['id_tb']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
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