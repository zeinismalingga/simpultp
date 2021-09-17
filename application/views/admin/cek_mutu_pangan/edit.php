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

        <?php echo form_open("$class/edit/". $cek_mutu['id_cek_mutu_pangan']) ?>

        <div class="row">
          <div class="col-md-3">           
            <div class="form-group">
              <label>No. CMP</label>
              <input type="text" name="no_contoh_benih" class="form-control" value="<?php echo $cek_mutu['no_contoh_benih'] ?>" required>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Kadar Air</label>
              <select name="kadar_air" class="form-control select2">
              <option selected value="<?php echo $cek_mutu['kadar_air'] ?>"><?php echo $cek_mutu['kadar_air'] == '1' ? "Ya": "Tidak" ?></option>
              <option value="1">Ya</option>
              <option value="0">Tidak</option>
              </select>
            </div>
          </div> 
          <div class="col-md-3">           
            <div class="form-group">
              <label>Kemurnian</label>
              <select name="kemurnian" class="form-control select2">
              <option selected value="<?php echo $cek_mutu['kemurnian'] ?>"><?php echo $cek_mutu['kemurnian'] == '1' ? "Ya": "Tidak" ?></option>
              <option value="1">Ya</option>
              <option value="0">Tidak</option>
              </select>
            </div>
          </div> 
          <div class="col-md-3">           
            <div class="form-group">
              <label>Daya Berkecambah</label>
              <select name="daya_berkecambah" class="form-control select2">
              <option selected value="<?php echo $cek_mutu['daya_berkecambah'] ?>"><?php echo $cek_mutu['daya_berkecambah'] == '1' ? "Ya": "Tidak" ?></option>
              <option value="1">Ya</option>
              <option value="0">Tidak</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-md-3">           
            <div class="form-group">
              <label>Tgl. Pengambilan Contoh</label>
              <input type="date" name="tgl_pengambilan_cth" class="form-control" value="<?php echo $cek_mutu['tgl_pengambilan_cth'] ?>" required>
            </div>
          </div> 

          <div class="col-md-3">           
            <div class="form-group">
              <label>Tgl. Panen</label>
              <input type="date" name="tgl_panen" class="form-control" value="<?php echo $cek_mutu['tgl_panen'] ?>" required>
            </div>
          </div> 

          <div class="col-md-3">           
            <div class="form-group">
              <label>Jenis Tanaman</label>
              <select name="id_jenis_varietas" class="form-control select2">
              <option selected value="<?php echo $cek_mutu['id_jenis_varietas'] ?>"><?php echo $cek_mutu['nama_jenis'] ?></option>
              <?php foreach($jenis_varietas as $jns_var): ?>
                <option value="<?php echo $jns_var['id_jenis_varietas']?>"><?php echo ucwords($jns_var['nama_jenis']) ?></option>
              <?php endforeach; ?>
              </select>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Varietas</label>
              <select name="id_varietas" class="form-control select2">
              <option selected value="<?php echo $cek_mutu['id_varietas'] ?>"><?php echo $cek_mutu['nama_varietas'] ?></option>
              <?php foreach($varietas as $var): ?>
                <option value="<?php echo $var['id_varietas']?>"><?php echo ucwords($var['nama_varietas']) ?></option>
              <?php endforeach; ?>
              </select>
            </div>
          </div>
          

        </div>

        <div class="row">
          <div class="col-md-3">           
            <div class="form-group">
              <label>Kelas Benih</label>
              <select name="id_kelas_benih" class="form-control select2">
              <option selected value="<?php echo $cek_mutu['id_kelas_benih'] ?>"><?php echo $cek_mutu['singkatan'] ?></option>
              <?php foreach($kelas_benih as $kls): ?>
                <option value="<?php echo $kls['id_kelas_benih']?>"><?php echo ucwords($kls['singkatan']) ?></option>
              <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="col-md-3">           
            <div class="form-group">
              <label>Berat Contoh Benih (Gram)</label>
              <input type="text" name="berat_contoh_benih" class="form-control" value="<?php echo $cek_mutu['berat_contoh_benih'] ?>" required>
            </div>
          </div> 

          <div class="col-md-3">           
            <div class="form-group">
              <label>Catatan</label>
              <textarea name="catatan" class="form-control"><?php echo $cek_mutu['catatan'] ?></textarea>
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