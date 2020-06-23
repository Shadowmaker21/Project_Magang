<?php $this->load->view('includes/head')?>
<div class="wrapper">
    <?php $this->load->view('includes/menu')?>
    <div class="content-wrapper" style="min-height: 2014px;">
       	<section class="content-header">
            <h1>
                <i class="fa fa-newspaper-o text-olive" aria-hidden="true"></i> Pengaturan Jenis Berita
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"> Dashboard</a></li>
                <li><a href="#"> Berita</a></li>
                <li class="active">Pengaturan Jenis Berita</li>
            </ol>
            <br>
            <div class="row">
                <div class="col-sm-12">
                   <div class="box">
                     	<div class="box-header with-border">
	                       	<h3 class="box-title"><i class="fa fa-folder-open-o"></i> List Jenis Berita</h3>
	                       	<div class="box-tools pull-right">
                            <a onclick="add_berita_jenis()" class="btn bg-green" style="cursor: pointer"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah </a>
	                       	</div>
                     	</div>
                     	<div class="box-body" id="dt_jd">
                        
                     	</div>
                   	</div>
                </div>
            </div>
        </section>
    </div>
	<?php $this->load->view('includes/footer')?>     
    <script type="text/javascript">
        function refresh_berita_jenis(){
            show_ajax('POST','<?php echo base_url('berita_jenis/berita_jenis_view')?>',null,'html','#dt_jd');
        }
        function add_berita_jenis(){
            data={judul:'Tambah Jenis Berita',name:' '};
            modal_ajax(data,'POST','<?php echo base_url('berita_jenis/berita_jenis_add')?>','html','#preview',0);
        }
        function edit_berita_jenis(id){
            data={judul:'Edit Jenis Berita',name:' ',id:id};
            modal_ajax(data,'POST','<?php echo base_url('berita_jenis/berita_jenis_edit')?>','html','#preview',0);
        }
        function confirm_delete_berita_jenis(id){
            data={judul:'Konfirmasi Penghapusan Jenis Berita',name:' ',id:id};
            modal_ajax(data,'POST','<?php echo base_url('berita_jenis/confirm_berita_jenis_delete')?>','html','#preview',0);
        }
        refresh_berita_jenis();
    </script>