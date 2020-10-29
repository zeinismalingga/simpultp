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

        <a href='<?php echo base_url("$class/list") ?>' class="btn btn-danger pull-right">Kembali</a><br><br>

        <p><?php echo validation_errors() ?></p>

        <?php echo form_open("$class/add/$id_bulan") ?>

        <div class="row">

          <div class="col-md-3">           
            <div class="form-group">
              <label>Komoditi</label>
              <select name="id_komoditi" class="form-control select2">
              <option disabled selected value>Pilih</option>
              <?php foreach($komoditis as $komoditi): ?>            
                <option value="<?php echo $komoditi['id_komoditi'] ?>"><?php echo ucwords($komoditi['nama_komoditi']) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div> 

          <div class="col-md-3">           
            <div class="form-group">
              <label>Jumlah Benih Yang Dicek</label>
              <input type="text" name="jumlah_benih" class="form-control" required>
            </div>
          </div>

        </div>

        <h3>Memenuhi Standar</h3>
        <hr>

        <div class="row">

          <div class="col-md-3">           
            <div class="form-group">
              <label>Memenuhi Standar (Kg)</label>
              <input type="text" name="memenuhi_standar_perkilo" class="form-control" required>
            </div>
          </div> 

          <div class="col-md-3">           
            <div class="form-group">
              <label>Memenuhi Standar (%)</label>
              <input type="text" name="memenuhi_standar_persen" class="form-control" required>
            </div>
          </div>

        </div>

        <h3>Dibawah Standar</h3>
        <hr>

        <div class="row">

          <div class="col-md-3">           
            <div class="form-group">
              <label>Dibawah Standar (Kg)</label>
              <input type="text" name="dibawah_standar_perkilo" class="form-control" required>
            </div>
          </div> 

          <div class="col-md-3">           
            <div class="form-group">
              <label>Dibawah Standar (%)</label>
              <input type="text" name="dibawah_standar_persen" class="form-control" required>
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