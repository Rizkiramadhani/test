<?php 
date_default_timezone_set('Asia/Jakarta');

$date_now= date("Y-m-d");
?>

	<div class="card card-info">
		<div class="card-header">
			<h3 class="card-title">
				<i class="fa fa-chart-pie"></i> Laporan Jumlah Pengunjung</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
		    <div class="form-group row">
		        
				<label class="col-sm-1 col-form-label">Filter</label>
				<div class="col-sm-4">
					<select name="level_date" id="level_date" class="form-control">
						<option value="1">Semua</option>
						<option value="hari">Per-Hari</option>
						<option value="bulan">Per-Bulan</option>
						<option value="tahun">Per-Tahun</option>
					</select>
				</div>
				<div class="col-sm-4">
					<input type="date" class="form-control" id="date" name="date" value="<?php echo $date_now; ?>">
				</div>
				<script>
					function handlerPrint(e) {
						e.preventDefault();
						var today = new Date();
						var yyyy = today.getFullYear();
						var mm = today.getMonth() + 1; // Months start at 0!
						var dd = today.getDate();

						if (dd < 10) dd = '0' + dd;
						if (mm < 10) mm = '0' + mm;

						var today = yyyy + '-' + mm + '-' + dd;

						var level = $("#level_date").val();
						var currDate = $("#date").val();
						
						$.ajax({
							type: "GET",
							url: `https://wodjao.tech/disporaparhst/obj_wisata/print_data_pengunjung.php?date=${currDate}&level=${level}`,
							dataType: "html",
							success: function(data){
								var printWindow = window.open();
								printWindow.document.write(data);
								printWindow.document.close();
								printWindow.print();
							}
						})
					}
				</script>
				<div class="col-sm-2">
					<a href="#" onclick="handlerPrint(event);" class="btn btn-primary">
					<i class="fa fa-print"></i> Cetak Data</a>
				</div>
				
			</div>
			<div id="data" class="table-responsive">
				
			</div>
		</div>
		<!-- /.card-body -->
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				type: "GET",
				url: "https://wodjao.tech/disporaparhst/obj_wisata/get_data_pengunjung.php",
				dataType: "html",
				success: function(data){
					$('#data').html(data);
				},
				error: function(data){
					// error handling
				}
			}).done(function(data){
				// something to do after, even if it throws an error.
			});

			

			$('#level_date').on('change', function() {
				var level = $("#level_date").val();
				var date = $("#date").val();
				$.ajax({
					type: 'POST',
					url: "https://wodjao.tech/disporaparhst/obj_wisata/get_data_pengunjung.php",
					data: {level_date: level, date:date},

					success: function(hasil) {
						$('#data').html(hasil);
					}
				});
			});

			$('#date').on('input', function() {
				var level = $("#level_date").val();
				var date = $("#date").val();
				$.ajax({
					type: 'POST',
					url: "https://wodjao.tech/disporaparhst/obj_wisata/get_data_pengunjung.php",
					data: {level_date: level, date:date},

					success: function(hasil) {
						$('#data').html(hasil);
					}
				});
			});

			

		});
	</script>