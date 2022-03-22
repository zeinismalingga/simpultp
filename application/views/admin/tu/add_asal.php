<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">TAMBAH</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
          title="Collapse">
          <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">

        <?php if($class == "sertifikasi_apbn" || $class == "tu_apbn" ): ?>
          <a href='<?php echo base_url("sertifikasi_apbn/list_sertifikasi") ?>' class="btn btn-danger pull-right">Kembali</a><br><br>
        <?php endif ?>

        <?php if($class == "sertifikasi_apbd" || $class == "tu_apbd" ): ?>
          <a href='<?php echo base_url("sertifikasi_apbd/list_sertifikasi") ?>' class="btn btn-danger pull-right">Kembali</a><br><br>
        <?php endif ?>
        

        <p><?php echo validation_errors() ?></p>

        <?php echo form_open("$class/add_asal/$id") ?>

        <div class="row">
          <div class="col-md-3">           
            <div class="form-group">
              <label>Nomor</label>
              <input type="text" name="no_asal" class="form-control" >
            </div>
          </div>

        </div>
      
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      <?php echo form_close() ?>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->