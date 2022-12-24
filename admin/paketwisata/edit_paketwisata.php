<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_paketwisata WHERE id_tb='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data Paket Wisata</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

		<div class="form-group row" hidden>
				<label class="col-sm-2 col-form-label">ID Paket Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="id_paketwisata" name="id_paketwisata" value="<?php echo $data_cek['id_tb']; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Paket Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_paketwisata" name="nama_paketwisata" value="<?php echo $data_cek['nama_paketwisata']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Lokasi Paket Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="lokasi_paketwisata" name="lokasi_paketwisata" value="<?php echo $data_cek['lokasi_paketwisata']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Latitude Paket Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="lat_paketwisata" name="lat_paketwisata" value="<?php echo $data_cek['lat_paketwisata']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Longitude Paket Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="long_paketwisata" name="long_paketwisata" value="<?php echo $data_cek['long_paketwisata']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Deskripsi Paket Wisata</label>
				<div class="col-sm-6">
					<textarea id="desk_paketwisata" name="desk_paketwisata" rows="4" class="form-control"><?php echo $data_cek['deskripsi_paketwisata']; ?></textarea>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Rute Paket Wisata</label>
				<div class="col-sm-6">
					<textarea id="rute_paketwisata" name="rute_paketwisata" rows="3" class="form-control"><?php echo $data_cek['rute_paketwisata']; ?></textarea>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Biaya Paket Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="biaya_paketwisata" name="biaya_paketwisata" value="<?php echo $data_cek['biaya_paketwisata']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tour Guide Paket Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="guide_paketwisata" name="guide_paketwisata" value="<?php echo $data_cek['guide_paketwisata']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Detail Rute Paket Wisata</label>
				<div class="col-sm-6">
					<textarea id="detailrute_paketwisata" name="detailrute_paketwisata" rows="12" class="form-control"><?php echo $data_cek['fasilitas']; ?></textarea>
					<p class="help-block">
						<font color="red">Pisahkan Setiap Poin Rute Dengan Tanda &&</font>
					</p>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Thumbnail Paket Wisata</label>
				<div class="col-sm-6">
					<input type="file" id="thumbnail_paketwisata" name="thumbnail_paketwisata">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Youtube</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="youtube" name="youtube" value="<?php echo $data_cek['youtube_paketwisata']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NO. HP Paket Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="hp_paketwisata" name="hp_paketwisata" value="<?php echo $data_cek['cp_paketwisata']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Facebook Paket Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="facebook" name="facebook" value="<?php echo $data_cek['facebook_paketwisata']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Instagram Paket Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="instagram" name="instagram" value="<?php echo $data_cek['instagram_paketwisata']; ?>">
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-paketwisata" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>


<?php

$sumber = @$_FILES['thumbnail_paketwisata']['tmp_name'];
$target = '../dataFoto/thumb_paketwisata/';
$nama_file = @$_FILES['thumbnail_paketwisata']['name'];
$pindah = move_uploaded_file($sumber, $target.$nama_file);

if (isset ($_POST['Ubah'])){

    if(!empty($sumber)){
        $foto= $data_cek['thumbnail_paketwisata'];
            if (file_exists("../dataFoto/thumb_paketwisata/$foto")){
            unlink("../dataFoto/thumb_paketwisata/$foto");}

        $sql_ubah = "UPDATE tb_paketwisata SET
			nama_paketwisata='".$_POST['nama_paketwisata']."',
			lokasi_paketwisata='".$_POST['lokasi_paketwisata']."',
			lat_paketwisata='".$_POST['lat_paketwisata']."',
			long_paketwisata='".$_POST['long_paketwisata']."',
			deskripsi_paketwisata='".$_POST['desk_paketwisata']."',
			rute_paketwisata='".$_POST['rute_paketwisata']."',
			biaya_paketwisata='".$_POST['biaya_paketwisata']."',
			guide_paketwisata='".$_POST['guide_paketwisata']."',
			fasilitas='".$_POST['detailrute_paketwisata']."',
            thumb_paketwisata='".$nama_file."',
            youtube_paketwisata='".$_POST['youtube']."',
			cp_paketwisata='".$_POST['hp_paketwisata']."',
			facebook_paketwisata='".$_POST['facebook']."',
			instagram_paketwisata='".$_POST['instagram']."'
            WHERE id_tb='".$_POST['id_paketwisata']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

    }elseif(empty($sumber)){
        $sql_ubah = "UPDATE tb_paketwisata SET
		nama_paketwisata='".$_POST['nama_paketwisata']."',
			lokasi_paketwisata='".$_POST['lokasi_paketwisata']."',
			lat_paketwisata='".$_POST['lat_paketwisata']."',
			long_paketwisata='".$_POST['long_paketwisata']."',
			deskripsi_paketwisata='".$_POST['desk_paketwisata']."',
			rute_paketwisata='".$_POST['rute_paketwisata']."',
			biaya_paketwisata='".$_POST['biaya_paketwisata']."',
			guide_paketwisata='".$_POST['guide_paketwisata']."',
			fasilitas='".$_POST['detailrute_paketwisata']."',
            youtube_paketwisata='".$_POST['youtube']."',
			cp_paketwisata='".$_POST['hp_paketwisata']."',
			facebook_paketwisata='".$_POST['facebook']."',
			instagram_paketwisata='".$_POST['instagram']."'
            WHERE id_tb='".$_POST['id_paketwisata']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);
        }

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-paketwisata';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-paketwisata';
            }
        })</script>";
    }
}

