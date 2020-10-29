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

        <div class="col-md-12">
          <div class="alert alert-success" role="alert">
            <h3><i class="fa fa-info-circle"></i> SELAMAT DATANG DI SISTEM INFORMASI MANAJEMEN PERBENIHAN UNGGUL 2020</h3>
          </div>          
        </div>
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
