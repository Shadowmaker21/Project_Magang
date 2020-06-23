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
	                       	<h3 class="box-title"><i class="fa fa-folder-open-o" aria-hidden="true"></i> List Visi Misi</h3>
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
        function refresh_list_visimisi(){
            var data = {jenisvisimisi:$("#showjenis").val()};
            show_ajax('POST','<?php echo base_url('visimisi/visimisi_view')?>',data,'html','#dt_w');
        }
        $("#showjenis").change(function(){
            var data = {jenisvisimisi:$("#showjenis").val()};
            show_ajax('POST','<?php echo base_url('visimisi/visimisi_view')?>',data,'html','#dt_w');   
        });
        function add_visimisi(){
            data={judul:'Tambah Visi Misi',name:' '};
            modal_ajax(data,'POST','<?php echo base_url('visimisi/visimisi_add')?>','html','#preview',2);
        }
        function edit_visimisi(id){
            data={judul:'Edit Visi Misi',name:' ',id:id};
            modal_ajax(data,'POST','<?php echo base_url('visimisi/visimisi_edit')?>','html','#preview',2);
        }
        function confirm_delete_visimisi(id){
            data={judul:'Konfirmasi Penghapusan visimisi',name:' ',id:id};
            modal_ajax(data,'POST','<?php echo base_url('visimisi/confirm_list_visimisi_delete')?>','html','#preview',2);
        }
        function delete_visimisi(id){
            data={id:id,judul:'Delete visimisi',name:' '};
            submit_ajax_function('POST','<?php echo base_url('visimisi/list_visimisi_delete')?>',data,'json','#preview',2);
        }
        refresh_list_visimisi();
    </script>