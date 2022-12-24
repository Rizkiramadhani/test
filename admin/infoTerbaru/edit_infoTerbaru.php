<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_infoterbaru WHERE id_tb='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data Informasi</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

		<div class="form-group row" hidden>
				<label class="col-sm-2 col-form-label">ID Informasi Terbaru</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="id_infoterbaru" name="id_infoterbaru" value="<?php echo $data_cek['id_tb']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal</label>
				<div class="col-sm-6">
					<input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $data_cek['tanggal']; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Judul Informasi</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="judul_informasi" name="judul_informasi" value="<?php echo $data_cek['headline_infoterbaru']; ?>">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Isi Informasi</label>
				<div class="col-sm-6">
				<textarea id="isi_informasi" name="isi_informasi" rows="9" cols="79"><?php echo $data_cek['isi_infoterbaru']; ?></textarea>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Thumbnail Informasi</label>
				<div class="col-sm-6">
					<input type="file" id="thumbnail_informasi" name="thumbnail_informasi">
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-infoterbaru" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>


<?php

$sumber = @$_FILES['thumbnail_informasi']['tmp_name'];
$target = '../dataFoto/info_terbaru/';
$nama_file = @$_FILES['thumbnail_informasi']['name'];
$pindah = move_uploaded_file($sumber, $target.$nama_file);

if (isset ($_POST['Ubah'])){

    if(!empty($sumber)){
        $foto= $data_cek['thumbnail_informasi'];
            if (file_exists("../dataFoto/info_terbaru/$foto")){
            unlink("../dataFoto/info_terbaru/$foto");}

        $sql_ubah = "UPDATE tb_infoterbaru SET
			tanggal='".$_POST['tanggal']."',
			headline_infoterbaru='".$_POST['judul_informasi']."',
			isi_infoterbaru='".$_POST['isi_informasi']."',
            thumb_infoterbaru='".$nama_file."'
            WHERE id_tb='".$_POST['id_infoterbaru']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

    }elseif(empty($sumber)){
        $sql_ubah = "UPDATE tb_infoterbaru SET
			tanggal='".$_POST['tanggal']."',
			headline_infoterbaru='".$_POST['judul_informasi']."',
			isi_infoterbaru='".$_POST['isi_informasi']."'
            WHERE id_tb='".$_POST['id_infoterbaru']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);
        }

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-infoterbaru';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-infoterbaru';
            }
        })</script>";
    }
}

