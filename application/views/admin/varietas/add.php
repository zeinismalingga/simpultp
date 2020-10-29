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

        <a href="<?php echo base_url('varietas/list_varietas') ?>" class="btn btn-danger pull-right">Kembali</a><br><br>

        <?php echo form_open('varietas/add/') ?>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Nama Varietas</label>
              <input type="text" name="nama_varietas" class="form-control" required>
            </div>

            <div class="form-group">
              <label>Kode</label>
              <input type="text" name="kode" class="form-control" required>
            </div>

            <div class="form-group">
              <label>Jenis</label>
              <select class="form-control select2" name="jenis" style="width: 100%;">
                <option disabled selected value>Pilih Jenis</option>
                <?php foreach($jeniss as $jenis): ?>                  
                  <option value="<?php echo $jenis['id_jenis_varietas'] ?>"><?php echo $jenis['nama_jenis'] ?></option>
                <?php endforeach; ?>
              </select>
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