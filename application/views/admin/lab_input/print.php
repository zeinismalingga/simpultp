<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PRINT SERTIFIKASI</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<style>
		*{
			line-height: 0.4;
		}

		@page{
			/*size: 330mm 210mm;*/
			size: 210mm 297mm;
		}

		.header{
			margin-left:  700px;
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
		<div class="box">
			<p>Nomor : <?php echo $sertifikasi['no_induk'] ?></span></p>
			<p>Musim Tanam : 2018/2019</span></p>
			<p>Paraf : </p>
		</div>
		<br>

		<div style="margin-top: 20px">
			<p>Kepada Yth.</p>
			<p>Kepala UPTD PSBTPH PROV. KALTIM</p>
			<p style="margin-left: 20px">Di Samarinda</p>
		</div>
				
	</div>

	<div class="content">	

		<br>
		<p style="font-weight: bold;line-height: normal;text-align: center">PERMOHONAN SERTIFIKASI BENIH BINA TANAMAN PANGAN</p>
		<p style="font-weight: bold;text-align: center;">No.</p>
		<br>

		<p>Komoditas <span class="detail">: <?php echo  ucwords($sertifikasi['nama_jenis']) ?></span></p>
		<p>1. Nama Pemohon <span class="detail">: <?php echo ucwords($sertifikasi['pemohon']) ?></span></p>
		<p style="margin-left: 18px">Alamat <span class="detail">: <?php echo ucwords($sertifikasi['alamat']) ?></span></p>

		<p>2. Sertifikasi benih untuk <span class="detail">:</span></p>
		<p style="margin-left: 18px">Luas Pertanaman <span class="detail">: <?php echo ucwords($sertifikasi['luas']) ?> Ha</span>
		<span style="position: absolute;left:500px">Tanggal Semai <span>: <?php echo tgl_indo($sertifikasi['tgl_semai']) ?></span></span>
		</p>

		<p style="margin-left: 18px">Varietas <span class="detail">: <?php echo ucwords($sertifikasi['nama_varietas']) ?></span>
		<span style="position: absolute;left:500px">Tanggal Tanam <span>: <?php echo tgl_indo($sertifikasi['tgl_tanam']) ?></span></span>
		</p>
		<p style="margin-left: 18px">Kelas Benih <span class="detail">: <?php echo ucwords($sertifikasi['singkatan']) ?></span></p>

		<p>3. Letak Tanah <span class="detail">:</span></p>
		<p style="margin-left: 18px">Blok <span class="detail">: <?php echo ucwords($sertifikasi['blok']) ?></span>
		<span style="position: absolute;left:500px">Kecamatan <span>: <?php echo ucwords($sertifikasi['nama_kecamatan']) ?></span></span>
		</p>
		<p style="margin-left: 18px">Kampung <span class="detail">: <?php echo ucwords($sertifikasi['kampung']) ?></span>
		<span style="position: absolute;left:500px">Kecamatan <span>: <?php echo ucwords($sertifikasi['nama_kota']) ?></span></span>
		</p>
		<p style="margin-left: 18px">Desa <span class="detail">: <?php echo ucwords($sertifikasi['desa']) ?></span></p>

		<p>4. Tanaman Sebelumnya <span class="detail">:</span></p>
		<p style="margin-left: 18px">Jenis Tanaman <span class="detail">: <?php echo ucwords($sertifikasi['jenis_tanaman']) ?></span>
		<span style="position: absolute;left:500px">Varietas <span>: ~</span></span>
		</p>
		<p style="margin-left: 18px">Tanggal Panen <span class="detail">: ~</span>
		<span style="position: absolute;left:500px">Kelas Benih <span>: ~</span></span>
		</p>
		<p style="margin-left: 18px">Pemeriksaan Lapangan <span class="detail">: Lulus / Tidak Lulus</span>
		<span style="position: absolute;left:500px">Disertifikasi <span>: Ya / Tidak</span></span>
		</p>

		<p>5. Asal Benih <span class="detail">:</span></p>
		<p style="margin-left: 18px">Produsen Benih <span class="detail">: <?php echo ucwords($sertifikasi['produsen_benih']) ?></span>
		<span style="position: absolute;left:500px">No. Kelompok Benih <span>: ~</span></span>
		</p>
		<p style="margin-left: 18px">Asal Benih <span class="detail">: <?php echo ucwords($sertifikasi['asal_benih']) ?></span>
		<span style="position: absolute;left:500px">Jumlah benih <span>: <?php echo ucwords($sertifikasi['jumlah_benih']) ?> Kg</span></span>
		</p>
		<p style="margin-left: 18px">Sumber/No <span class="detail">: <?php echo ucwords($sertifikasi['nomor_sumber']) ?></span></p>
		<p style="margin-left: 18px">Kelas Benih <span class="detail">: <?php echo ucwords($sertifikasi['singkatan2']) ?></span></p>

		<p style="margin-left: 18px">No. Kelompok benih (lampirkan keterangan/label benih sumber)</span></p>
		<p style="margin-left: 18px">Kami Menyadari Sepenuhnya Bahwa :</span></p>

		<ul>
			<li>a. Pertanaman kami tidak akan diterima sepenuhnya apabila tidak mengikuti prosedur sertifikasi benih bina tanaman pangan dan dibersihkan dari tanaman/variestas lain untuk memenuhi standar lapangan</li>
			<li>b. Kami wajib memberitahukan kepada <strong>Pengawas Benih Tanaman</strong> untuk pemeriksaan lapangan selambat-lambatnya 7 (tujuh) hari sebelum pelaksanaan pemeriksaan.</li>
			<li>Kami tidak diperkenankan memindahkan letak pertanaman tanpa memberitahukan <strong>Pengawas Benih Tanaman.</strong></li>
			<li>c. Kami tidak diperkenankan memindahkan letak pertanaman tanpa memberitahukan <strong>Pengawas Benih Tanaman</strong></li>
			<li>d. Pengolahan benih harus mendapat bimbingan dari <strong>Pengawas Benih Tanaman</strong></li>
			<li>e. Sertifikat benih bina tanaman pangan akan diberikan apabila telah lulus pemeriksaan lapangan dan pengujian/analismu benih di laboratorium</li>
			<li>f. Pemerintah tidak mempunyai kewajiban untuk membeli benih yang disertifikasi</li>
			<li>g. Kami bersedia membayar biaya jasa pemeriksaan lapangan dan pengujian/analisis mutu benih di laboratorium sesuai dengan ketentuan yang berlaku.</li>
		</ul>
		<?php 

			if($sertifikasi['jenis_anggaran'] == 1){
				$jenis_anggaran = "APBN";
			}else{
				$jenis_anggaran = "APBD";
			}
		?>
		<div class="container" style="margin-top: 30px">
		<div class="row">
			<div class="col-sm-6">
				Catatan : Keg. <?php echo $jenis_anggaran ?>
			</div>
			<div class="col-sm-6" style="text-align:center;">
				<p><?php echo ucwords($sertifikasi['nama_kota']). ", ". tgl_indo($sertifikasi['tgl_surat']) ?></p>
				<p>Pemohon,</p>
				<p style="margin-top: 100px"><?php echo ucwords($sertifikasi['pemohon']) ?></p>
			</div>
		</div>
		</div>
		
		<br>
		<div style="margin-left: 300px; text-align: center;">
		</div>


	</div>	
	<script>
		window.print();
	</script>
</body>
</html>