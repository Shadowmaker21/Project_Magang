<div class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><i class="fa fa-times"></i></span></button>
        <center><h4 class="modal-title">Default Modal</h4></center>
      </div>
      <div class="modal-body">
        <div id="nama"></div>
        <div id="isi"></div>
      </div>
      <div class="modal-footer">
        <center><div id="tombol"></div></center>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<header class="main-header">

    <!-- Logo -->
    <a href="javascript:void(0)" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">SKP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><?php echo $user['ugrp_name'] ?></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="notifications-menu">
            <a href="<?php echo base_url('admin/update_account') ?>">
              <i class="fa fa-users"></i>
            </a>
          </li>
          <li class="notification-menu">
            <a href="#" id="txt">
              
            </a>
          </li>
          <li class="notifications-menu">
            <a href="<?php echo base_url('authenticate/logout') ?>">
              <i class="fa fa-sign-out"></i>
            </a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
      <ul class="sidebar-menu">
        <li class="header">NAVIGASI</li>
        <li>
          <a href="<?php echo base_url('admin/dashboard')?>">
            <i class="fa fa-home"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Pengguna</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <!-- <li><a href="<?php echo base_url('admin/create_user_accounts')?>"><i class="fa fa-circle-o text-yellow"></i> Buat Akun Pengguna <small class="label pull-right bg-green"><i class="fa fa-lock" aria-hidden="true"></i></small></a></li> -->
            <li><a href="<?php echo base_url('admin/akunpengguna')?>"><i class="fa fa-circle-o text-yellow"></i> User Pengguna </a></li>
            <li><a href="<?php echo base_url('admin/grup')?>"><i class="fa fa-circle-o text-yellow"></i> Grup Pengguna </a></li>            
            <li><a href="<?php echo base_url('admin/role')?>"><i class="fa fa-circle-o text-yellow"></i> Role Pengguna </a></li>            
          </ul>
        </li>
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Daftar Pengguna</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="<?php echo base_url('admin/list_user_status/active')?>"><i class="fa fa-circle-o text-red"></i> Aktif <small class="label pull-right bg-green"><i class="fa fa-lock" aria-hidden="true"></i></small></a></li>
            <li><a href="<?php echo base_url('admin/list_user_status/inactive')?>"><i class="fa fa-circle-o text-red"></i> Tidak Aktif <small class="label pull-right bg-green"><i class="fa fa-lock" aria-hidden="true"></i></small></a></li>
            <li><a href="<?php echo base_url('admin/new_delete_unactivated_users')?>"><i class="fa fa-circle-o text-red"></i> Tidak Aktivasi Akun  <small class="label pull-right bg-green"><i class="fa fa-lock" aria-hidden="true"></i></small></a></li>
            <li><a href="<?php echo base_url('admin/failed_login_users')?>"><i class="fa fa-circle-o text-red"></i> Kesalahan Login <small class="label pull-right bg-green"><i class="fa fa-lock" aria-hidden="true"></i></small></a></li>
          </ul>
        </li> -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cogs"></i>
            <span>Master Data</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="<?php echo base_url('admin/kepemimpinan')?>"><i class="fa fa-circle-o text-green"></i> Masa Kepemimpinan <small class="label pull-right bg-green"><i class="fa fa-lock" aria-hidden="true"></i></small></a></li>
            <li><a href="<?php echo base_url('admin/tahun')?>"><i class="fa fa-circle-o text-green"></i> Tahun</a></li>
            <li><a href="<?php echo base_url('admin/instansi')?>"><i class="fa fa-circle-o text-green"></i> Instansi</a></li>
          </ul>
        </li>
         <li>
          <a href="<?php echo base_url('admin/berita')?>">
            <i class="fa fa-newspaper-o"></i> <span>Berita</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>