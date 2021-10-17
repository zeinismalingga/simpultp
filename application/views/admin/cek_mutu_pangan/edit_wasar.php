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

        <?php echo form_open("$class/edit_wasar/". $cek_mutu['id_cek_mutu_pangan']) ?>

        <div class="row">

          <div class="col-md-3">           
            <div class="form-group">
              <label>No Surat Pengantar</label>
              <input type="text" name="no_surat_pengantar" class="form-control" value="<?php echo $cek_mutu['no_surat_pengantar'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Produsen</label>
              <input type="text" name="nama_produsen" class="form-control" value="<?php echo $cek_mutu['nama_produsen'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>No. Kelompok</label>
              <input type="text" name="no_kelompok_benih" class="form-control" value="<?php echo $cek_mutu['no_kelompok_benih'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Alamat</label>
              <input type="text" name="alamat" class="form-control" value="<?php echo $cek_mutu['alamat'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Kabupaten/Kota</label>
              <select name="id_kota" class="form-control">
                <option value="<?php echo $cek_mutu['id_kota'] ?>"><?php echo $cek_mutu['nama_kota'] ?></option>
                <?php foreach($kota as $item): ?>
                <option value="<?php echo $item['id_kota'] ?>"><?php echo $item['nama_kota'] ?></option>
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
              <input type="text" name="kadar_air_persen" class="form-control" value="<?php echo $cek_mutu['kadar_air'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Daya Berkecambah</label>
              <input type="text" name="daya_berkecambah_persen" class="form-control" value="<?php echo $cek_mutu['daya_berkecambah'] ?>" required>
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