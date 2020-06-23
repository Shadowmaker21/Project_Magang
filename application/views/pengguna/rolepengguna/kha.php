<form id="selection" name="selection">
<div class="gr">
<table class="table table-striped table-bordered table-hover">
    <thead class="newfont">
        <th><center><input type="checkbox"></center></th>
        <th><center>No</center></th>
        <th>Privileges</th>
        <th>Deskripsi</th>
        <th>Action</th
    </thead>
    <tbody>
        <?php if(count((array)$pengguna) == 0){ ?>
          <td colspan="5"><center>Data tidak ditemukan</center></td>
        <?php } else { ?>
        <?php $i=$offset+1;foreach($pengguna as $user){ ?>
        <tr>
            <td><center><input type="checkbox" name="res<?php echo $user->upriv_id?>" id="res<?php echo $user->upriv_id?>" value="<?php echo $user->upriv_id?>"></center></td>
            <td><center><?php echo $i++; ?></center></td>
            <td><?php echo ucwords($user->upriv_name) ?></td>
            <td><?php echo ucwords($user->upriv_desc) ?></td>
            <td><center><a href="#"  data-toggle="popover" data-placement="left" title="" data-content="Edit Roles" data-original-title="" class="message btn btn-sm bg-orange" onclick='update_roles(<?php echo $user->upriv_id?>,<?php echo '"'.ucwords($user->upriv_name).'"'?>)'><i class="fa fa-edit"></i></a></center></td>
        </tr>
        <?php } }?>
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
  $(document).ready(function() {
    $(".search").addClass('col-sm-6');
    $(".infoBar").addClass('text-right');
  });
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
      $("#boks").html(data);
    });
    return false;
  }));
  function update_roles(id,nama){
    data = {id:id,name:nama,judul:'Konfigurasi Role '};
    modal_ajax(data,'POST','<?php echo base_url('pengguna/user_role')?>','html','#preview',0);
  }
</script>