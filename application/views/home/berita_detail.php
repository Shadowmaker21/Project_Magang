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
                                    <a class="breadcrumb-item" href="<?php echo base_url('home/berita')?>">Berita</a>
                                    <span class="breadcrumb-item"><?php echo character_limiter($detail->judul,100) ?></span>
                                </nav>
                                <br>
                                <h3 class="font-bold"><?php echo ucwords(strtolower($detail->judul)) ?></h3> 
                                <div><span><i class="icon-Calendar-4"></i> <?php echo strtoupper($detail->tanggalan) ?></span> <span><i class="icon-Checked-User"></i> <?php echo strtoupper($detail->username) ?></span> <span><i class="icon-Tag-5"></i> <?php echo strtoupper($detail->jenis_berita); ?></span> <span><i class="icon-Eye-Visible"></i> <?php echo $detail->n_read ?></span></div>
                                <br>
                                <?php if($gambar){ ?>
                                    <img class="img-thumbnail" src="<?php echo base_url('files/berita/'.$gambar->file_name.'');?>">
                                <?php } else { ?>
                                    <img class="img-thumbnail" src="<?php echo base_url('includes/noimage.png');?>">
                                <?php } ?>
                                <br><br>
                                <div style="color:black"><?php echo $detail->isi ?></div>
                                <hr>
                                <h4 class="font-bold">Gambar Lainnya</h4>
                                <div class="row m-t-40">
                                    <?php foreach($lainnya as $data){ ?>
                                        <div class="col-md-4">
                                            <div class="card aos-init aos-animate" data-aos="flip-left" data-aos-duration="1200">
                                                <a href="#" class="img-ho"><img class="card-img-top" src="<?php echo base_url('files/berita/'.$data->file_name.'') ?>" style="height:224px;"></a>
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