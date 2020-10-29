 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">DAFTAR LAB</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
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
              <table class="table table-bordered table-striped" vertical-align="middle">
                <thead>
                  <tr>
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
                  <?php $no = 1; ?>
                  <?php foreach($lab as $lab_item): ?>
                    <tr>
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
                        <a href="<?php echo base_url("$class/edit/". $lab_item["$id_lab"]) ?>" class="btn btn-xs btn-primary">EDIT</a>
                        <!-- <a href="<?php echo base_url("$class/print/". $lab_item["$id_lab"]) ?>" class="btn btn-xs btn-warning">DETAIL</a> -->
                        <a href="<?php echo base_url("$class/delete/". $lab_item["$id_lab"]) ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin ?');">DELETE</a>
                        <a href="<?php echo base_url("$class/print/". $lab_item["$id_lab"]) ?>" target="_blank" class="btn btn-xs btn-success">PRINT</a>
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
