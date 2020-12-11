<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PRINT SERTIFIKAT BENIH UNGGUL</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

	<style>
		*{
			line-height: 0.4;
		}

		@page{
			/*size: 330mm 210mm;*/
			size: 210mm 297mm;
		}

		.header{
			margin-top: 20px;
		}

		.content{
			font-family: Arial, Helvetica, sans-serif;
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
			<p>Jln. P. Muhammad Noor Sempaja Telp (0541) 221212, 221213 Fax. 221212</p>
			
		</div>
		<div style="font-weight: bold;margin-top: 25px">
			<p style="float: left;margin-right: 340px">KOTAK POS 1161</p>
			<p style="float: left;text-align: center;">S A M A R I N D A</p>		
			<p style="text-align: right;">KODE POS 71119</p>	
		</div>	
	</div>
	<hr>
	<br>
	<div class="content">	

	</div>
	
	<div class="text-center">
		<p style="text-decoration: underline;font-weight: bold;font-size: 20px">SERTIFIKAT BENIH UNGGUL</p>
		<p>Nomor : 521/  <span style="margin-left: 40px"></span>/UPTD PSBTPH/<?php echo date('m') ?>.2020</p>
	</div>

	<p style="line-height: 1.5">Berdasarkan hasil pemeriksaan lapangan / pertanaman dan pengujian / analisis mutu benih di laboratorium / pemeriksanaan umbi di gudang / pemeriksaan stek di lapangan / planlet di laboratorium kultur jaringan / planlet kompot atau anakan tunggal dirumah kaca *) Terhadap :</p>

	<table class="table table-borderless">
		<tr>
			<td width="30%">Jenis Tanaman</td>
			<td>: <?php echo ucwords($sertifikasi['nama_jenis']) ?></td>
		</tr>
		<tr>
			<td>Varietas</td>
			<td>: <?php echo $sertifikasi['nama_varietas'] ?></td>
		</tr>
		<tr>
			<td>Kelas Benih</td>
			<td>: <?php echo $sertifikasi['singkatan'] ?></td>
		</tr>
		<tr>
			<td>Nomor Induk</td>
			<td>: <?php echo $sertifikasi['no_induk'] ?></td>
		</tr>
		<tr>
			<td>Musim Tanam</td>
			<td>: <?php echo $sertifikasi['tahun_mt'] ?></td>
		</tr>
		<tr>
			<td>Nomor Lot / Kelompok</td>
			<td>: <?php echo $sertifikasi['no_kelompok_benih'] ?></td>
		</tr>
		<tr>
			<td>Tanggal Panen</td>
			<td>: <?php echo tgl_indo($sertifikasi['tgl_panen']) ?></td>
		</tr>
		<tr>
			<td>Tanggal Selesai Pengujian</td>
			<td>: <?php echo tgl_indo($sertifikasi['tgl_selesai_pengujian']) ?></td>
		</tr>
		<tr>
			<td>/ Analisis Mutu Benih</td>
			<td></td>
		</tr>
		<tr>
			<td>Tonase</td>
			<td>:</td>
		</tr>
	</table>

	<div class="text-center">
		<p style="text-decoration: underline;font-weight: bold;font-size: 20px">ATAS NAMA</p>
	</div>

	<table class="table table-borderless">
		<tr>
			<td width="30%">Produsen Benih</td>
			<td>: <span style="font-weight: bold;"><?php echo ucwords($sertifikasi['produsen_benih']) ?></span></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>: <?php echo ucwords($sertifikasi['nama_kecamatan']) ?></td>
		</tr>
		<tr>
			<td>Dengan Data Mutu Benih</td>
			<td>:</td>
		</tr>
	</table>
	
	<table class="table table-bordered">
		<tr>
			<td width="20%">Campuran Varietas lain</td>
			<td width="30%">: 12,3%</td>
			<td width="20%">Daya Berkecambah</td>
			<td>: 96%</td>
		</tr>
		<tr>
			<td width="15%">Kadar Air</td>
			<td>: <?php echo $sertifikasi['kadar_air'] ?>%</td>
			<td>Biji Tanaman Lain</td>
			<td>: <?php echo $sertifikasi['benih_tan_lain'] ?>%</td>
		</tr>
		<tr>
			<td width="15%">Benih Murni</td>
			<td>: <?php echo $sertifikasi['benih_murni'] ?>%</td>
			<td>Benih Gulma</td>
			<td>: <?php echo $sertifikasi['benih_gulma_persen'] ?>%</td>
		</tr>
		<tr>
			<td width="15%">Kotoran Benih</td>
			<td>: <?php echo $sertifikasi['kotoran_benih'] ?>%</td>
			<td>Benih Warna Lain</td>
			<td>: %</td>
		</tr>
	</table>

	<?php 
		if($sertifikasi['id_kelas_benih'] == 2){
			$warna_label = "PUTIH";
		}elseif($sertifikasi['id_kelas_benih'] == 3){
			$warna_label = "UNGU";
		}elseif($sertifikasi['id_kelas_benih'] == 4){
			$warna_label = "BIRU";
		}elseif($sertifikasi['id_kelas_benih'] == 5){
			$warna_label = "KUNING";
		}
	?>

	<p style="line-height: 1.5">Telah memenuhi standar mutu sebagai <span style="font-weight: bold;">"Benih Unggul Sertifikat"</span>. Dengan demikian dapat diberikan label berwarna: <span style="font-weight: bold;text-decoration: underline;font-style: italic;"><?php echo $warna_label ?></span> pada setiap kemasannya dengan tanggal akhir berlaku label : <span style="font-weight: bold;">03 April 2020</span></p>

	<div style="margin-left: 700px;">
		<p>Dikeluarkan di <span style="margin-right: 30px"></span>: Samarinda</p>
		<p style="margin-bottom: 50px">Tanggal  <span style="margin-right: 75px"></span>: </p>

		<div class="text-center">
			<p style="margin-bottom: 60px">Kepala UPTD,</p>
			<p style="text-decoration: underline;">Ir. Erry Erriadi</p>
			<p>NIP. 196408201998031005</p>
		</div>
	</div>
		

	<script>
		// window.print();
	</script>
</body>
</html>