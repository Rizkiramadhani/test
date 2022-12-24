<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data Paket Wisata</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

		<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Paket Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_paketwisata" name="nama_paketwisata" placeholder="Nama Paket Wisata">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Lokasi Paket Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="lokasi_paketwisata" name="lokasi_paketwisata" placeholder="Lokasi Paket Wisata">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Latitude Paket Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="lat_paketwisata" name="lat_paketwisata" placeholder="Latitude Paket Wisata">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Longitude Paket Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="long_paketwisata" name="long_paketwisata" placeholder="Longitude Paket Wisata">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Deskripsi Paket Wisata</label>
				<div class="col-sm-6">
					<textarea id="desk_paketwisata" name="desk_paketwisata" rows="4"  class="form-control" placeholder="Deskripsi Paket Wisata"></textarea>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Rute Paket Wisata</label>
				<div class="col-sm-6">
					<textarea id="rute_paketwisata" name="rute_paketwisata" rows="3" class="form-control" placeholder="Rute Paket Wisata"></textarea>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Biaya Paket Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="biaya_paketwisata" name="biaya_paketwisata" placeholder="Biaya Paket Wisata">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tour Guide Paket Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="guide_paketwisata" name="guide_paketwisata" placeholder="Tour Guide Paket Wisata">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Detail Rute Paket Wisata</label>
				<div class="col-sm-6">
					<textarea id="detailrute_paketwisata" name="detailrute_paketwisata" rows="12" class="form-control" placeholder="Detail Rute Paket Wisata"></textarea>
					<p class="help-block">
						<font color="red">Pisahkan Setiap Poin Rute Dengan Tanda &&</font>
					</p>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Thumbnail Paket Wisata</label>
				<div class="col-sm-6">
					<input type="file" id="thumbnail_paketwisata" name="thumbnail_paketwisata" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Youtube</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="youtube" name="youtube" placeholder="Youtube">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NO. HP Paket Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="hp_paketwisata" name="hp_paketwisata" placeholder="NO. HP Paket Wisata">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Facebook Paket Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Instagram Paket Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram">
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-paketwisata" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    $sumber = @$_FILES['thumbnail_paketwisata']['tmp_name'];
    $target = '../dataFoto/thumb_paketwisata/';
    $nama_file = @$_FILES['thumbnail_paketwisata']['name'];
    $pindah = move_uploaded_file($sumber, $target.$nama_file);

    if (isset ($_POST['Simpan'])){

		if(!empty($sumber)){
        $sql_simpan = "INSERT INTO tb_paketwisata (nama_paketwisata, lokasi_paketwisata, lat_paketwisata, long_paketwisata, deskripsi_paketwisata, rute_paketwisata, biaya_paketwisata, guide_paketwisata, fasilitas, thumb_paketwisata, youtube_paketwisata, cp_paketwisata, facebook_paketwisata, instagram_paketwisata) VALUES (
        '".$_POST['nama_paketwisata']."',
        '".$_POST['lokasi_paketwisata']."',
        '".$_POST['lat_paketwisata']."',
        '".$_POST['long_paketwisata']."',
        '".$_POST['desk_paketwisata']."',
        '".$_POST['rute_paketwisata']."',
        '".$_POST['biaya_paketwisata']."',
        '".$_POST['guide_paketwisata']."',
        '".$_POST['detailrute_paketwisata']."',
        '".$nama_file."',
        '".$_POST['youtube']."',
        '".$_POST['hp_paketwisata']."',
        '".$_POST['facebook']."',
        '".$_POST['instagram']."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-paketwisata';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-paketwisata';
          }
      })</script>";
	}
}elseif(empty($sumber)){
	echo "<script>
	Swal.fire({title: 'Gagal, Foto Wajib Diisi',text: '',icon: 'error',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'index.php?page=add-paketwisata';
		}
	})</script>";
  }
}   
