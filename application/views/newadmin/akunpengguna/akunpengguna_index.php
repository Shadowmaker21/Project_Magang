<?php $this->load->view('admin/includes/head')?>
<div class="wrapper">
    <?php $this->load->view('admin/includes/menu')?>
    <div class="content-wrapper" style="min-height: 2014px;">
        <section class="content-header">
        <h1 class="font-head">
            Pengguna
        </h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Dashboard</li>
            <li><i class="fa fa-cogs"></i> Pengguna</li>
            <li class="active"> User Pengguna</li>
        </ol>
        </section>
        <section class="content-header">
            <div class="row">
                <div class="col-md-12">
                    <div id="settings_kap">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <i class="fa fa-edit"></i>
                                <h3 class="box-title">User Pengguna Lists</h3>
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
                                                    <button type="button" onclick="add()" class="btn bg-green"><i class="fa fa-plus-square-o"></i> Buat</button>
                                                </div>
                                                <div class="pad5">
                                                    <button type="button" onclick="confirm()" class="btn bg-red"><i class="fa fa-trash-o"></i> Hapus</button>
                                                </div>
                                                <div class="pad5">
                                                    <button type="button" onclick="load_pengguna()" class="btn bg-blue"><i class="fa fa-refresh"></i> Refresh</button>
                                                </div>
                                                <div class="pad5">
                                                    <button type="button" id="downloaddaftar" class="btn bg-blue"><i class="fa fa-cloud-download"></i> Download</button>
                                                </div>
                                                <div class="pad5">
                                                    <div class="col-sm-12" id="statdownload" style="padding:10px;background-color:rgba(0, 192, 239, 0.16);margin-bottom:20px">
                                                      <form class="form-horizontal" id="pilihanunduh" name="pilihanunduh" method="post" action="<?php current_url()?>">          
                                                      <?php foreach($groups as $data){ ?>
                                                        <div class="pad5">
                                                            <input type="radio" value="<?php echo $data['ugrp_id'] ?>" name="konfirmasi" class="ya" id="konfirmasi"> <?php echo $data['ugrp_name'] ?>
                                                        </div>
                                                      <?php } ?>
                                                        <div class="pad5">
                                                            <input type="radio" value="99" name="konfirmasi" class="ya" id="konfirmasi" checked="checked"> Semua        
                                                        </div>
                                                      </form>
                                                      <button class="btn bg-green margin" id="downloadexcel"><i class="fa fa-file-excel-o"></i> Excel</button>
                                                    </div>
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
        $("#statdownload").hide();
        $("#downloaddaftar").on("click", function (){
            $("#statdownload").slideDown(1500);
        });
        $('#statdownload input').iCheck({
            radioClass: 'icheckbox_flat-green',
            increaseArea: '20%' // optional
        });

        $("#downloadexcel").on("click",function(){
            var pil = document.pilihanunduh.konfirmasi.value;
            if(!pil){
              alert('anda harus memilih daftar yang akan di unduh.')
            } else {
              notip('success','Proses Berhasil','Daftar sudah terunduh','1');
              $("#statdownload").slideUp(1500);
              window.location.href="<?php echo base_url('admin/excelpengguna/')?>"+'/'+pil;
            }
        });

        function load_pengguna(){
            show_ajax('POST','<?php echo base_url('admin/akunpengguna_view')?>',null,'html','#boks');
        }
        load_pengguna();
        function add(){
            data={judul:'Tambah User Baru',name:' '};
            modal_ajax(data,'POST','<?php echo base_url('admin/new_akunpengguna')?>','html','#preview',0);
        }

        function edit(id){
            $("#tombol").html('');
            data={id:id,judul:'Perbarui User ',name:' '};
            modal_ajax(data,'POST','<?php echo base_url('admin/edit_akunpengguna')?>','html','#preview',0);
        }

        function confirm(){
            var data = $("#selection").serializeArray();
            var judul = 'Konfirmasi Penghapusan';
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
            modal_ajax(a,'POST','<?php echo base_url('admin/databeberapaakunpengguna')?>','html','#preview',0);
        }
    </script>
   