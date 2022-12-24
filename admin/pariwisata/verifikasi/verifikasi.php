<?php

if(isset($_GET['kode'])){
    $sql_cek = "select * from ulasan where id_tb='".$_GET['kode']."'";
    $query_cek = mysqli_query($koneksi, $sql_cek);
    $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
}
?>

<?php

    $sql_update = "UPDATE ulasan SET status=2 WHERE id_tb='".$_GET['kode']."'";
    $query_update = mysqli_query($koneksi, $sql_update);
    if ($query_update) {
        echo "<script>
        Swal.fire({title: 'Verifikasi Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {if (result.value) {window.location = 'index.php?page=data-ulasanpar'
        ;}})</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Verifikasi Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {if (result.value) {window.location = 'index.php?page=data-ulasanpar'
        ;}})</script>";
    }
