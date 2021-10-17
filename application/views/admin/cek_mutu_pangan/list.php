 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">CEK MUTU BENIH
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
          
          <a style="margin-left: 5px" href="<?php echo base_url("$class/add/") ?>" class="btn btn-success pull-right">+ Tambah</a> <br><br>

          <!-- <a href="<?php echo base_url("$class/print/") ?>" class="btn btn-primary pull-right">Print</a><br><br> -->
          
          <div class="row">
            <div class="col-md-12">
              <table class="table table-bordered table-striped table-responsive" vertical-align="middle" style="overflow-x:scroll;">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>No. CMP</th>
                    <th>No. Asal</th>
                    <th>Jenis Tanaman</th>
                    <th>Varietas</th>
                    <th>Tgl. Panen</th>
                    <th>Kelas Benih</th>
                    <th>Berat (Gr)</th>
                    <th>Pilihan</th>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach($cek_mutu as $cek_mutu_item): ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $cek_mutu_item['no_contoh_benih']; ?></td>
                      <td><?php echo $cek_mutu_item['no_asal']; ?></td>
                      <td><?php echo $cek_mutu_item['nama_jenis']; ?></td>
                      <td><?php echo $cek_mutu_item['nama_varietas']; ?></td>
                      <td><?php echo tgl_indo($cek_mutu_item['tgl_panen']); ?></td>
                      <td><?php echo $cek_mutu_item['singkatan']; ?></td>
                      <td><?php echo $cek_mutu_item['berat_contoh_benih']; ?></td>

                      <td>
                        <a href="<?php echo base_url("$class/edit/". $cek_mutu_item['id_cek_mutu_pangan']) ?>" class="btn btn-xs btn-primary">EDIT</a><br>
                        <a href="<?php echo base_url("$class/print/". $cek_mutu_item['id_cek_mutu_pangan']) ?>" class="btn btn-xs btn-success">PRINT</a><br>
                        <a href="<?php echo base_url("$class/delete/". $cek_mutu_item['id_cek_mutu_pangan']) ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin ?');">DELETE</a>
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
