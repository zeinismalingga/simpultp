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

        <?php echo form_open("$class/add") ?>

        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label>No. Rekomendasi</label>
              <input type="text" name="no_rekomendasi" class="form-control" required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Nama Perusahaan</label>
              <input type="text" name="nama_perusahaan" class="form-control" required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Nama Pimpinan</label>
              <input type="text" name="nama_pimpinan" class="form-control" required>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Bentuk Usaha</label>
              <input type="text" name="bentuk_usaha" class="form-control" required>
            </div>
          </div>
          

        </div>

        <div class="row">
          <div class="col-md-6  ">
            <div class="form-group">
              <label>Alamat Lokasi Usaha</label>
              <textarea name="alamat_lokasi_usaha" class="form-control"></textarea>
            </div>
          </div>
          <div class="col-md-6  ">
            <div class="form-group">
              <label>Alamat Pimpinan</label>
              <textarea name="alamat_pimpinan" class="form-control"></textarea>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label>Jenis Benih</label>
              <select name="id_jenis_varietas" id="pilih_komoditas" class="form-control select2">
              <option disabled selected value>Pilih</option>
              <?php foreach($jenis_varietass as $jenis_varietas): ?>            
                <option value="<?php echo $jenis_varietas['id_jenis_varietas'] ?>"><?php echo ucwords($jenis_varietas['nama_jenis']) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Kelas Benih</label>
              <select name="id_kelas_benih" class="form-control select2">
              <option disabled selected value>Pilih</option>
              <?php foreach($kelas_benihs as $kelas_benih): ?>            
                <option value="<?php echo $kelas_benih['id_kelas_benih'] ?>"><?php echo $kelas_benih['singkatan'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Tanggal Inventaris Pengedar</label>
              <input type="text" name="tgl_inventaris_pengedar" class="form-control datepicker" required>
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
