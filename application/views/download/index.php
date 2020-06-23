<?php $this->load->view('includes/head')?>
<div class="wrapper">
    <?php $this->load->view('includes/menu')?>
    <div class="content-wrapper" style="min-height: 2014px;">
       	<section class="content-header">
            <h1>
                <?php echo $icon ?> <?php echo $judul ?>
            </h1>
            <ol class="breadcrumb">
                <li class="">Dashboard</li>
                <li class="active"><?php echo ucwords($judul) ?></li>
            </ol>
            <br>
            <div class="row">
                <div class="col-sm-12">
                   <div class="box">
                     	<div class="box-header with-border">
	                       	<h3 class="box-title"><i class="fa fa-folder-open-o"></i> List <?php echo $judul ?></h3>
	                       	<div class="box-tools pull-right">
                                <a href="<?php echo base_url('download/add') ?>" class="btn bg-green"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah</a>
	                       	</div>
                     	</div>
                     	<div class="box-body" id="dt_w">
                        
                     	</div>
                   	</div>
                </div>
            </div>
        </section>
    </div>
	<?php $this->load->view('includes/footer')?>     
    <script type="text/javascript">
        function refresh_download(){
            show_ajax('POST','<?php echo base_url('download/download_view')?>',null,'html','#dt_w');
        }
        function add_download(){
            data={judul:'Tambah <?php echo $judul ?>',name:' '};
            modal_ajax(data,'POST','<?php echo base_url('download/download_add')?>','html','#preview',2);
        }
        function edit_download(id){
            data={judul:'Edit <?php echo $judul ?>',name:' ',id:id};
            modal_ajax(data,'POST','<?php echo base_url('download/download_edit')?>','html','#preview',2);
        }
        function confirm_download(id){
            data={judul:'Konfirmasi Penghapusan <?php echo $judul ?>',name:' ',id:id};
            modal_ajax(data,'POST','<?php echo base_url('download/confirm_download_delete')?>','html','#preview',2);
        }
        function delete_download(id){
            data={id:id,judul:'Delete <?php echo $judul ?>',name:' '};
            submit_ajax_function('POST','<?php echo base_url('download/download_delete')?>',data,'json','#preview',2);
        }
        refresh_download();
    </script>