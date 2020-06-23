<?php $this->load->view('includes/head')?>
    
<body class="skin-red-light sidebar-mini">
    <div class="wrapper">
        <?php $this->load->view('includes/menu')?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 916px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                <i class="fa fa-vcard-o" aria-hidden="true"></i> Akun Pengguna
                </h1>
                <ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                  <li><a href="#"><i class="fa fa-vcard-o" aria-hidden="true"></i> Akun Pengguna</a></li>
                  <li class="active"><a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Informasi Pengguna</a></li>
                </ol>
                <br>
                <div class="row">
                  <div class="col-sm-12">
                    
                    <div class="box">
                        <div class="box-header with-border">
                          <h3 class="box-title"><i class="fa fa-folder-open-o" aria-hidden="true"></i> List Informasi Pengguna</h3>
                          <div class="box-title pull-right">
                          </div>
                        </div>
                        <div class="box-body">
                          <div class="row">
                              <div class="col-md-3">
                                <div class="box box-solid">
                                  <div class="box-header a with-border">
                                    <h3 class="box-title">Pengguna Aktif</h3>
                                  </div>
                                  <div class="box-body">
                                    <a class="message" href="#" data-toggle="popover" data-placement="right" title="" data-content="Lihat akun user yang sudah aktif." data-original-title="" onclick='active(1)'><button class="btn btn-sm bg-navy margin"><i class="fa fa-bell-o" aria-hidden="true"></i> </button></a>
                                  </div>
                                </div>
                                <div class="box box-solid">
                                  <div class="box-header a with-border">
                                    <h3 class="box-title">Pengguna Tidak Aktif</h3>
                                  </div>
                                  <div class="box-body">
                                    <button href="#" data-toggle="popover" data-placement="right" title="" data-content="Lihat akun user yang belum aktif." data-original-title="" class="btn message bg-navy btn-sm margin" onclick="active(0)"><i class="fa fa-bell-slash" aria-hidden="true"></i> </button>
                                  </div>
                                </div>
                                <div class="box box-solid">
                                  <div class="box-header a with-border">
                                    <h3 class="box-title">Kesalahan Login</h3>
                                  </div>
                                  <div class="box-body">
                                    <button href="#"  data-toggle="popover" data-placement="right" title="" data-content="Lihat akun user yang melakukan kesalahan login." data-original-title="" class="btn message bg-navy btn-sm margin" onclick="failedlogin()"><i class="fa fa-warning" aria-hidden="true"></i> </button>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-9">
                                <h4>Daftar Pengguna</h4>
                                <div id="placee"></div>
                              </div>
                            </div>
                            <br><br>
                        </div>
                    </div>
                  </div>
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->

<?php $this->load->view('includes/footer')?>
<script type="text/javascript">
  $(".message").popover({ trigger: "hover" });
  function active(a){
    data={judul:'Tambah User Baru',name:' ',a:a};
    $("#tombol").html('');
    show_ajax_function('POST','<?php echo base_url('pengguna/list_user_status')?>',data,'html','#placee');
  }
  active(1);
  function failedlogin(){
    data={judul:'Tambah User Baru',name:' ',status:1};
    $("#tombol").html('');
    show_ajax_function('POST','<?php echo base_url('pengguna/failed_login_users')?>',data,'html','#placee');
  }
</script>