<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SISTEM INFORMASI MANAJEMEN PERBENIHAN UNGGUL 2020</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/images/favicon.ico">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css">

    <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/select2/dist/css/select2.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/skins/_all-skins.min.css">


  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/datatables.css">

  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/pace.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/googleFont.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">
  

</head>
<body class="hold-transition skin-green sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('admin') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>MPL</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SIMPUL TP</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url() ?>assets/admin/dist/img/avatar5.png" class="user-image" alt="User Image">
              <?php 
            if($this->session->userdata('level') == 'admin'){
              $username = $this->session->userdata('username');
            }else{
              $username = $this->session->userdata('username');
            }          
            
          ?>
              <span class="hidden-xs"><?php echo strtoupper($username) ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url() ?>assets/admin/dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  <?php 
                  if($this->session->userdata('level') == 'admin'){
                    $username = $this->session->userdata('username');
                  }else{
                    $username = $this->session->userdata('username');
                  }          
                  
                ?>
                <p><?php echo strtoupper($username) ?></p>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url('auth/logout') ?>" class="btn btn-danger btn-flat">Log out</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>assets/admin/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <?php 
            if($this->session->userdata('level') == 'admin'){
              $username = $this->session->userdata('username');
            }else{
              $username = $this->session->userdata('username');
            }          
            
          ?>
          <p><?php echo strtoupper($username) ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGASI</li>
        <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li> 

        <!-- <li><a href="<?php echo base_url('sertifikasi/list_sertifikasi') ?>"><i class="fa fa-file"></i> <span>Sertifikasi</span></a></li>               -->

        <?php 
          $level = $this->session->userdata('level');
        ?>

        <?php if($level == "sertifikasi" or $level == "admin" or $level== "tu"): ?>
        <li class="treeview">
          <a href="javascript:void(0)">
            <i class="fa fa-file"></i> <span>Sertifikasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('sertifikasi_apbn/list_sertifikasi') ?>"><i class="fa fa-circle"></i> APBN</a></li>
            <li><a href="<?php echo base_url('sertifikasi_apbd/list_sertifikasi') ?>"><i class="fa fa-circle"></i> APBD</a></li>
          </ul>
        </li>
        <?php endif ?>

        <?php if($level == "tu" or $level == "admin"): ?>
        <li class="treeview">
          <a href="javascript:void(0)">
            <i class="fa fa-file"></i> <span>Tata Usaha</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('tu_apbn/list_tu') ?>"><i class="fa fa-circle"></i> APBN</a></li>
            <li><a href="<?php echo base_url('tu_apbd/list_tu') ?>"><i class="fa fa-circle"></i> APBD</a></li>
          </ul>
        </li>
        <?php endif; ?>

        <?php if($level == "lab" or $level == "admin"): ?>
        <li class="treeview">
          <a href="javascript:void(0)">
            <i class="fa fa-file"></i> <span>Input lab</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('lab_input_apbn/list_lab') ?>"><i class="fa fa-circle"></i> APBN</a></li>
            <li><a href="<?php echo base_url('lab_input_apbd/list_lab') ?>"><i class="fa fa-circle"></i> APBD</a></li>
          </ul>
        </li>

        
        <li class="treeview">
          <a href="javascript:void(0)">
            <i class="fa fa-file"></i> <span>Lab</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('lab/list_lab') ?>"><i class="fa fa-circle"></i> Daftar Pengujian Lab</a></li>
          </ul>
        </li> 

        <?php endif ?>
  
        <li class="treeview">
          <a href="javascript:void(0)">
            <i class="fa fa-database"></i> <span>Wasar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('stok_bulanan_pangan/pilih') ?>"><i class="fa fa-circle"></i> Stok Bulanan Pangan</a></li>
            <li><a href="<?php echo base_url('inventaris_produsen/list') ?>"><i class="fa fa-circle"></i> Inventaris Produsen</a></li>
            <li><a href="<?php echo base_url('inventaris_pengedar/list') ?>"><i class="fa fa-circle"></i> Inventaris Pengedar</a></li>
            <li><a href="<?php echo base_url('cek_mutu_pangan/pilih') ?>"><i class="fa fa-circle"></i> Cek Mutu Pangan</a></li>
          </ul>
        </li> 

        <li class="treeview">
          <a href="javascript:void(0)">
            <i class="fa fa-database"></i> <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('varietas/list_varietas') ?>"><i class="fa fa-circle"></i> Varietas</a></li>
          </ul>
        </li> 

        <?php if($level == "admin"): ?>
          <li class="treeview ">
            <a href="javascript:void(0)">
              <i class="fa fa-user"></i> <span>Modul User</span>
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url('auth/list_user') ?>"><i class="fa fa-circle"></i> List User</a></li>
              <li><a href="<?php echo base_url('auth/add_user') ?>"><i class="fa fa-circle"></i> Tambah User</a></li>
            </ul>
          </li> 
      <?php endif ?>      
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->
    
  <?php echo $contents; ?>


  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; UPTD PENGAWASAN SERTIFIKASI BENIH TANAMAN PANGAN DAN HORTIKULTURA.</strong> All rights
    reserved.
  </footer>

   <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
  <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url() ?>assets/admin/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url() ?>assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/admin/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jszip.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/buttons.html5.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url() ?>assets/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sertifikasi.js">
</script>
<script>
  $(function () {
    $('.sidebar-menu').tree();

    //Initialize Select2 Elements
    $('.select2').select2()

    $('table').DataTable({
      responsive: true,
      "language": {
          "search": "Cari : "
        },
      "sScrollX" : '100%',
      "autoWidth" : false,
    });

    //Date picker
    $('.datepicker').datepicker({
      autoclose: true,
      orientation: 'bottom',
      zIndexOffset: '100',
      format: 'yyyy-mm-dd',
      todayHighlight : true,
    }).attr("autocomplete", "off");
   
   });
</script>
<script src="https://cdn.ckeditor.com/4.15.0/basic/ckeditor.js"></script>
<script>
  CKEDITOR.replace('ket', {
    toolbar : [],
    height : 80,
  });
</script>

</body>
</html>
