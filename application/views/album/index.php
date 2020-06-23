<?php $this->load->view('includes/head')?>
<div class="wrapper">
    <?php $this->load->view('includes/menu')?>
    <div class="content-wrapper" style="min-height: 2014px;">
       	<section class="content-header">
            <h1>
                <i class="fa fa-image text-navy" aria-hidden="true"></i> Pengaturan Album Foto
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"> Dashboard</a></li>
                <li><a href="#"> Galeri Foto</a></li>
                <li class="active"> Pengaturan Album Foto</li>
            </ol>
            <br>
            <div class="row">
                <div class="col-sm-12">
                   <div class="box">
                     	<div class="box-header with-border">
	                       	<h3 class="box-title"><i class="fa fa-folder-open-o"></i> List Album</h3>
	                       	<div class="box-tools pull-right">
                                <a onclick="add_album()" style="cursor: pointer" class="btn bg-green"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah</a>
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
        function refresh_album(){
            show_ajax('POST','<?php echo base_url('album/album_view')?>',null,'html','#dt_jd');
        }
        function add_album(){
            data={judul:'Tambah Album',name:' '};
            modal_ajax(data,'POST','<?php echo base_url('album/album_add')?>','html','#preview',0);
        }
        function edit_album(id){
            data={judul:'Edit Album',name:' ',id:id};
            modal_ajax(data,'POST','<?php echo base_url('album/album_edit')?>','html','#preview',0);
        }
        function confirm_delete_album(id){
            data={judul:'Konfirmasi Penghapusan Album',name:' ',id:id};
            modal_ajax(data,'POST','<?php echo base_url('album/confirm_album_delete')?>','html','#preview',0);
        }
        function delete_album(id){
            data={id:id,judul:'Delete Album',name:' '};
            submit_ajax_function('POST','<?php echo base_url('album/album_delete')?>',data,'json','#preview',34);
        }
        refresh_album();
    </script>