<?php $this->load->view('includes/head')?>
<div class="wrapper">
    <?php $this->load->view('includes/menu')?>
    <div class="content-wrapper" style="min-height: 2014px;">
       	<section class="content-header">
            <h1>
                <i class="fa fa-bank text-purple" aria-hidden="true"></i> Bidang
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"> Dashboard</a></li>
                <li class="active"> Bidang</li>
            </ol>
            <br>
            <div class="row">
                <div class="col-sm-12">
                   <div class="box">
                     	<div class="box-header with-border">
	                       	<h3 class="box-title"><i class="fa fa-folder-open-o" aria-hidden="true"></i> List Bidang</h3>
	                       	<div class="box-tools pull-right">
                                <a onclick="add_bidang()" style="cursor: pointer" class="btn bg-green"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah</a>
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
        function refresh_bidang(){
            show_ajax('POST','<?php echo base_url('bidang/bidang_view')?>',null,'html','#dt_jd');
        }
        function add_bidang(){
            data={judul:'Tambah Bidang',name:' '};
            modal_ajax(data,'POST','<?php echo base_url('bidang/bidang_add')?>','html','#preview',0);
        }
        function edit_bidang(id){
            data={judul:'Edit bidang',name:' ',id:id};
            modal_ajax(data,'POST','<?php echo base_url('bidang/bidang_edit')?>','html','#preview',0);
        }
        function confirm_delete_bidang(id){
            data={judul:'Konfirmasi Penghapusan Bidang',name:' ',id:id};
            modal_ajax(data,'POST','<?php echo base_url('bidang/confirm_bidang_delete')?>','html','#preview',0);
        }
        function delete_bidang(id){
            data={id:id,judul:'Delete Bidang',name:' '};
            submit_ajax_function('POST','<?php echo base_url('bidang/bidang_delete')?>',data,'json','#preview',11);
        }
        refresh_bidang();
    </script>