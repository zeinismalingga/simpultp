 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">REALISASI PENGECEKAN MUTU BENIH TANAMAN PANGAN TAHUN 2020 <br>
          <?php 
            if(isset($cek_mutu['0']['nama_bulan'])){
              $nama_bulan = $cek_mutu['0']['nama_bulan'];
            }else{
              $nama_bulan = '';
            }

          ?>
          Bulan : <?php echo $nama_bulan ?> <br>
          </h3>

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
          
          <a style="margin-left: 5px" href="<?php echo base_url("$class/add/$id_bulan") ?>" class="btn btn-success pull-right">+ Tambah</a> 

          <a href="<?php echo base_url("$class/print/$id_bulan") ?>" class="btn btn-primary pull-right">Print</a><br><br>
          
          <div class="row">
            <div class="col-md-12">
              <table class="table table-bordered table-striped table-responsive" vertical-align="middle" style="overflow-x:scroll;">
                <thead>
                  <tr>
                    <th rowspan="3">No</th>
                    <th rowspan="3">Komoditi</th>
                    <th rowspan="3">Jumlah Benih Yang Dicek (Kg)</th>
                    <th colspan="4" class="text-center">Hasil Pengecekan Mutu</th>
                    <th rowspan="3">Pilihan</th>
                  </tr>
                  <tr>
                    <th colspan="2">Memenuhi Standar</th>
                    <th colspan="2">Dibawah Standar</th>
                  </tr>
                  <tr>
                    <th colspan="1">(Kg)</th>
                    <th colspan="1">%</th>
                    <th colspan="1">(Kg)</th>
                    <th colspan="1">%</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach($cek_mutu as $cek_mutu_item): ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $cek_mutu_item['nama_komoditi']; ?></td>
                      <td><?php echo $cek_mutu_item['jumlah_benih']; ?></td>
                      <td><?php echo $cek_mutu_item['memenuhi_standar_perkilo']; ?></td>
                      <td><?php echo $cek_mutu_item['memenuhi_standar_persen']; ?></td>
                      <td><?php echo $cek_mutu_item['dibawah_standar_perkilo']; ?></td>
                      <td><?php echo $cek_mutu_item['dibawah_standar_persen']; ?></td>

                      <td>
                        <a href="<?php echo base_url("$class/edit/". $cek_mutu_item['id_cek_mutu_pangan']. "/$id_bulan") ?>" class="btn btn-xs btn-primary">EDIT</a><br>
                        <a href="<?php echo base_url("$class/delete/". $cek_mutu_item['id_cek_mutu_pangan']. "/$id_bulan") ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin ?');">DELETE</a>
                      </td>
                      
                    </tr>
                    <?php $no++ ?>
                <?php endforeach; ?>
                </tbody>
              </table>    
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
