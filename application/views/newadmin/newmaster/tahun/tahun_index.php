<?php $this->load->view('admin/includes/head')?>
<div class="wrapper">
    <?php $this->load->view('admin/includes/menu')?>
    <div class="content-wrapper" style="min-height: 2014px;">
        <section class="content-header">
        <h1 class="font-head">
            Master Data
        </h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Dashboard</li>
            <li><i class="fa fa-cogs"></i> Master Data</li>
            <li class="active"> Tahun Lists</li>
        </ol>
        </section>
        <section class="content-header">
            <div class="row">
                <div class="col-md-12">
                    <div id="settings_kap">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <i class="fa fa-edit"></i>
                                <h3 class="box-title">Tahun Lists</h3>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" id="show" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="box-body" style="min-height:170px">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="col-md-12">
                                            <div class="bord">
                                                <h4><i class="fa fa-cog"></i> Pengaturan</h4>
                                                <hr>
                                                <div class="pad5">
                                                <button type="button" onclick="add_tahun()" class="btn bg-green"><i class="fa fa-plus-square-o"></i> Buat</button>
                                                </div>
                                                <div class="pad5">
                                                <button type="button" onclick="confirm()" class="btn bg-red"><i class="fa fa-trash-o"></i> Hapus</button>
                                                </div>
                                                <div class="pad5">
                                                <button type="button" onclick="load_tahun()" class="btn bg-blue"><i class="fa fa-refresh"></i> Refresh</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div id="boks"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer clearfix">
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php $this->load->view('admin/includes/footer')?>     
    <script type="text/javascript">
        function load_tahun(){
            show_ajax('POST','<?php echo base_url('admin/tahun_view')?>',null,'html','#boks');
        }
        load_tahun();
        function add_tahun(){
            $("#tombol").html('');
            data={judul:'Tambah Tahun Baru',name:' '};
            modal_ajax(data,'POST','<?php echo base_url('admin/new_tahun')?>','html','#preview',0);
        }

        function edit_tahun(id){
            $("#tombol").html('');
            data={id:id,judul:'Perbarui Tahun ',name:' '};
            modal_ajax(data,'POST','<?php echo base_url('admin/edit_tahun')?>','html','#preview',0);
        }

        function confirm(){
            var data = $("#selection").serializeArray();
            var judul= 'Konfirmasi Penghapusan';
            var name = 'Beberapa Data';
            var b = [];
            var j=1;
            jQuery.each( data, function( i, data ) {
              b.push(data.value);
              if(j==1){
                b.pop();
              }
              j++;
            });
            a={data:b,judul:judul,name:name};
            $("#tombol").html('');
            modal_ajax(a,'POST','<?php echo base_url('admin/databeberapatahun')?>','html','#preview',0);
        }
    </script>
   