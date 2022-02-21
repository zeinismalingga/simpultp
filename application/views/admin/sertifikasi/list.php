 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">DAFTAR SERTIFIKASI - <?php echo $anggaran ?></h3>

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

          <?php if($this->session->userdata('level') == 'tu' ): ?>
          <a href="<?php echo base_url("$class_tu/add") ?>" class="btn btn-success pull-right">Tambah</a>
          <?php endif ?>

          <a style="margin-right: 10px" href="<?php echo base_url("$class/export_excel/") ?>" class="btn btn-default pull-right">Export ke Excel</a><br><br>

          
          <div class="row">
            <div class="col-md-12">
              <table class="table table-bordered table-striped">
                <thead>
                  <th>No</th>
                  <th>No. Rekomendasi</th>
                  <th>Tgl. Rekomendasi</th>
                  <th>KBP</th>
                  <th>No. Induk</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </thead>
                <tbody>
                  <?php $no = 1; ?>

                  <?php foreach($sertifikasi as $sertifikasi_item): ?>
                  <?php 
                    switch ($sertifikasi_item['posisi']) {
                      case "0":
                        $status = "Proses rekomendasi";
                        break;
                      case "1":
                        $status = "Proses Pemlap 1";
                        break;
                      case "2":
                        $status = "Proses Pemlap 2";
                        break;
                      case "3":
                        $status = "Proses Pemlap 3";
                      break;
                      case "4":
                        $status = "Pemlap 3";
                      break;
                      case "5":
                        $status = "Proses LLHP";
                      break;
                      default:
                        echo "Your favorite color is neither red, blue, nor green!";
                    }
                  ?>

                  <?php 
                    $tgl_kesimpulan = date_create($sertifikasi_item['tgl_rekomendasi']);
                  ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td>521.221/<?php echo $sertifikasi_item['no_rekomendasi'] ?>/UPTD PSBTPH/<?php echo date_format($tgl_kesimpulan, "m") ?>.<?php echo date_format($tgl_kesimpulan, "Y") ?></td>
                      <td><?php echo tgl_indo($sertifikasi_item['tgl_rekomendasi']); ?></td>
                      <td><?php echo $sertifikasi_item['nama_produsen']; ?></td>
                      <td><?php echo $sertifikasi_item['no_induk']; ?></td>
                      <td><?php echo $status ?></td>
                      <td>
                        <?php if($this->session->userdata('level') != "tu"): ?>
                        <a href="<?php echo base_url("$class/edit/". $sertifikasi_item['id_sertifikasi']) ?>" class="btn btn-xs btn-primary">REKOMENDASI</a><br>
                        <?php endif ?>

                        <?php $posisi = $sertifikasi_item['posisi']; ?>

                        <?php if($posisi >= 1 && $posisi <= 5): ?>

                        <?php if($this->session->userdata('level') != "tu"): ?>
                        <a target="_blank" href="<?php echo base_url("$class/print/". $sertifikasi_item['id_sertifikasi']) ?>" class="btn btn-xs btn-success">PRINT REKOMENDASI</a><br>
                        <?php endif ?>
                        <?php if($sertifikasi_item['no_pemlap1'] != ''): ?>
                        <a href="<?php echo base_url("$class_tu/pemlap1/". $sertifikasi_item['id_sertifikasi']) ?>" class="btn btn-xs btn-default">PEMLAP 1</a><br>
                        <?php endif ?>
                        
                        <?php if($posisi >= 2 && $posisi <= 5): ?>
                        <?php if($this->session->userdata('level') == "sertifikasi"): ?>
                        <a target="_blank" href="<?php echo base_url("$class/print_pemlab1/". $sertifikasi_item['id_sertifikasi']) ?>" class="btn btn-xs btn-success">PRINT PEMLAP 1</a><br>
                        <?php endif ?>
                        <?php if($sertifikasi_item['no_pemlap2'] != ''): ?>
                        <a href="<?php echo base_url("$class_tu/pemlap2/". $sertifikasi_item['id_sertifikasi']) ?>" class="btn btn-xs btn-default">PEMLAP 2</a><br>
                        <?php endif ?>
                        <?php endif ?>
                        <?php if($posisi >= 3 && $posisi <= 5): ?>
                        <?php if($this->session->userdata('level') == "sertifikasi"): ?>
                        <a target="_blank" href="<?php echo base_url("$class/print_pemlab2/". $sertifikasi_item['id_sertifikasi']) ?>" class="btn btn-xs btn-success">PRINT PEMLAP 2</a><br>
                        <?php endif ?>
                        <?php if($sertifikasi_item['no_pemlap3'] != ''): ?>
                        <a href="<?php echo base_url("$class_tu/pemlap3/". $sertifikasi_item['id_sertifikasi']) ?>" class="btn btn-xs btn-default">PEMLAP 3</a><br>
                        <?php endif ?>
                        <?php endif ?>
                        <?php if($posisi >= 4 && $posisi <= 5): ?>
                        <?php if($this->session->userdata('level') == "sertifikasi"): ?>
                        <a target="_blank" href="<?php echo base_url("$class/print_pemlab3/". $sertifikasi_item['id_sertifikasi']) ?>" class="btn btn-xs btn-success">PRINT PEMLAP 3</a><br>
                        <?php endif ?>
                        <?php endif ?>

                        <?php endif ?>

                        <?php if($this->session->userdata('level') == "tu"): ?>
                        <a href="<?php echo base_url("$class/delete/". $sertifikasi_item['id_sertifikasi']) ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin ?');">DELETE</a><br>
                        <?php endif ?>
                        
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
