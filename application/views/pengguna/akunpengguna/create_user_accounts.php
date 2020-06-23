<?php $this->load->view('pengguna/includes/head')?>
    
<body class="skin-red-light sidebar-mini">
    <div class="wrapper">
        <?php $this->load->view('pengguna/includes/menu')?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 916px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <h1>
                <i class="fa fa-laptop"></i> Akun Pengguna
              </h1>
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="#"><i class="fa fa-laptop"></i> Akun Pengguna</a></li>
                <li class="active"><i class="zmdi zmdi-account-calendar"></i> Buat Akun Pengguna</li>
              </ol>
              <br>
              <div class="row">
                <div class="col-md-12">
                  <div class="box box-danger">
                    <div class="box-header with-border" style="color:#dd4b39">
                      <i class="zmdi zmdi-accounts-alt"></i>
                      <h3 class="box-title">Buat Akun Pengguna</h3>
                      <div class="box-title pull-right">
                      </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" id="place">
                      <div class="row">
                        <div class="col-sm-8">
                          <?php echo form_open(current_url(),array('role'=>'form'));?>
                          <input disabled type="hidden" id="tes" class="form-control" name="tes" value="polke"/>
                          <div class="form-group skpd">
                            <label >Skpd</label>
                            <select id="skpd" name="skpd" class="form-control">
                              <option value="">Pilih Akun SKPD</option>
                              <?php foreach($dinas as $skpd) { ?>
                                  <option value="<?php echo $skpd->id?>"><?php echo $skpd->nama;?></option>
                              <?php } ?>
                            </select> 
                          </div>
                            <div class="form-group">
                              <label>Username <span id="load"></span></label>
                              <input placeholder="Tulis Username" type="text" class="form-control" id="username" name="username" value="<?php echo set_value('username')?>"/>
                            </div>
                            <input type="hidden" class="form-control input-lg" id="username" name="password" value="polke"/>
                            <div class="error">
                              <?php $error = form_error('group');?>
                              <?php echo $error?>
                            </div>
                            <div class="error">
                              <?php $error = form_error('username');?>
                              <?php echo $error?>
                            </div>
                            <div class="form-group pull-right">
                              <a class="btn btn-info btn-sm" href="<?php echo base_url('pengguna/create_user_accounts')?>">Kembali</a>
                              <button id="submit" type="submit" name="create_users_account" value="tambah" class="btn btn-primary waves-effect"><i class="zmdi zmdi-card-sd zmdi-hc-fw"></i> Simpan</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.box-body -->
                  </div>
                </div>
              </div>
            </section>
        </div>
<?php $this->load->view('pengguna/includes/footer')?>
<script type="text/javascript">
    $('select').select2();
    $("#skpd").change(function(){
        $.ajax({
          type:"POST",
          url :"<?php echo base_url('pengguna/namedinas')?>",
          data:{
            id:$(this).val()
          },
          dataType:"html",
          beforeSend:function(){
            $("#load").html('<i class="fa fa-cog fa-spin"></i>');
          },
          success:function(data){
            $("#load").html('<i class="fa fa-check"></i>');
            $("#username").val(data);
          },
          error:function(){
            
          }
        });
    });
</script>