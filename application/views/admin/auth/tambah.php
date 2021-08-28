 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tambah User</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          
          <div class="row">
            <div class="col-md-12">
              <?php echo validation_errors(); ?>
              <?php echo form_open('auth/add_user') ?>
                <div class="box-body">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username">
                  </div>

                  <div class="form-group">
                    <label>Level</label>
                    <select name="level" class="form-control" required>
                      <option value="">- Pilih Level -</option>
                      <option value="tu">TU</option>
                      <option value="sertifikasi">Sertifikasi</option>
                      <option value="lab">Lab</option>
                      <option value="wasar">Wasar</option>
                      <option value="kasi">Kasi</option>
                      <option value="kepala">Kepala UPTD</option>
                      <option value="pjlab">Penanggung Jawab Lab</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>

                  <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm-password" class="form-control" placeholder="Password">
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Tambah User</button>
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
