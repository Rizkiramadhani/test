<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Informasi Terbaru</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">
		    
		    <div class="form-group row">
				<label class="col-sm-2 col-form-label">Tanggal</label>
				<div class="col-sm-6">
					<input type="date" class="form-control" id="tanggal" name="tanggal">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Judul Informasi</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="judul_informasi" name="judul_informasi" placeholder="Judul Informasi">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Isi Informasi</label>
				<div class="col-sm-6">
				<textarea id="isi_informasi" name="isi_informasi" rows="7" cols="79" placeholder="Isi Informasi"></textarea>
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Thumbnail Informasi</label>
				<div class="col-sm-6">
					<input type="file" id="thumbnail_informasi" name="thumbnail_informasi" required>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-infoterbaru" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    $sumber = @$_FILES['thumbnail_informasi']['tmp_name'];
    $target = '../dataFoto/info_terbaru/';
    $nama_file = @$_FILES['thumbnail_informasi']['name'];
    $pindah = move_uploaded_file($sumber, $target.$nama_file);

    if (isset ($_POST['Simpan'])){

		if(!empty($sumber)){
        $sql_simpan = "INSERT INTO tb_infoterbaru (tanggal, headline_infoterbaru, isi_infoterbaru, thumb_infoterbaru) VALUES (
        '".$_POST['tanggal']."',
        '".$_POST['judul_informasi']."',
        '".$_POST['isi_informasi']."',
        '".$nama_file."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-infoterbaru';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-infoterbaru';
          }
      })</script>";
	}
}elseif(empty($sumber)){
	echo "<script>
	Swal.fire({title: 'Gagal, Foto Wajib Diisi',text: '',icon: 'error',confirmButtonText: 'OK'
	}).then((result) => {
		if (result.value) {
			window.location = 'index.php?page=add-infoterbaru';
		}
	})</script>";
  }
}   
