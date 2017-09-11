<?php 

header("Content-Type: text/html; charset=UTF-8");
include("../system/Database.php");
session_start();?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Online Sınav Yönetim Sistemi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <!-- InstanceEndEditable -->
  
    <!-- Bootstrap Sürüm 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap-select.css">
    <!-- Stil Dosyası -->
    <link rel="stylesheet" href="dist/css/stil.css">
    <!-- Font Awesome Icon Set -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons Icon Set -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tema Stil Dosyası -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris Grafik -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvector Harita -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker Tarih Stil Dosyası -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker Tarih Stil Dosyası -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Bqb Soft</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Bqb</b>Soft</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Menu</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         

         
         
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">YÖNETİCİ GİRİŞİ</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
             
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                
                <div class="pull-right">
                  <a href="source/Die.php" class="btn btn-default btn-flat">Çıkış Yap</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
     

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
       
        <!-- Optionally, you can add icons to the links -->
			<li><a href="anasayfa.php"><i class="fa fa-link"></i> <span>Ana Sayfa</span></a></li>
			<li><a href="kategoriler.php"><i class="fa fa-link"></i> <span>Kategoriler</span></a></li>
			<li><a href="sorular.php"><i class="fa fa-link"></i> <span>Sorular</span></a></li>
			<li><a href="kullanicilar.php"><i class="fa fa-user"></i> <span>Kullanıcılar</span></a></li>
			<li><a href="raporlar.php"><i class="fa fa-link"></i> <span>Raporlar</span></a></li>
		 
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   