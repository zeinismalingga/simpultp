 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">DAFTAR WASAR</h3>

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

          
          <div class="row">
            <div class="col-md-12">
              <table class="table table-bordered table-striped">
                <thead>
                  <th>No</th>
                  <th>No. Induk</th>
                  <th>Tgl. Panen</th>
                  <th>Aksi</th>
                </thead>
                <tbody>
                  <?php $no = 1; ?>

                  <?php foreach($wasar as $sertifikasi_item): ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $sertifikasi_item['no_induk']; ?></td>
                      <td><?php echo tgl_indo($sertifikasi_item['tgl_panen']); ?></td>
                      <td>
                        <a href="<?php echo base_url("wasar/edit/". $sertifikasi_item['id_sertifikasi']) ?>" class="btn btn-xs btn-primary">EDIT</a><br>
                        <a href="<?php echo base_url("sertifikasi_apbn/print_llhp/". $sertifikasi_item['id_sertifikasi']) ?>" class="btn btn-xs btn-success">PRINT PENGANTAR LLHP</a><br>
                        <a href="<?php echo base_url("sertifikasi_apbn/print_llhp2/". $sertifikasi_item['id_sertifikasi']) ?>" class="btn btn-xs btn-success">PRINT LLLHP</a><br>
                        <a href="<?php echo base_url("sertifikasi_apbn/print_sertifikat/". $sertifikasi_item['id_sertifikasi']) ?>" class="btn btn-xs btn-success">PRINT SERTIFIKAT</a><br>
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
