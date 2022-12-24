<?php

    date_default_timezone_set('Asia/Jakarta');
    
    $date_now= date("Y-m-d");

	$data_jenis = $_SESSION["ses_jenis"];
	$data_idpengelola = $_SESSION["ses_idpengelola"];
	
?>

<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Laporan Pengunjung Pariwisata</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">
		    
		    <div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal</label>
				<div class="col-sm-6">
					<input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $date_now; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jumlah Pengunjung (Lokal)</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pengunjung_lokal" name="pengunjung_lokal" placeholder="Jumlah Pengunjung (Lokal)">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jumlah Pengunjung (Turis)</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pengunjung_turis" name="pengunjung_turis" placeholder="Jumlah Pengunjung (Turis)">
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
		</div>
	</form>
</div>

<?php
    if (isset ($_POST['Simpan'])){
        
        $sql_simpan = "INSERT INTO pengunjung (id_pengunjung, tanggal, lokal, turis) VALUES (
        '$data_jenis$data_idpengelola',
        '".$_POST['tanggal']."',
        '".$_POST['pengunjung_lokal']."',
        '".$_POST['pengunjung_turis']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=laporan-pengelolapar';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=laporan-pengelolapar';
          }
      })</script>";
	}
}   
