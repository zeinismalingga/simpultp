<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PRINT REKOMENDASI</title>
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
	<div class="content">

	<?php 
		$tgl_kesimpulan = date_create($sertifikasi['tgl_kesimpulan']);
	?>

	<table class="table table-borderless">
		<tbody>
			<tr>
				<td style="padding-left: 0px;">Nomor</td>
				<td>: 521.221 / <span style="padding-left: 3em;"></span>/ UPTD PSBTPH / <?php echo date_format($tgl_kesimpulan, "m") ?>.2020</td>
				<td>Samarinda, <?php echo tgl_indo($sertifikasi['tgl_kesimpulan']) ?></td>
			</tr>
			<tr>
				<td style="padding-left: 0px;">Lampiran</td>
				<td width="65%">: 1 (Satu) Berkas</td>
			</tr>
			<tr>
				<td style="padding-left: 0px;">Perihal</td>
				<td width="65%">: Persetujuan/Rekomendasi Penelitian Benih Sumber Sertifikasi Benih</td>
			</tr>
		</tbody>
	</table>

	<?php
		$kabkot = $sertifikasi['id_kabupaten'];
		$kota = ['1,3,6'];

		if(in_array($kabkot, $kota)){
			$kabkot = 'Kota';
		}else{
			$kabkot = 'Kabupaten';
		}
	?>	

	<p>Yang terhormat</p>
	<p>Sdr. <span style="font-weight: bold;"><?php echo $sertifikasi['produsen_benih'] ?></span></p>
	<p>Di - Desa <?php echo $sertifikasi['desa'] ?> Kec. <?php echo $sertifikasi['nama_kecamatan'] ?> </p>

	<br>

	<p>Sehubungan dengan Permohonan Saudara No. ……………..Tanggal <?php echo tgl_indo($sertifikasi['tgl_kesimpulan']) ?></p>
	<p>Bersama ini kami beritahukan sebagai berikut :</p>

	<table class="table table-borderless">
		<tr>
			<td style="text-decoration: underline;padding-left: 0px;">Pertanaman</td>
		</tr>
		<tr>
			<td width="20%" style="padding-left: 0px;">Musim Tanam</td>
			<td width="20%">: <?php echo $sertifikasi['tahun_mt'] ?></td>
			<td width="20%">Varietas</td>
			<td >: <?php echo $sertifikasi['nama_varietas'] ?></td>
		</tr>
		<tr>
			<td style="padding-left: 0px;">Benih Sumber</td>
			<td>: <?php echo $sertifikasi['pemohon'] ?></td>
			<td>Luas Pertanaman</td>
			<td>: <?php echo $sertifikasi['luas'] ?> Ha</td>
		</tr>
		<tr>
			<td style="padding-left: 0px;">Kelas Benih</td>
			<td>: <?php echo $kelas_benih['singkatan'] ?></td>
			<td>Tanggal Semai</td>
			<td>: <?php echo $sertifikasi['tgl_semai'] ?></td>
		</tr>
		<tr>
			<td style="padding-left: 0px;">Jumlah Benih</td>
			<td>: <?php echo $sertifikasi['jumlah_benih'] ?></td>
			<td>Tanggal Tanam</td>
			<td>: <?php echo $sertifikasi['tgl_tanam'] ?></td>
		</tr>
		<tr>
			<td style="padding-left: 0px;">Jenis Tanaman</td>
			<td>: <?php echo ucwords($sertifikasi['nama_jenis']) ?></td>
		</tr>
	</table>

	<br>

	<table class="table table-borderless">
		<tr>
			<td style="text-decoration: underline;padding-left: 0px;">L o k a s i :</td>
		</tr>
		<tr>
			<td width="20%" style="padding-left: 0px;">B l o k</td>
			<td width="20%">: <?php echo ucwords($sertifikasi['blok']) ?></td>
			<td width="20%">Desa</td>
			<td>: <?php echo ucwords($sertifikasi['desa']) ?></td>
		</tr>

		<?php if(!in_array($kabkot, $kota)): ?>
		<tr>
			<td style="padding-left: 0px;">Kecamatan</td>
			<td>: <?php echo $sertifikasi['nama_kecamatan'] ?></td>
			<td>Kabupaten</td>
			<td>: <?php echo ucwords($sertifikasi['nama_kota']) ?></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>Kota</td>
			<td>: -</td>
		</tr>
 		<?php endif; ?>

 		<?php if(in_array($kabkot, $kota)): ?>
		<tr>
			<td style="padding-left: 0px;">Kecamatan</td>
			<td>: <?php echo $sertifikasi['nama_kecamatan'] ?></td>
			<td>Kabupaten</td>
			<td>: -</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>Kota</td>
			<td>: <?php echo ucwords($sertifikasi['nama_kota']) ?></td>
		</tr>
		<?php endif; ?>

	</table>

	<br>

	<p style="line-height: 1">Berdasarkan pemeriksaan lapangan pendahuluan yang dilaksanakan oleh pengawas benih pada tanggal <?php echo $sertifikasi['tgl_kesimpulan'] ?> maka per mohonan saudara diterima sebagai areal perbanyakan benih Dengan :</p>

	<table class="table table-borderless">
		<tr>
			<td width="20%" style="padding-left: 0">Nomor Induk</td>
			<td>: <?php echo $sertifikasi['no_induk'] ?></td>
		</tr>
		<tr>
			<td style="padding-left: 0">Kelas Benih</td>
			<td>: <?php echo $sertifikasi['singkatan'] ?></td>
		</tr>
	</table>

	<table class="table table-borderless">
		<tr>
			<td colspan="2" style="padding-left: 0px;">Dengan ketentuan sebagai berikut :</td>
		</tr>
		<tr>
			<td width="1%" style="padding-right: 0px;line-height: 1;padding-left: 0px;">a.</td>
			<td style="line-height: 1">Areal penangkaran saudara akan kami batalkan apabila saudara tidak mengikuti petunjuk / ketentuan dari UPTD Pengawasan dan Sertifikasi Benih Tanaman Pangan dan Hortikultura.</td>
		</tr>
		<tr>
			<td width="1%" style="padding-right: 0px; line-height: 1;padding-left: 0px;">b.</td>
			<td style="line-height: 1">Label dapat dikeluarkan / dipasang apabila telah lulus pemeriksaan lapangan dan uji laboratorium serta telah membayar biaya pemeriksaan lapangan dan penguji benih, ( sesuai PP No.35 Th.2016 Tanggal 11 Agustus 2016 ).</td>
		</tr>
	</table>

	</div>
	

	<div style="margin-left: 700px;margin-top: 70px">
		<div class="text-center">
			<p style="margin-bottom: 100px">Kepala UPTD,</p>
			<p style="text-decoration: underline;">Ir. Erry Erriadi</p>
			<p>NIP. 196408201998031005</p>
		</div>
	</div>

	<div>
		<p>Tembusan kepada Yth.</p>
		<p>Pengawas Benih <?php echo $kabkot ?> <?php echo ucwords($sertifikasi['nama_kota']) ?></p>
		<p>Arsip</p>
	</div>
		

	<script>
		// window.print();
	</script>
</body>
</html>