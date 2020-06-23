<?php 
    function beranda($title){
        if($title == 'beranda'){
            echo 'active';
        }
    }
    function profil($title){
        if($title == 'profil'){
            echo 'active';
        }
    }
    function berita($title){
        if($title == 'berita'){
            echo 'active';
        }
    }
    function download($title){
        if($title == 'download'){
            echo 'active';
        }
    }
    function hubungi_kami($title){
        if($title == 'hubungi_kami'){
            echo 'active';
        }
    }
?>
<!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Dinas Arpus</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <div class="topbar">
            <div class="h14-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-lg h14-nav">
                       <a class="hidden-lg-up">Navigation</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header14" aria-controls="header14" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="ti-menu"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="header14">
                            <div class="hover-dropdown font-bold">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown mega-dropdown <?php beranda($title); ?>">
                                        <a class="nav-link dropdown-toggle" href="<?php echo base_url('') ?>">
                                            Beranda
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown <?php profil($title); ?>"> 
                                        <a class="nav-link dropdown-toggle" href="#" id="h6-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Profil <i class="fa fa-angle-down m-l-5"></i>
                                        </a>
                                        <ul class="b-none dropdown-menu font-14 animated fadeInUp">
                                            <li><a class="dropdown-item" href="<?php echo base_url('home/sejarah') ?>">SEJARAH</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url('home/visi_misi') ?>">VISI MISI</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url('home/sotk') ?>">STRUKTUR ORGANISASI</a></li>
                                            <li><a class="dropdown-item" href="<?php echo base_url('home/tugas_fungsi') ?>">TUGAS DAN FUNGSI</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown mega-dropdown <?php berita($title); ?>">
                                        <a class="nav-link dropdown-toggle" href="<?php echo base_url('home/berita') ?>">
                                            Berita
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown mega-dropdown <?php download($title); ?>">
                                        <a class="nav-link dropdown-toggle" href="<?php echo base_url('home/download') ?>">
                                            Download
                                        </a>
                                    </li>
									<li class="nav-item dropdown mega-dropdown">
                                        <a class="nav-link dropdown-toggle" href="<?php echo base_url('ppid') ?>">
                                            ppid
                                        </a>
                                    </li>
                                    <!-- <li class="nav-item dropdown mega-dropdown <?php hubungi_kami($title); ?>">
                                        <a class="nav-link dropdown-toggle" href="<?php echo base_url('home/') ?>">
                                            hubungi kami
                                        </a>
                                    </li> -->
                                </ul>
                            </div>
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item search dropdown"><a class="nav-link dropdown-toggle" href="javascript:void(0)" id="h14-sdropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i></a>
                                    <div class="dropdown-menu b-none dropdown-menu-right animated fadeInDown" aria-labelledby="h14-sdropdown">
                                        <input class="form-control" type="text" placeholder="Type & hit enter" />
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="header14 po-relative" style="background:url(<?php echo base_url('includes/bg.jpg')?>)">
                <div class="h14-infobar">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg h14-info-bar">
                            <a class="navbar-brand"><img src="<?php echo base_url('template/front/logo.png')?>" alt="wrapkit" style="height:55px;width:auto"/></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#h14-info" aria-controls="h14-info" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="sl-icon-options-vertical"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="h14-info">
                                <ul class="navbar-nav ml-auto text-uppercase">
                                    
                                    <li class="nav-item donate-btn">
                                        <button type="button" class="btn btn-rounded waves-effect waves-light btn-outline-warning">iJateng</button>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>                
            </div>
        </div>