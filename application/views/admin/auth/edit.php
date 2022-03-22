 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit User</h3>

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
              <p><?php echo validation_errors() ?></p>
              <?php echo form_open('auth/edit/'. $users['id_user']) ?>
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Username" value="<?php echo $users['username'] ?>" readonly>
                  </div>

                  <div class="form-group">
                    <label>NIP</label>
                    <input type="text" name="nip" class="form-control" placeholder="NIP" value="<?php echo $users['nip'] ?>">
                    
                  </div>

                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $users['nama'] ?>">
                  </div>

                  <div class="form-group">
                    <label>Level</label>
                    <select name="level" class="form-control" required>
                      <option value="<?php echo $users['level'] ?>"><?php echo $users['level'] ?></option>
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
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    <small>* Kosongkan jika tidak merubah password</small>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" name="confirm-password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    <small>* Kosongkan jika tidak merubah password</small>
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Edit User</button>
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
