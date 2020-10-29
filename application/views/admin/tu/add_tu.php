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

        <?php echo form_open("$class/add/$id_sertifikasi") ?>

        <div class="row">
          <div class="col-md-3">           
            <div class="form-group">
              <label>Nomor TU</label>
              <input type="text" name="no_tu" class="form-control" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Kadar Air</label>
              <select class="form-control" name="kadar_air">
                <option selected disabled>Pilih</option>
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">           
            <div class="form-group">
              <label>Kemurnian</label>
              <select class="form-control" name="kemurnian">
                <option selected disabled>Pilih</option>
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
              </select>
            </div>
          </div>
          <div class="col-md-3">           
            <div class="form-group">
              <label>Daya Berkecambah</label>
              <select class="form-control" name="daya_berkecambah">
                <option selected disabled>Pilih</option>
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
              </select>
            </div>
          </div> 
        </div>

        <div class="row">
          <div class="col-md-3">           
            <div class="form-group">
              <label>Tanggal TU</label>
              <input type="text" name="tgl_tu" class="form-control datepicker" required>
            </div>
          </div> 
        </div>

        </div>
      
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Tambah</button>
      </div>
      <?php echo form_close() ?>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->