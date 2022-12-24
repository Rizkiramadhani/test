<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data Kuliner</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Kuliner</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_kuliner" name="nama_kuliner" placeholder="Nama Kuliner">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Lokasi Kuliner</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="lokasi_kuliner" name="lokasi_kuliner" placeholder="Lokasi Kuliner">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Latitude Kuliner</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="lat_kuliner" name="lat_kuliner" placeholder="Latitude Kuliner">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Longitude Kuliner</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="long_kuliner" name="long_kuliner" placeholder="Longitude Kuliner">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Deskripsi Kuliner</label>
				<div class="col-sm-6">
					<textarea id="desk_kuliner" name="desk_kuliner" rows="4" class="form-control"  placeholder="Deskripsi Kuliner"></textarea>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kategori Kuliner</label>
				<div class="col-sm-4">
					<select name="kategori_kuliner" id="kategori_kuliner" class="form-control">
						<option>Cafe</option>
						<option>Rumah Makan</option>
						<option>Oleh - Oleh</option>
					</select>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kapasitas Kuliner</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kapasitas_kuliner" name="kapasitas_kuliner" placeholder="Contoh : 11 Orang">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jam Operasional Kuliner</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="jam_kuliner" name="jam_kuliner" placeholder="Contoh : 14:00 - 22:00 WITA">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pengelola Kuliner</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pengelola_kuliner" name="pengelola_kuliner" placeholder="Pengelola Kuliner">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Fasilitas Kuliner</label>
				<div class="col-sm-6">
				<textarea id="fasilitas_kuliner" name="fasilitas_kuliner" rows="4" class="form-control" placeholder="Contoh : Fasilitas1&&Fasilitas2&&Fasilitas3...dst"></textarea>
				<p class="help-block">
						<font color="red">Pisahkan setiap fasilitas dengan tanda &&</font>
					</p>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Thumbnail Kuliner</label>
				<div class="col-sm-6">
					<input type="file" id="thumbnail_kuliner" name="thumbnail_kuliner">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Youtube</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="youtube" name="youtube" placeholder="Link Youtube">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NO. HP Kuliner</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="hp_kuliner" name="hp_kuliner" placeholder="NO. HP Kuliner">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Facebook Kuliner</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="facebook" name="facebook" placeholder="Link Facebook">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Instagram Kuliner</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="instagram" name="instagram" placeholder="Link Instagram">
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-kuliner" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    $sumber = @$_FILES['thumbnail_kuliner']['tmp_name'];
    $target = '../dataFoto/thumb_kuliner/';
    $nama_file = @$_FILES['thumbnail_kuliner']['name'];
    $pindah = move_uploaded_file($sumber, $target.$nama_file);

    if (isset ($_POST['Simpan'])){

		if(!empty($sumber)){
        $sql_simpan = "INSERT INTO tb_kuliner (nama_kuliner, lokasi_kuliner, lat_kuliner, long_kuliner, deskripsi_kuliner, kategori_kuliner, kapasitas_kuliner, jam_kuliner, pengelola_kuliner, fasilitas, thumb_kuliner, youtube_kuliner, cp_kuliner, facebook_kuliner, instagram_kuliner) VALUES (
        '".$_POST['nama_kuliner']."',
        '".$_POST['lokasi_kuliner']."',
        '".$_POST['lat_kuliner']."',
        '".$_POST['long_kuliner']."',
        '".$_POST['desk_kuliner']."',
        '".$_POST['kategori_kuliner']."',
        '".$_POST['kapasitas_kuliner']."',
        '".$_POST['jam_kuliner']."',
        '".$_POST['pengelola_kuliner']."',
        '".$_POST['fasilitas_kuliner']."',
        '".$nama_file."',
        '".$_POST['youtube']."',
        '".$_POST['hp_kuliner']."',
        '".$_POST['facebook']."',
        '".$_POST['instagram']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-kuliner';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-kuliner';
          }
      })</script>";
	}
}elseif(empty($sumber)){
	echo "<script>
	Swal.fire({title: 'Gagal, Foto Wajib Diisi',text: '',icon: 'error',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'index.php?page=add-kuliner';
		}
	})</script>";
  }
}   
