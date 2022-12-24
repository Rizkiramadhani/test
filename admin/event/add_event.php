<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Kalender Event</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Event</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_agenda" name="nama_agenda" placeholder="Nama Event">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Lokasi Event</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="lokasi_agenda" name="lokasi_agenda" placeholder="Lokasi Event">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Latitude Event</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="lat_agenda" name="lat_agenda" placeholder="Latitude Event">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Longitude Event</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="long_agenda" name="long_agenda" placeholder="Longitude Event">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Deskripsi Event</label>
				<div class="col-sm-6">
				<textarea id="desk_agenda" name="desk_agenda" rows="4" class="form-control"" placeholder="Deskripsi Event"></textarea>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kategori Event</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kategori_agenda" name="kategori_agenda" placeholder="Kategori Event">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Event</label>
				<div class="col-sm-6">
					<input type="date" class="form-control" id="tanggal_agenda" name="tanggal_agenda">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Waktu Event</label>
				<div class="col-sm-6">
					<input type="time" class="form-control" id="waktu_agenda" name="waktu_agenda">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pengelola Event</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pengelola_agenda" name="pengelola_agenda" placeholder="Pengelola Event">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Thumbnail Event</label>
				<div class="col-sm-6">
					<input type="file" id="thumbnail_agenda" name="thumbnail_agenda">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Youtube</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="youtube" name="youtube" placeholder="Youtube">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NO. HP Event</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="hp_agenda" name="hp_agenda" placeholder="NO. HP Event">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Facebook Event</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Instagram Event</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram">
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-event" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    $sumber = @$_FILES['thumbnail_agenda']['tmp_name'];
    $target = '../dataFoto/thumb_agenda/';
    $nama_file = @$_FILES['thumbnail_agenda']['name'];
    $pindah = move_uploaded_file($sumber, $target.$nama_file);

    if (isset ($_POST['Simpan'])){

		if(!empty($sumber)){
        $sql_simpan = "INSERT INTO tb_agenda (nama_agenda, 	lokasi_agenda, lat_agenda, long_agenda, deskripsi_agenda, kategori_agenda, tanggal_agenda, waktu_agenda, 	pengelola_agenda, thumb_agenda, youtube_agenda, cp_agenda, facebook_agenda, instagram_agenda) VALUES (
        '".$_POST['nama_agenda']."',
        '".$_POST['lokasi_agenda']."',
        '".$_POST['lat_agenda']."',
        '".$_POST['long_agenda']."',
        '".$_POST['desk_agenda']."',
        '".$_POST['kategori_agenda']."',
        '".$_POST['tanggal_agenda']."',
        '".$_POST['waktu_agenda']."',
        '".$_POST['pengelola_agenda']."',
        '".$nama_file."',
        '".$_POST['youtube']."',
        '".$_POST['hp_agenda']."',
        '".$_POST['facebook']."',
        '".$_POST['instagram']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-event';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-event';
          }
      })</script>";
	}
}elseif(empty($sumber)){
	echo "<script>
	Swal.fire({title: 'Gagal, Foto Wajib Diisi',text: '',icon: 'error',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'index.php?page=add-event';
		}
	})</script>";
  }
}   
