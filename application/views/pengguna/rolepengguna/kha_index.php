<?php $this->load->view('includes/head')?>
<div class="wrapper">
    <?php $this->load->view('includes/menu')?>
    <div class="content-wrapper" style="min-height: 2014px;">
        <section class="content-header">
        <h1 class="font-head">
            <i class="fa fa-vcard-o" aria-hidden="true"></i> Akun Pengguna
        </h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Dashboard</li>
            <li><i class="fa fa-vcard-o" aria-hidden="true"></i> Akun Pengguna</li>
            <li class="active"> Role Lists</li>
        </ol>
        </section>
        <section class="content-header">
            <div class="row">
                <div class="col-md-12">
                    <div id="admin_kap">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <i class="fa fa-edit"></i>
                                <h3 class="box-title">List Role</h3>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" onclick="del_role()"><i class="fa fa-trash"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" id="show" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" id="refresh" onclick="refreshs()" class="btn btn-box-tool"><i class="fa fa-refresh"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="box-body">
                               <div class="row">
                                 <div class="col-md-3">
                                        <div class="box box-solid">
                                          <div class="box-header a with-border">
                                              <h3 class="box-title">Pencarian</h3>
                                          </div>
                                          <div class="box-body">
                                              <input type="text" name="username" id="username" class="form-control" placeholder="Temukan by Hak Akses">
                                            <br>
                                            <input type="text" name="jum" id="jum" class="form-control" placeholder="Tampilkan lebih banyak" value="12">
                                            <br>
                                            <button class="btn btn-lg btn-block bg-teal btn-margin" onclick="searchroles()"><i class="fa fa-search"></i> Cari</button>
                                            <button class="btn btn-lg btn-block bg-navy btn-margin" onclick="resetroles()"><i class="fa fa-refresh"></i> Reset</button>                                  
                                            <br>    
                                          </div>
                                        </div>
                                        <div class="box box-solid">
                                          <div class="box-header a with-border">
                                            <h3 class="box-title">Tambah Role</h3>
                                          </div>
                                          <div class="box-body">
                                            <a onclick='add_roles()' class="message" data-toggle="popover" data-placement="right" title="" data-content="Tambahkan role." data-original-title=""><button class="btn btn-sm bg-green margin"><i class="zmdi zmdi-accounts-add"></i> <i class="fa fa-plus-square"></i></button></a>
                                          </div>
                                        </div>
                                        <div class="box box-solid">
                                          <div class="box-header a with-border">
                                            <h3 class="box-title">Hapus Role</h3>
                                          </div>
                                          <div class="box-body">
                                            <button onclick='confirm()' href="#" data-toggle="popover" data-placement="right" title="" data-content="Hapus Role" data-original-title="" class="message btn bg-red margin btn-sm"><i class="fa fa-trash-o"></i></button>
                                          </div>
                                        </div>
                                 </div>
                                 <div class="col-md-9">
                                   <h4>Daftar Role</h4>
                                   <div id="boks"></div>
                                 </div>
                                 <br><br>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php $this->load->view('includes/footer')?>     
    <script type="text/javascript">
        $(".message").popover({ trigger: "hover" });
        function refresh_roles(){
            var jum = $("#jum").val();
            data={jum:jum};
            show_ajax('POST','<?php echo base_url('pengguna/kha_view')?>',data,'html','#boks');
        }
        refresh_roles();

        function searchroles(){
            var username = $("#username").val();
            var jum = $("#jum").val();
            data={username:username,jum:jum};
            show_ajax('POST','<?php echo base_url('pengguna/kha_view')?>',data,'html','#boks');
            izitoast('info','Info','Data sudah ditampilkan','','topCenter');
        }

        function resetroles(){
          $("#username").val('');
          $("#jum").val('12');
          refresh_roles();
          izitoast('info','Info','Data sudah ditampilkan','','topCenter');
        }
        function add_roles(){
            data={judul:'Tambah Role Baru',name:' '};
            modal_ajax(data,'POST','<?php echo base_url('pengguna/new_role')?>','html','#preview',0);
        }
        function confirm(){
          var data = $("#selection").serializeArray();
          var judul= 'Konfirmasi Penghapusan';
          var name = 'Beberapa Tahun';
          var b = [];
          jQuery.each( data, function( i, data ) {
            b.push(data.value);
          });
          a={data:b,judul:judul,name:name};
          modal_ajax(a,'POST','<?php echo base_url('pengguna/databeberaparole')?>','html','#preview',0);
        }
    </script>
   