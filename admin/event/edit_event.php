<?php

		if(isset($_GET['kode'])){
			$sql_cek = "SELECT * FROM tb_agenda WHERE id_tb='".$_GET['kode']."'";
			$query_cek = mysqli_query($koneksi, $sql_cek);
			$data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
		}
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data Kalender Event
		</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row" hidden>
				<label class="col-sm-2 col-form-label">ID Event</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="id_agenda" name="id_agenda"
						value="<?php echo $data_cek['id_tb']; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Event</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_agenda" name="nama_agenda"
						value="<?php echo $data_cek['nama_agenda']; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Lokasi Event</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="lokasi_agenda" name="lokasi_agenda"
						value="<?php echo $data_cek['lokasi_agenda']; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Latitude Event</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="lat_agenda" name="lat_agenda"
						value="<?php echo $data_cek['lat_agenda']; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Longitude Event</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="long_agenda" name="long_agenda"
						value="<?php echo $data_cek['long_agenda']; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Deskripsi Event</label>
				<div class="col-sm-6">
					<textarea id="desk_agenda" name="desk_agenda" rows="4"
						class="form-control"><?php echo $data_cek['deskripsi_agenda']; ?></textarea>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kategori Event</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kategori_agenda" name="kategori_agenda"
						value="<?php echo $data_cek['kategori_agenda']; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal Event</label>
				<div class="col-sm-6">
					<input type="date" class="form-control" id="tanggal_agenda" name="tanggal_agenda"
						value="<?php echo $data_cek['tanggal_agenda']; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Waktu Event</label>
				<div class="col-sm-6">
					<input type="time" class="form-control" id="waktu_agenda" name="waktu_agenda"
						value="<?php echo $data_cek['waktu_agenda']; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pengelola Event</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pengelola_agenda" name="pengelola_agenda"
						value="<?php echo $data_cek['pengelola_agenda']; ?>">
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
					<input type="text" class="form-control" id="youtube" name="youtube"
						value="<?php echo $data_cek['youtube_agenda']; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NO. HP Event</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="hp_agenda" name="hp_agenda"
						value="<?php echo $data_cek['cp_agenda']; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Facebook Event</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="facebook" name="facebook"
						value="<?php echo $data_cek['facebook_agenda']; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Instagram Event</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="instagram" name="instagram"
						value="<?php echo $data_cek['instagram_agenda']; ?>">
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-event" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>


<?php

$sumber = @$_FILES['thumbnail_agenda']['tmp_name'];
$target = '../dataFoto/thumb_agenda/';
$nama_file = @$_FILES['thumbnail_agenda']['name'];
$pindah = move_uploaded_file($sumber, $target.$nama_file);

if (isset ($_POST['Ubah'])){

    if(!empty($sumber)){
        $foto= $data_cek['thumbnail_agenda'];
            if (file_exists("../dataFoto/thumb_agenda/$foto")){
            unlink("../dataFoto/thumb_agenda/$foto");}

        $sql_ubah = "UPDATE tb_agenda SET
			nama_agenda='".$_POST['nama_agenda']."',
			lokasi_agenda='".$_POST['lokasi_agenda']."',
			lat_agenda='".$_POST['lat_agenda']."',
			long_agenda='".$_POST['long_agenda']."',
			deskripsi_agenda='".$_POST['desk_agenda']."',
			kategori_agenda='".$_POST['']."',
			tanggal_agenda='".$_POST['tanggal_agenda']."',
			waktu_agenda='".$_POST['waktu_agenda']."',
			pengelola_agenda='".$_POST['pengelola_agenda']."',
            thumb_agenda='".$nama_file."',
            youtube_agenda='".$_POST['youtube']."',
			cp_agenda='".$_POST['hp_agenda']."',
			facebook_agenda='".$_POST['facebook']."',
			instagram_agenda='".$_POST['instagram']."'
            WHERE id_tb='".$_POST['id_agenda']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

    }elseif(empty($sumber)){
        $sql_ubah = "UPDATE tb_agenda SET
			nama_agenda='".$_POST['nama_agenda']."',
			lokasi_agenda='".$_POST['lokasi_agenda']."',
			lat_agenda='".$_POST['lat_agenda']."',
			long_agenda='".$_POST['long_agenda']."',
			deskripsi_agenda='".$_POST['desk_agenda']."',
			kategori_agenda='".$_POST['kategori_agenda']."',
			tanggal_agenda='".$_POST['tanggal_agenda']."',
			waktu_agenda='".$_POST['waktu_agenda']."',
			pengelola_agenda='".$_POST['pengelola_agenda']."',
            youtube_agenda='".$_POST['youtube']."',
			cp_agenda='".$_POST['hp_agenda']."',
			facebook_agenda='".$_POST['facebook']."',
			instagram_agenda='".$_POST['instagram']."'
            WHERE id_tb='".$_POST['id_agenda']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);
        }

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-event';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-event';
            }
        })</script>";
    }
}