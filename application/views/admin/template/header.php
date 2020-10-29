
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrator</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/logo.png') ?>">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/skins/_all-skins.min.css">

    <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/select2/dist/css/select2.min.css">

  <!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">



  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('admin') ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>DM</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url() ?>assets/admin/dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url() ?>assets/admin/dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  Admin
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url('auth/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
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
          <p>ADMIN</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGASI</li>
        <li class="active"><a href="<?php echo base_url('admin') ?>"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
        
        <?php if($this->session->userdata('level') == "admin"): ?>
          <li class="treeview ">
            <a href="javascript:void(0)">
              <i class="fa fa-user"></i> <span>Modul User</span>
            </a>
            <ul class="treeview-menu">
              <li><a href="<?php echo base_url('auth/list_user') ?>"><i class="fa fa-circle"></i> List User</a></li>_
              <li><a href="<?php echo base_url('auth/add_user') ?>"><i class="fa fa-circle"></i> Tambah User</a></li>
            </ul>
          </li> 
      <?php endif ?>

        <li class="treeview ">
          <a href="javascript:void(0)">
            <i class="fa fa-file"></i> <span>Modul Berita</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('berita/list_berita') ?>"><i class="fa fa-circle"></i> List Berita</a></li>
            <li><a href="<?php echo base_url('berita/create') ?>"><i class="fa fa-circle"></i> Tambah Berita</a></li>
            <li><a href="<?php echo base_url('berita/list_kategori') ?>"><i class="fa fa-circle"></i> Tambah Kategori Berita</a></li>
          </ul>
        </li> 

        <li class="treeview ">
          <a href="javascript:void(0)">
            <i class="fa fa-file"></i> <span>Modul Video</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('video/list_video') ?>"><i class="fa fa-circle"></i> List Video</a></li>
            <li><a href="<?php echo base_url('video/create') ?>"><i class="fa fa-circle"></i> Tambah Video</a></li>
          </ul>
        </li> 

        <li class="treeview ">
          <a href="javascript:void(0)">
            <i class="fa fa-file"></i> <span>Modul Photo</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('foto/list_foto') ?>"><i class="fa fa-circle"></i> List Photo</a></li>
            <li><a href="<?php echo base_url('foto/create') ?>"><i class="fa fa-circle"></i> Tambah Photo</a></li>
            <li><a href="<?php echo base_url('foto/list_kategori') ?>"><i class="fa fa-circle"></i> Tambah Kategori Photo</a></li>
          </ul>
        </li>        

        <li class="treeview ">
          <a href="javascript:void(0)">
            <i class="fa fa-file"></i> <span>Modul FILE</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('file/list_file') ?>"><i class="fa fa-circle"></i> List File</a></li>
            <li><a href="<?php echo base_url('file/create') ?>"><i class="fa fa-circle"></i> Tambah File</a></li>
            <li><a href="<?php echo base_url('file/list_kategori') ?>"><i class="fa fa-circle"></i> Tambah Kategori File</a></li>
          </ul>
        </li>

        <li class="treeview ">
          <a href="javascript:void(0)">
            <i class="fa fa-file"></i> <span>Modul Banner</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('banner/list_banner') ?>"><i class="fa fa-circle"></i> List Banner</a></li>
            <li><a href="<?php echo base_url('banner/create ') ?>"><i class="fa fa-circle"></i> Tambah Banner</a></li>
          </ul>
        </li> 

        <li class="treeview ">
          <a href="javascript:void(0)">
            <i class="fa fa-file"></i> <span>Modul Halaman</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('halaman/list_halaman') ?>"><i class="fa fa-circle"></i> List Halaman</a></li>
            <li><a href="<?php echo site_url('halaman/create_halaman') ?>"><i class="fa fa-circle"></i> Tambah Halaman</a></li>
          </ul>
        </li> 

        <li class="treeview ">
          <a href="javascript:void(0)">
            <i class="fa fa-file"></i> <span>Modul Menu & Sub Menu</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('menu/list_menu') ?>"><i class="fa fa-circle"></i> List Menu</a></li>
            <li><a href="<?php echo site_url('menu/list_submenu') ?>"><i class="fa fa-circle"></i> List Sub Menu</a></li>
            <li><a href="<?php echo site_url('menu/create_menu') ?>"><i class="fa fa-circle"></i> Tambah Menu</a></li>
            <li><a href="<?php echo site_url('menu/create_submenu') ?>"><i class="fa fa-circle"></i> Tambah Sub Menu</a></li>
          </ul>
        </li> 
        
        <li class="treeview ">
          <a href="javascript:void(0)">
            <i class="fa fa-file"></i> <span>Modul Agenda</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('agenda/list_agenda') ?>"><i class="fa fa-circle"></i> List Agenda</a></li>
            <li><a href="<?php echo site_url('agenda/create') ?>"><i class="fa fa-circle"></i> Tambah Agenda</a></li>
          </ul>
        </li>


        <li class="treeview ">
          <a href="javascript:void(0)">
            <i class="fas fa-cog"></i> <span>Setting Web</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin/edit_identitas') ?>"><i class="fa fa-circle"></i> Identitas Web</a></li>
          </ul>
        </li>        
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>