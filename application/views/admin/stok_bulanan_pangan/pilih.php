 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">PILIH KOMODITI DAN BULAN</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-wid_sertifikasiget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-wid_sertifikasiget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">

          <?php if($this->session->flashdata('notif') != NULL ): ?>
          <div class="alert alert-success">
            <?php echo $this->session->flashdata('notif'); ?>
          </div>
          <?php endif ?>
          
          <div class="row">
            <div class="col-md-12">
              
              <p><?php echo validation_errors() ?></p>

              <form action="<?php echo site_url('stok_bulanan_pangan/list') ?>" method="get">

              <div class="row">

                <div class="col-md-4">           
                  <div class="form-group">
                    <label>Komoditi</label>
                    <select name="id_komoditi" class="form-control select2">
                    <option disabled selected value>Pilih Komoditi</option>
                    <?php foreach($komoditis as $komoditi): ?>            
                      <option value="<?php echo $komoditi['id_jenis_varietas'] ?>"><?php echo ucwords($komoditi['nama_jenis']) ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                 </div> 

                 <div class="col-md-4">           
                  <div class="form-group">
                    <label>Bulan</label>
                    <select name="id_bulan" class="form-control select2">
                    <option disabled selected value>Pilih Bulan</option>
                    <?php foreach($bulans as $bulan): ?>            
                      <option value="<?php echo $bulan['id_bulan'] ?>"><?php echo ucwords($bulan['nama_bulan']) ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                 </div>

              </div>

            </div>
            
          </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Pilih</button>
            </div>
            <?php echo form_close() ?>

            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
