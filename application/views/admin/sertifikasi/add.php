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

        <?php echo form_open("$class/add") ?>
        <h4 style="font-weight: bold;">KOMODITAS</h4>
        <hr>
        <div class="row">

          <div class="col-md-3">           
            <div class="form-group">
              <label>No. Induk</label>
              <input type="text" name="no_induk" class="form-control" required>
            </div>
           </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>Komoditas</label>
              <select name="id_jenis_varietas" id="pilih_komoditas" class="form-control select2">
              <option disabled selected value>Pilih Jenis Komoditas</option>
              <?php foreach($jenis_varietass as $jenis_varietas): ?>            
                <option value="<?php echo $jenis_varietas['id_jenis_varietas'] ?>"><?php echo ucwords($jenis_varietas['nama_jenis']) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Pemohon</label>
              <input type="text" name="pemohon" class="form-control" required>
            </div>
           </div>

           <div class="col-md-3">           
            <div class="form-group">
              <label>Musim Tanam</label>
              <select class="form-control select2" name="id_musim_tanam" required>
                <option value="" selected disabled>- Pilih -</option>
                <?php foreach($musim_tanam as $musim_tanam_item): ?>            
                <option value="<?php echo $musim_tanam_item['id_musim_tanam'] ?>"><?php echo $musim_tanam_item['tahun_mt'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
           </div>        
        </div>

        <div class="row">  
            <div class="col-md-8">           
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" name="alamat" class="form-control" required>
            </div>
           </div>

           <div class="col-md-4">           
            <div class="form-group">
              <label>Jenis Tanaman</label>
              <select class="form-control" name="id_jenis_tanaman" required>
                <option value="" selected disabled>- Pilih Jenis Tanaman -</option>
                <option value="1">Padi</option>
                <option value="2">Palawija</option>
              </select>
            </div>
           </div>
        </div>

        <div class="row">
           <div class="col-md-4">           
            <div class="form-group">
              <label>Status</label>
              <select class="form-control" name="status">
                <option value="" selected disabled>- Pilih Status -</option>
                <option value="1">Pemerintah</option>
                <option value="2">Swasta</option>
              </select>
            </div>
           </div>
        </div>      

        <h4 style="font-weight: bold;">SERTIFIKASI BENIH</h4>
        <hr>  

        <div class="row">  
          <div class="col-md-4">           
            <div class="form-group">
              <label>Luas Pertanaman (Ha)</label>
              <input type="text" name="luas" class="form-control" required>
            </div>
           </div>

           <div class="col-md-4">           
            <div class="form-group">
              <label>Varietas</label>
              <select name="id_varietas" id="pilih_varietas" class="form-control select2" required>
              <option selected value>Pilih Varietas</option>
              </select>
            </div>
           </div>

           <div class="col-md-4">           
            <div class="form-group">
              <label>Kelas Benih</label>
              <select name="id_kelas_benih" class="form-control select2">
              <option disabled selected value>Pilih Kelas Benih</option>
              <?php foreach($kelas_benihs as $kelas_benih): ?>            
                <option value="<?php echo $kelas_benih['id_kelas_benih'] ?>"><?php echo $kelas_benih['singkatan'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
           </div>
           
           <div class="col-md-4">           
            <div class="form-group">
              <label>Kelas Benih</label>
              <select name="id_kelas_benih" class="form-control select2">
              <option disabled selected value>Pilih Kelas Benih</option>
              <?php foreach($kelas_benihs as $kelas_benih): ?>            
                <option value="<?php echo $kelas_benih['id_kelas_benih'] ?>"><?php echo $kelas_benih['singkatan'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
           </div>
        </div>

        <div class="row"> 

          <div class="col-md-4">           
            <div class="form-group">
              <label>Tanggal Permohonan</label>
              <input type="text" name="tgl_surat" class="form-control datepicker" required>
            </div>
           </div>

           <div class="col-md-4">           
            <div class="form-group">
              <label>Tanggal Semai</label>
              <input type="text" name="tgl_semai" class="form-control datepicker" required>
            </div>
           </div>

           <div class="col-md-4">           
            <div class="form-group">
              <label>Tanggal Tanam</label>
              <input type="text" name="tgl_tanam" class="form-control datepicker" required>
            </div>
           </div>
        </div>

        <div style="margin-bottom: 120px"></div>

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