<?php 
  function dashboard($menu){
    if($menu == 'dashboard'){
      echo 'active';
    }
  }

  function bidang($menu){
    if($menu == 'bidang'){
      echo 'active';
    }
  }

  function pengguna($menu){
    if($menu == 'pengguna'){
      echo 'active';
    }
  }

  function berita($menu){
    if($menu == 'berita'){
      echo 'active';
    }
  }

  function berita_jenis($menu){
    if($menu == 'berita_jenis'){
      echo 'active';
    }
  }

  function galeri($menu){
    if($menu == 'galeri'){
      echo 'active';
    }
  }

  function album($menu){
    if($menu == 'album'){
      echo 'active';
    }
  }

  function jadwal_kegiatan($menu){
    if($menu == 'jadwal_kegiatan'){
      echo 'active';
    }
  }

  function profil($menu){
    if($menu == 'profil'){
      echo 'active';
    }
  }

  function albumfoto($menu){
    if($menu == 'albumfoto'){
      echo 'active';
    }
  }

  function download($menu){
    if($menu == 'download'){
      echo 'active';
    }
  }

  function tipe_download($menu){
    if($menu == 'tipe_download'){
      echo 'active';
    }
  }

  function halaman_depan($menu){
    if($menu == 'halaman_depan'){
      echo 'active';
    }
  }

  function link_terkait($menu){
    if($menu == 'link_terkait'){
      echo 'active';
    }
  }
  
  function statis($menu){
    if($menu == 'statis'){
      echo 'active';
    }
  }
?>
<div class="modal fade besar">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true"><i class="fa fa-times"></i></span></button>
        <h4 class="modal-title">Default Modal</h4>
      </div>
      <div class="modal-body">
        <div id="nama"></div>
        <div id="isi"></div>
        <div id="tombol"></div>
      </div>
    </div>
  </div>
</div>
<header class="main-header">
  <a href="javascript:void(0)" class="logo">
    <span class="logo-mini"><img src="<?php echo base_url('includes/logo100.png')?>" style="width:30px;"></span>
    <span class="logo-lg">DINAS ARPUS</span>
  </a>

  <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user-circle-o"></i>
              <span class="hidden-xs"><?php echo ucwords(str_replace('_', ' ', $user['upro_first_name']))?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('includes/people.jpg')?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo character_limiter(str_replace('_', ' ', $user['upro_first_name']),20) ?>
                  <small>Terdaftar Pada : <?php echo substr($user['uacc_date_added'],0,4)?></small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" onclick='change_password()' class="btn btn-default bg-green"><i class="fa fa-key"></i> Password</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url('authenticate/logout')?>" class="btn btn-default bg-red"><i class="fa fa-sign-out"></i> Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('includes/people.jpg')?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo character_limiter((ucwords(str_replace('_', ' ', $user['upro_first_name']))),15)?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">NAVIGASI</li>
        <li class="<?php dashboard($menu) ?>">
          <a href="<?php echo base_url('administrator')?>">
            <i class="fa fa-home text-teal"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview <?php pengguna($menu) ?>">
          <a href="#">
            <i class="fa fa-vcard-o text-info" aria-hidden="true"></i>
            <span>Akun Pengguna</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
              <li><a href="<?php echo base_url('pengguna/users')?>"><i class="fa fa-circle-o text-info"></i> Akun Pengguna </a></li>
              <li><a href="<?php echo base_url('pengguna/groups')?>"><i class="fa fa-circle-o text-info"></i>  Grup Pengguna </a></li>            
              <li><a href="<?php echo base_url('pengguna/roles')?>"><i class="fa fa-circle-o text-info"></i>  Role Pengguna <small class="label pull-right bg-green"></small></a></li>            
              <li><a href="<?php echo base_url('pengguna/informasipengguna')?>"><i class="fa fa-circle-o text-info"></i> <span>Informasi Pengguna</span></a></li>
          </ul>
        </li>        
        <?php if($this->flexi_auth->is_privileged('view menu berita')) { ?>
        <li class="treeview <?php berita($menu) ?>">
          <a href="#">
            <i class="fa fa-newspaper-o text-olive" aria-hidden="true"></i> 
            <span>Berita</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
          </a>
          <ul class="treeview-menu">
            <?php if($this->flexi_auth->is_privileged('view data berita')) { ?>
            <li>
              <a href="<?php echo base_url('berita') ?>">
              <i class="fa fa-circle-o text-olive"></i>
              <span> Data Berita </span>
              </a>
            </li>
            <?php } ?>
            <?php if($this->flexi_auth->is_privileged('view pengaturan berita')) { ?>
            <li class="treeview <?php @berita_jenis($menu2) ?>">
              <a href="#"><i class="fa fa-circle-o text-olive"></i> 
                <span>Pengaturan</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('berita_jenis') ?>"><i class="fa fa-circle-o text-olive"></i> Jenis Berita</a></li>
              </ul>
            </li>
            <?php } ?>
          </ul>
        </li>   
        <?php } ?>
        <?php if($this->flexi_auth->is_privileged('view menu bidang')) { ?>
        <li class="<?php bidang($menu) ?>">
          <a href="<?php echo base_url('bidang')?>">
            <i class="fa fa-bank text-purple"></i> <span>Bidang</span>
          </a>
        </li>
        <?php } ?>
        <?php if($this->flexi_auth->is_privileged('view menu halaman depan')) { ?>
        <li class="treeview <?php halaman_depan($menu) ?>">
          <a href="#">
            <i class="fa fa-image text-maroon" aria-hidden="true"></i> <span>Halaman Depan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php if($this->flexi_auth->is_privileged('view data banner depan')) { ?>
            <li>
              <a href="<?php echo base_url('carousel')?>">
                <i class="fa fa-circle-o text-maroon"></i> <span>Banner Depan</span>
              </a>
            </li>
            <?php } ?>
          </ul>
        </li>   
        <?php } ?>
        <?php if($this->flexi_auth->is_privileged('view menu galeri foto')) { ?>
        <li class="treeview <?php galeri($menu) ?>">
          <a href="#">
            <i class="fa fa-image text-navy" aria-hidden="true"></i> <span>Galeri Foto</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php if($this->flexi_auth->is_privileged('view data galeri foto')) { ?>
            <li><a href="<?php echo base_url('galeri') ?>"><i class="fa fa-circle-o text-navy"></i> Data Galeri Foto</a></li>
            <?php } ?>
            <?php if($this->flexi_auth->is_privileged('view pengaturan galeri foto')) { ?>
            <li class="treeview <?php @albumfoto($menu2) ?>">
              <a href="#"><i class="fa fa-circle-o text-navy"></i> Pengaturan
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('album') ?>"><i class="fa fa-circle-o text-navy"></i> Album Foto</a></li>
              </ul>
            </li>
            <?php } ?>
          </ul>
        </li>
        <?php } ?>   
        <?php if($this->flexi_auth->is_privileged('view menu jadwal kegiatan')) { ?>
        <li class="<?php jadwal_kegiatan($menu) ?>">
          <a href="<?php echo base_url('jadwal_kegiatan')?>">
            <i class="fa fa-calendar-plus-o text-orange"></i> <span>Jadwal Kegiatan</span>
          </a>
        </li>
        <?php } ?>
        <?php if($this->flexi_auth->is_privileged('view menu profil')) { ?>
        <li class="treeview <?php profil($menu) ?>">
          <a href="#">
            <i class="fa fa-vcard-o text-info" aria-hidden="true"></i>
            <span>Profil</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
          <?php if($this->flexi_auth->is_privileged('view data sejarah')) { ?>
            <li><a href="<?php echo base_url('sejarah')?>"><i class="fa fa-circle-o text-info"></i> Sejarah </a></li>
            <?php } ?>
            <?php if($this->flexi_auth->is_privileged('view data visi misi')) { ?>
            <li><a href="<?php echo base_url('visimisi')?>"><i class="fa fa-circle-o text-info"></i> Visi Misi</a></li>
            <?php } ?>
            <?php if($this->flexi_auth->is_privileged('view data struktur organisasi')) { ?>
            <li><a href="<?php echo base_url('sotk')?>"><i class="fa fa-circle-o text-info"></i> Struktur Organisasi</a></li>
            <?php } ?>
            <?php if($this->flexi_auth->is_privileged('view data tugas fungsi')) { ?>
            <li><a href="<?php echo base_url('tugas_fungsi')?>"><i class="fa fa-circle-o text-info"></i> Tugas Fungsi</a></li>
            <?php } ?>
          </ul>
        </li>
        <li class="treeview <?php download($menu)?>">
          <a href="#">
           <i class="fa fa-cloud-upload text-purple"></i> <span>Download</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('download')?>"><i class="fa fa-circle-o"></i> Data Download</a></li>
            <li class="treeview <?php @tipe_download($menu2)?>">
              <a href="#"><i class="fa fa-circle-o"></i> Pengaturan
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('tipe') ?>"><i class="fa fa-circle-o"></i> Tipe Dokumen</a></li>
              </ul>
            </li>
          </ul>
        </li> 
        <?php } ?>  
        <li class="<?php link_terkait($menu)?>">
          <a href="<?php echo base_url('link_terkait')?>">
            <i class="fa fa-link text-teal"></i> <span>Link Terkait</span>
          </a>
        </li>
		<li class="<?php statis($menu)?>">
          <a href="<?php echo base_url('statis')?>">
            <i class="fa fa-link text-teal"></i> <span>Statis</span>
          </a>
        </li>
      </ul>
    </section>
  </aside>