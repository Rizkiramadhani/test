<?php
    $data_id = $_SESSION["ses_idpengelola"];
    
    $sql_cek = "SELECT * FROM tb_objekwisata WHERE id_tb='$data_id'";
    $query_cek = mysqli_query($koneksi, $sql_cek);
    $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data Objek Wisata</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

		<div class="form-group row" hidden>
				<label class="col-sm-2 col-form-label">ID Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="id_pariwisata" name="id_pariwisata" value="<?php echo $data_cek['id_tb']; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_pariwisata" name="nama_pariwisata" value="<?php echo $data_cek['nama_objekwisata']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Lokasi Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="lokasi_pariwisata" name="lokasi_pariwisata" value="<?php echo $data_cek['lokasi_objekwisata']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Latitude Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="lat_pariwisata" name="lat_pariwisata" value="<?php echo $data_cek['lat_objekwisata']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Longitude Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="long_pariwisata" name="long_pariwisata" value="<?php echo $data_cek['long_objekwisata']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Deskripsi Objek Wisata</label>
				<div class="col-sm-6">
					<textarea id="desk_pariwisata" name="desk_pariwisata" rows="4" class="form-control"><?php echo $data_cek['deskripsi_objekwisata']; ?></textarea>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kondisi Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kondisi_pariwisata" name="kondisi_pariwisata" value="<?php echo $data_cek['kondisi_objekwisata']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="status_pariwisata" name="status_pariwisata" value="<?php echo $data_cek['status_objekwisata']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jalur Transportasi Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="transportasi_pariwisata" name="transportasi_pariwisata" value="<?php echo $data_cek['jalurtransportasi_objekwisata']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jarak Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="jarak_pariwisata" name="jarak_pariwisata" value="<?php echo $data_cek['jarak_objekwisata']; ?>">
					<p class="help-block">
						<font color="red">Cukup Tuliskan Angkanya Saja (Tanpa Satuan KM)</font>
					</p>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jam Operasional Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="jam_pariwisata" name="jam_pariwisata" value="<?php echo $data_cek['jam_objekwisata']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kisaran Biaya Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="biaya_pariwisata" name="biaya_pariwisata" value="<?php echo $data_cek['biaya_objekwisata']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pengelola Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pengelola_pariwisata" name="pengelola_pariwisata" value="<?php echo $data_cek['pengelola_objekwisata']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Fasilitas Objek Wisata</label>
				<div class="col-sm-6">
				<textarea id="fasilitas_pariwisata" name="fasilitas_pariwisata" rows="4" class="form-control"><?php echo $data_cek['fasilitas']; ?></textarea>
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
					<input type="text" class="form-control" id="youtube" name="youtube" value="<?php echo $data_cek['youtube_objekwisata']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NO. HP Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="hp_pariwisata" name="hp_pariwisata" value="<?php echo $data_cek['cp_objekwisata']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Facebook Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="facebook" name="facebook" value="<?php echo $data_cek['facebook_objekwisata']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Instagram Objek Wisata</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="instagram" name="instagram" value="<?php echo $data_cek['instagram_objekwisata']; ?>">
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
		</div>
	</form>
</div>


<?php

$sumber = @$_FILES['thumbnail_pariwisata']['tmp_name'];
$target = '../dataFoto/thumb_pariwisata/';
$nama_file = @$_FILES['thumbnail_pariwisata']['name'];
$pindah = move_uploaded_file($sumber, $target.$nama_file);

if (isset ($_POST['Ubah'])){

    if(!empty($sumber)){
        $foto= $data_cek['thumbnail_pariwisata'];
            if (file_exists("../dataFoto/thumb_pariwisata/$foto")){
            unlink("../dataFoto/thumb_pariwisata/$foto");}

        $sql_ubah = "UPDATE tb_objekwisata SET
			nama_objekwisata='".$_POST['nama_pariwisata']."',
			lokasi_objekwisata='".$_POST['lokasi_pariwisata']."',
			lat_objekwisata='".$_POST['lat_pariwisata']."',
			long_objekwisata='".$_POST['long_pariwisata']."',
			deskripsi_objekwisata='".$_POST['desk_pariwisata']."',
			kondisi_objekwisata='".$_POST['kondisi_pariwisata']."',
			status_objekwisata='".$_POST['status_pariwisata']."',
			jalurtransportasi_objekwisata='".$_POST['transportasi_pariwisata']."',
			jarak_objekwisata='".$_POST['jarak_pariwisata']."',
			jam_objekwisata='".$_POST['jam_pariwisata']."',
			biaya_objekwisata='".$_POST['biaya_pariwisata']."',
			pengelola_objekwisata='".$_POST['pengelola_pariwisata']."',
			fasilitas='".$_POST['fasilitas_pariwisata']."',
            thumb_objekwisata='".$nama_file."',
            youtube_objekwisata='".$_POST['youtube']."',
			cp_objekwisata='".$_POST['hp_pariwisata']."',
			facebook_objekwisata='".$_POST['facebook']."',
			instagram_objekwisata='".$_POST['instagram']."'
            WHERE id_tb='".$_POST['id_pariwisata']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

    }elseif(empty($sumber)){
        $sql_ubah = "UPDATE tb_objekwisata SET
			nama_objekwisata='".$_POST['nama_pariwisata']."',
			lokasi_objekwisata='".$_POST['lokasi_pariwisata']."',
			lat_objekwisata='".$_POST['lat_pariwisata']."',
			long_objekwisata='".$_POST['long_pariwisata']."',
			deskripsi_objekwisata='".$_POST['desk_pariwisata']."',
			kondisi_objekwisata='".$_POST['kondisi_pariwisata']."',
			status_objekwisata='".$_POST['status_pariwisata']."',
			jalurtransportasi_objekwisata='".$_POST['transportasi_pariwisata']."',
			jarak_objekwisata='".$_POST['jarak_pariwisata']."',
			jam_objekwisata='".$_POST['jam_pariwisata']."',
			biaya_objekwisata='".$_POST['biaya_pariwisata']."',
			pengelola_objekwisata='".$_POST['pengelola_pariwisata']."',
			fasilitas='".$_POST['fasilitas_pariwisata']."',
            youtube_objekwisata='".$_POST['youtube']."',
			cp_objekwisata='".$_POST['hp_pariwisata']."',
			facebook_objekwisata='".$_POST['facebook']."',
			instagram_objekwisata='".$_POST['instagram']."'
            WHERE id_tb='".$_POST['id_pariwisata']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);
        }

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=edit-pengelolapar';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=edit-pengelolapar';
            }
        })</script>";
    }
}

