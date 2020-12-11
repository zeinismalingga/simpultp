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

		<p>Kepada Yth.</p>
		<p><?php echo ucwords($sertifikasi['produsen_benih']) ?></p>
		<p>Di - <?php echo ucwords($sertifikasi['nama_kecamatan']) ?></p>
		<p style="font-weight: bold;margin-left: 30px"><?php echo ucwords($sertifikasi['nama_kota']) ?></p>

		<div style="margin-top: 20px; text-align: center;">
			<p style="text-decoration: underline;">SURAT PENGANTAR</p>
			<p>Nomor : 521.211 / <span style="margin-left: 15px"></span>/PSBTPH/11. <?php echo date('Y') ?></p>
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
					<td style="line-height: 1">Laporan Lengkap Hasil Pengujian Benih Untuk Sertifikasi Dengan Nomor : <?php echo $sertifikasi['no_induk'] ?></td>
					<td style="line-height: 1" width="10%">1 Lbr</td>
					<td style="line-height: 1">Disampaikan dengan hormat untuk diketahui dan dipertimbangkan sebagaimana mestinya</td>
				</tr>
				
			</tbody>
		</table>

		<hr>
		<br><br>

		<div style="float: left;">
			<p>Tembusan :</p>
			<p>Kepada Yth</p>
			<ol>
				<li>Pengawas Benih Kab. Kukar di- Samarinda</li>
				<li>Arsip</li>
			</ol>
		</div>

		<div style="margin-left: 500px; text-align: center;">
			<p>Samarinda, <?php echo tgl_indo(date('Y-m-d')) ?></p>
			<p style="margin-bottom: 60px">Kepala UPTD,</p>
			<p style="text-decoration: underline;">Ir. Erry Erriadi</p>
			<p>NIP. 196408201998031005</p>
		</div>
	</div>

	
	<hr>
	<br>	

	<div style="font-weight: bold;margin-top : 10px">
		<p style="float: left;">RHLLPHD.6</p>
		<div style="float: right;">
			<table border="1 solid black">
				<td style="line-height: 1">No : <?php echo $sertifikasi['no_induk'] ?> <br>
				MT : <?php echo $sertifikasi['tahun_mt'] ?></td>
			</table>
		</div>

		<div style="clear: both;"></div>
		<p style="text-align: center;line-height: 1">LAPORAN LENGKAP HASIL PENGUJIAN BENIH PADI NON HIBRIDA <br>UNTUK SERTIFIKASI BENIH</p>
	</div>

	<hr>

	<table class="table table-borderless">
			<tbody>
				<tr>
					<td width="10%">Komoditas</td>
					<td>: <?php echo ucwords($sertifikasi['nama_jenis']) ?></td>
					<td>No. Kelompok Benih</td>
					<td>: <?php echo ucwords($sertifikasi['no_kelompok_benih']) ?></td>
				</tr>
				<tr>
					<td width="15%">Nama Produsen</td>
					<td>: <?php echo ucwords($sertifikasi['produsen_benih']) ?></td>
					<td>Kelas Benih</td>
					<td>: <?php echo ucwords($sertifikasi['singkatan']) ?></td>
				</tr>
				<tr>
					<td width="15%">Varietas</td>
					<td>: <?php echo ucwords($sertifikasi['nama_varietas']) ?></td>
					<td>Tanggal Panen</td>
					<td>: <?php echo tgl_indo($sertifikasi['tgl_panen']) ?></td>
				</tr>
				<tr>
					<td width="15%">Jumlah Benih</td>
					<td>: <?php echo ucwords($sertifikasi['jml_wadah']) ?> Wadah</td>
					<td>Tgl. Penerimaan Contoh</td>
					<td>: <?php echo tgl_indo($sertifikasi['tgl_pengambilan_contoh_benih']) ?></td>
				</tr>
				<tr>
					<td width="15%"></td>
					<td>: <?php echo ucwords($sertifikasi['produksi']) ?> Ton</td>
					<td>Tgl. Selesai Pengujian</td>
					<td>: <?php echo tgl_indo($sertifikasi['tgl_selesai_pengujian']) ?></td>
				</tr>
				<tr>
					<td width="20%">No. Laboratorium</td>
					<td>: <?php echo ucwords($sertifikasi['no_lab']) ?></td>
					<td>Tgl. Selesai Laporan</td>
					<td>: 5 November 2019</td>
				</tr>
			</tbody>
		</table>

		<div>
			<p style="text-align: center;font-weight: bold;">Hasil Pengujian Laboratorium</p>
		</div>

		<table class="table table-bordered">
			<tr>
				<td width="20%">Kadar Air</td>
				<td width="30%">: <?php echo $sertifikasi['kadar_air'] ?>%</td>
				<td width="20%">Daya Berkecambah</td>
				<td>: <?php echo $sertifikasi['kecambah_normal'] ?>%</td>
			</tr>
			<tr>
				<td width="15%">Benih Murni</td>
				<td>: <?php echo $sertifikasi['benih_murni'] ?>%</td>
				<td>Benih Tanaman Lain</td>
				<td>: <?php echo $sertifikasi['benih_tan_lain'] ?>%</td>
			</tr>
			<tr>
				<td width="15%">Kotoran Benih</td>
				<td>: <?php echo $sertifikasi['kotoran_benih'] ?>%</td>
				<td>Benih Gulma</td>
				<td>: <?php echo $sertifikasi['benih_gulma_persen'] ?>%</td>
			</tr>
			<tr>
				<td width="15%">Benih Warna Lain</td>
				<td>: -%</td>
				<td></td>
				<td></td>
			</tr>
		</table>

		<p>Memenuhi / tidak memenuhi syarat sertifikasi *)</p>
		<p>Warna Label :</p>
		<p>Berlaku/tidak berlaku sebagai sertifikasi sampai dengan tanggal</p>
		<p>Catatan :</p>

		<div style="margin-left: 500px; text-align: center;">
			<p>Samarinda, <?php echo tgl_indo(date('Y-m-d')) ?></p>
			<p>Pengawas Benih Tanaman,</p>
			<p style="margin-bottom: 60px">Yang Berwenang,</p>
			<p style="text-decoration: underline;">Rachmad Hidayat, SP</p>
			<p>NIP. 196408201998031005</p>
		</div>

		<table class="table table-borderless" style="margin-bottom: 0px;">
			<tr>
				<td width="15%">Lembar Pertama</td>
				<td>: UPTD BPSB</td>
			</tr>
			<tr>
				<td>Lembar Kedua</td>
				<td>: Dinas Pertanian Kabupaten</td>
			</tr>
			<tr>
				<td>Lembar Ketiga</td>
				<td>: Permohonan</td>
			</tr>
			<tr>
				<td>Lembar Keempat</td>
				<td>: Pengawas Benih Tanaman</td>
			</tr>
		</table>
		

	<script>
		// window.print();
	</script>
</body>
</html>