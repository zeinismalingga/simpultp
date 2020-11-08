 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">DAFTAR SERTIFIKASI</h3>

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
          
          <a href="<?php echo base_url("$class/add") ?>" class="btn btn-success pull-right">Tambah</a>
          
          <a style="margin-right: 10px" href="<?php echo base_url("$class/export_excel/") ?>" class="btn btn-default pull-right">Export ke Excel</a><br><br>

          
          <div class="row">
            <div class="col-md-12">
              <table class="table table-bordered table-striped">
                <thead>
                  <th>No</th>
                  <th>No. Induk</th>
                  <th>No. Kelompok Benih</th>
                  <th>Komoditas</th>
                  <th>Varietas</th>
                  <th>Pemohon</th>
                  <th>Alamat</th>
                  <th>Luas</th>
                  <th>Aksi</th>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach($sertifikasi as $sertifikasi_item): ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $sertifikasi_item['no_induk']; ?></td>
                      <td><?php echo $sertifikasi_item['no_kelompok_benih']; ?></td>
                      <td><?php echo ucwords($sertifikasi_item['nama_jenis']); ?></td>
                      <td><?php echo $sertifikasi_item['nama_varietas']; ?></td>
                      <td><?php echo $sertifikasi_item['pemohon']; ?></td>
                      <td><?php echo $sertifikasi_item['alamat']; ?></td>
                      <td><?php echo $sertifikasi_item['luas']; ?> Ha</td>
                      <td>
                        <a target="_blank" href="<?php echo base_url("sertifikasi_apbn/print/". $sertifikasi_item['id_sertifikasi']) ?>" class="btn btn-xs btn-success">PRINT REKOMENDASI</a><br>

                        <a target="_blank" href="<?php echo base_url("sertifikasi_apbn/print_pemlab1/". $sertifikasi_item['id_sertifikasi']) ?>" class="btn btn-xs btn-success">PRINT PEMLAP 1</a><br>

                        <a target="_blank" href="<?php echo base_url("sertifikasi_apbn/print_pemlab2/". $sertifikasi_item['id_sertifikasi']) ?>" class="btn btn-xs btn-success">PRINT PEMLAP 2</a><br>

                        <a target="_blank" href="<?php echo base_url("sertifikasi_apbn/print_pemlab3/". $sertifikasi_item['id_sertifikasi']) ?>" class="btn btn-xs btn-success">PRINT PEMLAP 3</a><br>

                        <a target="_blank" href="<?php echo base_url("sertifikasi_apbn/print_llhp/". $sertifikasi_item['id_sertifikasi']) ?>" class="btn btn-xs btn-success">PRINT LLHP</a><br>

                        <a target="_blank" href="<?php echo base_url("sertifikasi_apbn/print_sertifikat/". $sertifikasi_item['id_sertifikasi']) ?>" class="btn btn-xs btn-success">PRINT SERTIFIKAT</a><br>

                        <a target="_blank" href="<?php echo base_url("pelabelan_benih/list/". $sertifikasi_item['id_sertifikasi']) ?>" class="btn btn-xs btn-primary">PELABELAN BENIH</a><br>

                        <a target="_blank" href="<?php echo base_url("$class/detail/". $sertifikasi_item['id_sertifikasi']) ?>" class="btn btn-xs btn-warning">DETAIL</a><br>
                        <a href="<?php echo base_url("$class/edit/". $sertifikasi_item['id_sertifikasi']) ?>" class="btn btn-xs btn-primary">EDIT</a><br>
                        <a href="<?php echo base_url("$class/delete/". $sertifikasi_item['id_sertifikasi']) ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin ?');">DELETE</a><br>
                        
                        <?php if($this->session->userdata('level') == "tu" OR $this->session->userdata('level') == "admin" ): ?>

                          <?php if(!isset($sertifikasi_item['no_tu'])): ?>
                          <a href="<?php echo base_url("$class_tu/add/". $sertifikasi_item['id_sertifikasi']) ?>" class="btn btn-xs btn-default">BERI NOMOR TU</a>

                          <?php endif ?>

                        <?php endif ?>
                        <br>
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
