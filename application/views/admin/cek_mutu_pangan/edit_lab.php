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

        <a href='<?php echo base_url("cek_mutu_pangan/list") ?>' class="btn btn-danger pull-right">Kembali</a><br><br>

        <p><?php echo validation_errors() ?></p>

        <?php echo form_open("$class/edit_lab/$id") ?>

        <h4 style="font-weight: bold;">KADAR AIR</h4>
        <hr>
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label>No. Lab</label>
              <input type="text" name="no_lab" class="form-control" value="<?php echo $lab['no_lab'] ?>">
            </div>
          </div> 
          <div class="col-md-3">
            <div class="form-group">
              <label>Kadar Air</label>
              <input type="text" name="kadar_air" class="form-control" value="<?php echo $lab['kadar_air'] ?>">
            </div>
          </div> 

          <div class="col-md-6">           
            <div class="form-group">
              <label>Metode KA</label>
              <input type="text" name="metode_ka_hu" class="form-control" value="<?php echo $lab['metode_ka_hu'] ?>">
            </div>
           </div>       
        </div> 

        <h4 style="font-weight: bold;">KEMURNIAN</h4>
        <hr>
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label>Berat Contoh Kerja (gram)</label>
              <input type="text" name="berat_cnth_kerja_hu" class="form-control" value="<?php echo $lab['berat_cnth_kerja_hu'] ?>">
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Benih Murni(%)</label>
              <input type="text" name="benih_murni_hu" class="form-control" value="<?php echo $lab['benih_murni_hu'] ?>">
            </div>
           </div>

           <div class="col-md-3">           
            <div class="form-group">
              <label>Benih Tan. Lain(%)</label>
              <input type="text" name="benih_tanaman_lain_hu" class="form-control" value="<?php echo $lab['benih_tanaman_lain_hu'] ?>">
            </div>
           </div>

           <div class="col-md-3">           
            <div class="form-group">
              <label>Kotoran Benih(%)</label>
              <input type="text" name="kotoran_benih_hu" class="form-control" value="<?php echo $lab['kotoran_benih_hu'] ?>">
            </div>
           </div>

           <div class="col-md-4">           
            <div class="form-group">
              <label>Metode Kemurnian</label>
              <input type="text" name="metode_kemurnian_hu" class="form-control"  value="<?php echo $lab['metode_kemurnian_hu'] ?>">
            </div>  
           </div>

          <div class="col-md-4">           
            <div class="form-group">
              <label>Benih Gulma(gr)</label>
              <input type="text" name="biji_gulma_gr_hu" class="form-control" value="<?php echo $lab['biji_gulma_gr_hu'] ?>">
            </div>  
          </div> 

          <div class="col-md-4">           
            <div class="form-group">
              <label>Benih Gulma(%)</label>
              <input type="text" name="biji_gulma_hu" class="form-control" value="<?php echo $lab['biji_gulma_hu'] ?>">
            </div>  
          </div>        
        </div> 

        <h4 style="font-weight: bold;">DAYA BERKECAMBAH</h4>
        <hr>
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label>Jangka Waktu Pengujian (hari)</label>
              <input type="text" name="jangka_waktu_pengujian_hu" class="form-control" value="<?php echo $lab['jangka_waktu_pengujian_hu'] ?>">
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Kecambah Normal(%)</label>
              <input type="text" name="kecambah_normal_hu" class="form-control" value="<?php echo $lab['kecambah_normal_hu'] ?>">
            </div>
           </div>

           <div class="col-md-3">           
            <div class="form-group">
              <label>Kecambah Abnormal(%)</label>
              <input type="text" name="kecambah_abnormal_hu" class="form-control" value="<?php echo $lab['kecambah_abnormal_hu'] ?>">
            </div>
           </div>

           <div class="col-md-3">           
            <div class="form-group">
              <label>Benih Keras(%)</label>
              <input type="text" name="benih_keras_hu" class="form-control" value="<?php echo $lab['benih_keras_hu'] ?>">
            </div>
           </div>

           <div class="col-md-3">           
            <div class="form-group">
              <label>Benih Segar(%)</label>
              <input type="text" name="benih_segar_hu" class="form-control" value="<?php echo $lab['benih_segar_hu'] ?>">
            </div>
           </div> 

           <div class="col-md-3">           
            <div class="form-group">
              <label>Benih Mati(%)</label>
              <input type="text" name="benih_mati_hu" class="form-control" value="<?php echo $lab['benih_mati_hu'] ?>">
            </div>  
           </div>        

           <div class="col-md-6">           
            <div class="form-group">
              <label>Keterangan</label>
              <textarea name="ket_hu" id="ket" class="form-control"><?php echo $lab['ket_hu'] ?></textarea>
            </div>  
           </div> 

           <div class="col-md-3">           
            <div class="form-group">
              <label>Suhu</label>
              <input type="text" name="suhu_hu" class="form-control" value="<?php echo $lab['suhu_hu'] ?>">
            </div>  
           </div> 

           <div class="col-md-3">           
            <div class="form-group">
              <label>Media/Metode DB</label>
              <input type="text" name="media_hu" class="form-control" value="<?php echo $lab['media_hu'] ?>">
            </div>  
           </div>

           <div class="col-md-3">           
            <div class="form-group">
              <label>Metode Daya Berkecambah</label>
              <input type="text" name="metode_daya_berkecambah_hu" class="form-control" value="<?php echo $lab['metode_daya_berkecambah_hu'] ?>">
            </div>  
           </div>

           <div class="col-md-3">           
            <div class="form-group">
              <label>Abnormalitas</label>
              <input type="text" name="abnormalis_hu" class="form-control" value="<?php echo $lab['abnormalis_hu'] ?>">
            </div>  
           </div>
        </div> 

        <hr>
        <div class="row">

          <div class="col-md-3">
            <div class="form-group">
              <label>Tanggal Pengujian</label>
              <input type="text" name="tgl_pengujian" class="form-control datepicker" value="<?php echo $lab['tgl_pengujian'] ?>">
            </div>
          </div>

          <div class="col-md-3">
            <div class="form-group">
              <label>Tanggal Selesai Pengujian</label>
              <input type="text" name="tgl_selesai" class="form-control datepicker" value="<?php echo $lab['tgl_selesai'] ?>">
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Hasil</label>
              <select name="hasil_hu" class="form-control select2">
              <option value="1">Lulus</option>
              <option value="0">Tidak Lulus</option>
              </select>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Manajer Teknis</label>
              <select name="id_manajer_teknis" class="form-control select2">
              <?php foreach($manajer_teknis as $item): ?>
              <option value="<?php echo $item['id'] ?>"><?php echo $item['nama'] ?></option>
              <?php endforeach ?>
              </select>
            </div>
          </div>

        </div>

        </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
      <?php echo form_close() ?>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->