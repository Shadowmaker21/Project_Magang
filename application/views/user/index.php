<?php $this->load->view('admin/includes/head') ?>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    AKUN PENGGUNA
                </h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DATA AKUN
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" onclick="add_grup('defaultModal','green')">Tambah Akun</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body" id="data_akun">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $this->load->view('admin/includes/footer') ?>
<script type="text/javascript">    
    data_akun();
</script>