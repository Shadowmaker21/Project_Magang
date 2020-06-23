<form id="selection" name="selection">
<div class="gr">
<table class="table table-striped table-bordered table-hover">
    <thead class="newfont">
        <tr>
           <th style="width:4px;vertical-align: middle;"><center><input type="checkbox"></center></th>
           <th>No</th>
           <th style="width:15%">Username</th>
           <th>Group</th>
           <th>Bidang</th>
           <th style="width:18%">Terakhir Login</th>
           <th>Perintah</th>
        </tr>
    </thead>
    <tbody>
      <tr>
        <?php if(!$pengguna){ ?>
          <td colspan="7"><center>Tidak ditemukan</center></td>
        <?php } else { ?>
    		<?php $i=$offset+1;foreach($pengguna as $data){ ?>
           <td><center><input type="checkbox" id="id<?php echo $data->uacc_id?>" name="id<?php echo $data->uacc_id?>" value="<?php echo $data->uacc_id?>"></center></td>
    			 <td><center><?php echo $i++; ?></center></td>
           <td>
            <?php echo ucwords($data->uacc_username) ?>
            <?php if($data->uacc_suspend == 1){echo "<span class='badge bg-yellow'>Block</span>";} ?>
           </td>
    			 <td><?php echo $data->ugrp_name?></td>
           <td><?php echo ucwords(strtolower(character_limiter($data->nama,40)))?></td>
           <td><?php echo $data->uacc_date_last_login ?></td>
           <td>
              <center>
                    <a data-toggle="popover" data-placement="left" title="" data-content="Detail Akun." data-original-title="" class="message btn btn-sm bg-blue" onclick='show_accounts(<?php echo $data->uacc_id?>)'><i class="fa fa-user-circle-o" aria-hidden="true"></i></a> 
                    <a data-toggle="popover" data-placement="left" title="" data-content="Reset Password Akun." data-original-title="" class="message btn btn-sm bg-purple res<?php echo $data->uacc_id?>" onclick='reset_password(<?php echo '"'.$data->uacc_salt.'"'?>,<?php echo $data->uacc_id?>)'><i class="fa fa-flag-o" aria-hidden="true"></i></a>
              </center>
           </td>
    			</tr>
    		<?php } } ?>
    </tbody>
</table>
</div>
</form>
<br>
<div>
  <div class="col-md-4">
    <p> <?php echo $pagination['total_users'];?> records for Pengguna</p>
  </div>
  <div class="col-md-8">
    <div class="pull-right">
      <p> <?php echo $pagination['links'];?></p>  
    </div>
  </div>
</div>
<script type="text/javascript">
  $(".message").popover({ trigger: "hover" });
  $('.gr').slimScroll({
      position: 'right',
      height: '500px',
      railVisible: true,
      alwaysVisible: true
  });
	$("ul.pagination li a").on('click',(function(e){
      var this_url = $(this).attr('href');
        var username = $("#username").val();
        var jum = $("#jum").val();
        $.post(this_url,{username:username,jum:jum},function(data){
        $("#place").html(data);
      });
      return false;
  }));
  // FIX
  function reset_password(salt,id){
    $.ajax({
      type:"POST",
      url :"<?php echo base_url('pengguna/reset_pass')?>",
      data:{
        id:id,
        salt:salt
      },
      dataType:"json",
      beforeSend:function(){
        $(".res"+id).html('<i class="fa fa-cog fa-spin"></i>');
      },
      success:function(data){
        setTimeout(function(){
          $(".res"+id).html('<i class="fa fa-flag-o" aria-hidden="true"></i>');
          izitoast(data['jenis'],data['title'],data['message'],' ','topCenter');
          refresh_akun_pengguna();
        }, 3000);
      },
      error:function(data){
        $(".res"+id).html('<i class="fa fa-bolt" aria-hidden="true"></i>');
        izitoast(data['jenis'],data['title'],data['message'],' ','topCenter');
        refresh_akun_pengguna();
      }
    })
  }
  // FIX
    function show_accounts(id){
    a = "Detail Akun Pengguna";
    $(".modal-title").html(a);
    a = '<p class="pull-right">'+
        '<button class="btn btn-outline" data-dismiss="modal"> Batal</button> '+
        '<a href="#"><button id="tambah" class="btn btn-outline"><i class="fa fa-save"></i> Perbarui</button></a>'+
        '</p>';
    //$("#tombol").html(a);
    $.ajax({
      type:"POST",
      url :"<?php echo base_url('pengguna/edit_account')?>",
      data:{
        id:id
      },
      dataType:"html",
      beforeSend:function(){
        $("#preview").html("<center>"+loading4x+"</center>");
      },
      success:function(data){
        $("#isi").html(data);
      },
      error:function(){
        $("#preview").html(gagalkoneksi);
      }
    })
    $("#tambah").click(function(){
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        var no = $("#no").val();
        var email = $("#email").val();
        var username = $("#username").val();
        perbaruiakun(id,firstname,lastname,no,email,username);
      });
    $('.modal').modal(); 
  }    
</script>