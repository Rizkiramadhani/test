<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Paket Wisata</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-paketwisata" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID Paket Wisata</th>
						<th>Paket Wisata</th>
						<th>Thumbnail Paket Wisata</th>
						<th>Tour Guide</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("select * from tb_paketwisata");
					while ($data= $sql->fetch_assoc()) {
					?>

					<tr>
						<td>
							<?php echo $data['id_tb']; ?>
						</td>
						<td>
							<?php echo $data['nama_paketwisata']; ?>
						</td>
						<td align="center">
							<img src="../dataFoto/thumb_paketwisata/<?php echo $data['thumb_paketwisata']; ?>" width="150px" />
						</td>
						<td>
							<?php echo $data['guide_paketwisata']; ?>
						</td>
						<td>
						    <a href="?page=data-ulasanpar&kode=paketwisata<?php echo $data['id_tb']; ?>" title="Ulasan"
							 class="btn btn-warning btn-sm">
								<i class="fa fa-eye"></i>
							</a>
							<a href="?page=edit-paketwisata&kode=<?php echo $data['id_tb']; ?>" title="Ubah"
							 class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-paketwisata&kode=<?php echo $data['id_tb']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
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