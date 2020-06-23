<form id="adduser" role="form">   
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
      <option value="<?php echo $skpd->id?>"><?php echo $skpd->nama_dinas;?></option>
      <?php } ?>
    </select> 
  </div>
  <div class="form-group kabupatenkota">
    <label>Kabupaten</label>
    <select id="kabupatenkota" name="kabupatenkota" class="form-control">
      <option value="">Pilih Kabupaten</option>
      <?php foreach($kabupatenkota as $skpd) { ?>
      <option value="<?php echo $skpd->NO_KAB?>"><?php echo ucwords(strtolower($skpd->NAMA_KAB));?></option>
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
  <input type="hidden" class="form-control input-lg" id="password" name="password" value="polke"/>
  <div class="form-group pull-right">
    <button class="btn bg-purple" data-dismiss="modal"> Batal</button>
    <button type="submit" id="block" class="btn bg-olive"><i class="zmdi zmdi-refresh-sync"></i> Simpan</button>
  </div>
</form>
<script type="text/javascript">
    $(".skpd").hide();
    $(".kota").hide();
    $(".kabupatenkota").hide();
    $(".propinsi").hide();
    $(document).ready(function() {  
      $("#block").click(function(){
        is_check('is_akupengguna','POST','<?php echo base_url('admin/is_akupengguna')?>');
        rule = {
          group:'required',
          skpd:'required',
          kabupatenkota:'required',
          propinsi:'required',
          username:{
            required:true,
            is_akupengguna:true
          }
        };
        pesan = {};
        validater('#adduser',rule,pesan,'POST','<?php echo base_url('admin/store_akunpengguna')?>','json','#preview',10,1);
      });
    });
    $("#group").change(function(e){
        $(".skpd").hide();
        $(".kabupatenkota").hide();
        $(".propinsi").hide();
        if($(this).val() == 4){
            // propinsi
            $(".skpd").show();
        } else if($(this).val() == 7){
            // kabupaten kota
            $(".kabupatenkota").show();
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

    $("#kabupatenkota").change(function(){
        $.ajax({
          type:"POST",
          url :"<?php echo base_url('admin/namekabupatenkota')?>",
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
