 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">DAFTAR PENYALURAN BENIH TAHUN 2020 <br>
          Provinsi : Kalimantan Timur <br>
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
          Bulan : <?php echo $nama_bulan ?> <br>
          Komoditi : <?php echo ucwords($nama_jenis) ?>
          </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-wid_sertifikasiget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-wid_sertifikasiget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

          <?php if($this->session->flashdata('notif') != NULL ): ?>
          <div class="alert alert-success">
            <?php echo $this->session->flashdata('notif'); ?>
          </div>
          <?php endif ?>
          
          <a style="margin-left: 5px" href="<?php echo base_url("$class/add/$id_komoditi/$id_bulan") ?>" class="btn btn-success pull-right">+ Tambah</a> 

          <a href="<?php echo base_url("$class/print/$id_komoditi/$id_bulan") ?>" class="btn btn-primary pull-right">Print</a><br><br>
          
          <div class="row">
            <div class="col-md-12">
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
                    <th rowspan="2">Pilihan</th>
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
                      <?php $jumlah2 = $stok_pangan_item['penyaluran_luar_prov'] + $stok_pangan_item['subsidi_benih'] + $stok_pangan_item['nonsubsidi_benih']; ?>

                      <td><?php echo $jumlah1;?></td>
                      <td><?php echo $stok_pangan_item['penyaluran_luar_prov']; ?></td>
                      <td><?php echo $stok_pangan_item['subsidi_benih']; ?></td>
                      <td><?php echo $stok_pangan_item['nonsubsidi_benih']; ?></td>
                      <td><?php echo $jumlah2; ?></td>
                      <td><?php echo $jumlah1 - $jumlah2; ?></td>
                      <td>
                        <a href="<?php echo base_url("$class/edit/". $stok_pangan_item['id_stok_pangan']. "/$id_komoditi". "/$id_bulan") ?>" class="btn btn-xs btn-primary">EDIT</a><br>
                        <a href="<?php echo base_url("$class/delete/". $stok_pangan_item['id_stok_pangan']. "/$id_komoditi". "/$id_bulan") ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin ?');">DELETE</a>
                      </td>
                      
                    </tr>
                    <?php $no++ ?>
                <?php endforeach; ?>
                </tbody>
              </table>    
            </div>
          </div>
          
        </div>
        <!-- /.box-body -->
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
