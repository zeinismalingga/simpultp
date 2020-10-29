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


        <?php echo form_open("$class/edit/$id/$id_komoditi/$id_bulan") ?>

        <div class="row">

          <div class="col-md-3">           
            <div class="form-group">
              <label>Kabupaten/Kota</label>
              <select name="id_kota" class="form-control select2">
              <option selected value="<?php echo $stok_pangan['id_kota'] ?>"><?php echo $stok_pangan['nama_kota'] ?></option>
              <?php foreach($kotas as $kota): ?>            
                <option value="<?php echo $kota['id_kota'] ?>"><?php echo ucwords($kota['nama_kota']) ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div> 

          <div class="col-md-3">           
            <div class="form-group">
              <label>Kelas Benih</label>
              <select name="id_kelas_benih" class="form-control select2">
              <option selected value="<?php echo $stok_pangan['id_kelas_benih'] ?>"><?php echo $stok_pangan['singkatan'] ?></option>
              <?php foreach($kelas_benihs as $kelas_benih): ?>            
                <option value="<?php echo $kelas_benih['id_kelas_benih'] ?>"><?php echo $kelas_benih['singkatan'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Varietas</label>
              <select name="id_varietas" class="form-control select2">
              <option selected value="<?php echo $stok_pangan['id_varietas'] ?>"><?php echo $stok_pangan['nama_varietas'] ?></option>
              <?php foreach($varietas as $varietas_item): ?>            
                <option value="<?php echo $varietas_item['id_varietas'] ?>"><?php echo $varietas_item['nama_varietas'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>

          <div class="col-md-3">           
            <div class="form-group">
              <label>Sisa Stok Bulan Lalu</label>
              <input type="text" name="sisa_stok_bln_lalu" class="form-control" value="<?php echo $stok_pangan['sisa_stok_bln_lalu'] ?>" required>
            </div>
          </div>  

        </div>

        <h3>Stok Bulan Ini</h3>
        <hr>  

        <div class="row">
          <div class="col-md-4">           
            <div class="form-group">
              <label>Produksi benih</label>
              <input type="text" name="produksi_benih" class="form-control" value="<?php echo $stok_pangan['produksi_benih'] ?>" required>
            </div>
          </div> 

          <div class="col-md-4">           
            <div class="form-group">
              <label>Pengadaan dari Luar Provinsi</label>
              <input type="text" name="pengadaan_luar_prov" class="form-control" value="<?php echo $stok_pangan['pengadaan_luar_prov'] ?>" required>
            </div>
          </div>
        </div> 

         <h3>Penyaluran Benih</h3>
        <hr>

        <div class="row">
          <div class="col-md-4">           
            <div class="form-group">
              <label>Penyaluran ke Luar Provinsi</label>
              <input type="text" name="penyaluran_luar_prov" class="form-control" value="<?php echo $stok_pangan['penyaluran_luar_prov'] ?>" required>
            </div>
          </div> 

          <div class="col-md-4">           
            <div class="form-group">
              <label>Subsidi Benih</label>
              <input type="text" name="subsidi_benih" class="form-control" value="<?php echo $stok_pangan['subsidi_benih'] ?>" required>
            </div>
          </div>

          <div class="col-md-4">           
            <div class="form-group">
              <label>Non Subsidi Benih</label>
              <input type="text" name="nonsubsidi_benih" class="form-control" value="<?php echo $stok_pangan['nonsubsidi_benih'] ?>" required>
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