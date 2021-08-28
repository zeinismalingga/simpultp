 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
    </section>

    <?php 
      $total_varietas = $this->varietas_model->total();
    ?>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-file"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">TOTAL VARIETAS</span>
              <span class="info-box-number"><?php echo $total_varietas['total'] ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <?php if($this->session->flashdata('notif') != NULL ): ?>
          <div class="alert alert-success">
              <?php echo $this->session->flashdata('notif'); ?>
          </div>
          <?php endif ?>
        </div>
      </div>

      <?php if($this->session->userdata('level') == 'kepala'): ?>
      <!-- pemlap 1 -->
      <div class="row">
        <div class="col-md-12">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DAFTAR REKOMENDASI</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-wid_sertifikasiget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-wid_sertifikasiget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">

              <div class="row">
                <div class="col-md-12">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <th>No</th>
                      <th>No. Induk</th>
                      <th>Produsen</th>
                      <th>Jenis Tanaman</th>
                      <th>Varietas</th>
                      <th>Kelas Benih</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                      <?php $no = 1; ?>

                      <?php foreach($pemlap1 as $pemlap1_item): ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $pemlap1_item['no_induk'] ?></td>
                          <td><?php echo $pemlap1_item['nama_produsen'] ?></td>
                          <td><?php echo ucwords($pemlap1_item['nama_jenis']) ?></td>
                          <td><?php echo $pemlap1_item['nama_varietas'] ?></td>
                          <td><?php echo $pemlap1_item['singkatan'] ?></td>
                          <td>
                            <a href="<?php echo base_url("sertifikasi_apbn/pemlap/". $pemlap1_item['id_sertifikasi']) ?>" class="btn btn-xs btn-primary" onclick="return confirm('Apakah anda yakin?')">APPROVE</a><br>
                          </td>
                        </tr>
                      <?php $no++ ?>
                      <?php endforeach ?>
                    </tbody>
                  </table>    
                </div>
              </div>
            </div>
            <!-- /.box-body -->
            <!-- /.box-footer-->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <?php endif ?>

      <?php if($this->session->userdata('level') == 'kasi'): ?>
      <!-- pemlap 1 -->
      <div class="row">
        <div class="col-md-12">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DAFTAR PEMLAP 1</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-wid_sertifikasiget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-wid_sertifikasiget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">

              <div class="row">
                <div class="col-md-12">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <th>No</th>
                      <th>No. Induk</th>
                      <th>Produsen</th>
                      <th>Jenis Tanaman</th>
                      <th>Varietas</th>
                      <th>Kelas Benih</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                      <?php $no = 1; ?>

                      <?php foreach($pemlap1 as $pemlap1_item): ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $pemlap1_item['no_induk'] ?></td>
                          <td><?php echo $pemlap1_item['nama_produsen'] ?></td>
                          <td><?php echo ucwords($pemlap1_item['nama_jenis']) ?></td>
                          <td><?php echo $pemlap1_item['nama_varietas'] ?></td>
                          <td><?php echo $pemlap1_item['singkatan'] ?></td>
                          <td>
                            <a href="<?php echo base_url("sertifikasi_apbn/pemlap/". $pemlap1_item['id_sertifikasi']) ?>" class="btn btn-xs btn-primary" onclick="return confirm('Apakah anda yakin?')">APPROVE</a><br>
                          </td>
                        </tr>
                      <?php $no++ ?>
                      <?php endforeach ?>
                    </tbody>
                  </table>    
                </div>
              </div>
            </div>
            <!-- /.box-body -->
            <!-- /.box-footer-->
          </div>
          <!-- /.box -->
        </div>
      </div>

      <!-- pemlap 2 -->
      <div class="row">
        <div class="col-md-12">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DAFTAR PEMLAP 2</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-wid_sertifikasiget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-wid_sertifikasiget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">

              <div class="row">
                <div class="col-md-12">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <th>No</th>
                      <th>No. Induk</th>
                      <th>Produsen</th>
                      <th>Jenis Tanaman</th>
                      <th>Varietas</th>
                      <th>Kelas Benih</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                      <?php $no = 1; ?>

                      <?php foreach($pemlap2 as $pemlap1_item): ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $pemlap1_item['no_induk'] ?></td>
                          <td><?php echo $pemlap1_item['nama_produsen'] ?></td>
                          <td><?php echo ucwords($pemlap1_item['nama_jenis']) ?></td>
                          <td><?php echo $pemlap1_item['nama_varietas'] ?></td>
                          <td><?php echo $pemlap1_item['singkatan'] ?></td>
                          <td>
                            <a href="<?php echo base_url("sertifikasi_apbn/pemlap/". $pemlap1_item['id_sertifikasi']) ?>" class="btn btn-xs btn-primary" onclick="return confirm('Apakah anda yakin?')">APPROVE</a><br>
                          </td>
                        </tr>
                      <?php $no++ ?>
                      <?php endforeach ?>
                    </tbody>
                  </table>    
                </div>
              </div>
            </div>
            <!-- /.box-body -->
            <!-- /.box-footer-->
          </div>
          <!-- /.box -->
        </div>
      </div>

      <?php endif ?>

      <?php if($this->session->userdata('level') == 'kepala'): ?>
      <!-- pemlap 3 -->
      <div class="row">
        <div class="col-md-12">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DAFTAR PEMLAP 3</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-wid_sertifikasiget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-wid_sertifikasiget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">

              <div class="row">
                <div class="col-md-12">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <th>No</th>
                      <th>No. Induk</th>
                      <th>Produsen</th>
                      <th>Jenis Tanaman</th>
                      <th>Varietas</th>
                      <th>Kelas Benih</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                      <?php $no = 1; ?>

                      <?php foreach($pemlap3 as $pemlap1_item): ?>
                        <tr>
                          <td><?php echo $no; ?></td>
                          <td><?php echo $pemlap1_item['no_induk'] ?></td>
                          <td><?php echo $pemlap1_item['nama_produsen'] ?></td>
                          <td><?php echo ucwords($pemlap1_item['nama_jenis']) ?></td>
                          <td><?php echo $pemlap1_item['nama_varietas'] ?></td>
                          <td><?php echo $pemlap1_item['singkatan'] ?></td>
                          <td>
                            <a href="<?php echo base_url("sertifikasi_apbn/pemlap/". $pemlap1_item['id_sertifikasi']) ?>" class="btn btn-xs btn-primary" onclick="return confirm('Apakah anda yakin?')">APPROVE</a><br>
                          </td>
                        </tr>
                      <?php $no++ ?>
                      <?php endforeach ?>
                    </tbody>
                  </table>    
                </div>
              </div>
            </div>
            <!-- /.box-body -->
            <!-- /.box-footer-->
          </div>
          <!-- /.box -->
        </div>
      </div>

      <?php endif ?>

      <?php if($this->session->userdata('level') == 'pjlab'): ?>
      <!-- LAB -->
      <div class="row">
        <div class="col-md-12">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">DAFTAR LAB</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-wid_sertifikasiget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-wid_sertifikasiget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">

              <div class="row">
            <div class="col-md-12">
              <table class="table table-bordered table-striped" vertical-align="middle">
                <thead>
                  <tr>
                    <th class="text-center" rowspan="2" align="top">No. Asal</th>
                    <th class="text-center" rowspan="2" align="top">No. Lab</th>
                    <th class="text-center" rowspan="2" align="top">Kadar Air</th>
                    <th colspan="4" class="text-center">Kemurnian</th>
                    <th colspan="5" class="text-center">Daya Berkecambah</th>
                    <th rowspan="2" class="text-center">Status</th>
                    <th rowspan="2" class="text-center">Aksi</th>
                  </tr>
                  <tr>
                    <!-- <th>Berat Contoh Kerja (gram)</th> -->
                    <th>Benih Murni(%)</th>
                    <th>Benih Tan. Lain (%)</th>
                    <th>Kotoran Benih (%)</th>
                    <th>Jangka Waktu Pengujian (hari)</th>
                    <th>Kecambah Normal(%)</th>
                    <th>Kecambah Abnormal(%)</th>
                    <th>Benih Keras(%)</th>
                    <th>Benih Segar(%)</th>
                    <th>Benih Mati(%)</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($lab_apbn as $lab_item): ?>
                    <tr>
                      <td><?php echo 'TKS.'. $lab_item['no_asal']; ?></td>
                      <td><?php echo $lab_item['no_lab']; ?></td>
                      <td><?php echo $lab_item['kadar_air']; ?></td>
                      <!-- <td><?php echo $lab_item['berat_cnth_kerja']; ?></td> -->
                      <td><?php echo $lab_item['benih_murni']; ?></td>
                      <td><?php echo $lab_item['benih_tan_lain']; ?></td>
                      <td><?php echo $lab_item['kotoran_benih']; ?></td>
                      <td><?php echo $lab_item['jangka_waktu_pengujian']; ?></td>
                      <td><?php echo $lab_item['kecambah_normal']; ?></td>
                      <td><?php echo $lab_item['kecambah_abnormal']; ?></td>
                      <td><?php echo $lab_item['benih_keras']; ?></td>
                      <td><?php echo $lab_item['benih_segar']; ?></td>
                      <td><?php echo $lab_item['benih_mati']; ?></td>
                      <td><?php echo ($lab_item['hasil'] === '1') ? 'Lulus' : 'Tidak Lulus' ?></td>
                      <td>
                        <a href="<?php echo base_url("lab/print/". $lab_item["id_lab"]) ?>" target="_blank" class="btn btn-xs btn-success">PRINT</a><br>
                        <a href="<?php echo base_url("lab/approve/". $lab_item["id_sertifikasi"]) ?>" class="btn btn-xs btn-primary" onclick="return confirm('Apakah anda yakin?')">APPROVE</a>
                      </td>
                    </tr>
                <?php endforeach; ?>
                <?php foreach($lab_apbd as $lab_item): ?>
                    <tr>
                      <td><?php echo 'TKD.'.$lab_item['no_asal']; ?></td>
                      <td><?php echo $lab_item['no_lab']; ?></td>
                      <td><?php echo $lab_item['kadar_air']; ?></td>
                      <!-- <td><?php echo $lab_item['berat_cnth_kerja']; ?></td> -->
                      <td><?php echo $lab_item['benih_murni']; ?></td>
                      <td><?php echo $lab_item['benih_tan_lain']; ?></td>
                      <td><?php echo $lab_item['kotoran_benih']; ?></td>
                      <td><?php echo $lab_item['jangka_waktu_pengujian']; ?></td>
                      <td><?php echo $lab_item['kecambah_normal']; ?></td>
                      <td><?php echo $lab_item['kecambah_abnormal']; ?></td>
                      <td><?php echo $lab_item['benih_keras']; ?></td>
                      <td><?php echo $lab_item['benih_segar']; ?></td>
                      <td><?php echo $lab_item['benih_mati']; ?></td>
                      <td><?php echo ($lab_item['hasil'] === '1') ? 'Lulus' : 'Tidak Lulus' ?></td>
                      <td>
                        <a href="<?php echo base_url("lab/print/". $lab_item["id_sertifikasi"]) ?>" target="_blank" class="btn btn-xs btn-success">PRINT</a>
                      </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
              </table>   
            </div>
          </div>
            <!-- /.box-body -->
            <!-- /.box-footer-->
          </div>
          <!-- /.box -->
        </div>
      </div>

      <?php endif ?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
