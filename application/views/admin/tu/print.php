<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PRINT TU</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

	<style>

		@page{
			/*f4*/
			/*size: 330mm 210mm;*/

			/*a4*/
			/*size: 210mm 297mm;*/
		}

		*{
			font-size: 14px;
			line-height: 1.5;
		}

		.content{
			font-family: Times New Roman, Helvetica, sans-serif;
		}

		.box {
		  float: left;
		  height: 30px;
		  width: 80px;
		  margin-bottom: 15px;
		  border: 1px solid black;
		  clear: both;
		  margin-right: 5px;
		}

		.red {
		  background-color: transparent;
		}

	</style>
</head>
<body>
	
	<div style="margin-top: 100px"></div>
	<div class="container">
		
	
	<div style="float: right;">
		<div class="row">
			<div class="col-md">
				<table class="table table-bordered">
					<th>Nomor : <?php echo $tu['no_tu'] ?></th>
				</table>
			</div>
		</div>
	</div>

	<div style="clear: both;"></div>

	<div style="margin-top: 30px">
		<h4 style="text-decoration: underline;" class="text-center">CONTOH BENIH UNTUK PENGUJIAN DI LABORATORIUM</h4>
	</div>

	<div style="margin-top: 20px">
		<p>Pengujian yang diperlukan : </p>
	</div>


	<div style="float: right;">
		<div class='box red'></div>
		<div class='box red'></div>
		<div class='box red'></div>
		<div class='box red'></div>
	</div>

	<div style="clear: both;"></div>

	<div>
		<p>Tanggal Pengambilan Contoh <span style="position: absolute;left: 350px">: <?php echo tgl_indo($tu['tgl_pengambilan_contoh_benih']) ?></span></p>		
		<p>Jenis Tanaman/Varietas <span style="position: absolute;left: 350px">: <?php echo $tu['nama_jenis_tanaman']. ' /'.$tu['nama_varietas'] ?></span></p>		
		<p>Tanggal Panen <span style="position: absolute;left: 350px">: <?php echo tgl_indo($tu['tgl_panen']) ?></span></p>		
		<p>Kelas Benih <span style="position: absolute;left: 350px">: <?php echo $tu['singkatan'] ?></span></p>		
		<p>Berat Contoh Benih <span style="position: absolute;left: 350px">: 1 Kg</span></p>		
		<p>Catatan <span style="position: absolute;left: 350px">: </span></p>		
	</div>

	<div style="float: right;">
		<p>Samarinda, <?php echo tgl_indo($tu['tgl_pengiriman_contoh_benih']) ?></p>
		<p>Pengirim Contoh Benih</p>
		<p style="margin-top: 90px">..............................................</p>
	</div>

	</div>

	<script>
		// window.print();
	</script>
</body>
</html>