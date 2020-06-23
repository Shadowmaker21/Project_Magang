<?php $this->load->view('includes/head')?>
<div class="wrapper">
    <?php $this->load->view('includes/menu')?>
    <div class="content-wrapper" style="min-height: 2014px;">
       	<section class="content-header">
            <h1>
                <i class="fa fa-newspaper-o text-success"></i> Berita
            </h1>
            <ol class="breadcrumb">
                <li class="">Dashboard</li>
                <li class="active">Berita</li>
            </ol>
            <br>
            <div class="row">
                <div class="col-sm-12">
                   <div class="box">
                     	<div class="box-header with-border">
	                       	<h3 class="box-title"><i class="fa fa-folder-open-o" aria-hidden="true"></i> List Berita</h3>
	                       	<div class="box-tools pull-right">
                                <div class="col-md-3 input-group pull-right">
                                    <select class="form-control" name="showjenis" id="showjenis">
                                        <option value="0">Semua Jenis Berita</option>
                                        <?php foreach($berita as $data){ ?>
                                            <option value="<?php echo $data->id_berita_jenis ?>"><?php echo ucwords($data->nama_berita) ?></option>
                                        <?php } ?>
                                    </select>    
                                    <span class="input-group-btn">
                                        <a href="#" class="btn bg-green" onclick="add_berita()"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah</a>
                                    </span>
                                </div>
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
        function refresh_list_berita(){
            var data = {jenisberita:$("#showjenis").val()};
            show_ajax('POST','<?php echo base_url('berita/berita_view')?>',data,'html','#dt_w');
        }
        $("#showjenis").change(function(){
            var data = {jenisberita:$("#showjenis").val()};
            show_ajax('POST','<?php echo base_url('berita/berita_view')?>',data,'html','#dt_w');   
            izitoast('info','Info','Data Sudah Ditampilkan',' ','topCenter');
        });
        
        function add_berita(){
            data={judul:'Tambah Berita',name:' '};
            modal_ajax(data,'POST','<?php echo base_url('berita/berita_add')?>','html','#preview',2);
        }
        function edit_berita(id){
            data={judul:'Edit Berita',name:' ',id:id};
            modal_ajax(data,'POST','<?php echo base_url('berita/berita_edit')?>','html','#preview',2);
        }
        function confirm_delete_berita(id){
            data={judul:'Konfirmasi Penghapusan Berita',name:' ',id:id};
            modal_ajax(data,'POST','<?php echo base_url('berita/confirm_berita_delete')?>','html','#preview',2);
        }
        refresh_list_berita();
    </script>