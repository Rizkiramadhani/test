<?php
    //Mulai Sesion
    session_start();
    if (isset($_SESSION["ses_username"])==""){
	header("location: login");
    
    }else{
      $data_id = $_SESSION["ses_id"];
      $data_nama = $_SESSION["ses_nama"];
      $data_user = $_SESSION["ses_username"];
	  $data_level = $_SESSION["ses_level"];
	  $data_jenis = $_SESSION["ses_jenis"];
	  $data_idpengelola = $_SESSION["ses_idpengelola"];
    }

    //KONEKSI DB
    include "inc/koneksi.php";
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DISPORAPAR HST</title>
	<link rel="icon" href="dist/img/voting.png">
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<!-- Alert -->
	<script src="plugins/alert.js"></script>
	<!-- Auto Refresh -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-yellow navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#">
						<i class="fas fa-bars"></i>
					</a>
				</li>

			</ul>

			<!-- SEARCH FORM -->
			<ul class="navbar-nav ml-auto">

				<li class="nav-item d-none d-sm-inline-block">
					<a href="index.php" class="nav-link">
						<b>Sistem Informasi Pariwisata Kabupaten Hulu Sungai Tengah</b>
					</a>
				</li>
			</ul>

		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="index.php" class="brand-link">
				<img src="dist/img/voting.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
				<span class="brand-text font-weight-light"> DISPORAPAR HST</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="index.php" class="d-block">
							<?php echo $data_nama; ?>
						</a>
						<span class="badge badge-success">
							<?php echo $data_jenis; ?>
						</span>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						<!-- Level  -->
						<?php
          if ($data_level=="Administrator"){
        ?>
						<li class="nav-item">
							<a href="index.php" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>
						
						<li class="nav-item">
							<a href="?page=data-infoterbaru" class="nav-link">
								<i class="nav-icon fas fa-newspaper"></i>
								<p>
									Informasi Terbaru
								</p>
							</a>
						</li>
						
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-map"></i>
								<p>
									Data Objek Wisata
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="?page=data-pariwisata" class="nav-link">
										<i class="nav-icon far fa-circle text-success"></i>
										<p>Kelola Data</p>
									</a>
								</li>
							</ul>
						</li>
						
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-bed"></i>
								<p>
									Data Penginapan
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="?page=data-penginapan" class="nav-link">
										<i class="nav-icon far fa-circle text-success"></i>
										<p>Kelola Data</p>
									</a>
								</li>
							</ul>
						</li>
						
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-coffee "></i>
								<p>
									Data Kuliner
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="?page=data-kuliner" class="nav-link">
										<i class="nav-icon far fa-circle text-success"></i>
										<p>Kelola Data</p>
									</a>
								</li>
							</ul>
						</li>
						
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-calendar-minus"></i>
								<p>
									Data Kalender Event
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="?page=data-event" class="nav-link">
										<i class="nav-icon far fa-circle text-success"></i>
										<p>Kelola Data</p>
									</a>
								</li>
							</ul>
						</li>
						
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-users"></i>
								<p>
									Data Paket Wisata
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="?page=data-paketwisata" class="nav-link">
										<i class="nav-icon far fa-circle text-success"></i>
										<p>Kelola Data</p>
									</a>
								</li>
							</ul>
						</li>


						<!-- <li class="nav-item">
							<a href="?page=PsSQAdT" class="nav-link">
								<i class="nav-icon far fa fa-edit"></i>
								<p>
									Bilik Suara
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=data-kotak" class="nav-link">
								<i class="nav-icon far fa fa-table"></i>
								<p>
									Kotak Suara
								</p>
							</a>
						</li>

						<li class="nav-item">
							<a href="?page=data-suara" class="nav-link">
								<i class="nav-icon far fa fa-chart-pie"></i>
								<p>
									Quick Count
									<span class="badge badge-warning">
										QC
									</span>
								</p>
							</a>
						</li>


						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-file"></i>
								<p>
									Laporan
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="nav-icon far fa-circle text-info"></i>
										<p>Daftar Kandidat</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="nav-icon far fa-circle text-info"></i>
										<p>Daftar pemilih</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="#" class="nav-link">
										<i class="nav-icon far fa-circle text-info"></i>
										<p>Perolehan Suara</p>
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-header">Setting</li>
						<li class="nav-item">
							<a href="?page=data-pengguna" class="nav-link">
								<i class="nav-icon far fa-user"></i>
								<p>
									Users
								</p>
							</a>
						</li> -->

						<?php
          				} elseif($data_level=="Pengelola"){
          				?>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-map"></i>
								<p>
									Data Objek Wisata
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="?page=edit-pengelolapar&kode=<?php echo $data_idpengelola; ?>" class="nav-link">
										<i class="nav-icon far fa-circle text-success"></i>
										<p>Kelola Data</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=data-pengelolapar" class="nav-link">
										<i class="nav-icon far fa-circle text-success"></i>
										<p>Ulasan Pengunjung</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="?page=laporan-pengelolapar" class="nav-link">
										<i class="nav-icon far fa-circle text-success"></i>
										<p>Laporan Pengunjung</p>
									</a>
								</li>
							</ul>
						</li>

						<li class="nav-header">Setting</li>
						<?php
							}
						?>

						<li class="nav-item">
							<a onclick="return confirm('Apakah anda yakin akan keluar ?')" href="logout.php" class="nav-link">
								<i class="nav-icon far fa-circle text-danger"></i>
								<p>
									Logout
								</p>
							</a>
						</li>

				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
			</section>

			<!-- Main content -->
			<section class="content">
				<!-- /. WEB DINAMIS DISINI ############################################################################### -->
				<div class="container-fluid">

					<?php 
      if(isset($_GET['page'])){
          $hal = $_GET['page'];
  
          switch ($hal) {
              //Klik Halaman Home Pengguna
              	case 'admin':
                  include "home/admin.php";
                  break;
              	case 'petugas':
                  include "home/bendahara.php";
				  break;
				case 'pemilih':
                  include "home/pemilih.php";
                  break;
                  
					//pariwisata
				case 'laporan-pariwisata':
					include "admin/pariwisata/pengunjung_pariwisata.php";
					break;
					case 'data-pariwisata':
					include "admin/pariwisata/data_pariwisata.php";
					break;
				case 'add-pariwisata':
					include "admin/pariwisata/add_pariwisata.php";
					break;
				case 'edit-pariwisata':
					include "admin/pariwisata/edit_pariwisata.php";
					break;
				case 'del-pariwisata':
					include "admin/pariwisata/del_pariwisata.php";
					break;
				case 'data-ulasanpar':
					include "admin/pariwisata/verifikasi/data_verifikasi.php";
					break;
				case 'verifikasi-par':
					include "admin/pariwisata/verifikasi/verifikasi.php";
					break;
					
					//Info Terbaru
				case 'data-infoterbaru':
					include "admin/infoTerbaru/data_infoTerbaru.php";
					break;
				case 'add-infoterbaru':
					include "admin/infoTerbaru/add_infoTerbaru.php";
					break;
				case 'edit-infoterbaru':
					include "admin/infoTerbaru/edit_infoTerbaru.php";
					break;
				case 'del-infoterbaru':
					include "admin/infoTerbaru/del_infoTerbaru.php";
					break;
					
					//penginapan
				case 'data-penginapan':
					include "admin/penginapan/data_penginapan.php";
					break;
				case 'add-penginapan':
					include "admin/penginapan/add_penginapan.php";
					break;
				case 'edit-penginapan':
					include "admin/penginapan/edit_penginapan.php";
					break;
				case 'del-penginapan':
					include "admin/penginapan/del_penginapan.php";
					break;
					
					//kuliner
				case 'data-kuliner':
					include "admin/kuliner/data_kuliner.php";
					break;
				case 'add-kuliner':
					include "admin/kuliner/add_kuliner.php";
					break;
				case 'edit-kuliner':
					include "admin/kuliner/edit_kuliner.php";
					break;
				case 'del-kuliner':
					include "admin/kuliner/del_kuliner.php";
					break;
					
					//event
				case 'data-event':
					include "admin/event/data_event.php";
					break;
				case 'add-event':
					include "admin/event/add_event.php";
					break;
				case 'edit-event':
					include "admin/event/edit_event.php";
					break;
				case 'del-event':
					include "admin/event/del_event.php";
					break;
					
					//paketwisata
				case 'data-paketwisata':
					include "admin/paketwisata/data_paketwisata.php";
					break;
				case 'add-paketwisata':
					include "admin/paketwisata/add_paketwisata.php";
					break;
				case 'edit-paketwisata':
					include "admin/paketwisata/edit_paketwisata.php";
					break;
				case 'del-paketwisata':
					include "admin/paketwisata/del_paketwisata.php";
					break;
					
					//Info Terbaru
				case 'data-pengelolapar':
					include "pengelola/pariwisata/data_pariwisata.php";
					break;
				case 'laporan-pengelolapar':
					include "pengelola/pariwisata/laporan_pariwisata.php";
					break;
				case 'edit-pengelolapar':
					include "pengelola/pariwisata/edit_pariwisata.php";
					break;
          
              //default
              default:
                  echo "<center><h1> ERROR !</h1></center>";
                  break;    
          }
      }else{
        // Auto Halaman Home Pengguna
          if($data_level=="Administrator"){
              include "home/admin.php";
              }
          elseif($data_level=="Pengelola"){
              include "pengelola/pariwisata/edit_pariwisata.php";
              }
          }
    ?>

				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				Copyright &copy;
				<a target="_blank" href="">
					<strong> DISPORAPAR HST</strong>
				</a>
				All rights reserved.
			</div>
			Create 2022
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Select2 -->
	<script src="plugins/select2/js/select2.full.min.js"></script>
	<!-- DataTables -->
	<script src="plugins/datatables/jquery.dataTables.js"></script>
	<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="dist/js/demo.js"></script>
	<!-- page script -->
	<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

	<script>
		$(function() {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false,
			});
		});
	</script>

	<script>
		$(function() {
			//Initialize Select2 Elements
			$('.select2').select2()

			//Initialize Select2 Elements
			$('.select2bs4').select2({
				theme: 'bootstrap4'
			})
		})
	</script>

</body>

</html>