<?php $this->load->view('includes/head')?>
<div class="wrapper">
    <?php $this->load->view('includes/menu')?>
    <div class="content-wrapper" style="min-height: 2014px;">
       	<section class="content-header">
            <h1>
                <i class="fa fa-vcard-o text-info" aria-hidden="true"></i> <?php echo $judul ?>
            </h1>
            <ol class="breadcrumb">
                <li class="">Dashboard</li>
                <li class="active"><?php echo $judul ?></li>
            </ol>
            <br>
            <div class="row">
                <div class="col-sm-12">
                   <div class="box">
                     	<div class="box-header with-border">
	                       	<h3 class="box-title"><i class="fa fa-folder-open-o" aria-hidden="true"></i> List Sejarah</h3>
	                       	<div class="box-title pull-right">
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
        function refresh_list_sejarah(){
            var data = {jenissejarah:$("#showjenis").val()};
            show_ajax('POST','<?php echo base_url('sejarah/sejarah_view')?>',data,'html','#dt_w');
        }
        $("#showjenis").change(function(){
            var data = {jenissejarah:$("#showjenis").val()};
            show_ajax('POST','<?php echo base_url('sejarah/sejarah_view')?>',data,'html','#dt_w');   
        });
        function add_sejarah(){
            data={judul:'Tambah Sejarah',name:' '};
            modal_ajax(data,'POST','<?php echo base_url('sejarah/sejarah_add')?>','html','#preview',2);
        }
        function edit_sejarah(id){
            data={judul:'Edit Sejarah',name:' ',id:id};
            modal_ajax(data,'POST','<?php echo base_url('sejarah/sejarah_edit')?>','html','#preview',2);
        }
        function confirm_delete_sejarah(id){
            data={judul:'Konfirmasi Penghapusan Sejarah',name:' ',id:id};
            modal_ajax(data,'POST','<?php echo base_url('sejarah/confirm_list_sejarah_delete')?>','html','#preview',2);
        }
        function delete_sejarah(id){
            data={id:id,judul:'Delete sejarah',name:' '};
            submit_ajax_function('POST','<?php echo base_url('sejarah/list_sejarah_delete')?>',data,'json','#preview',2);
        }
        refresh_list_sejarah();
    </script>