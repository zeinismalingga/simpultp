<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PRINT PENYALURAN BENIH</title>
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
	    if(isset($stok_pangan['0']['nama_bulan'])){
	      $nama_bulan = $stok_pangan['0']['nama_bulan'];
	    }else{
	      $nama_bulan = '';
	    }

	    if(isset($stok_pangan['0']['nama_jenis'])){
	      $nama_jenis = $stok_pangan['0']['nama_jenis'];
	    }else{
	      $nama_jenis = '';
	    }

	?>
	
	<div class="header">
		<p>MONITORING PENYALURAN BENIH TAHUN 2020</p>
		<p>PROVINSI : KALIMANTAN TIMUR</p>
		<p>BULAN : <?php echo strtoupper($nama_bulan) ?></p>
		<p>KOMODITI : <?php echo strtoupper($nama_jenis) ?></p>
	</div>
	<hr>

	<table class="table table-bordered table-striped table-responsive" vertical-align="middle" style="overflow-x:scroll;">
        <thead>
          <tr>
            <th rowspan="2">No</th>
            <th rowspan="2">Kabupaten/Kota</th>
            <th rowspan="2">Kelas Benih</th>
            <th rowspan="2">Varietas</th>
            <th rowspan="2">Sisa Stok Bln Lalu(Ton)</th>
            <th colspan="2" class="text-center">Stok Bulan Ini (Ton)</th>
            <th rowspan="2">Jumlah</th>
            <th colspan="3" class="text-center">Penyaluran Benih(Ton)</th>
            <th rowspan="2">Jumlah</th>
            <th rowspan="2">Sisa Stok Bulan Ini(Ton)</th>
          </tr>
          <tr>
            <th>Produksi Benih</th>
            <th>Pengadaaan dari Luar Provinsi</th>
            <th>Penyaluran ke Luar Provinsi</th>
            <th>Subsidi Benih</th>
            <th>Non Subsidi Benih</th>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach($stok_pangan as $stok_pangan_item): ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo ucwords($stok_pangan_item['nama_kota']); ?></td>
              <td><?php echo $stok_pangan_item['singkatan']; ?></td>
              <td><?php echo $stok_pangan_item['nama_varietas']; ?></td>
              <td><?php echo $stok_pangan_item['sisa_stok_bln_lalu']; ?></td>
              <td><?php echo $stok_pangan_item['produksi_benih']; ?></td>
              <td><?php echo $stok_pangan_item['pengadaan_luar_prov']; ?></td>

              <?php $jumlah1 = $stok_pangan_item['sisa_stok_bln_lalu'] + $stok_pangan_item['produksi_benih'] + $stok_pangan_item['pengadaan_luar_prov']; ?>
              <?php 
              $jumlah2 = $stok_pangan_item['penyaluran_luar_prov'] + $stok_pangan_item['subsidi_benih'] + $stok_pangan_item['nonsubsidi_benih']; 

              $jumlah3 = $jumlah1 - $jumlah2;
              ?>

              <td><?php echo number_format($jumlah1, 2);?></td>
              <td><?php echo $stok_pangan_item['penyaluran_luar_prov']; ?></td>
              <td><?php echo $stok_pangan_item['subsidi_benih']; ?></td>
              <td><?php echo $stok_pangan_item['nonsubsidi_benih']; ?></td>
              <td><?php echo number_format($jumlah2, 2);?></td>
              <td><?php echo number_format($jumlah3, 2);?></td>
              
            </tr>
            <?php $no++ ?>
        <?php endforeach; ?>

        	<?php  

            $total_bd = array_shift($total_kelas_bd);
            foreach ($total_kelas_bd as $val) {
              foreach ($val as $key => $val) {
                $total_bd[$key] += $val;
              }
            }

            $total_bp = array_shift($total_kelas_bp);
            foreach ($total_kelas_bp as $val) {
              foreach ($val as $key => $val) {
                $total_bp[$key] += $val;
              }
            }
            
        	$total_br = array_shift($total_kelas_br);
            foreach ($total_kelas_br as $val) {
              foreach ($val as $key => $val) {
                $total_br[$key] += $val;
              }
            }

            $jumlah_stok = array_shift($jumlah);
            foreach ($jumlah as $val) {
              foreach ($val as $key => $val) {
                $jumlah_stok[$key] += $val;
              }
            }
           
            ?>

            <?php if(!empty($total_kelas_bd)): ?>
            <tr>
              <td></td>
              <td></td>
              <td>BD</td>
              <td></td>
              <td><?php echo number_format($total_bd['sisa_stok_bln_lalu'], 2); ?></td>
              <td><?php echo number_format($total_bd['produksi_benih'], 2); ?></td>
              <td><?php echo number_format($total_bd['pengadaan_luar_prov'], 2); ?></td>

              <?php $jumlah_bd1 = $total_bd['sisa_stok_bln_lalu'] + $total_bd['produksi_benih'] + $total_bd['pengadaan_luar_prov']; ?>
              <?php 
              $jumlah_bd2 = $total_bd['penyaluran_luar_prov'] + $total_bd['subsidi_benih'] + $total_bd['nonsubsidi_benih']; 

              $jumlah_bd3 = $jumlah_bd1 - $jumlah_bd2;
              ?>

              <td><?php echo number_format($jumlah_bd1, 2); ?></td>
              <td><?php echo number_format($total_bd['penyaluran_luar_prov'], 2); ?></td>
              <td><?php echo number_format($total_bd['subsidi_benih'], 2); ?></td>
              <td><?php echo number_format($total_bd['nonsubsidi_benih'], 2); ?></td>
              <td><?php echo number_format($jumlah_bd2, 2); ?></td>
              <td><?php echo number_format($jumlah_bd3, 2); ?></td>
            </tr>
        	<?php endif ?>
        	<?php if(empty($total_kelas_bd)): ?>
            <tr>
              <td></td>
              <td></td>
              <td>BD</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
        	<?php endif ?>
        	<?php if(!empty($total_kelas_bp)): ?>
            <tr>
              <td></td>
              <td>Jumlah per Kelas</td>
              <td>BP</td>
              <td></td>
              <td><?php echo number_format($total_bp['sisa_stok_bln_lalu'], 2); ?></td>
              <td><?php echo number_format($total_bp['produksi_benih'], 2); ?></td>
              <td><?php echo number_format($total_bp['pengadaan_luar_prov'], 2); ?></td>

              <?php $jumlah_bp1 = $total_bp['sisa_stok_bln_lalu'] + $total_bp['produksi_benih'] + $total_bp['pengadaan_luar_prov']; ?>
              <?php 
              $jumlah_bp2 = $total_bp['penyaluran_luar_prov'] + $total_bp['subsidi_benih'] + $total_bp['nonsubsidi_benih']; 

              $jumlah_bp3 = $jumlah_bp1 - $jumlah_bp2;
              ?>

              <td><?php echo number_format($jumlah_bp1, 2); ?></td>
              <td><?php echo number_format($total_bp['penyaluran_luar_prov'], 2); ?></td>
              <td><?php echo number_format($total_bp['subsidi_benih'], 2); ?></td>
              <td><?php echo number_format($total_bp['nonsubsidi_benih'], 2); ?></td>
              <td><?php echo number_format($jumlah_bp2, 2); ?></td>
              <td><?php echo number_format($jumlah_bp3, 2); ?></td>
            </tr>
        	<?php endif ?>
        	<?php if(empty($total_kelas_bp)): ?>
            <tr>
              <td></td>
              <td>Jumlah per Kelas</td>
              <td>BP</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
        	<?php endif ?>
        	<?php if(!empty($total_kelas_br)): ?>
            <tr>
              <td></td>
              <td></td>
              <td>BR</td>
              <td></td>
              <td><?php echo number_format($total_br['sisa_stok_bln_lalu'], 2); ?></td>
              <td><?php echo number_format($total_br['produksi_benih'], 2); ?></td>
              <td><?php echo number_format($total_br['pengadaan_luar_prov'], 2); ?></td>

              <?php $jumlah_br1 = $total_br['sisa_stok_bln_lalu'] + $total_br['produksi_benih'] + $total_br['pengadaan_luar_prov']; ?>
              <?php 
              $jumlah_br2 = $total_br['penyaluran_luar_prov'] + $total_br['subsidi_benih'] + $total_br['nonsubsidi_benih']; 

              $jumlah_br3 = $jumlah_br1 - $jumlah_br2;
              ?>

              <td><?php echo number_format($jumlah_br1, 2); ?></td>
              <td><?php echo number_format($total_br['penyaluran_luar_prov'], 2); ?></td>
              <td><?php echo number_format($total_br['subsidi_benih'], 2); ?></td>
              <td><?php echo number_format($total_br['nonsubsidi_benih'], 2); ?></td>
              <td><?php echo number_format($jumlah_br2, 2); ?></td>
              <td><?php echo number_format($jumlah_br3, 2); ?></td>
            </tr>
        	<?php endif ?>
        	<?php if(empty($total_kelas_br)): ?>
            <tr>
              <td></td>
              <td></td>
              <td>BR</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
        	<?php endif ?>

        	<tr>
              <td>TOTAL</td>
              <td></td>
              <td></td>
              <td>JUMLAH</td>
              <td><?php echo number_format($jumlah_stok['sisa_stok_bln_lalu'], 2); ?></td>
              <td><?php echo number_format($jumlah_stok['produksi_benih'], 2); ?></td>
              <td><?php echo number_format($jumlah_stok['pengadaan_luar_prov'], 2); ?></td>

              <?php $jumlah_stok1 = $jumlah_stok['sisa_stok_bln_lalu'] + $jumlah_stok['produksi_benih'] + $jumlah_stok['pengadaan_luar_prov']; ?>
              <?php 
              $jumlah_stok2 = $jumlah_stok['penyaluran_luar_prov'] + $jumlah_stok['subsidi_benih'] + $jumlah_stok['nonsubsidi_benih']; 

              $jumlah_stok3 = $jumlah_stok1 - $jumlah_stok2;
              ?>

              <td><?php echo number_format($jumlah_stok1, 2); ?></td>
              <td><?php echo number_format($jumlah_stok['penyaluran_luar_prov'], 2); ?></td>
              <td><?php echo number_format($jumlah_stok['subsidi_benih'], 2); ?></td>
              <td><?php echo number_format($jumlah_stok['nonsubsidi_benih'], 2); ?></td>
              <td><?php echo number_format($jumlah_stok2, 2); ?></td>
              <td><?php echo number_format($jumlah_stok3, 2); ?></td>
            </tr>
        </tbody>
      </table>  
	<script>
		// window.print();
	</script>
</body>
</html>