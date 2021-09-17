<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PRINT SURAT PERMOHONAN</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

	<style>
		*{
			line-height: 0.4;
			font-family: "Times New Roman", Times, serif;
			font-size: 18px;
		}

		.pertanaman > tbody > tr > td{
			padding-left: 0;
		}

		@page{
			/*size: 330mm 210mm;*/
			size: 210mm 297mm;
		}

		.header{
			margin-top: 20px;
		}

		br{
			line-height: 0.5;
		}

		table{
			line-height: 1;
		}

		.detail{
			position: absolute;
			left: 200px;
		}

		.detail2{
			position: absolute;
			left: 520px;
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

		.isi{
			margin-left : 25px;
		}

		ul{
			list-style-type: none;
		}
		li{
			line-height: normal;
		}

		hr{
			border: 1px solid black;
			margin-bottom: 2px;
			margin-top: 2px;
		}

		@media print {

.col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
  float: left;
}
.col-sm-12 {
  width: 100%;
}
.col-sm-11 {
  width: 91.66666666666666%;
}
.col-sm-10 {
  width: 83.33333333333334%;
}
.col-sm-9 {
  width: 75%;
}
.col-sm-8 {
  width: 66.66666666666666%;
}
.col-sm-7 {
  width: 58.333333333333336%;
}
.col-sm-6 {
  width: 50%;
}
.col-sm-5 {
  width: 41.66666666666667%;
}
.col-sm-4 {
  width: 33.33333333333333%;
 }
 .col-sm-3 {
   width: 25%;
 }
 .col-sm-2 {
   width: 16.666666666666664%;
 }
 .col-sm-1 {
  width: 8.333333333333332%;
 }

  }
	</style>
</head>
<body>
	<div style="margin-top: 50px"></div>
	<div style="margin-left: 650px;">
		<p>Kepada Yth.</p>
		<p>Kepala UPTD PSBTPH</p>
		<p>Provinsi Kalimantan Timur</p>
		<p>Di -  </p>
		<p style="text-indent: 40px;text-decoration: underline;">Samarinda</p>
	</div>
	<div class="clearfix"></div>
	<br>
	<div>
		<p>Bersama ini kami mengajukan Permohonan Pengambilan Contoh Benih sebagai berikut :</p>
	</div>

	<div>
		<table class="table table-borderless">
			<tr>
				<td width="300px">1. Nama Produsen Benih</td>
				<td width="5px">:</td>
				<td><?php echo $cek_mutu['nama_produsen'] ?> </td>
			</tr>
			<tr>
				<td width="250px">2. Alamat Produsen Benih</td>
				<td width="5px">:</td>
				<td></td>
			</tr>
			<tr>
				<td width="250px">3. Jenis Tanaman</td>
				<td width="5px">:</td>
				<td><?php echo ucwords($cek_mutu['nama_jenis']) ?> </td>
			</tr>
			<tr>
				<td width="250px">4. Asal</td>
				<td width="5px">:</td>
				<td></td>
			</tr>
			<tr>
				<td width="250px">5. Varietas</td>
				<td width="5px">:</td>
				<td><?php echo ucwords($cek_mutu['nama_varietas']) ?> </td>
			</tr>
			<tr>
				<td width="250px">6. Nomor Kelompok Benih</td>
				<td width="5px">:</td>
				<td><?php echo ucwords($cek_mutu['no_kelompok_benih']) ?> </td>
			</tr>
			<tr>
				<td width="250px">7. Nomor Induk Sertifikasi</td>
				<td width="5px">:</td>
				<td></td>
			</tr>
			<tr>
				<td width="250px">8. Blok</td>
				<td width="5px">:</td>
				<td><?php echo ucwords($cek_mutu['nama_pimpinan']) ?> </td>
			</tr>
			<tr>
				<td width="250px">9. Tanggal Panen</td>
				<td width="5px">:</td>
				<td><?php echo tgl_indo($cek_mutu['tgl_panen']) ?> </td>
			</tr>
			<tr>
				<td width="250px">10. Kelas Benih</td>
				<td width="5px">:</td>
				<td><?php echo ucwords($cek_mutu['singkatan']) ?> </td>
			</tr>
			<tr>
				<td width="250px">11. Volume Kelompok Benih</td>
				<td width="5px">:</td>
				<td></td>
			</tr>
			<tr>
				<td width="250px">12. Jumlah Wadah</td>
				<td width="5px">:</td>
				<td><?php echo $cek_mutu['wadah'] ?> </td>
			</tr>
			<tr>
				<td width="250px">13. Tanggal Akhir Edar</td>
				<td width="5px">:</td>
				<td><?php echo tgl_indo($cek_mutu['tgl_akhir']) ?> </td>
			</tr>
			<tr>
				<td width="250px">14. Volume Per Wadah</td>
				<td width="5px">:</td>
				<td></td>
			</tr>
			<tr>
				<td width="250px">15. Jenis Wadah</td>
				<td width="5px">:</td>
				<td></td>
			</tr>
			<tr>
				<td width="250px">16. Alamat Pengambilan Contoh</td>
				<td width="5px">:</td>
				<td></td>
			</tr>
			<tr>
				<td width="250px">17. Tanggal Pengambilan Contoh</td>
				<td width="5px">:</td>
				<td><?php echo tgl_indo($cek_mutu['tgl_pengambilan_cth']) ?> </td>
			</tr>
		</table>
	</div>

	<div>
		<p>Contoh benih tersebut diuji di Laboratorium, dengan Parameter :</p>
	</div>

	<?php 
	$check = '<span style="padding-left: 30px;font-size: 40px">&#10004;</span>';	
	?>

	<div class="row">
		<div class="col-sm-7">
			<table class="table table-borderless">
				<tr>
					<td width="200px">1. Penetapan Kadar Air</td>
					<td width="1px">:</td>
					<td width="50px"><div class='box red'><?php echo ($cek_mutu['kadar_air'] == 1) ? $check : '' ?></div></td>
				</tr>
				<tr>
					<td width="200px">2. Analisa Kemurnian</td>
					<td width="1px">:</td>
					<td width="50px"><div class='box red'><?php echo ($cek_mutu['kemurnian'] == 1) ? $check : '' ?></div></td>
				</tr>
				<tr>
					<td width="200px">3. Pengujian / Analisa Daya Berkecambah</td>
					<td width="1px">:</td>
					<td width="50px"><div class='box red'><?php echo ($cek_mutu['daya_berkecambah'] == 1) ? $check : '' ?></div></td>
				</tr>
				<tr>
					<td width="200px">4. ................................................................</td>
					<td width="1px">:</td>
					<td width="50px"><div class='box red'><?php echo ($cek_mutu['daya_berkecambah'] == 1) ? '' : '' ?></div></td>
				</tr>
					
				</tr>
			</table>
		</div>
	</div>

	<br>
	<div class="row" style="margin-left: 600px;">
		<div class="col-sm-8 text-center">
			<p>Samarinda, <?php echo tgl_indo($cek_mutu['tgl_hasil']) ?></p>
			
			<p>Pemohon,</p>
			<p style="margin-bottom: 100px">.............................</p>
			<p style="text-decoration: underline;">...........................................</p>
			<p style="text-align: left;">NIK.</p>
		</div>
	</div>

	<script>
		// window.print();
	</script>
</body>
</html>