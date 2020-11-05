 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">DAFTAR TATA USAHA - <?php echo $anggaran ?></h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
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

          <a href="<?php echo base_url("$class/export_excel/") ?>" class="btn btn-default pull-right">Export ke Excel</a><br><br>
          
          <div class="row">
            <div class="col-md-12">
              <table class="table table-bordered table-striped">
                <thead>
                  <th>No</th>
                  <th>No. Induk</th>
                  <th>No. TU</th>
                  <th>Produsen</th>
                  <th>Alamat</th>
                  <th>Varietas</th>                 
                  <th>Aksi</th>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach($sertifikasi as $sertifikasi_item): ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $sertifikasi_item['no_induk']; ?></td>
                      <td><?php echo $sertifikasi_item['no_tu']; ?></td>
                      <td><?php echo $sertifikasi_item['produsen_benih']; ?></td>
                      <td><?php echo $sertifikasi_item['alamat']; ?></td>
                      <td><?php echo $sertifikasi_item['nama_varietas']; ?></td>
                      <td>
                        <a href="<?php echo base_url("$class/edit/". $sertifikasi_item["$id_tu"]) ?>" class="btn btn-xs btn-primary">EDIT</a>
                        <a target="_blank" href="<?php echo base_url("$class/print/". $sertifikasi_item["$id_tu"]) ?>" class="btn btn-xs btn-success">PRINT</a>
                        <a href="<?php echo base_url("$class/add_asal/". $sertifikasi_item["$id_tu"]) ?>" class="btn btn-xs btn-default">BERI NOMOR ASAL</a>
                        
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
