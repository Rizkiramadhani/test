<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_kuliner WHERE id_tb='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data Kuliner</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

		<div class="form-group row" hidden>
				<label class="col-sm-2 col-form-label">ID Kuliner</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="id_kuliner" name="id_kuliner" value="<?php echo $data_cek['id_tb']; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Kuliner</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_kuliner" name="nama_kuliner" value="<?php echo $data_cek['nama_kuliner']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Lokasi Kuliner</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="lokasi_kuliner" name="lokasi_kuliner" value="<?php echo $data_cek['lokasi_kuliner']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Latitude Kuliner</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="lat_kuliner" name="lat_kuliner" value="<?php echo $data_cek['lat_kuliner']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Longitude Kuliner</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="long_kuliner" name="long_kuliner" value="<?php echo $data_cek['long_kuliner']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Deskripsi Kuliner</label>
				<div class="col-sm-6">
					<textarea id="deskripsi_kuliner" name="deskripsi_kuliner" rows="4" class="form-control"><?php echo $data_cek['deskripsi_kuliner']; ?></textarea>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kategori Kuliner</label>
				<div class="col-sm-4">
					<select name="kategori_kuliner" id="kategori_kuliner" class="form-control">
						<?php
                //menhecek data yg dipilih sebelumnya
                if ($data_cek['kategori_kuliner'] == "Cafe") echo "<option value='Cafe' selected>Cafe</option>";
                else echo "<option value='Cafe'>Cafe</option>";

                if ($data_cek['kategori_kuliner'] == "Rumah Makan") echo "<option value='Rumah Makan' selected>Rumah Makan</option>";
                else echo "<option value='Rumah Makan'>Rumah Makan</option>";
                
                if ($data_cek['kategori_kuliner'] == "Oleh - Oleh") echo "<option value='Oleh - Oleh' selected>Oleh - Oleh</option>";
                else echo "<option value='Oleh - Oleh'>Oleh - Oleh</option>";
            ?>
					</select>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kapasitas Kuliner</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kapasitas_kuliner" name="kapasitas_kuliner" value="<?php echo $data_cek['kapasitas_kuliner']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jam Operasional Kuliner</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="jam_kuliner" name="jam_kuliner" value="<?php echo $data_cek['jam_kuliner']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Pengelola Kuliner</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="pengelola_kuliner" name="pengelola_kuliner" value="<?php echo $data_cek['pengelola_kuliner']; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Fasilitas Penginapan</label>
				<div class="col-sm-6">
				<textarea id="fasilitas_kuliner" name="fasilitas_kuliner" rows="4" class="form-control"><?php echo $data_cek['fasilitas']; ?></textarea>
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
					<input type="text" class="form-control" id="youtube" name="youtube" value="<?php echo $data_cek['youtube_kuliner']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">NO. HP Kuliner</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="hp_kuliner" name="hp_kuliner" value="<?php echo $data_cek['cp_kuliner']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Facebook Kuliner</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="facebook" name="facebook" value="<?php echo $data_cek['facebook_kuliner']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Instagram Kuliner</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="instagram" name="instagram" value="<?php echo $data_cek['instagram_kuliner']; ?>">
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-kuliner" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>


<?php

$sumber = @$_FILES['thumbnail_kuliner']['tmp_name'];
$target = '../dataFoto/thumb_kuliner/';
$nama_file = @$_FILES['thumbnail_kuliner']['name'];
$pindah = move_uploaded_file($sumber, $target.$nama_file);

if (isset ($_POST['Ubah'])){

    if(!empty($sumber)){
        $foto= $data_cek['thumbnail_kuliner'];
            if (file_exists("../dataFoto/thumb_kuliner/$foto")){
            unlink("../dataFoto/thumb_kuliner/$foto");}

        $sql_ubah = "UPDATE tb_kuliner SET
			nama_kuliner='".$_POST['nama_kuliner']."',
			lokasi_kuliner='".$_POST['lokasi_kuliner']."',
			lat_kuliner='".$_POST['lat_kuliner']."',
			long_kuliner='".$_POST['long_kuliner']."',
			deskripsi_kuliner='".$_POST['deskripsi_kuliner']."',
			kategori_kuliner='".$_POST['kategori_kuliner']."',
			kapasitas_kuliner='".$_POST['kapasitas_kuliner']."',
			jam_kuliner='".$_POST['jam_kuliner']."',
			pengelola_kuliner='".$_POST['pengelola_kuliner']."',
			fasilitas='".$_POST['fasilitas_kuliner']."',
            thumb_kuliner='".$nama_file."',
            youtube_kuliner='".$_POST['youtube']."',
			cp_kuliner='".$_POST['hp_kuliner']."',
			facebook_kuliner='".$_POST['facebook']."',
			instagram_kuliner='".$_POST['instagram']."'
            WHERE id_tb='".$_POST['id_kuliner']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

    }elseif(empty($sumber)){
        $sql_ubah = "UPDATE tb_kuliner SET
			nama_kuliner='".$_POST['nama_kuliner']."',
			lokasi_kuliner='".$_POST['lokasi_kuliner']."',
			lat_kuliner='".$_POST['lat_kuliner']."',
			long_kuliner='".$_POST['long_kuliner']."',
			deskripsi_kuliner='".$_POST['deskripsi_kuliner']."',
			kategori_kuliner='".$_POST['kategori_kuliner']."',
			kapasitas_kuliner='".$_POST['kapasitas_kuliner']."',
			jam_kuliner='".$_POST['jam_kuliner']."',
			pengelola_kuliner='".$_POST['pengelola_kuliner']."',
			fasilitas='".$_POST['fasilitas_kuliner']."',
            youtube_kuliner='".$_POST['youtube']."',
			cp_kuliner='".$_POST['hp_kuliner']."',
			facebook_kuliner='".$_POST['facebook']."',
			instagram_kuliner='".$_POST['instagram']."'
            WHERE id_tb='".$_POST['id_kuliner']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);
        }

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-kuliner';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-kuliner';
            }
        })</script>";
    }
}

