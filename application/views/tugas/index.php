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
	                       	<h3 class="box-title"><i class="fa fa-folder-open-o" aria-hidden="true"></i> List Tugas dan Fungsi</h3>
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
        function refresh_list_tugas(){
            var data = {jenistugas:$("#showjenis").val()};
            show_ajax('POST','<?php echo base_url('tugas_fungsi/tugas_view')?>',data,'html','#dt_w');
        }
        $("#showjenis").change(function(){
            var data = {jenistugas:$("#showjenis").val()};
            show_ajax('POST','<?php echo base_url('tugas_fungsi/tugas_view')?>',data,'html','#dt_w');   
        });
        function add_tugas(){
            data={judul:'Tambah Tugas Fungsi',name:' '};
            modal_ajax(data,'POST','<?php echo base_url('tugas_fungsi/tugas_add')?>','html','#preview',2);
        }
        function edit_tugas(id){
            data={judul:'Edit Tugas Fungsi',name:' ',id:id};
            modal_ajax(data,'POST','<?php echo base_url('tugas_fungsi/tugas_edit')?>','html','#preview',2);
        }
        function confirm_delete_tugas(id){
            data={judul:'Konfirmasi Penghapusan Tugas Fungsi',name:' ',id:id};
            modal_ajax(data,'POST','<?php echo base_url('tugas_fungsi/confirm_list_tugas_delete')?>','html','#preview',2);
        }
        function delete_tugas(id){
            data={id:id,judul:'Delete Tugas Fungsi',name:' '};
            submit_ajax_function('POST','<?php echo base_url('tugas_fungsi/list_tugas_delete')?>',data,'json','#preview',2);
        }
        refresh_list_tugas();
    </script>