<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data Objek Wisata</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_pariwisata" name="nama_pariwisata" placeholder="Nama Objek Wisata">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Lokasi Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="lokasi_pariwisata" name="lokasi_pariwisata" placeholder="Lokasi Objek Wisata">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Latitude Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="lat_pariwisata" name="lat_pariwisata" placeholder="Latitude Objek Wisata">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Longitude Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="long_pariwisata" name="long_pariwisata" placeholder="Longitude Objek Wisata">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Deskripsi Objek Wisata</label>
				<div class="col-sm-6">
				<textarea id="desk_pariwisata" name="desk_pariwisata" rows="4" class="form-control" placeholder="Deskripsi Objek Wisata"></textarea>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kondisi Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kondisi_pariwisata" name="kondisi_pariwisata" placeholder="Baik, Sedang Dalam Perawatan, Dll.">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="status_pariwisata" name="status_pariwisata" placeholder="Buka, Tutup, Dll.">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jalur Transportasi Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="transportasi_pariwisata" name="transportasi_pariwisata" placeholder="Mobil, Sepeda Motor, Sepeda, Jalan Kaki, Dll.">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jarak Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="jarak_pariwisata" name="jarak_pariwisata" placeholder="3 KM dari kota">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jam Operasional Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="jam_pariwisata" name="jam_pariwisata" placeholder="Contoh : 08:00 - 16:00 WITA">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kisaran Biaya Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="biaya_pariwisata" name="biaya_pariwisata" placeholder="Contoh : Rp.3000 Perorang">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pengelola Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pengelola_pariwisata" name="pengelola_pariwisata" placeholder="Nama Pengelola Objek Wisata">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Fasilitas Objek Wisata</label>
				<div class="col-sm-6">
				<textarea id="fasilitas_pariwisata" name="fasilitas_pariwisata" rows="4" class="form-control" placeholder="Contoh : Fasilitas1&&Fasilitas2&&Fasilitas3...dst"></textarea>
				<p class="help-block">
						<font color="red">Pisahkan setiap fasilitas dengan tanda &&</font>
					</p>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Thumbnail Objek Wisata</label>
				<div class="col-sm-6">
					<input type="file" id="thumbnail_pariwisata" name="thumbnail_pariwisata">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Youtube</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="youtube" name="youtube" placeholder="Link Youtube">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NO. HP Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="hp_pariwisata" name="hp_pariwisata" placeholder="NO. HP Objek Wisata">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Facebook Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="facebook" name="facebook" placeholder="Link Facebook">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Instagram Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="instagram" name="instagram" placeholder="Link Instagram">
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-pariwisata" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    $sumber = @$_FILES['thumbnail_pariwisata']['tmp_name'];
    $target = '../dataFoto/thumb_pariwisata/';
    $nama_file = @$_FILES['thumbnail_pariwisata']['name'];
    $pindah = move_uploaded_file($sumber, $target.$nama_file);

    if (isset ($_POST['Simpan'])){

		if(!empty($sumber)){
        $sql_simpan = "INSERT INTO tb_objekwisata (nama_objekwisata, lokasi_objekwisata, lat_objekwisata, long_objekwisata, deskripsi_objekwisata, kondisi_objekwisata, status_objekwisata, jalurtransportasi_objekwisata, jam_objekwisata, jarak_objekwisata, biaya_objekwisata, pengelola_objekwisata, fasilitas, thumb_objekwisata, youtube_objekwisata, cp_objekwisata, facebook_objekwisata, instagram_objekwisata) VALUES (
        '".$_POST['nama_pariwisata']."',
        '".$_POST['lokasi_pariwisata']."',
        '".$_POST['lat_pariwisata']."',
        '".$_POST['long_pariwisata']."',
        '".$_POST['desk_pariwisata']."',
        '".$_POST['kondisi_pariwisata']."',
        '".$_POST['status_pariwisata']."',
        '".$_POST['transportasi_pariwisata']."',
        '".$_POST['jam_pariwisata']."',
        '".$_POST['jarak_pariwisata']."',
        '".$_POST['biaya_pariwisata']."',
        '".$_POST['pengelola_pariwisata']."',
        '".$_POST['fasilitas_pariwisata']."',
        '".$nama_file."',
        '".$_POST['youtube']."',
        '".$_POST['hp_pariwisata']."',
        '".$_POST['facebook']."',
        '".$_POST['instagram']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-pariwisata';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-pariwisata';
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
