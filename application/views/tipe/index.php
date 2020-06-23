<?php $this->load->view('includes/head')?>
<div class="wrapper">
    <?php $this->load->view('includes/menu')?>
    <div class="content-wrapper" style="min-height: 2014px;">
       	<section class="content-header">
            <h1>
                <i class="fa fa-cloud-upload text-purple"></i> Pengaturan Tipe Download
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"> Dashboard</a></li>
                <li><a href="#"> Download</a></li>
                <li class="active"> Pengaturan Tipe Download</li>
            </ol>
            <br>
            <div class="row">
                <div class="col-sm-12">
                   <div class="box">
                     	<div class="box-header with-border">
	                       	<h3 class="box-title"><i class="fa fa-folder-open-o"></i> List Tipe Download</h3>
	                       	<div class="box-tools pull-right">
                            <input type="hidden" name="jenisa" id="jenisa">
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
        function refresh_tipe(){
            show_ajax('POST','<?php echo base_url('tipe/tipe_view')?>',null,'html','#dt_jd');
        }
        function add_tipe(){
            data={judul:'Tambah Tipe Download',name:' '};
            modal_ajax(data,'POST','<?php echo base_url('tipe/tipe_add')?>','html','#preview',0);
        }
        function edit_tipe(id){
            data={judul:'Edit Tipe Download',name:' ',id:id};
            modal_ajax(data,'POST','<?php echo base_url('tipe/tipe_edit')?>','html','#preview',0);
        }
        function confirm_delete_tipe(id){
            data={judul:'Konfirmasi Penghapusan Tipe Download',name:' ',id:id};
            modal_ajax(data,'POST','<?php echo base_url('tipe/confirm_tipe_delete')?>','html','#preview',0);
        }
        function delete_tipe(id){
            data={id:id,judul:'Delete Tipe Download',name:' '};
            submit_ajax_function('POST','<?php echo base_url('tipe/tipe_delete')?>',data,'json','#preview',35);
        }

        function detail_macam(id){
            data={id:id};
            $("#jenisa").val(id);
            show_ajax('POST','<?php echo base_url('tipe/macam_view')?>',data,'html','#dt_jd');
        }

        function refresh_macam(){
            data = {id:$("#jenisa").val()};
            show_ajax('POST','<?php echo base_url('tipe/macam_view')?>',data,'html','#dt_jd');
        }

        function edit_macam(id){
            data={judul:'Edit Macam Download',name:' ',id:id};
            modal_ajax(data,'POST','<?php echo base_url('tipe/macam_edit')?>','html','#preview',0);
        }
        function confirm_delete_macam(id){
            data={judul:'Konfirmasi Penghapusan Macam Download',name:' ',id:id};
            modal_ajax(data,'POST','<?php echo base_url('tipe/confirm_macam_delete')?>','html','#preview',0);
        }
        function add_macam(){
            data={judul:'Tambah Macam Download Baru',name:' ',id:$("#jenisa").val()};
            modal_ajax(data,'POST','<?php echo base_url('tipe/macam_add')?>','html','#preview',0);
        }
        function delete_macam(id){
            data={id:id,judul:'Delete Macam Download',name:' '};
            submit_ajax_function('POST','<?php echo base_url('tipe/macam_delete')?>',data,'json','#preview',35);
        }
        refresh_tipe();
    </script>