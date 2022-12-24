<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Ulasan Belum Diverifikasi</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Rate</th>
						<th>Ulasan</th>
						<th>Foto Ulasan</th>
						<th>Verifikasi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $sql = $koneksi->query("select * from ulasan where status=1 and id_rate='".$_GET['kode']."'");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td>
							<?php echo $data['nama']; ?>
						</td>
						<td>
							<?php echo $data['rate']; ?>
						</td>
						<td>
							<?php echo $data['ulasan']; ?>
						</td>
						<td align="center">
							<?php echo "<img src='../dataFoto/thumb_pariwisata/$data[foto]' width='70' height='90' />";?>
						</td>
						<td>
						<a href="?page=verifikasi-par&kode=<?php echo $data['id_tb']; ?>" onclick="return confirm('Apakah anda yakin memverifikasi ulasan ini ?')"
							 title="Hapus" class="btn btn-success btn-sm">
							 <i class="fa fa-check"></i>
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