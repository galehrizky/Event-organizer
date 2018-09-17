<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Area</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url()?>//assets/admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>//assets/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>//assets/admin/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()?>//assets/admin/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url()?>//assets/admin/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()?>//assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>//assets/admin/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>//assets/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()?>//assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url()?>backend" class="logo">
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Administrator</b>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url()?>assets/upload/admin/<?php echo $this->session->userdata('foto')?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('username')?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url()?>assets/upload/admin/<?php echo $this->session->userdata('foto')?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('username')?>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url()?>backend/admin/edit_profile/<?php echo $this->session->userdata('id')?>" class="btn btn-default btn-flat">Edit</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url()?>backend/login/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>assets/upload/admin/<?php echo $this->session->userdata('foto')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username')?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN MENU</li>
        <li class="active treeview">
          <a href="<?php echo base_url()?>backend/dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url()?>backend/home">
            <i class="fa fa-home"></i> <span>Home</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url()?>backend/about">
            <i class="fa fa-square"></i> <span>About</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url()?>backend/photo">
            <i class="fa fa-file-photo-o"></i> <span>Photo</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>backend/photo"><i class="fa fa-circle-o"></i> Tambah foto</a></li>
            <li><a href="<?php echo base_url()?>backend/photo/data"><i class="fa fa-circle-o"></i> Data foto</a></li>
          </ul>
        </li>
           <li class="treeview">
          <a href="<?php echo base_url()?>backend/photo">
            <i class="fa fa-user"></i> <span>Admin</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>backend/admin"><i class="fa fa-circle-o"></i> Tambah Admin</a></li>
            <li><a href="<?php echo base_url()?>backend/admin/data"><i class="fa fa-circle-o"></i> Data Admin</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="<?php echo base_url()?>backend/photo">
            <i class="fa fa-newspaper-o"></i> <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>backend/blog"><i class="fa fa-circle-o"></i> Tulis Blog</a></li>
            <li><a href="<?php echo base_url()?>backend/blog/data"><i class="fa fa-circle-o"></i> Data Blog</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="<?php echo base_url()?>backend/team">
            <i class="fa fa-group"></i> <span>Team</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>backend/team"><i class="fa fa-circle-o"></i> Tambah Team</a></li>
            <li><a href="<?php echo base_url()?>backend/team/data"><i class="fa fa-circle-o"></i> Data Team</a></li>
          </ul>
        </li>
         <li class="treeview">
          <a href="<?php echo base_url()?>backend/client">
            <i class="fa fa-group"></i> <span>Client</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url()?>backend/client"><i class="fa fa-circle-o"></i> Tambah Client</a></li>
            <li><a href="<?php echo base_url()?>backend/client/data"><i class="fa fa-circle-o"></i> Data Client</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url()?>backend/contact">
            <i class="fa fa-contao"></i> <span>Contact</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <li><a href="<?php echo base_url()?>" target="_blank"><i class="fa fa-external-link"></i> <span>Lihat Website</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>