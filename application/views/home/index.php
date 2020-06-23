<?php $this->load->view('home/includes/head') ?>
    <?php $this->load->view('home/includes/menu') ?>
        <?php $this->load->view('home/includes/banner') ?>
        
            <div class="spacer feature8">
                <div class="container">
                    <div class="row m-t-40">
                        <!-- Column -->
                            <div class="col-md-6 col-lg-4 wrap-feature5-box">
                                <div class="card card-warning text-white card-shadow aos-init aos-animate" data-aos="fade-right" data-aos-duration="1200">
                                    <div class="card-body">
                                        <!-- <div class="icon-space"><i class="text-danger-gradiant icon-Tag-3"></i></div> -->
                                        <div class="">
                                            <h6 class="font-medium text-center"><a href="javascript:void(0)" class="text-white text-center">SEKRETARIAT <br><br></a></h6> 
                                            <!-- <p class="m-t-20"></p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-md-6 col-lg-4 wrap-feature5-box">
                                <div class="card card-info text-white card-shadow aos-init aos-animate" data-aos="fade-down" data-aos-duration="1200">
                                   <div class="card-body">
                                        <!-- <div class="icon-space"><i class="text-danger-gradiant icon-Tag-3"></i></div> -->
                                        <div class="">
                                            <h6 class="font-medium text-center"><a href="javascript:void(0)" class="text-white">LAYANAN DAN <BR> PEMANFAATAN ARSIP</a></h6> 
                                            <!-- <p class="m-t-20"></p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-md-6 col-lg-4 wrap-feature5-box">
                                <div class="card card-success text-white card-shadow aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200">
                                    <div class="card-body">
                                        <!-- <div class="icon-space"><i class="text-danger-gradiant icon-Tag-3"></i></div> -->
                                        <div class="">
                                            <h6 class="font-medium text-center"><a href="javascript:void(0)" class="text-white">PEMBINAAN, PENGEMBANGAN & PENGAWASAN KEARSIPAN</a></h6> 
                                            <!-- <p class="m-t-20"></p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-md-6 col-lg-4 wrap-feature5-box">
                                <div class="card card-megna text-white card-shadow aos-init aos-animate" data-aos="fade-right" data-aos-duration="1200">
                                    <div class="card-body">
                                        <!-- <div class="icon-space"><i class="text-danger-gradiant icon-Tag-3"></i></div> -->
                                        <div class="">
                                            <h6 class="font-medium text-center"><a href="javascript:void(0)" class="text-white">PENGELOLAAN DAN <br> PELESTARIAN ARSIP</a></h6>
                                            <!-- <p class="m-t-20">You can relay on our amaz features list and also our customer services.</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-md-6 col-lg-4 wrap-feature5-box">
                                <div class="card card-shadow card-danger text-white aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200">
                                    <div class="card-body">
                                        <!-- <div class="icon-space"><i class="text-danger-gradiant icon-Tag-3"></i></div> -->
                                        <div class="">
                                            <h6 class="font-medium text-center"><a href="javascript:void(0)" class="text-white"> DEPOSIT DAN PENGOLAHAN BAHAN PERPUSTAKAAN</a></h6>
                                            <!-- <p class="m-t-20">You can relay on our amaz features list and also our customer services.</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-md-6 col-lg-4 wrap-feature5-box">
                                <div class="card card-shadow card-dark aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200">
                                    <div class="card-body">
                                        <!-- <div class="icon-space"><i class="text-danger-gradiant  icon-Tag-3"></i></div> -->
                                        <div class="">
                                            <h6 class="font-medium text-center"><a href="javascript:void(0)" class="text-white">PENGEMBANGAN <br> PERPUSTAKAAN</a></h6>
                                            <!-- <p class="m-t-20">You can relay on our amaz features list and also our customer services.</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="mini-spacer bg-yellow text-white">
                <div class="container">
                    <div class="d-flex">
                        <div class="display-7 align-self-center">
                            <h3 class="">Pemilihan Duta Baca Daerah Tingkat Provinsi Jawa Tengah</h3>
							<h6 class="font-16">Pendaftaran tidak dipungut biaya (Gratis) dan akan berakhir pada tanggal 16 Agustus 2018</h6>
                        </div>
                        <div class="ml-auto m-t-10 m-b-10">
                            <a href="http://goo.gl/n1uUkp" target="blank"><button class="btn btn-info-gradiant btn-md">Unduh Brosur</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-home1 spacer bg-light">
                <div class="container">
                    <!-- Row  -->
                    <div class="row justify-content-center">
                        <!-- Column -->
                        <div class="col-md-8 text-center">
                            <h2 class="title font-bold">Semua Berita</h2>
                            <!-- <h6 class="subtitle">You can relay on our amazing features list and also our customer services will be great experience for you without doubt and in no-time</h6> -->
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                    </div>
                    <div class="row m-t-40">
                        <?php foreach($all as $data){ ?>
                        <div class="col-md-4">
                            <div class="card card-shadow" data-aos="flip-left" data-aos-duration="1200">
                                <a href="#">
                                    <?php if(@$data->file_name){ ?>
                                        <img class="card-img-top" src="<?php echo base_url('files/berita/'.$data->file_name.'')?>" alt="wrappixel kit" style="height:210px;">
                                    <?php } else { ?>
                                        <img class="card-img-top" src="<?php echo base_url('includes/noimage.png')?>"   alt="wrappixel kit">
                                    <?php } ?>
                                </a>
                                <div class="p-30">
                                    <div class="d-flex no-block font-14">
                                        <a><?php echo strtoupper($data->jenis_berita) ?></a>
                                        <span class="ml-auto"><?php echo $data->tanggalan ?></span>
                                    </div>
                                    <h5 class="font-medium m-t-20"><a href="<?php echo base_url('home/berita/'.$data->slug.'')?>" class="link text-info"><?php echo ucwords(strtolower($data->judul)) ?></a>
                                    <?php  ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="row justify-content-center m-t-40">
                        <div class="col-md-7 text-center">
                            <button type="button" class="btn btn-info-gradiant btn-md btn-arrow m-t-20">Lihat Semua</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('home/includes/footer') ?>