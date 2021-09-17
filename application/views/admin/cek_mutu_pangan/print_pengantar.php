<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PRINT SURAT PENGANTAR</title>
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
		  width: 300px;
		  height: 90px;
		  border: 2px solid black; 
		  padding: 15px;
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
	
	<div class="header">
		<img src="<?php echo base_url() ?>/assets/images/ruhui.png" width="100" style="float: left">

		<div style="font-weight: bold;text-align: center;" >
			<p>PEMERINTAH PROVINSI KALIMANTAN TIMUR</p>
			<p>DINAS PANGAN, TANAMAN PANGAN DAN HORTIKULTURA</p>
			<p>UNIT PELAKSANA TEKNIS DINAS</p>
			<p>PENGAWASAN DAN SERTIFIKASI BENIH</p>
			<p>TANAMAN PANGAN DAN HORTIKULTURA</p>
			<p style="font-weight: normal;">Jln. P. Muhammad Noor Sempaja Telp (0541) 221212, 221213 Fax. 221212</p>
			
		</div>
		<div style="font-weight: bold;margin-top: 25px">
			<p style="float: left;margin-right: 340px">KOTAK POS 1161</p>
			<p style="float: left;text-align: center;">S A M A R I N D A</p>		
			<p style="text-align: right;">KODE POS 71119</p>	
		</div>	
	</div>
	<hr>
	<hr>
	<br>
	<div class="content">
	<?php
		$kabkot = $cek_mutu['id_kota'];
		$kota = ['1,3,6'];

		if(in_array($kabkot, $kota)){
			$kabkot = 'Kota';
		}else{
			$kabkot = 'Kabupaten';
		}
	?>

	<div class="float-right">
		<p>Kepada Yth.</p>
		<p><strong><?php echo $cek_mutu['nama_produsen'] ?></strong></p>
		<p>Di -  </p>
		<p style="text-indent: 40px;text-decoration: underline;"><?php echo ucwords($cek_mutu['nama_kota']) ?></p>
	</div>
	<div class="clearfix"></div>
	

	<br>

	<?php 
		$tgl_pemlap = date_create($cek_mutu['tgl_hasil']);
	?>

	<div style="margin-top: 20px; text-align: center;">
		<p style="text-decoration: underline;">SURAT PENGANTAR</p>
		<p>Nomor : 521.211/<?php echo $cek_mutu['no_surat_pengantar'] ?>/PSBTPH/<?php echo date_format($tgl_pemlap, "m") ?>. <?php echo date_format($tgl_pemlap, "Y") ?></p>
	</div>

	<table class="table table-borderless">
		<tr style="border-top: 2px solid black;border-bottom: 2px solid black;">
			<td width="4%">No</td>
			<td>Uraian</td>
			<td>Jumlah</td>
			<td>Keterangan</td>
		</tr>
		<tr>
			<td width="4%"></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td width="4%">1.</td>
			<td>Laporan Lengkap Hasil Pengujian Benih </td>
			<td></td>
			<td>Disampaikan dengan hormat untuk</td>
		</tr>
		<tr>
			<td width="4%"></td>
			<td>Untuk Mutu Benih Dengan Nomor : </td>
			<td>1 Lbr</td>
			<td>diketahui dan dipergunakan sebagai</td>
		</tr>
		<tr">
			<td width="4%"></td>
			<td><strong>CMP. <?php echo $cek_mutu['no_contoh_benih'] ?></strong></td>
			<td></td>
			<td>mana mestinya</td>
		</tr>
	</table>
	<hr>

	</div>
	
	<br><br>

	<div class="row" style="margin-left: 600px;">
		<div class="col-sm-8 text-center">
			<p>Samarinda, <?php echo tgl_indo($cek_mutu['tgl_hasil']) ?></p>
			<p>Kepala UPTD PSBTPH</p>
			<p style="margin-bottom: 100px">Provinsi Kalimantan Timur,</p>
			<p style="text-decoration: underline;">Ir. Fenty Rubiah Harahap, M. Si</p>
			<p>NIP. 19670614 198709 2 001</p>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6">
			<p>Tembusan :</p>
			<table class="table table-borderless pertanaman">
				<tr>
					<td width="1"></td>
					<td>Kepada Yth</td>
				</tr>
				<tr>
					<td>1.</td>
					<td>Pengawas Benih <?php echo $kabkot ?> <?php echo ucwords($cek_mutu['nama_kota']) ?></td>
				</tr>
				<tr>
					<td></td>
					<td>di- <?php echo ucwords($cek_mutu['nama_kota']) ?></td>
				</tr>
				<tr>
					<td>2.</td>
					<td>Arsip</td>
				</tr>
			</table>
		</div>
	</div>

		
	<script>
		window.print();
	</script>
</body>
</html>