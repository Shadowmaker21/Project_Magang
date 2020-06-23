<?php $this->load->view('admin/includes/head')?>
    
<body class="skin-blue sidebar-mini">
    <div class="wrapper">
        <?php $this->load->view('admin/includes/menu')?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 916px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <div class="row">
                <div class="col-md-12">
                  <h2>
                      <i class="zmdi zmdi-accounts-alt" style="color:#03A9F4"></i> Akun
                  </h2>
                  <ol class="breadcrumb">
                      <li><i class="fa fa-dashboard"></i> Dashboard</li>
                      <li class="active"> <i class="zmdi zmdi-accounts-alt"></i> Akun</li>
                  </ol>
                  <div class="box box-default">
                    <div class="box-header with-border">
                      <i class="zmdi zmdi-accounts-alt" style="color:#03A9F4"></i>
                      <h3 class="box-title">Tambah Akun</h3>
                      <div class="box-title pull-right">
                      </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" id="place">
                      <div class="row">
                        <div class="col-sm-8">
                          <?php echo form_open(current_url(),array('role'=>'form'));?>    
                          <div class="form-group">
                            <label for="exampleInputEmail1">Group</label>
                            <select id="group" name="group" class="form-control">
                              <option value="">Pilih Grup Akun</option>
                              <?php foreach($groups as $group) { ?>
                                <?php $user_group = ($group[$this->flexi_auth->db_column('user_group', 'id')] == $user[$this->flexi_auth->db_column('user_acc', 'group_id')]) ? TRUE : FALSE;?>
                                <option value="<?php echo $group[$this->flexi_auth->db_column('user_group', 'id')];?>">
                                <?php echo $group[$this->flexi_auth->db_column('user_group', 'name')];?>
                                </option>
                              <?php } ?>
                            </select>   
                          </div>
                          <input disabled type="hidden" id="tes" class="form-control" name="tes" value="polke"/>
                          <div class="form-group skpd">
                            <label >Skpd</label>
                            <select id="skpd" name="skpd" class="form-control">
                              <option value="">Pilih Akun SKPD</option>
                              <?php foreach($dinas as $skpd) { ?>
                                <option value="<?php echo $skpd->id?>"><?php echo $skpd->nama_dinas;?>_<?php echo $skpd->uacc_group_dinas?></option>
                              <?php } ?>
                            </select> 
                          </div>
                          <div class="form-group kota">
                            <label>Kota</label>
                              <select id="kota" name="kota" class="form-control">
                                <option value="">Pilih KOTA</option>
                                <?php foreach($kota as $skpd) { ?>
                                <option value="<?php echo $skpd->id?>"><?php echo $skpd->nama_kabupaten;?>_<?php echo $skpd->uacc_group_kabkota?></option>
                                <?php } ?>
                              </select> 
                          </div>
                            <div class="form-group kabupaten">
                              <label>Kabupaten</label>
                              <select id="kabupaten" name="kabupaten" class="form-control">
                                <option value="">Pilih Kabupaten</option>
                                  <?php foreach($kabupaten as $skpd) { ?>
                                    <option value="<?php echo $skpd->id?>"><?php echo $skpd->nama_kabupaten;?>_<?php echo $skpd->uacc_group_kabkota?></option>
                                <?php } ?>
                              </select> 
                            </div>
                            <div class="form-group propinsi">
                              <label>PROPINSI</label>
                              <select id="propinsi" name="propinsi" class="form-control">
                                <option value="">Pilih Propinsi</option>
                                  <?php foreach($propinsi as $skpd) { ?>
                                    <option value="<?php echo $skpd->id?>"><?php echo $skpd->nama_kabupaten;?></option>
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
                              <a class="btn btn-info btn-sm" href="<?php echo base_url('admin/create_user_accounts')?>">Kembali</a>
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
<?php $this->load->view('admin/includes/footer')?>
<script type="text/javascript">
    $('select').select2();
    $(".skpd").hide();
    $(".kota").hide();
    $(".kabupaten").hide();
    $(".propinsi").hide();
    $("#group").change(function(e){
        $(".skpd").hide();
        $(".kota").hide();
        $(".kabupaten").hide();
        $(".propinsi").hide();
        if($(this).val() == 4){
            // propinsi
            $(".skpd").show();
        } else if($(this).val() == 6){
            // kota
            $(".kota").show();
        } else if($(this).val() == 7){
            // kabupaten
            $(".kabupaten").show();
        } else if($(this).val() == 8){
            $(".propinsi").show();
        } else {
            $(".skpd").hide();
        }
    });
    $("#skpd").change(function(){
        $.ajax({
          type:"POST",
          url :"<?php echo base_url('admin/namedinaspropinsi')?>",
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

    $("#kota").change(function(){
        $.ajax({
          type:"POST",
          url :"<?php echo base_url('admin/namekabupaten')?>",
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

    $("#kabupaten").change(function(){
        $.ajax({
          type:"POST",
          url :"<?php echo base_url('admin/namekabupaten')?>",
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

    $("#propinsi").change(function(){
        $.ajax({
          type:"POST",
          url :"<?php echo base_url('admin/namekabupaten')?>",
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