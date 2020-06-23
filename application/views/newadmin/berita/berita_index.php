<?php $this->load->view('admin/includes/head')?>
<div class="wrapper">
    <?php $this->load->view('admin/includes/menu')?>
    <div class="content-wrapper" style="min-height: 2014px;">
        <section class="content-header">
        <h1 class="font-head">
            Berita
        </h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Dashboard</li>
            <li class="active"> Berita</li>
        </ol>
        </section>
        <section class="content-header">
            <div class="row">
                <div class="col-md-12">
                    <div id="settings_kap">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <i class="fa fa-edit"></i>
                                <h3 class="box-title">Berita Lists</h3>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" id="show" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="box-body" style="min-height:170px">
                                <div id="boks"></div>
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
    <script src="<?php echo base_url('includes/plugins/summernote/summernote.min.js')?>"></script>
    <script type="text/javascript">
        function load_news(){
            show_ajax('POST','<?php echo base_url('admin/berita_view')?>',null,'html','#boks');
        }
        load_news();
        function add_berita(){
            $("#tombol").html('');
            data={judul:'Tambah Tahun Baru',name:' '};
            show_ajax('POST','<?php echo base_url('admin/new_berita')?>',null,'html','#boks');
        }

        function edit_berita(id){
            $("#tombol").html('');
            data={id:id,judul:'Perbarui Tahun ',name:' '};
            show_ajax('POST','<?php echo base_url('admin/edit_berita')?>',data,'html','#boks');
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
            modal_ajax(a,'POST','<?php echo base_url('admin/databeberapaberita')?>','html','#preview',0);
        }
    </script>
   