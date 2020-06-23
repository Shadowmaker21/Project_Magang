<?php $this->load->view('admin/includes/head')?>
    
<body class="skin-blue sidebar-mini">
    <div class="wrapper">
        <?php $this->load->view('admin/includes/menu')?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 916px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Monitoring
                </h1>
                <ol class="breadcrumb">
                    <li><i class="fa fa-dashboard"></i> Dashboard</li>
                    <li class="active"><i class="fa fa-dashboard"></i> Monitoring</li>
                </ol>
            </section>
            <section class="content-header">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <i class="fa fa-edit"></i>
                        <h3 class="box-title">Pengukuran Kinerja</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" id="show" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body" style="min-height:170px">
                        <div class="row">
                            <div class="col-xs-12">
                                <a href="<?php echo base_url('admin/dashboard')?>">Kembali</a>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-6 col-sm-12 col-lg-12">
                                <div class="form-group">
                                <select class="form-control" id="opd" name="opd">
                                    <option value="">Pilih OPD</option>
                                    <?php foreach($opd as $data){ ?>
                                        <option value="<?php echo $data->id?>" <?php if($data->id == $id){ echo 'selected'; } ?>><?php echo $data->nama_dinas ?></option>
                                          <?php } ?>
                                </select>                                
                                </div>                               
                            </div>
                            <div class="col-xs-2 col-sm-6 col-lg-6">
                                <div class="form-group">
                                <select class="form-control" id="tahun" name="tahun">
                                    <option value="">Pilih Tahun</option>
                                    <?php foreach($tahun as $data){ ?>
                                        <option value="<?php echo $data->id_tahun?>" <?php if($data->nama_tahun == $now){ echo 'selected'; } ?>><?php echo $data->nama_tahun ?></option>
                                          <?php } ?>
                                </select>
                                </div>                               
                            </div>
                            <div class="col-xs-1 col-sm-6 col-lg-6">
                                <div class="form-group">
                                <a href="javascript:void(0)" onclick="tampilkan()" class="btn bg-green">Tampilkan</a>
                                </div>                               
                            </div>
                            <div class="col-xs-3 col-sm-12 col-lg-12">
                                <table class="table">
                                    <tr>
                                        <td class="2">Keterangan Warna</td>
                                    </tr>
                                    <tr>
                                        <td class="danger"> </td>
                                        <td>0 - 50 %</td>
                                    </tr>
                                    <tr>
                                        <td class="warning"> </td>
                                        <td>51 - 75 %</td>
                                    </tr>
                                    <tr>
                                        <td class="success"> </td>
                                        <td>> 75 %</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-xs-12" id="previewutama">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->

<?php $this->load->view('admin/includes/footer')?>
<script type="text/javascript">
    function show_capaian_utama(prop,kab,utama){
        data={prop:prop,kab:kab,skpd:$("#opd").val(),utama:utama,tahun:$("#tahun").val(),sasaran:$("#sasaran").val(),judul:'Analisis Pencapaian Sasaran',name:' '};
        show_ajax('POST','<?php echo base_url('admin/show_capaian_utama')?>',data,'html','#previewutama');
    }
    show_capaian_utama(<?php echo $prop?>,<?php echo $kab?>,<?php echo $id?>,0);
    function tampilkan(){    
        show_capaian_utama(<?php echo $prop?>,<?php echo $kab?>,0);
    }
</script>