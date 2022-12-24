<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data Penginapan</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Penginapan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_penginapan" name="nama_penginapan" placeholder="Nama Penginapan">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Lokasi Penginapan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="lokasi_penginapan" name="lokasi_penginapan"  placeholder="Lokasi Penginapan">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Latitude Penginapan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="lat_penginapan" name="lat_penginapan"  placeholder="Latitude Penginapan">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Longitude Penginapan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="long_penginapan" name="long_penginapan" placeholder="Longitude Penginapan" >
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Deskripsi Penginapan</label>
				<div class="col-sm-6">
					<textarea id="desk_penginapan" name="desk_penginapan" rows="4" class="form-control"  placeholder="Deskripsi Penginapan"></textarea>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kategori Penginapan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kategori_penginapan" name="kategori_penginapan"  placeholder="Contoh : Guesthouse, Hotel, Resort, Dll.">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jumlah Kamar Penginapan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="jumlahkamar_penginapan" name="jumlahkamar_penginapan" placeholder="Contoh : 17 Kamar">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kisaran Biaya Penginapan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="biaya_penginapan" name="biaya_penginapan" placeholder="Contoh : Rp.250000 - Rp.370000" >
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pengelola Penginapan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pengelola_penginapan" name="pengelola_penginapan" placeholder="Nama Pengelola">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Fasilitas Penginapan</label>
				<div class="col-sm-6">
				<textarea id="fasilitas_penginapan" name="fasilitas_penginapan" rows="4" class="form-control" placeholder="Contoh : Fasilitas1&&Fasilitas2&&Fasilitas3...dst"></textarea>
				<p class="help-block">
						<font color="red">Pisahkan setiap fasilitas dengan tanda &&</font>
					</p>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Thumbnail Penginapan</label>
				<div class="col-sm-6">
					<input type="file" id="thumbnail_penginapan" name="thumbnail_penginapan" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Youtube</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="youtube" name="youtube" placeholder="Link Youtube">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NO. HP Penginapan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="hp_penginapan" name="hp_penginapan" placeholder="No. HP Penginapan">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Facebook Penginapan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="facebook" name="facebook" placeholder="Link Facebook">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Instagram Penginapan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="instagram" name="instagram" placeholder="Link Instagram">
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-penginapan" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    $sumber = @$_FILES['thumbnail_penginapan']['tmp_name'];
    $target = '../dataFoto/thumb_penginapan/';
    $nama_file = @$_FILES['thumbnail_penginapan']['name'];
    $pindah = move_uploaded_file($sumber, $target.$nama_file);

    if (isset ($_POST['Simpan'])){

		if(!empty($sumber)){
        $sql_simpan = "INSERT INTO tb_hotel (nama_hotel, lokasi_hotel, lat_hotel, long_hotel, deskripsi_hotel, kategori_hotel, jumlahkamar_hotel, kisaranbiaya_hotel, pengelola_hotel, fasilitas, thumb_hotel, youtube_hotel, cp_hotel, facebook_hotel, instagram_hotel) VALUES (
        '".$_POST['nama_penginapan']."',
        '".$_POST['lokasi_penginapan']."',
        '".$_POST['lat_penginapan']."',
        '".$_POST['long_penginapan']."',
        '".$_POST['desk_penginapan']."',
        '".$_POST['kategori_penginapan']."',
        '".$_POST['jumlahkamar_penginapan']."',
        '".$_POST['biaya_penginapan']."',
        '".$_POST['pengelola_penginapan']."',
        '".$_POST['fasilitas_penginapan']."',
        '".$nama_file."',
        '".$_POST['youtube']."',
        '".$_POST['hp_penginapan']."',
        '".$_POST['facebook']."',
        '".$_POST['instagram']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-penginapan';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-penginapan';
          }
      })</script>";
	}
}elseif(empty($sumber)){
	echo "<script>
	Swal.fire({title: 'Gagal, Foto Wajib Diisi',text: '',icon: 'error',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'index.php?page=add-pariwisata';
		}
	})</script>";
  }
}   
