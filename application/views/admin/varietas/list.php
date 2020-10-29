 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">DAFTAR VARIETAS</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-wid_varietasget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-wid_varietasget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

          <?php if($this->session->flashdata('notif') != NULL ): ?>
          <div class="alert alert-success">
            <?php echo $this->session->flashdata('notif'); ?>
          </div>
          <?php endif ?>
          
          <a href="<?php echo base_url('varietas/add') ?>" class="btn btn-success pull-right">+ Tambah</a><br><br>
          
          <div class="row">
            <div class="col-md-12">
              <table class="table table-bordered table-striped">
                <thead>
                  <th class="col-md-1">No</th>
                  <th class="col-md-4">Nama Varietas</th>
                  <th>Kode</th>
                  <th>Jenis</th>
                  <th>Aksi</th>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach($varietas as $aggaran_item): ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $aggaran_item['nama_varietas'] ?></td>
                      <td><?php echo $aggaran_item['kode'] ?></td>
                      <td><?php echo $aggaran_item['nama_jenis'] ?></td>
                      <td>
                        <a href="<?php echo base_url('varietas/edit/'. $aggaran_item['id_varietas']) ?>" class="btn btn-xs btn-primary">EDIT</a>
                        <a href="<?php echo base_url('varietas/delete/'. $aggaran_item['id_varietas']) ?>" class="btn btn-xs btn-danger">DELETE</a><br>
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
