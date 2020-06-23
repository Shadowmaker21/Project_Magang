<form id="selection" name="selection">
<div class="gr">
<table class="table table-striped table-hover table-bordered">
    <thead class="newfont">
        <tr>
           <th></th>
           <th> No</th>
           <th> Grup</th>
           <th> Deskripsi</th>
           <th> Perintah</th>
        </tr>
    </thead>
    <tbody>
      <tr>
        <?php if(count((array)$pengguna) == 0){ ?>
          <td colspan="5"><center>Data tidak ditemukan</center></td>
        <?php } else { ?>
    		<?php $i = $offset+1;foreach($pengguna as $data){ ?>
    			 <td><center><input type="checkbox" id="id<?php echo $data->ugrp_id?>" name="id<?php echo $data->ugrp_id?>" value="<?php echo $data->ugrp_id?>"></center></td>
           <td><?php echo $i++; ?></td>
           <td><?php echo ucwords($data->ugrp_name)?></td>
           <td><?php echo ucwords($data->ugrp_desc);?></td>
           <td><center><a href="#" data-toggle="popover" data-placement="left" title="" data-content="Edit Group" data-original-title="" class="message btn btn-sm bg-orange" onclick='update_hakakses(<?php echo $data->ugrp_id?>,<?php echo '"'.ucwords($data->ugrp_name).'"'?>)'><i class="fa fa-edit"></i></a></center></td>
    			</tr>
    		<?php } }?>
    </tbody>
</table>
</div>
</form>
<div>
  <div class="col-md-4">
    <p> <?php echo $pagination['total_users'];?> records for Groups</p>
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
        var grup = $("#grup").val();
        var jum = $("#jum").val();
        $.post(this_url,{grup:grup,jum:jum},function(data){
        $("#place").html(data);
      });
      return false;
  }));
  $(document).ready(function(){
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-aero',
      increaseArea: '10%' // optional
    });
  });
  function update_hakakses(id,nama){
    data = {id:id,name:nama,judul:'Konfigurasi Hak Akses pada Grup '};
    modal_ajax(data,'POST','<?php echo base_url('pengguna/user_hakakses_grup')?>','html','#preview',0);
  }
</script>