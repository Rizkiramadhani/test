<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_hotel WHERE id_tb='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data Penginapan</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

		<div class="form-group row" hidden>
				<label class="col-sm-2 col-form-label">ID Penginapan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="id_penginapan" name="id_penginapan" value="<?php echo $data_cek['id_tb']; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Penginapan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_penginapan" name="nama_penginapan" value="<?php echo $data_cek['nama_hotel']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Lokasi Penginapan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="lokasi_penginapan" name="lokasi_penginapan" value="<?php echo $data_cek['lokasi_hotel']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Latitude Penginapan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="lat_penginapan" name="lat_penginapan" value="<?php echo $data_cek['lat_hotel']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Longitude Penginapan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="long_penginapan" name="long_penginapan" value="<?php echo $data_cek['long_hotel']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Deskripsi Penginapan</label>
				<div class="col-sm-6">
					<textarea id="desk_penginapan" name="desk_penginapan" rows="4" class="form-control"><?php echo $data_cek['deskripsi_hotel']; ?></textarea>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kategori Penginapan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kategori_penginapan" name="kategori_penginapan" value="<?php echo $data_cek['kategori_hotel']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jumlah Kamar Penginapan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="jumlahkamar_penginapan" name="jumlahkamar_penginapan" value="<?php echo $data_cek['jumlahkamar_hotel']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kisaran Biaya Penginapan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="biaya_penginapan" name="biaya_penginapan" value="<?php echo $data_cek['kisaranbiaya_hotel']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pengelola Penginapan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pengelola_penginapan" name="pengelola_penginapan" value="<?php echo $data_cek['pengelola_hotel']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Fasilitas Penginapan</label>
				<div class="col-sm-6">
				<textarea id="fasilitas_penginapan" name="fasilitas_penginapan" rows="4" class="form-control"><?php echo $data_cek['fasilitas']; ?></textarea>
				<p class="help-block">
						<font color="red">Pisahkan setiap fasilitas dengan tanda &&</font>
					</p>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Thumbnail Penginapan</label>
				<div class="col-sm-6">
					<input type="file" id="thumbnail_penginapan" name="thumbnail_penginapan">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Youtube</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="youtube" name="youtube" value="<?php echo $data_cek['youtube_hotel']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NO. HP Penginapan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="hp_penginapan" name="hp_penginapan" value="<?php echo $data_cek['cp_hotel']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Facebook Penginapan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="facebook" name="facebook" value="<?php echo $data_cek['facebook_hotel']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Instagram Penginapan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="instagram" name="instagram" value="<?php echo $data_cek['instagram_hotel']; ?>">
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-penginapan" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>


<?php

$sumber = @$_FILES['thumbnail_penginapan']['tmp_name'];
$target = '../dataFoto/thumb_penginapan/';
$nama_file = @$_FILES['thumbnail_penginapan']['name'];
$pindah = move_uploaded_file($sumber, $target.$nama_file);

if (isset ($_POST['Ubah'])){

    if(!empty($sumber)){
        $foto= $data_cek['thumbnail_penginapan'];
            if (file_exists("../dataFoto/thumb_penginapan/$foto")){
            unlink("../dataFoto/thumb_penginapan/$foto");}

        $sql_ubah = "UPDATE tb_hotel SET
			nama_hotel='".$_POST['nama_penginapan']."',
			lokasi_hotel='".$_POST['lokasi_penginapan']."',
			lat_hotel='".$_POST['lat_penginapan']."',
			long_hotel='".$_POST['long_penginapan']."',
			deskripsi_hotel='".$_POST['desk_penginapan']."',
			kategori_hotel='".$_POST['kategori_penginapan']."',
			jumlahkamar_hotel='".$_POST['jumlahkamar_penginapan']."',
			kisaranbiaya_hotel='".$_POST['biaya_penginapan']."',
			pengelola_hotel='".$_POST['pengelola_penginapan']."',
			fasilitas='".$_POST['fasilitas_penginapan']."',
            thumb_hotel='".$nama_file."',
            youtube_hotel='".$_POST['youtube']."',
			cp_hotel='".$_POST['hp_penginapan']."',
			facebook_hotel='".$_POST['facebook']."',
			instagram_hotel='".$_POST['instagram']."'
            WHERE id_tb='".$_POST['id_penginapan']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

    }elseif(empty($sumber)){
        $sql_ubah = "UPDATE tb_hotel SET
			nama_hotel='".$_POST['nama_penginapan']."',
			lokasi_hotel='".$_POST['lokasi_penginapan']."',
			lat_hotel='".$_POST['lat_penginapan']."',
			long_hotel='".$_POST['long_penginapan']."',
			deskripsi_hotel='".$_POST['desk_penginapan']."',
			kategori_hotel='".$_POST['kategori_penginapan']."',
			jumlahkamar_hotel='".$_POST['jumlahkamar_penginapan']."',
			kisaranbiaya_hotel='".$_POST['biaya_penginapan']."',
			pengelola_hotel='".$_POST['pengelola_penginapan']."',
			fasilitas='".$_POST['fasilitas_penginapan']."',
            youtube_hotel='".$_POST['youtube']."',
			cp_hotel='".$_POST['hp_penginapan']."',
			facebook_hotel='".$_POST['facebook']."',
			instagram_hotel='".$_POST['instagram']."'
            WHERE id_tb='".$_POST['id_penginapan']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);
        }

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-penginapan';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-penginapan';
            }
        })</script>";
    }
}

