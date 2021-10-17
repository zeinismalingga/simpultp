<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PRINT LLHP</title>
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

		<div style="margin-left: 700px">
			<p>Kepada Yth.</p>
			<p style="font-weight: bold;"><?php echo ucwords($sertifikasi['nama_produsen']) ?></p>
			<p>Ds. <?php echo $sertifikasi['desa'] ?>, Kec.<?php echo $sertifikasi['nama_kecamatan'] ?></p>
			<p>Di -</p>
			<p style="margin-left: 30px"><?php echo ucwords($sertifikasi['nama_kota']) ?></p>
		</div>

		<?php 
			$bulan = date_format(date_create($sertifikasi['tgl_llhp']), "m");
			$tahun = date_format(date_create($sertifikasi['tgl_llhp']), "Y");
		?>

		<div style="margin-top: 20px; text-align: center;">
			<p style="text-decoration: underline;">SURAT PENGANTAR</p>
			<p>Nomor : 521.211/<?php echo $sertifikasi['no_llhp'] ?>/PSBTPH/<?php echo $bulan ?>.<?php echo $tahun ?></p>
		</div>

		<table class="table table-borderless">
			<thead>
				<tr style="border-top: 2px solid black;border-bottom: 2px solid black;">
					<th>No</th>
					<th>Urain</th>
					<th></th>
					<th>Keterangan</th>
				</tr>
			</thead>
			<tbody>
				<tr >
					<td>1</td>
					<td style="line-height: 1">Laporan Lengkap Hasil Pengujian Benih Untuk Sertifikasi Dengan Nomor : <strong><?php echo $sertifikasi['no_induk'] ?></strong></td>
					<td style="line-height: 1" width="10%">1 Lbr</td>
					<td style="line-height: 1">Disampaikan dengan hormat untuk diketahui dan dipertimbangkan sebagaimana mestinya</td>
				</tr>
				
			</tbody>
		</table>

		<hr>
		<br><br>

		

		<div style="margin-left: 500px; text-align: center;">
			<p>Samarinda, <?php echo tgl_indo($sertifikasi['tgl_pengantar_llhp']) ?></p>
			<p style="font-weight: bold">Kepala UPTD PSBTPH,</p>
			<p style="margin-bottom: 80px; font-weight: bold">Provinsi Kalimantan Timur</p>
			<p style="text-decoration: underline;font-weight: bold;">Ir. Fenty Rubiah Harahap, M.Si</p>
			<p>NIP. 19670614 198709 2 001</p>
		</div>
		<br><br>
		<div style="float: left;">
			<p>Tembusan :</p>
			<p>Kepada Yth</p>
			<ol>
				<li>Pengawas Benih Kab. <?php echo ucwords($sertifikasi['nama_kota']) ?></li>
				<li>Arsip</li>
			</ol>
		</div>
	</div>

	<script>
		window.print();
	</script>
</body>
</html>