<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">EDIT</h3>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
          title="Collapse">
          <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">

        <a href='<?php echo base_url("$class/list/$id_sertifikasi") ?>' class="btn btn-danger pull-right">Kembali</a><br><br>

        <p><?php echo validation_errors() ?></p>

        <?php echo form_open("$class/edit/$id/$id_sertifikasi") ?>

        <div class="row">

          <div class="col-md-4">           
            <div class="form-group">
              <label>No. Awal Registrasi</label>
              <input type="text" name="no_awal" class="form-control" value="<?php echo $pelabelan['no_awal'] ?>" required>
            </div>
          </div>

          <div class="col-md-4">           
            <div class="form-group">
              <label>No. Akhir Registrasi</label>
              <input type="text" name="no_akhir" class="form-control" value="<?php echo $pelabelan['no_akhir'] ?>" required>
            </div>
          </div>

          <div class="col-md-4">           
            <div class="form-group">
              <label>Berat/Kemasan</label>
              <input type="text" name="berat_kemasan" class="form-control" value="<?php echo $pelabelan['berat_kemasan'] ?>" required>
            </div>
          </div>

          <div class="col-md-4">           
            <div class="form-group">
              <label>Jumlah Lembar</label>
              <input type="text" name="jml_lembar" class="form-control" value="<?php echo $pelabelan['jml_lembar'] ?>" required>
            </div>
          </div> 

          <div class="col-md-4">           
            <div class="form-group">
              <label>Total Terlabel</label>
              <input type="text" name="total_terlabel" class="form-control" value="<?php echo $pelabelan['total_terlabel'] ?>" required>
            </div>
          </div> 

          <div class="col-md-4">           
            <div class="form-group">
              <label>Tanggal Kadaluarsa</label>
              <input type="text" name="tgl_kadaluarsa" class="form-control datepicker" value="<?php echo $pelabelan['tgl_kadaluarsa'] ?>" required>
            </div>
          </div>  
      
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
      <?php echo form_close() ?>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->