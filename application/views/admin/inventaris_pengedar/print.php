<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PRINT PENGEDAR BENIH</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">

	<style>
		*{
			line-height: 0.4;
		}

		@page{
      /*f4*/
			size: 330mm 210mm; 
      /*a4*/
			/*size: 297mm 210mm;*/
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
	
	<div class="header text-center">
		<p>INVENTARIS DATA PENGEDAR BENIH TANAMAN PANGAN</p>
    <p>PROVINSI KALIMANTAN TIMUR</p>
	</div>
	<hr>

	<table class="table table-bordered table-striped table-responsive" vertical-align="middle" style="overflow-x:scroll;">
        <thead>
                  <tr>
                    <th>No</th>
                    <th>No. Rekomendasi</th>
                    <th>Nama Perusahaan</th>
                    <th>Nama Pimpinan</th>
                    <th>Alamat Lokasi Usaha</th>
                    <th>Alamat Pimpinan</th>
                    <th>Bentuk Usaha</th>
                    <th>Jenis Benih</th>
                    <th>Kelas Benih</th>
                  </tr>
                </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach($inventaris as $inventaris_item): ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo ucwords($inventaris_item['no_rekomendasi']); ?></td>
              <td><?php echo ucwords($inventaris_item['nama_perusahaan']); ?></td>
              <td><?php echo $inventaris_item['nama_pimpinan']; ?></td>
              <td><?php echo ucwords($inventaris_item['alamat_lokasi_usaha']); ?></td>
              <td><?php echo ucwords($inventaris_item['alamat_pimpinan']); ?></td>
              <td><?php echo ucwords($inventaris_item['bentuk_usaha']); ?></td>
              <td><?php echo ucwords($inventaris_item['nama_jenis']); ?></td>
              <td><?php echo ucwords($inventaris_item['singkatan']); ?></td>
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