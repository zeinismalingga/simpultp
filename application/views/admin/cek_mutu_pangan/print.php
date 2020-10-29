<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>REALISASI PENGECEKAN MUTU BENIH TANAMAN PANGAN TAHUN 2020</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

	<style>
		*{
			line-height: 0.4;
		}

		@page{
			/*size: 330mm 210mm;*/
			/*size: 210mm 297mm;*/
			size: 297mm 210mm;
		}

		.header{
			margin-top: 10px;
			font-size: 12px;
		}

		.content{
			font-family: Arial, Helvetica, sans-serif;
		}

		br{
			line-height: 0.5;
		}

		table{

			line-height: 0.6;
			font-size: 10px;
		}

		tr>td, tr>th{
			line-height: 1;
		}

		.table td, .table th {
			padding: 5px;
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

	<?php 
	    if(isset($cek_mutu['0']['nama_bulan'])){
	      $nama_bulan = $cek_mutu['0']['nama_bulan'];
	    }else{
	      $nama_bulan = '';
	    }
	?>
	
	<div class="header">
		<p>REALISASI PENGECEKAN MUTU BENIH TANAMAN PANGAN TAHUN 2020</p>
		<p>BULAN : <?php echo strtoupper($nama_bulan) ?></p>
	</div>
	<hr>

	<table class="table table-bordered table-striped" vertical-align="middle" style="overflow-x:scroll;">
        <thead>
          <tr>
            <th rowspan="3">No</th>
            <th rowspan="3">Komoditi</th>
            <th rowspan="3">Jumlah Benih Yang Dicek (kg)</th>
            <th colspan="4" class="text-center">Hasil Pengecekan Mutu</th>
          </tr>
          <tr>
            <th colspan="2">Memenuhi Standar</th>
            <th colspan="2">Dibawah Standar</th>
          </tr>
          <tr>
            <th colspan="1">(kg)</th>
            <th colspan="1">%</th>
            <th colspan="1">(kg)</th>
            <th colspan="1">%</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach($cek_mutu as $cek_mutu_item): ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $cek_mutu_item['nama_komoditi']; ?></td>
              <td><?php echo $cek_mutu_item['jumlah_benih']; ?></td>
              <td><?php echo $cek_mutu_item['memenuhi_standar_perkilo']; ?></td>
              <td><?php echo $cek_mutu_item['memenuhi_standar_persen']; ?></td>
              <td><?php echo $cek_mutu_item['dibawah_standar_perkilo']; ?></td>
              <td><?php echo $cek_mutu_item['dibawah_standar_persen']; ?></td>
              
            </tr>
            <?php $no++ ?>
        <?php endforeach; ?>
        </tbody>
      </table>  
	<script>
		// window.print();
	</script>
</body>
</html>