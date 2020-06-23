<!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Slider  -->
                <!-- ============================================================== -->
                <div class="bg-light">
                    <section id="slider-sec" class="slider2">
                        <div id="slider2" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="7000">
                            <ol class="carousel-indicators hide">
                                <li data-target="#slider2" data-slide-to="0" class="active"></li>
                                <li data-target="#slider2" data-slide-to="1"></li>
                                <li data-target="#slider2" data-slide-to="2"></li>
                            </ol>
                            <!-- Wrapper For Slides -->
                            <div class="carousel-inner" role="listbox">
                                <?php $i=1; foreach($carousel as $data){ ?>
                                    <?php 
                                        $path = $data->file_path.$data->file_name;
                                        $path = realpath($path);
                                        $path = base_url('files/carousel/'.$data->file_name);
                                    ?>
                                    <div class="carousel-item <?php if($i == 1){ echo 'active'; } ?>">
                                        <!-- Slide Background --><img src="<?php echo $path;?>" alt="We are Digital Agency" class="slide-image" />
                                        <!-- Slide Text Layer -->
                                        <div class="slide-text slide_style_left">
                                            <div class="col-md-9 col-lg-8">
                                                <h2 data-animation="animated zoomInRight" class="title text-white"><?php echo $data->judul ?></h2>
                                            </div>
                                            <div class="col-md-9 col-lg-8">
                                                <p style="font-size:20px" data-animation="animated fadeInLeft" class="m-t-10 m-b-40 hidden-sm-down text-white op-8"><?php echo $data->deskripsi ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php $i++; } ?>
                                <div class="slider-control">
                                    <!-- Left Control -->
                                    <a class="left carousel-control-prev text-white font-14" href="#slider2" role="button" data-slide="prev"> <span class="ti-arrow-left" aria-hidden="true"></span> <b class="sr-only font-normal">Previous</b> </a>
                                    <!-- Right Control -->
                                    <a class="right carousel-control-next text-white font-14" href="#slider2" role="button" data-slide="next"> <span class="ti-arrow-right" aria-hidden="true"></span> <b class="sr-only font-normal">Next</b> </a>
                                </div>
                                <!-- End of Slider Control -->
                            </div>
                        </div>
                        <!-- End Slider -->
                        <!-- Slider Modal -->
                        <div class="modal bd-example-modal-lg fade" id="video" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalTitle">Your Video Title Here</h5>
                                        <button type="button" class="close font-20" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true" class="ti-close"></span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <video width="100" controls>
                                            <source src="images/slider/welding.mp4" type="video/mp4"> Your browser does not support HTML5 video.
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Slider Modal -->
                    </section>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Feature 12  -->
            <!-- ============================================================== -->