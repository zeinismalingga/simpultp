 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">List User</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          
          <a href="<?php echo base_url('auth/add_user') ?>" class="btn btn-success pull-right">+ Tambah</a><br><br>
          
          <div class="row">
            <div class="col-md-12">
              <table class="table table-bordered table-striped">
                <thead>
                  <th>No</th>
                  <th>Username</th>
                  <th>Level</th>
                  <th>Last Login</th>
                  <th>Option</th>
                </thead>
                <tbody>
                  <?php $no = 1 ?>
                  <?php foreach($users as $user): ?>
                    <tr>
                      <td><?php echo $no ?></td>
                      <td><?php echo $user['username'] ?></td>
                      <td><?php echo strtoupper($user['level']) ?></td>
                      <td><?php echo $user['last_login'] ?></td>
                      <td>
                        <a href="<?php echo base_url('auth/edit/'. $user['id_user']) ?>" class="btn btn-primary">Edit</a>
                        <a href="<?php echo base_url('auth/delete/'. $user['id_user']) ?>" class="btn btn-danger" onclick="return confirm('apakah anda yakin')">Delete</a>
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
