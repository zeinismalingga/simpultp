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

		.table td, .table th {
    	border: none;
		}

		table.table.table-condensed {
		    border: 2px solid black;
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

	<div style="font-weight: bold;margin-top : 10px">
		<p style="float: left;">RHLLPHD.6</p>
		<div style="float: right;">
			<table border="2 solid black">
				<td style="line-height: 1">No : <?php echo $sertifikasi['no_induk'] ?> <br>
				MT : <?php echo $sertifikasi['tahun_mt'] ?></td>
			</table>
		</div>

		<div style="clear: both;"></div>
		<p style="text-align: center;line-height: 1">LAPORAN LENGKAP HASIL PENGUJIAN BENIH <?php echo strtoupper($sertifikasi['nama_jenis']) ?> <br>UNTUK SERTIFIKASI BENIH TANAMAN PANGAN</p>
	</div>

	<hr>

	<table class="table table-borderless">
			<tbody>
				<tr>
					<td width="10%">Komoditas</td>
					<td style="width: 0;">:</td>
					<td><?php echo ucwords($sertifikasi['nama_jenis']) ?></td>
					<td>No. Laboratorium</td>
					<td style="width: 0;">:</td>
					<td><?php echo ucwords($sertifikasi['no_lab']) ?></td>
				</tr>
				<tr>
					<td width="10%">Nama Produsen</td>
					<td>:</td>
					<td><?php echo ucwords($sertifikasi['nama_produsen']) ?></td>
					<td>No. Kelompok Benih</td>
					<td>:</td>
					<td><?php echo ucwords($sertifikasi['no_kelompok_benih']) ?></td>
				</tr>
				<tr>
					<td width="5%">Alamat</td>
					<td>:</td>
					<td width="30%" style="line-height: normal">Ds. <?php echo ucwords($sertifikasi['desa']) ?>, Kec. <?php echo ucwords($sertifikasi['nama_kecamatan']) ?>, <?php echo ucwords($sertifikasi['nama_kota']) ?> </td>
					<td width="20%">Kelas Benih</td>
					<td>:</td>
					<td><?php echo ucwords($sertifikasi['singkatan']) ?></td>
				</tr>
				<tr>
					<td width="5%">Varietas</td>
					<td>:</td>
					<td width="30%"><?php echo $sertifikasi['nama_varietas'] ?></td>
					<td width="20%">Tanggal Panen</td>
					<td>:</td>
					<td><?php echo tgl_indo($sertifikasi['tgl_panen']) ?></td>
				</tr>
				<tr>
					<td width="15%">Jumlah Benih</td>
					<td>:</td>
					<td><?php echo ucwords($sertifikasi['jml_wadah']) ?> Wadah</td>
					<td>Tgl. Penerimaan Contoh</td>
					<td>:</td>
					<td><?php echo tgl_indo($sertifikasi['tgl_penerima_contoh']) ?></td>

				</tr>
				<tr>
					<td width="15%"></td>
					<td>:</td>
					<td><?php echo ucwords($sertifikasi['produksi']) ?> Ton</td>
					<td>Tgl. Pengujian</td>
					<td>:</td>
					<td><?php echo tgl_indo($sertifikasi['tgl_pengujian']) ?></td>
				</tr>
				<tr>
					<td width="15%"></td>
					<td></td>
					<td></td>
					<td>Tgl. Selesai Pengujian</td>
					<td>:</td>
					<td><?php echo tgl_indo($sertifikasi['tgl_selesai_pengujian']) ?></td>
				</tr>
				<tr>
					<td width="15%"></td>
					<td></td>
					<td></td>
					<td>Tgl. Laporan</td>
					<td>:</td>
					<td><?php echo tgl_indo($sertifikasi['tgl_laporan']) ?></td>
				</tr>
			</tbody>
		</table>
		<br>
		<div>
			<p style="text-align: center;">Hasil Pengujian/Analisis Mutu Benih di Laboratorium</p>
		</div>

		<table class="table table-condensed">
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
			<p>Samarinda, <?php echo tgl_indo($sertifikasi['tgl_llhp']) ?></p>
			<p>Pengawas Benih Tanaman,</p>
			<p style="margin-bottom: 60px">Yang Berwenang,</p>
			<p style="text-decoration: underline;">Juhairiyah, S.P</p>
			<p>NIP. 19750702 200801 2 014</p>
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
		window.print();
	</script>
</body>
</html>