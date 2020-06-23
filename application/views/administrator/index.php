<?php $this->load->view('includes/head')?>
<div class="wrapper">
    <?php $this->load->view('includes/menu')?>
    <div class="content-wrapper" style="min-height: 2014px;">
       	<section class="content-header">
            <h1>
                <i class="fa fa-home text-teal"></i> Dashboard
            </h1>
            <ol class="breadcrumb">
                <li class="active">Dashboard</li>
            </ol>
            <br>
            <div class="row">
                <div class="col-lg-2 col-md-6 col-xs-12">
                    <div class="info-box bg-teal">
                        <span class="info-box-icon"><i class="fa fa-newspaper-o"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Berita</span>
                            <span class="info-box-number" id="number_berita">
                                <i class="fa fa-refresh fa-spin"></i>
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-xs-12">
                    <div class="info-box bg-green">
                        <span class="info-box-icon"><i class="fa fa-image"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Banner Depan</span>
                          <span class="info-box-number" id="number_banner">
                                <i class="fa fa-refresh fa-spin"></i>
                          </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-xs-12">
                    <div class="info-box bg-red">
                        <span class="info-box-icon"><i class="fa fa-image"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Galeri Foto</span>
                          <span class="info-box-number" id="number_galeri">
                              <i class="fa fa-refresh fa-spin"></i>
                          </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-xs-12">
                    <div class="info-box bg-maroon">
                        <span class="info-box-icon"><i class="fa fa-calendar-plus-o"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Jadwal Kegiatan</span>
                          <span class="info-box-number" id="number_jadwal">
                            <i class="fa fa-refresh fa-spin"></i>
                          </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
               <div class="col-lg-2 col-md-6 col-xs-12">
                    <div class="info-box bg-orange">
                        <span class="info-box-icon"><i class="fa fa-cloud-upload"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">File Download</span>
                          <span class="info-box-number" id="number_download">
                            <i class="fa fa-refresh fa-spin"></i>
                          </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-xs-12">
                    <div class="info-box bg-purple">
                        <span class="info-box-icon"><i class="fa fa-link"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Link Terkait</span>
                          <span class="info-box-number" id="number_link">
                              <i class="fa fa-refresh fa-spin"></i>
                          </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="box box-warning direct-chat direct-chat-warning">
                        <div class="box-header with-border">
                          <h3 class="box-title">5 Berita Terbaru</h3>

                          <div class="box-tools pull-right">
                          </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <br>
                            <div class="col-xs-12" id="berita">
                                <div class="progress progress-xs active">
                                    <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">    
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                        </div>
                        <!-- /.box-footer-->
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="box box-success direct-chat direct-chat-warning">
                        <div class="box-header with-border">
                          <h3 class="box-title">5 Jadwal Kegiatan Terbaru</h3>

                          <div class="box-tools pull-right">
                          </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body jadwal">
                            <br>
                            <div class="col-xs-12" id="jadwal">
                                <div class="progress progress-xs active">
                                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">    
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                        </div>
                        <!-- /.box-footer-->
                    </div>
                    <div class="box box-success direct-chat direct-chat-warning">
                        <div class="box-header with-border">
                          <h3 class="box-title">5 Download Terbanyak</h3>

                          <div class="box-tools pull-right">
                          </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body download">
                            <br>
                            <div class="col-xs-12" id="download">
                                <div class="progress progress-xs active">
                                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">    
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                        </div>
                        <!-- /.box-footer-->
                    </div>
                </div>
            </div>
        </section>
    </div>
	<?php $this->load->view('includes/footer')?>     
    <script type="text/javascript">
        function refresh_count_berita(){
            var data = {};
            show_ajax('POST','<?php echo base_url('administrator/count_berita')?>',data,'html','#number_berita');
        }
        function refresh_count_banner(){
            var data = {};
            show_ajax('POST','<?php echo base_url('administrator/count_banner')?>',data,'html','#number_banner');
        }
        function refresh_count_galeri(){
            var data = {};
            show_ajax('POST','<?php echo base_url('administrator/count_galeri')?>',data,'html','#number_galeri');
        }
        function refresh_count_jadwal(){
            var data = {};
            show_ajax('POST','<?php echo base_url('administrator/count_jadwal')?>',data,'html','#number_jadwal');
        }
        function refresh_count_download(){
            var data = {};
            show_ajax('POST','<?php echo base_url('administrator/count_download')?>',data,'html','#number_download');
        }
        function refresh_count_link(){
            var data = {};
            show_ajax('POST','<?php echo base_url('administrator/count_link')?>',data,'html','#number_link');
        }
        function refresh_list_berita(){
            var data = {jenisberita:$("#showjenis").val()};
            show_ajax('POST','<?php echo base_url('administrator/berita_view')?>',data,'html','#berita');
        }
        function refresh_list_jadwal(){
            var data = {jenisberita:$("#showjenis").val()};
            show_ajax('POST','<?php echo base_url('administrator/jadwal_kegiatan_view')?>',data,'html','#jadwal');
        }
        function refresh_download(){
            var data = {jenisberita:$("#showjenis").val()};
            show_ajax('POST','<?php echo base_url('administrator/download_view')?>',data,'html','#download');
        }
        refresh_count_berita();
        refresh_count_banner();
        refresh_count_galeri();
        refresh_count_jadwal();
        refresh_count_download();
        refresh_count_link();
        refresh_list_berita();
        refresh_list_jadwal();
        refresh_download();
    </script>