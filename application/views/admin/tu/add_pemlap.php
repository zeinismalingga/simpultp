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

        <a href='<?php echo base_url("$class/list_sertifikasi") ?>' class="btn btn-danger pull-right">Kembali</a><br><br>

        <p><?php echo validation_errors() ?></p>

        <?php echo form_open("$class/pemlap$urutan/$id") ?>

        <div class="row">
          <div class="col-md-3">           
            <div class="form-group">
              <label>Nomor</label>
              <input type="text" name="no_pemlap" class="form-control" value="<?php echo $pemlap['no_pemlap'. $urutan] ?>" required <?php echo ($level == 'sertifikasi') ? 'readonly' : '' ?> >
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Tanggal</label>
              <input type="date" name="tgl_pemlap" class="form-control" value="<?php echo $pemlap['tgl_pemlap'. $urutan] ?>" required <?php echo ($level == 'sertifikasi') ? 'readonly' : '' ?> >
            </div>
          </div> 

          <div class="col-md-3">           
            <div class="form-group">
              <label>CVL</label>
              <input type="text" name="cvl_pemlap" class="form-control" value="<?php echo $pemlap['cvl_pemlap'. $urutan] ?>" <?php echo ($level == 'tu') ? 'readonly' : '' ?> required>
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