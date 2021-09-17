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

        <?php echo form_open("$class/edit_lab/". $cek_mutu['id_cek_mutu_pangan']) ?>

        <div class="row">
          <div class="col-md-3">           
            <div class="form-group">
              <label>Produsen</label>
              <select name="id_produsen" class="form-control select2" required>
              <option selected value="<?php echo $cek_mutu['id_produsen'] ?>"><?php echo $cek_mutu['nama_produsen'] ?> - <?php echo $cek_mutu['nama_pimpinan'] ?></option>
              <?php foreach($pemohons as $pemohon): ?>            
                <option value="<?php echo $pemohon['id_inventaris_pangan'] ?>"><?php echo $pemohon['nama_produsen'] ?> -  <?php echo $pemohon['nama_pimpinan'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Tonase (ton)</label>
              <input type="text" name="tonase" class="form-control" value="<?php echo $cek_mutu['tonase'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Wadah</label>
              <input type="text" name="wadah" class="form-control" value="<?php echo $cek_mutu['wadah'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Tgl. Akhir Masa Edar</label>
              <input type="date" name="tgl_akhir" class="form-control" value="<?php echo $cek_mutu['tgl_akhir'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Tgl. Pengujian</label>
              <input type="date" name="tgl_pengujian" class="form-control" value="<?php echo $cek_mutu['tgl_pengujian'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Tgl. Hasil Pengecekan Mutu</label>
              <input type="date" name="tgl_hasil" class="form-control" value="<?php echo $cek_mutu['tgl_hasil'] ?>" required>
            </div>
          </div>
        </div>

        <hr> 
        <h3>Data Pada Label</h3>

        <div class="row">

          <div class="col-md-3">           
            <div class="form-group">
              <label>Benih Murni</label>
              <input type="text" name="benih_murni" class="form-control" value="<?php echo $cek_mutu['benih_murni'] ?>" required>
            </div>
          </div> 

          <div class="col-md-3">           
            <div class="form-group">
              <label>Kotoran Benih</label>
              <input type="text" name="kotoran_benih" class="form-control" value="<?php echo $cek_mutu['kotoran_benih'] ?>" required>
            </div>
          </div> 

          <div class="col-md-3">           
            <div class="form-group">
              <label>Benih Tanaman Lain</label>
              <input type="text" name="benih_tanaman_lain" class="form-control" value="<?php echo $cek_mutu['benih_tanaman_lain'] ?>" required>
            </div>
          </div> 

          <div class="col-md-3">           
            <div class="form-group">
              <label>Biji Gulma</label>
              <input type="text" name="biji_gulma" class="form-control" value="<?php echo $cek_mutu['biji_gulma'] ?>" required>
            </div>
          </div> 
          

        </div>

        <div class="row">
          <div class="col-md-3">           
            <div class="form-group">
              <label>Kadar Air</label>
              <input type="text" name="kadar_air_persen" class="form-control" value="<?php echo $cek_mutu['kadar_air_persen'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Daya Berkecambah</label>
              <input type="text" name="daya_berkecambah_persen" class="form-control" value="<?php echo $cek_mutu['daya_berkecambah_persen'] ?>" required>
            </div>
          </div>  
        </div>

        <hr> 
        <h3>Hasil Uji/Analisis</h3>

        <div class="row">

          <div class="col-md-3">           
            <div class="form-group">
              <label>Benih Murni</label>
              <input type="text" name="benih_murni_hu" class="form-control" value="<?php echo $cek_mutu['benih_murni_hu'] ?>" required>
            </div>
          </div> 

          <div class="col-md-3">           
            <div class="form-group">
              <label>Kotoran Benih</label>
              <input type="text" name="kotoran_benih_hu" class="form-control" value="<?php echo $cek_mutu['kotoran_benih_hu'] ?>" required>
            </div>
          </div> 

          <div class="col-md-3">           
            <div class="form-group">
              <label>Benih Tanaman Lain</label>
              <input type="text" name="benih_tanaman_lain_hu" class="form-control" value="<?php echo $cek_mutu['benih_tanaman_lain_hu'] ?>" required>
            </div>
          </div> 

          <div class="col-md-3">           
            <div class="form-group">
              <label>Biji Gulma</label>
              <input type="text" name="biji_gulma_hu" class="form-control" value="<?php echo $cek_mutu['biji_gulma_hu'] ?>" required>
            </div>
          </div> 
          

        </div>

        <div class="row">
          <div class="col-md-3">           
            <div class="form-group">
              <label>Kadar Air</label>
              <input type="text" name="kadar_air_hu" class="form-control" value="<?php echo $cek_mutu['kadar_air_hu'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Daya Berkecambah</label>
              <input type="text" name="daya_berkecambah_hu" class="form-control" value="<?php echo $cek_mutu['daya_berkecambah_hu'] ?>" required>
            </div>
          </div>  
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