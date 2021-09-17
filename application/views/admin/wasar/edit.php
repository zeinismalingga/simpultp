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

        <a href='<?php echo base_url("$class/list") ?>' class="btn btn-danger pull-right">Kembali</a><br><br>

        <p><?php echo validation_errors() ?></p>

        <?php echo form_open("$class/edit/". $wasar['id_sertifikasi']) ?>
        
        <div class="row">

          <div class="col-md-6">           
            <div class="form-group">
              <label>Tgl Pemeriksaan Alat Panen & Processing</label>
              <input type="text" name="tgl_pemeriksaan_alat_panen" class="form-control datepicker" value="<?php echo $wasar['tgl_pemeriksaan_alat_panen'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Tgl Panen</label>
              <input type="text" name="tgl_panen" class="form-control datepicker" value="<?php echo $wasar['tgl_panen'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Jumlah Sample</label>
              <input type="text" name="jml_sample" class="form-control" value="<?php echo $wasar['jml_sample'] ?>" required>
            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-md-3">           
            <div class="form-group">
              <label>Jumlah Benih</label>
              <input type="text" name="produksi" class="form-control" value="<?php echo $wasar['produksi'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Tgl Penerima Contoh</label>
              <input type="text" name="tgl_penerima_contoh" class="form-control datepicker" value="<?php echo $wasar['tgl_penerima_contoh'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Tgl Pengujian</label>
              <input type="text" name="tgl_pengujian" class="form-control datepicker" value="<?php echo $wasar['tgl_pengujian'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Tgl Selesai Pengujian</label>
              <input type="text" name="tgl_selesai_pengujian" class="form-control datepicker" value="<?php echo $wasar['tgl_selesai_pengujian'] ?>" required>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-md-3">           
            <div class="form-group">
              <label>Jumlah Wadah</label>
              <input type="text" name="jml_wadah" class="form-control" value="<?php echo $wasar['jml_wadah'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Tgl Laporan</label>
              <input type="text" name="tgl_laporan" class="form-control datepicker" value="<?php echo $wasar['tgl_laporan'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Tgl Akhir Label</label>
              <input type="text" name="tgl_akhir_label" class="form-control datepicker" value="<?php echo $wasar['tgl_akhir_label'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>No. Sertifikat</label>
              <input type="text" name="no_sertifikat" class="form-control" value="<?php echo $wasar['no_sertifikat'] ?>" required>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-md-3">           
            <div class="form-group">
              <label>Tgl Pengantar LLHP</label>
              <input type="text" name="tgl_pengantar_llhp" class="form-control datepicker" value="<?php echo $wasar['tgl_pengantar_llhp'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Tgl LLHP</label>
              <input type="text" name="tgl_llhp" class="form-control datepicker" value="<?php echo $wasar['tgl_llhp'] ?>" required>
            </div>
          </div>

        <div style="margin-bottom: 120px"></div>

        </div>
      
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">EDIT</button>
      </div>
      <?php echo form_close() ?>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->