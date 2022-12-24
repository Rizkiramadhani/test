<?php

	$data_jenis = $_SESSION["ses_jenis"];
	$data_idpengelola = $_SESSION["ses_idpengelola"];
	
?>

<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Ulasan Pengunjung</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<br>
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Ulasan</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$no = 1;
					$sql = $koneksi->query("select * from ulasan where id_rate='$data_jenis$data_idpengelola'");
					while ($data= $sql->fetch_assoc()) {
					?>

					<tr>
						<td>
							<?php echo $data['ulasan']; ?>
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