 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">DAFTAR INVENTARIS PENGEDAR BENIH BINA TANAMAN PANGAN
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

          <a style="margin-left: 5px" href="<?php echo base_url("$class/add") ?>" class="btn btn-success pull-right">+ Tambah</a>

          <a href="<?php echo base_url("$class/print") ?>" class="btn btn-primary pull-right" target="_blank">Print</a><br><br>

          <div class="row">
            <div class="col-md-12">
              <table class="table table-bordered table-striped table-responsive" vertical-align="middle" style="overflow-x:scroll;">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Perusahaan</th>
                    <th>Nama Pimpinan</th>
                    <th>Alamat Lokasi Usaha</th>
                    <th>Alamat Pimpinan</th>
                    <th>Pilihan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach($inventaris as $inventaris_item): ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo ucwords($inventaris_item['nama_perusahaan']); ?></td>
                      <td><?php echo $inventaris_item['nama_pimpinan']; ?></td>
                      <td><?php echo ucwords($inventaris_item['alamat_lokasi_usaha']); ?></td>
                      <td><?php echo ucwords($inventaris_item['alamat_pimpinan']); ?></td>
                      <td>
                        <a href="<?php echo base_url("$class/edit/". $inventaris_item['id_inventaris_pengedar']) ?>" class="btn btn-xs btn-primary">EDIT</a><br>
                        <a href="<?php echo base_url("$class/print_rekomendasi/". $inventaris_item['id_inventaris_pengedar']) ?>" target="_black" class="btn btn-xs btn-success">PRINT REKOMENDASI</a><br>
                        <a href="<?php echo base_url("$class/delete/". $inventaris_item['id_inventaris_pengedar']) ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin ?');">DELETE</a>
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
