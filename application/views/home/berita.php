<?php $this->load->view('home/includes/head') ?>
    <?php $this->load->view('home/includes/menu') ?>
<div class="page-wrapper">
            <div class="container">
                <div class="row m-t-10">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <nav class="breadcrumb">
                                    <a class="breadcrumb-item" href="<?php echo base_url('')?>">Beranda</a>
                                    <span class="breadcrumb-item">Berita</span>
                                </nav>
                                <br>
                                <h3 class="font-bold">BERITA</h3>
                                <p>Simak terus berita - berita yang ada.</p>
                                <ul class="nav nav-pills m-t-30 justify-content-end m-b-30">
                                    <?php $i=1;foreach($berita as $data){ ?>
                                        <li class="nav-item"> <a href="#<?php echo $data->nama_berita ?>" class="nav-link <?php if($i == 1){ echo 'active'; $i++;} ?>" data-toggle="tab" aria-expanded="false"><?php echo ucwords($data->nama) ?></a> </li>
                                    <?php } ?>
                                </ul>
                                <div class="tab-content br-n pn">
                                    <?php $j=1;foreach($berita as $datar){ ?>
                                    <div id="<?php echo $datar->nama_berita ?>" class="tab-pane <?php if($j == 1){ echo 'active';$j++;} ?>" aria-expanded="false">
                                        <div class="row">
                                            <?php $jum = count($datar->data); ?>
                                            <?php if($jum != 0){ ?>   
                                            <?php $a=1; foreach($datar->data as $isi){ ?>
                                                <?php if($a == 1){ ?>
                                                    <div class="col-md-6">
                                                        <div class="card card-shadow aos-init aos-animate" data-aos="flip-left" data-aos-duration="1200">
                                                            <a href="#">
                                                                <?php if(@$isi->file_name){ ?>
                                                                    <img class="card-img-top" src="<?php echo base_url('files/berita/'.$isi->file_name.'')?>" alt="wrappixel kit">
                                                                <?php } else { ?>
                                                                    <img class="card-img-top" src="<?php echo base_url('includes/noimage.png')?>"   alt="wrappixel kit">
                                                                <?php } ?>
                                                            </a>
                                                            <div class="p-30">
                                                                <div class="d-flex no-block font-13">
                                                                    <span class=""><?php echo $isi->tanggalan ?></span>
                                                                    <a href="#" class="link ml-auto"><?php echo ucwords(strtoupper($isi->bidang)) ?></a>
                                                                </div>    
                                                                <h5 class="font-medium m-t-20"><a href="<?php echo base_url('home/berita/'.$isi->slug.'')?>" class="link text-info"><?php echo ucwords(strtolower($isi->judul)) ?></a></h5>
                                                                <p class="m-t-20 m-b-20 text-justify"><?php echo character_limiter(ucwords(strip_tags($isi->isi)), 330); ?></p>
                                                                <div class="d-flex no-block font-13">
                                                                    <a href="#" class="font-medium text-uppercase"><?php echo ucwords($isi->username) ?></a>
                                                                    <a href="#" class="ml-auto link">Hits <?php echo $isi->n_read ?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                <?php } else { ?>
                                                    <div class="col-md-12">
                                                        <div class="card card-shadow aos-init" data-aos="flip-right" data-aos-duration="1200">
                                                            <div class="p-30">
                                                                <div class="d-flex no-block font-13">
                                                                    <span class=""><?php echo $isi->tanggalan ?></span>
                                                                    <a href="#" class="link ml-auto"><?php echo strtoupper(character_limiter($isi->bidang,25)) ?></a>
                                                                </div>    
                                                                <p class="m-t-20 m-b-20"><a href="<?php echo base_url('home/berita/'.$isi->slug.'')?>"><?php echo $isi->judul ?></a></p>
                                                                <div class="d-flex no-block font-13">
                                                                    <a class="font-medium text-uppercase"><?php echo ucwords($isi->username) ?></a>
                                                                    <a href="#" class="ml-auto link">Hits <?php echo $isi->n_read ?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <?php $a++; ?>
                                            <?php } ?> </div>
                                            <?php } else { ?>
                                                tidak ada
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php $this->load->view('home/includes/footer') ?>

