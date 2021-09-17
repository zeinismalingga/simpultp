<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PRINT CEK MUTU</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

	<style>

		.table{
			outline-style: solid;
			outline-width: 2px;
		}

		.table td, .table th {
    	padding: .50rem;
  	}

		tr td > p:first-of-type {
  			display: inline;
		}	

		tr, td {
			padding: 5px;
		}

		.baris{
			line-height: 0.4;
		}

		@page{
			/*f4*/
			/*size: 330mm 210mm;*/

			/*a4*/
			size: 210mm 297mm;
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
		<img src="<?php echo base_url('assets/images/ruhui.png') ?>" width="65" style="position: fixed;margin-left: 90px;float: left;">



		<div class="box text-center" style="margin-top: 20px;font-weight: bold;">
			<p>PEMERINTAH PROVINSI KALIMANTAN TIMUR</p>
			<p>DINAS PERTANIAN TANA,l.TIFIKASI BENIH</p>
			<p>TANAMAN PANGAN DAN HORTIKULTURA</p>
			<p>Jln. P. Muhammad Noor Sempaja Telp. (0541) 221212, 221213, Fax : 22121212</p>
			<p>S A M A R I N D A</p>
			<br>
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

	<div>
		<div class="float-left">
			<table>
				<tr>
					<td width="100px">Nomor</td>
					<td>:</td>
					<td><?php echo 'CMP. '. $cek_mutu['no_contoh_benih'] ?></td>
				
				</tr>
				<tr>
					<td>Lampiran</td>
					<td>:</td>
					<td></td>
				</tr>
				<tr>
					<td>Hal</td>
					<td>:</td>
					<td>Hasil Pengecekan Mutu</td>
				</tr>
			</table>
		</div>

		<div class="float-right" style="margin-right: 100px;">
			<table>
				<tr>
					<td>Kepada Yth.</td>
				</tr>
				<tr>
					<td><?php echo $cek_mutu['nama_produsen'] ?></td>
				</tr>
				<tr>
					<td>di-</td>
				</tr>
				<tr>
					<td>&emsp;&emsp; Samarinda</td>
				</tr>
			</table>
		</div>
	</div>

	<div style="clear: both;margin-bottom: 10px"></div>
	<div>
		<p>Dengan ini disampaikan hasil pengujian/analisis mutu benih untuk pengecekan mutu benih yang contohnya telah diambil oleh staf kami pada tanggal <?php echo tgl_indo($cek_mutu['tgl_pengambilan_cth']) ?> di Samarinda terhadap kelompok benih dengan indentitas sebagai berikut : </p>
	</div>

	<div>
		<table>
			<tr>
				<td width="200px">Nomor Kelompok Benih</td>
				<td>:</td>
				<td><?php echo $cek_mutu['no_kelompok_benih'] ?></td>
			</tr>
			<tr>
				<td width="200px">Nama Produsen Benih</td>
				<td>:</td>
				<td><?php echo $cek_mutu['nama_produsen'] ?></td>
			</tr>
			<tr>
				<td width="200px">Alamat Kelompok Benih</td>
				<td>:</td>
				<td></td>
			</tr>
			<tr>
				<td width="200px">Jenis Tanaman</td>
				<td>:</td>
				<td><?php echo ucwords($cek_mutu['nama_jenis']) ?></td>
			</tr>
			<tr>
				<td width="200px">Varietas</td>
				<td>:</td>
				<td><?php echo ucwords($cek_mutu['nama_varietas']) ?></td>
			</tr>
			<tr>
				<td width="200px">Kelas Benih</td>
				<td>:</td>
				<td><?php echo $cek_mutu['singkatan'] ?></td>
			</tr>
			<tr>
				<td width="200px">Tanggal Akhir Masa Edar</td>
				<td>:</td>
				<td><?php echo tgl_indo($cek_mutu['tgl_akhir']) ?></td>
			</tr>
			<tr>
				<td width="200px">Tonase/Jumlah Wadah</td>
				<td>:</td>
				<td><?php echo $cek_mutu['tonase'] ?> ton/ <?php echo $cek_mutu['wadah'] ?> wadah</td>
			</tr>
		</table>
	</div>
	<br>

	<div>
		<p>Hasil pengujian/analisis mutu benih sebagai berikut:</p>
	</div>

	<div>
		<table class="table table-borderless">
			<tr>
				<td>A.</td>
				<td>Benih Bentuk Biji</td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td style="text-align: center;">Parameter</td>
				<td style="text-align: center;">Data Pada Label</td>
				<td></td>
				<td style="text-align: center;">Hasil Uji Analisis</td>
			</tr>
			<tr>
				<td></td>
				<td>Benih Murni</td>
				<td>:</td>
				<td style="text-align: right;"><?php echo $cek_mutu['benih_murni'] ?> %</td>
				<td style="text-align: right;"><?php echo $cek_mutu['benih_murni_hu'] ?> %</td>
			</tr>
			<tr>
				<td></td>
				<td>Kotoran Benih</td>
				<td>:</td>
				<td style="text-align: right;"><?php echo $cek_mutu['kotoran_benih'] ?> %</td>
				<td style="text-align: right;"><?php echo $cek_mutu['kotoran_benih_hu'] ?> %</td>
			</tr>
			<tr>
				<td></td>
				<td>Benih Tanaman Lain</td>
				<td>:</td>
				<td style="text-align: right;"><?php echo $cek_mutu['benih_tanaman_lain'] ?> %</td>
				<td style="text-align: right;"><?php echo $cek_mutu['benih_tanaman_lain_hu'] ?> %</td>
			</tr>
			<tr>
				<td></td>
				<td>Biji Gulma</td>
				<td>:</td>
				<td style="text-align: right;"><?php echo $cek_mutu['biji_gulma'] ?> %</td>
				<td style="text-align: right;"><?php echo $cek_mutu['biji_gulma_hu'] ?> %</td>
			</tr>
			<tr>
				<td></td>
				<td>Kadar Air</td>
				<td>:</td>
				<td style="text-align: right;"><?php echo $cek_mutu['kadar_air_persen'] ?> %</td>
				<td style="text-align: right;"><?php echo $cek_mutu['kadar_air_hu'] ?> %</td>
			</tr>
			<tr>
				<td></td>
				<td>Daya Berkecambah</td>
				<td>:</td>
				<td style="text-align: right;"><?php echo $cek_mutu['daya_berkecambah_persen'] ?> %</td>
				<td style="text-align: right;"><?php echo $cek_mutu['daya_berkecambah_hu'] ?> %</td>
			</tr>
			<tr>
				<td></td>
				<td>Tanggal Pengujian/Analisis</td>
				<td>: <?php echo tgl_indo($cek_mutu['tgl_pengujian']) ?></td>
				<td style="text-align: right;"></td>
				<td style="text-align: right;"></td>
			</tr>
			<tr>
				<td>B. </td>
				<td>Hasil Pengecekan di Gudang</td>
				<td>:</td>
				<td style="text-align: right;"></td>
				<td style="text-align: right;"></td>
			</tr>

		</table>
	</div>

	<div>
		<p>Catatan: Laboratorium hanya bertanggungjawab terhadap sampel yang diujikan di laboratorium.</p>
		<p>Berdasarkan data di atas maka isi label <strong>masih sesuai/tidak sesuai</strong> dengan persyaratan mutu benih yang berlaku, dan <strong>masih dapat disalurkan/supaya ditarik dari peredaran/supaya diganti label *)</strong></p>
	</div>

	<br>

	<div class="baris" style="margin-left: 500px">
			<div class="col-sm-9">
				<div class="text-center">
					<p>Samarinda, <?php echo tgl_indo($cek_mutu['tgl_hasil']) ?></p>
					<p>Kelapa UPTD PSBTPH</p>
					<p style="margin-bottom: 100px">Provinsi Kalimantan Timur,</p>
					<p style="text-decoration: underline;">Ir. Fenty Rubiah Harahap, M. Si</p>
					<p>NIP. 19670614 198709 2 001</p>
				</div>
				
			</div>
	</div>	
	<div style="clear: both;"></div>
	
	<div>
		<span>Tembusan Yth :</span>
		<table>
			<tr>
				<td>1. </td>
			  <td>Kepala Dinas Pangan TPH Provinsi Kalimantan Timur</td>
			</tr>
			<tr>
				<td>2. </td>
			  <td>Kepala Dinas Kabupaten/Kota</td>
			</tr>
			<tr>
				<td>*) </td>
			  <td>Coret yang tidak sesuai</td>
			</tr>	
		</table>
	</div>
	<script>
		window.print();
	</script>
</body>
</html>