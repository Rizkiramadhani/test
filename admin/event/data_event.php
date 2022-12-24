<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Kalender Event</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-event" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID Agenda</th>
						<th>Tanggal Agenda</th>
						<th>Nama Agenda</th>
						<th>Foto Agenda</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("select * from tb_agenda");
					while ($data= $sql->fetch_assoc()) {
					?>

					<tr>
						<td>
							<?php echo $data['id_tb']; ?>
						</td>
						<td>
							<?php echo $data['tanggal_agenda']; ?>
						</td>
						<td>
							<?php echo $data['nama_agenda']; ?>
						</td>
						<td align="center">
							<img src="../dataFoto/thumb_agenda/<?php echo $data['thumb_agenda']; ?>" width="150px" />
						</td>
						<td>
						    <a href="?page=data-ulasanpar&kode=agenda<?php echo $data['id_tb']; ?>" title="Ulasan"
							 class="btn btn-warning btn-sm">
								<i class="fa fa-eye"></i>
							</a>
							<a href="?page=edit-event&kode=<?php echo $data['id_tb']; ?>" title="Ubah"
							 class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-event&kode=<?php echo $data['id_tb']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
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