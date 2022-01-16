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

        <a href='<?php echo base_url("$class/list_sertifikasi") ?>' class="btn btn-danger pull-right">Kembali</a><br><br>

        <p><?php echo validation_errors() ?></p>

        <?php echo form_open("$class/edit/". $sertifikasi['id_sertifikasi']) ?>
        <h4 style="font-weight: bold;">KOMODITAS</h4>
        <hr>
        <div class="row">

          <div class="col-md-3">           
            <div class="form-group">
              <label>No. Induk</label>
              <input type="text" name="no_induk" class="form-control" value="<?php echo $sertifikasi['no_induk'] ?>" required>
            </div>
           </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>Komoditas</label>
              <select name="id_jenis_varietas" id="pilih_komoditas" class="form-control select2">
              <option selected value="<?php echo $sertifikasi['id_jenis_varietas'] ?>"><?php echo ucwords($sertifikasi['nama_jenis']) ?></option>
              <?php foreach($jenis_varietass as $jenis_varietas): ?>            
                <option value="<?php echo $jenis_varietas['id_jenis_varietas'] ?>"><?php echo ucwords($jenis_varietas['nama_jenis']) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Produsen</label>
              <select name="id_produsen" class="form-control select2" required>
              <option selected value="<?php echo $sertifikasi['id_produsen'] ?>"><?php echo $sertifikasi['nama_produsen'] ?> - <?php echo $sertifikasi['nama_pimpinan'] ?></option>
              <?php foreach($pemohons as $pemohon): ?>            
                <option value="<?php echo $pemohon['id_inventaris_pangan'] ?>"><?php echo $pemohon['nama_produsen'] ?> - <?php echo $pemohon['nama_pimpinan'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
           </div>   

           <div class="col-md-3">           
            <div class="form-group">
              <label>Musim Tanam</label>
              <select class="form-control select2" name="id_musim_tanam" required>
                <option value="<?php echo $sertifikasi['id_musim_tanam'] ?>" selected><?php echo $sertifikasi['tahun_mt'] ?></option>
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
              <input type="text" name="alamat" class="form-control" value="<?php echo $sertifikasi['alamat'] ?>" required>
            </div>
           </div>

           <div class="col-md-4">           
            <div class="form-group">
              <label>Jenis Tanaman</label>
              <select class="form-control" name="id_jenis_tanaman">
                <option value="<?php echo $sertifikasi['id_jenis_tanaman'] ?>" selected><?php echo ($sertifikasi['id_jenis_tanaman'] == 1) ? 'Pangan' : 'Palawija' ?></option>
                <option value="1">Pangan</option>
                <option value="2">Palawija</option>
              </select>
            </div>
           </div>
        </div>

        <div class="row">
           <div class="col-md-4">           
            <div class="form-group">
              <label>Status</label>
              <select class="form-control" name="status" required>
                <option value="<?php echo $sertifikasi['status'] ?>" selected><?php echo ($sertifikasi['status'] == 1) ? 'Pemerintah' : 'Swasta' ?></option>
                <option value="1">Pemerintah</option>
                <option value="2">Swasta</option>
              </select>
            </div>
           </div>

           <div class="col-md-4">           
            <div class="form-group">
              <label>Kelas Benih</label>
              <select name="id_kelas_benih" class="form-control select2">
              <option selected value="<?php echo $sertifikasi['id_kelas_benih'] ?>"><?php echo $sertifikasi['singkatan'] ?></option>
              <?php foreach($kelas_benihs as $kelas_benih): ?>            
                <option value="<?php echo $kelas_benih['id_kelas_benih'] ?>"><?php echo $kelas_benih['singkatan'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
           </div>

           <div class="col-md-4">           
            <div class="form-group">
              <label>Benih Sumber</label>
              <input type="text" name="nomor_sumber" class="form-control" value="<?php echo $sertifikasi['nomor_sumber'] ?>" required>
            </div>
           </div>
        </div>      

        <h4 style="font-weight: bold;">SERTIFIKASI BENIH</h4>
        <hr>  

        <div class="row">  
          <div class="col-md-4">           
            <div class="form-group">
              <label>Luas Pertanaman (Ha)</label>
              <input type="text" name="luas" class="form-control" value="<?php echo $sertifikasi['luas'] ?>" required>
            </div>
           </div>

           <div class="col-md-4">           
            <div class="form-group">
              <label>Varietas</label>
              <select name="id_varietas" id="pilih_varietas" class="form-control select2">
              <option selected value="<?php echo $sertifikasi['id_varietas'] ?>"><?php echo $sertifikasi['nama_varietas'] ?></option>
              </select>
            </div>
           </div>

           
          <div class="col-md-4">           
            <div class="form-group">
              <label>Kelas Benih Label</label>
              <select name="id_kelas_benih2" class="form-control select2">
              <option selected value="<?php echo $sertifikasi['id_kelas_benih2'] ?>"><?php echo isset($kelas_benih2['singkatan']) ? $kelas_benih2['singkatan'] : '' ?></option>
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
              <label>Tanggal Tanam</label>
              <input type="text" name="tgl_tanam" class="form-control datepicker" value="<?php echo $sertifikasi['tgl_tanam'] ?>" required>
            </div>
           </div>

           <div class="col-md-4">           
            <div class="form-group">
              <label>Tanggal Semai</label>
              <input type="text" name="tgl_semai" class="form-control datepicker" value="<?php echo $sertifikasi['tgl_semai'] ?>" required>
            </div>
           </div>

           <div class="col-md-4">           
            <div class="form-group">
              <label>Jumlah Benih (Kg) </label>
              <input type="text" name="jumlah_benih" class="form-control" value="<?php echo $sertifikasi['jumlah_benih'] ?>" required>
            </div>
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