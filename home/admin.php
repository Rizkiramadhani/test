<?php
  $sql = $koneksi->query("SELECT COUNT(id_tb) as tot_pariwisata  from tb_objekwisata");
  while ($data= $sql->fetch_assoc()) {
    $pariwisata=$data['tot_pariwisata'];
  }
  
  $sql = $koneksi->query("SELECT COUNT(id_tb) as tot_penginapan  from tb_hotel");
  while ($data= $sql->fetch_assoc()) {
    $penginapan=$data['tot_penginapan'];
  }
  
  $sql = $koneksi->query("SELECT COUNT(id_tb) as tot_kuliner  from tb_kuliner");
  while ($data= $sql->fetch_assoc()) {
    $kuliner=$data['tot_kuliner'];
  }
  
  $sql = $koneksi->query("SELECT COUNT(id_tb) as tot_agenda  from tb_agenda");
  while ($data= $sql->fetch_assoc()) {
    $agenda=$data['tot_agenda'];
  }
  
  $sql = $koneksi->query("SELECT COUNT(id_tb) as tot_paketwisata  from tb_paketwisata");
  while ($data= $sql->fetch_assoc()) {
    $paketwisata=$data['tot_paketwisata'];
  }
?>

<div class="row">
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-warning">
			<div class="inner">
				<h5>
					<?php echo $pariwisata; ?>
				</h5>

				<p>Jumlah Objek Wisata Terdaftar</p>
			</div>
			<div class="icon">
				<i class="ion ion-stats-bars"></i>
			</div>
			<a href="" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>

	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-warning">
			<div class="inner">
				<h5>
					<?php echo $penginapan; ?>
				</h5>

				<p>Jumlah Penginapan Terdaftar</p>
			</div>
			<div class="icon">
				<i class="ion ion-stats-bars"></i>
			</div>
			<a href="" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	
		<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-warning">
			<div class="inner">
				<h5>
					<?php echo $kuliner; ?>
				</h5>

				<p>Jumlah Kuliner Terdaftar</p>
			</div>
			<div class="icon">
				<i class="ion ion-stats-bars"></i>
			</div>
			<a href="" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-warning">
			<div class="inner">
				<h5>
					<?php echo $agenda; ?>
				</h5>

				<p>Jumlah Agenda Terdaftar</p>
			</div>
			<div class="icon">
				<i class="ion ion-stats-bars"></i>
			</div>
			<a href="" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>
	
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-warning">
			<div class="inner">
				<h5>
					<?php echo $paketwisata; ?>
				</h5>

				<p>Jumlah Paket Wisata Terdaftar</p>
			</div>
			<div class="icon">
				<i class="ion ion-stats-bars"></i>
			</div>
			<a href="" class="small-box-footer">Selengkapnya
				<i class="fas fa-arrow-circle-right"></i>
			</a>
		</div>
	</div>