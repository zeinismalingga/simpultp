 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">DETAIL SERTIFIKASI</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-wid_sertifikasiget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

          <?php if($this->session->flashdata('notif') != NULL ): ?>
          <div class="alert alert-success">
            <?php echo $this->session->flashdata('notif'); ?>
          </div>
          <?php endif ?>

          <a href="<?php echo base_url('sertifikasi/list_sertifikasi/1') ?>" class="btn btn-danger pull-right">Kembali</a><br><br>
          
          <div class="row">
            <div class="col-md-12">
              <table class="table table-bordered table-striped">
                 <tbody>
                  <tr>
                     <td class="col-md-3">Anggaran</td>
                     <td><?php echo ($sertifikasi['jenis_anggaran'] === 1 ? 'APBN' : 'APBD') ?></td>
                   </tr>
                   <tr>
                     <td class="col-md-3">Jenis Tanaman</td>
                     <td><?php echo ($sertifikasi['id_jenis_tanaman'] === 1 ? 'Pangan' : 'Palawija') ?></td>
                   </tr>
                   <tr>
                     <td class="col-md-3">No. Induk</td>
                     <td><?php echo $sertifikasi['no_induk'] ?></td>
                   </tr>
                   <tr>
                     <td class="col-md-3">Komoditas</td>
                     <td><?php echo ucwords($sertifikasi['nama_jenis']) ?></td>
                   </tr>
                   <tr>
                     <td class="col-md-3">Varietas</td>
                     <td><?php echo $sertifikasi['nama_varietas'] ?></td>
                   </tr>
                   <tr>
                     <td class="col-md-3">No. Sumber</td>
                     <td><?php echo $sertifikasi['nomor_sumber'] ?></td>
                   </tr>
                   <tr>
                     <td class="col-md-3">Pemohon</td>
                     <td><?php echo ucwords($sertifikasi['pemohon']) ?></td>
                   </tr>
                   <tr>
                     <td class="col-md-3">Alamat</td>
                     <td><?php echo $sertifikasi['alamat'] ?></td>
                   </tr>
                   <tr>
                     <td class="col-md-3">Luas</td>
                     <td><?php echo $sertifikasi['luas'] ?> Ha</td>
                   </tr>
                   <tr>
                     <td class="col-md-3">Jumlah Benih</td>
                     <td><?php echo $sertifikasi['jumlah_benih'] ?></td>
                   </tr>
                   <tr>
                     <td class="col-md-3">Nama PBT</td>
                     <td><?php echo $sertifikasi['nama_pbt'] ?></td>
                   </tr>
                   <tr>
                     <td class="col-md-3">Tanggal Pemlap Pendahuluan</td>
                     <td><?php echo $sertifikasi['tgl_pemlap_pendahuluan'] ?></td>
                   </tr>
                   <tr>
                     <td class="col-md-3">Lulus / Tidak Lulus</td>
                     <td><?php echo ($sertifikasi['lulus_pendahuluan'] === 1 ? 'Lulus' : 'Tidak Lulus') ?></td>
                   </tr>
                   <tr>
                     <td class="col-md-3">Tanggal Pemlap 1</td>
                     <td><?php echo $sertifikasi['tgl_pemlap_1'] ?></td>
                   </tr>
                   <tr>
                     <td class="col-md-3">CVL</td>
                     <td><?php echo $sertifikasi['cvl_pemlap_1'] ?> %</td>
                   </tr>
                   <tr>
                     <td class="col-md-3">Lulus / Tidak Lulus</td>
                     <td><?php echo ($sertifikasi['lulus_1'] === 1 ? 'Lulus' : 'Tidak Lulus') ?></td>
                   </tr>
                   <tr>
                     <td class="col-md-3">Tanggal Pemlap 2</td>
                     <td><?php echo $sertifikasi['tgl_pemlap_2'] ?></td>
                   </tr>
                   <tr>
                     <td class="col-md-3">CVL</td>
                     <td><?php echo $sertifikasi['cvl_pemlap_2'] ?> %</td>
                   </tr>
                   <tr>
                     <td class="col-md-3">Lulus / Tidak Lulus</td>
                     <td><?php echo ($sertifikasi['lulus_2'] === 1 ? 'Lulus' : 'Tidak Lulus') ?></td>
                   </tr>
                   <tr>
                     <td class="col-md-3">Tanggal Pemlap 3</td>
                     <td><?php echo $sertifikasi['tgl_pemlap_3'] ?></td>
                   </tr>
                   <tr>
                     <td class="col-md-3">CVL</td>
                     <td><?php echo $sertifikasi['cvl_pemlap_3'] ?> %</td>
                   </tr>
                   <tr>
                     <td class="col-md-3">Lulus / Tidak Lulus</td>
                     <td><?php echo ($sertifikasi['lulus_3'] === 1 ? 'Lulus' : 'Tidak Lulus') ?></td>
                   </tr>
                   <tr>
                     <td class="col-md-3">Tanggal Pemeriksaan Alat Panen</td>
                     <td><?php echo $sertifikasi['tgl_pemeriksaan_alat_panen'] ?></td>
                   </tr>
                   <tr>
                     <td class="col-md-3">Produksi</td>
                     <td><?php echo $sertifikasi['produksi'] ?> Kg</td>
                   </tr>
                   <tr>
                     <td class="col-md-3">Tanggal Permohonan Pengambilan Contoh Benih</td>
                     <td><?php echo $sertifikasi['tgl_permohonan_pengambilan_cb'] ?></td>
                   </tr>
                   <tr>
                     <td class="col-md-3">Tanggal Pengambilan Contoh Benih</td>
                     <td><?php echo $sertifikasi['tgl_pengambilan_contoh_benih'] ?></td>
                   </tr>
                   <tr>
                     <td class="col-md-3">Tanggal Pengiriman Contoh Benih</td>
                     <td><?php echo $sertifikasi['tgl_pengiriman_contoh_benih'] ?></td>
                   </tr>
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
