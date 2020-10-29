 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">DAFTAR INVENTARIS DATA PRODUSEN TANAMAN PANGAN
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
                    <th rowspan="2" width="10">No</th>
                    <th rowspan="2">Nama Produsen</th>
                    <th colspan="2" class="text-center">Alamat</th>
                    <th rowspan="2">Kabupaten</th>
                    <th rowspan="2">Nama Pimpinan</th>
                    <th rowspan="2">Pilihan</th>
                  </tr>
                  <tr>
                    <th>Desa</th>
                    <th>Kec</th>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach($inventaris as $inventaris_item): ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo ucwords($inventaris_item['nama_produsen']); ?></td>
                      <td><?php echo $inventaris_item['desa']; ?></td>
                      <td><?php echo ucwords($inventaris_item['nama_kecamatan']); ?></td>
                      <td><?php echo ucwords($inventaris_item['nama_kota']); ?></td>
                      <td><?php echo ucwords($inventaris_item['nama_pimpinan']); ?></td>
                      <td>
                        <a href="<?php echo base_url("$class/edit/". $inventaris_item['id_inventaris_pangan']) ?>" class="btn btn-xs btn-primary">EDIT</a><br>
                        <a href="<?php echo base_url("$class/delete/". $inventaris_item['id_inventaris_pangan']) ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin ?');">DELETE</a>
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
