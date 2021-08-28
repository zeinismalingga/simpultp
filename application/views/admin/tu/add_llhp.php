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

        <a href='<?php echo base_url("$class/list_tu") ?>' class="btn btn-danger pull-right">Kembali</a><br><br>

        <p><?php echo validation_errors() ?></p>

        <?php echo form_open("$class/llhp/". $id) ?>

        <div class="row">
          <div class="col-md-3">           
            <div class="form-group">
              <label>Nomor LLHP</label>
              <input type="text" name="no_llhp" class="form-control" value="<?php echo isset($llhp['no_llhp']) ? $llhp['no_llhp'] : '' ?>" required>
            </div>
          </div>

        <div class="row">
          <div class="col-md-3">           
            <div class="form-group">
              <label>Tanggal LLHP</label>
              <input type="text" name="tgl_llhp" class="form-control datepicker" value="<?php echo isset($llhp['tgl_llhp']) ? $llhp['tgl_llhp'] : '' ?>" required>
            </div>
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