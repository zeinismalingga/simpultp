<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PRINT LAB</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

	<style>

		tr td > p:first-of-type {
  			display: inline;
		}	

		.baris{
			line-height: 0.4;
		}

		@page{
			/*f4*/
			/*size: 330mm 210mm;*/

			/*a4*/
			/*size: 210mm 297mm;*/
		}

		.content{
			font-family: Times New Roman, Helvetica, sans-serif;
		}

		br{
			line-height: 0.5;
		}

		table{
			line-height: 1;
			vertical-align: center;
		}


		ul{
			list-style-type: none;
		}
		li{
			line-height: normal;
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
	
	<div class="header baris">
		<img src="<?php echo base_url('assets/images/ruhui.png') ?>" width="90" style="position: fixed;margin-left: 90px;float: left;">

		<img src="<?php echo base_url('assets/images/logo kan.png') ?>" width="150" style="position: fixed;margin-left: 900px;float: left;">

		<div class="box text-center" style="margin-top: 20px;font-weight: bold;">
			<p>PEMERINTAH PROVINSI KALIMANTAN TIMUR</p>
			<p>DINAS PERTANIAN TANAMAN PANGAN</p>
			<p>UNIT PELAKSANA TEKNIS DINAS</p>
			<p>PENGAWASAN DAN SERTIFIKASI BENIH</p>
			<p>TANAMAN PANGAN DAN HORTIKULTURA</p>
			<p>Jln. P. Muhammad Noor Sempaja Telp. (0541) 221212, 221213, Fax : 22121212</p>
			<p>S A M A R I N D A</p>
		</div>
		<div class="float-left">
			KOTAK POS 1161
		</div>
		<div class="float-right">
			KODE POS 75119
		</div>
		<br>

		<hr>
				
	</div>

	<div class="content baris">

		<div class="text-center" style="font-weight: bold;">
			<p>Laporan Hasil Pengujian Benih Laboratoris</p>
			<p style="text-decoration: underline;">CONTOH BENIH SERTIFIKASI</p>

			<br>
			<br>
			
		</div>

		<div style="margin-left: 210px">
			<div style="position: absolute;right: 2px">
				<table class="table table-bordered">
					<tr>
						<th>No. Asal</th>
						<th>No. Lab</th>
					</tr>
					<tr>
						<td><?php echo $lab['no_tu'] ?></td>
						<td><?php echo $lab['no_lab'] ?></td>
					</tr>					
				</table>
			</div>

			<p>Kepada Yth. <span style="left: 380px; position: absolute;">: Seksi Sertifikat dan Kultivar</span></p>
			<p>Alamat <span style="left: 380px; position: absolute;">: UPTD PSB TPH Kalimantan Timur</span></p>
			<p>Jenis Tanaman <span style="left: 380px; position: absolute;">: <?php echo $lab['nama_jenis_tanaman'] ?></span></p>
			<p>Varietas <span style="left: 380px; position: absolute;">: <?php echo $lab['nama_varietas'] ?></span></p>
			<p>Kelas Benih <span style="left: 380px; position: absolute;">: <?php echo $lab['singkatan'] ?></span></p>
			<p>Berat Contoh Kirim <span style="left: 380px; position: absolute;">: 1000 gram</span></p>
			<p>Tgl Panen <span style="left: 380px; position: absolute;">: <?php echo tgl_indo($lab['tgl_panen']) ?></span></p>
			<p>Tgl Penerimaan Lab <span style="left: 380px; position: absolute;">: <?php echo tgl_indo($lab['tgl_tu']) ?> </span></p>
			<p>Tgl Pengujian <span style="left: 380px; position: absolute;">: <?php echo ($lab['tgl_pengujian']) ? tgl_indo($lab['tgl_pengujian']) : '' ?> </span></p>
			<p>Tgl Selesai Pengujian <span style="left: 380px; position: absolute;">: <?php echo ($lab['tgl_selesai_pengujian']) ? tgl_indo($lab['tgl_selesai_pengujian']) : '' ?></span></p>
		</div>

		<br>

		<div class="table table-bordered">
			<table style="word-wrap: break-word;">
				<tr align="center">
					<th>Kadar Air (%)</th>
					<th colspan="4">Kemurnian</th>
					<th colspan="6">Daya Berkecambah</th>
				</tr>
				<tr align="center">
					<td rowspan="2"><?php echo $lab['kadar_air'] ?></td>
					<th>Berat Contoh Kerja (gram)</th>
					<th>Benih Murni (%)</th>
					<th>Benih Tan. Lain (%)</th>
					<th>Kotoran Benih (%)</th>
					<th>Jangka Waktu Pengujian (hari)</th>
					<th>Kecambah Normal (%)</th>
					<th>Kecambah Abnormal (%)</th>
					<th>Benih Keras (%)</th>
					<th>Benih Segar (%)</th>
					<th>Benih Mati (%)</th>
				</tr>
				<tr align="center">
					<td><?php echo $lab['berat_cnth_kerja'] ?></td>
					<td><?php echo $lab['benih_murni'] ?></td>
					<td><?php echo $lab['benih_tan_lain'] ?></td>
					<td><?php echo $lab['kotoran_benih'] ?></td>
					<td><?php echo $lab['jangka_waktu_pengujian'] ?></td>
					<td><?php echo $lab['kecambah_normal'] ?></td>
					<td><?php echo $lab['kecambah_abnormal'] ?></td>
					<td><?php echo $lab['benih_keras'] ?></td>
					<td><?php echo $lab['benih_segar'] ?></td>
					<td><?php echo $lab['benih_mati'] ?></td>
				</tr>
				<tr>
					<td rowspan="6">Metode KA: <?php echo $lab['metode_ka'] ?></td>
				</tr>
				<tr>
					<td colspan="4" rowspan="1">Metode Kemurnian: <?php echo $lab['metode_kemurnian'] ?></td>
					<td colspan="6" rowspan="1" align="center">Metode Daya Berkecambah : <?php echo $lab['metode_daya_berkecambah'] ?></td>
				</tr>
				<tr>
					<td colspan="4" rowspan="5">Benih Gulma <br> : <?php echo $lab['benih_gulma_gr'] ?> gram <br>: <?php echo $lab['benih_gulma_persen'] ?> %
					</td>
					<td colspan="1" style="border-right: hidden;border-bottom: hidden;">Ket</td>
					<td colspan="5" style="border-bottom: hidden;">: <?php echo $lab['ket'] ?></td>
				</tr>
				<tr style="border-bottom: hidden;">
					<td colspan="1" style="border-bottom: hidden;border-right: hidden;">Suhu</td>
					<td colspan="5" style="border-bottom: hidden;">: <?php echo $lab['suhu'] ?></td>
				</tr>
				<tr>
					<td colspan="1" style="border-bottom: hidden;border-right: hidden;">Media/Metode DB</td>
					<td colspan="5" style="border-bottom: hidden;">: <?php echo $lab['media'] ?></td>
				</tr>
				<tr>
					<td colspan="1" style="border-right: hidden;">Abnormalis</td>
					<td colspan="5">: <?php echo $lab['abnormalis'] ?></td>
				</tr>

			</table>
		</div>
		 <br>
		 <br>
		<div class="row">
			<div class="col-sm-5">
				<table class="table table-bordered">
					<th>DAYA BERKECAMBAH : <?php echo $lab['kecambah_normal'] ?> %</th>
				</table>

				<div>
					<p style="margin-top: 70px">Catatan <span style="position: absolute;left: 180px">: <?php echo $lab['catatan'] ?></span></p>
					<p>Diverifikasi Oleh <span style="position: absolute;left: 180px">: Syarifah Inayah A., SP</span></p>
					<p>Tanggal <span style="position: absolute;left: 180px">: <?php echo ($lab['tgl_selesai_pengujian']) ? tgl_indo($lab['tgl_selesai_pengujian']) : '' ?></span></p>
					<p>Paraf <span style="position: absolute;left: 180px">: </span></p>

					
					<p style="margin-top: 50px">Keterangan :</p>
					<p>*) : Perlakuan</p>
					<p>PA = Pemanasan dengan oven pada suhu 50 &#8451</p>
					<p>PE = Perendaman dengan larutan KN03 3%</p>
					<p>**) = Penaburan dilakukan setelah benih dilakukan perlakuan</p>
				</div>
			</div>
			
			<div class="col-sm-7">
				<div class="text-center">
					<p>Samarinda, <?php echo ($lab['tgl_selesai_pengujian']) ? tgl_indo($lab['tgl_selesai_pengujian']) : '' ?></p>
					<p style="margin-bottom: 100px">Manajer Teknis,</p>
					
					<p style="text-decoration: underline;">Lilik Dwi Hastuti, SP</p>
					<p>NIP. 197005192007012007</p>
				</div>
				
			</div>

		</div>



	</div>	
	<script>
		// window.print();
	</script>
</body>
</html>