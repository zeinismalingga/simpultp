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

        <a href='<?php echo base_url("$class/list_lab") ?>' class="btn btn-danger pull-right">Kembali</a><br><br>

        <p><?php echo validation_errors() ?></p>

        <?php echo form_open("$class/add/$id_tu") ?>

        <h4 style="font-weight: bold;">KADAR AIR</h4>
        <hr>
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label>No. Lab</label>
              <input type="text" name="no_lab" class="form-control" >
            </div>
          </div> 
          <div class="col-md-3">
            <div class="form-group">
              <label>Kadar Air</label>
              <input type="text" name="kadar_air" class="form-control" >
            </div>
          </div> 

          <div class="col-md-6">           
            <div class="form-group">
              <label>Metode KA</label>
              <input type="text" name="metode_ka" class="form-control" >
            </div>
           </div>       
        </div> 

        <h4 style="font-weight: bold;">KEMURNIAN</h4>
        <hr>
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label>Berat Contoh Kerja (gram)</label>
              <input type="text" name="berat_cnth_kerja" class="form-control" >
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Benih Murni(%)</label>
              <input type="text" name="benih_murni" class="form-control" >
            </div>
           </div>

           <div class="col-md-3">           
            <div class="form-group">
              <label>Benih Tan. Lain(%)</label>
              <input type="text" name="benih_tan_lain" class="form-control" >
            </div>
           </div>

           <div class="col-md-3">           
            <div class="form-group">
              <label>Kotoran Benih(%)</label>
              <input type="text" name="kotoran_benih" class="form-control" >
            </div>
           </div>

           <div class="col-md-4">           
            <div class="form-group">
              <label>Metode Kemurnian</label>
              <input type="text" name="metode_kemurnian" class="form-control" >
            </div>  
           </div>

          <div class="col-md-4">           
            <div class="form-group">
              <label>Benih Gulma(gr)</label>
              <input type="text" name="benih_gulma_gr" class="form-control" >
            </div>  
          </div> 

          <div class="col-md-4">           
            <div class="form-group">
              <label>Benih Gulma(%)</label>
              <input type="text" name="benih_gulma_persen" class="form-control" >
            </div>  
          </div>        
        </div> 

        <h4 style="font-weight: bold;">DAYA BERKECAMBAH</h4>
        <hr>
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label>Jangka Waktu Pengujian (hari)</label>
              <input type="text" name="jangka_waktu_pengujian" class="form-control" >
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Kecambah Normal(%)</label>
              <input type="text" name="kecambah_normal" class="form-control" >
            </div>
           </div>

           <div class="col-md-3">           
            <div class="form-group">
              <label>Kecambah Abnormal(%)</label>
              <input type="text" name="kecambah_abnormal" class="form-control" >
            </div>
           </div>

           <div class="col-md-3">           
            <div class="form-group">
              <label>Benih Keras(%)</label>
              <input type="text" name="benih_keras" class="form-control" >
            </div>
           </div>

           <div class="col-md-3">           
            <div class="form-group">
              <label>Benih Segar(%)</label>
              <input type="text" name="benih_segar" class="form-control" >
            </div>
           </div> 

           <div class="col-md-3">           
            <div class="form-group">
              <label>Benih Mati(%)</label>
              <input type="text" name="benih_mati" class="form-control" >
            </div>  
           </div>        

           <div class="col-md-6">           
            <div class="form-group">
              <label>Keterangan</label>
              <input type="text" name="ket" class="form-control" >
            </div>  
           </div> 

           <div class="col-md-3">           
            <div class="form-group">
              <label>Suhu</label>
              <input type="text" name="suhu" class="form-control" >
            </div>  
           </div> 

           <div class="col-md-5">           
            <div class="form-group">
              <label>Media/Metode DB</label>
              <input type="text" name="media" class="form-control" >
            </div>  
           </div>

           <div class="col-md-4">           
            <div class="form-group">
              <label>Abnormalitas</label>
              <input type="text" name="abnormalis" class="form-control" >
            </div>  
           </div>
        </div> 

        <hr>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Catatan</label>
              <input type="text" name="catatan" class="form-control" >
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>Tanggal Pengujian</label>
              <input type="text" name="tgl_pengujian" class="form-control datepicker" >
            </div>
          </div>

          <div class="col-md-4">
            <div class="form-group">
              <label>Tanggal Selesai Pengujian</label>
              <input type="text" name="tgl_selesai_pengujian" class="form-control datepicker" >
            </div>
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