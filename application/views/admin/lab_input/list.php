 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">DAFTAR INPUT LAB - <?php echo $anggaran ?></h3>

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
                      
          <div class="row">
            <div class="col-md-12">
              <table class="table table-bordered table-striped">
                <thead>
                  <th>No</th>
                  <th>No. Asal</th>
                  <th>Jenis Tanaman</th>
                  <th>Varietas</th>                
                  <th>Kelas Benih</th>                
                  <th>Aksi</th>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach($sertifikasi as $sertifikasi_item): ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $sertifikasi_item['no_tu']; ?></td>
                      <td><?php echo $sertifikasi_item['nama_jenis_tanaman']; ?></td>
                      <td><?php echo $sertifikasi_item['nama_varietas']; ?></td>
                      <td><?php echo $sertifikasi_item['singkatan']; ?></td>
                      <td>
                        <a href="<?php echo base_url("$class/add/". $sertifikasi_item["$id_tu"]) ?>" class="btn btn-xs btn-primary">INPUT DATA</a>
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
