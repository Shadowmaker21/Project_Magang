<div class="gr">
    <table class="table table-bordered table-striped table-hover">
        <thead>
             <tr>
                  <th>No</th>
                  <th style="width:50%" data-column-id="grup">Username</th>
                  <th data-column-id="block">User Group</th>
                  <?php if ($status == 'failed_login') { ?>
                    <th data-column-id="failed">Failed Attempts</th>
                  <?php } else { ?>
                    <th data-column-id="isgrup">Status</th>
                  <?php } ?>
            </tr>
        </thead>
        <?php if (!empty($pengguna)) { ?>
        <tbody>
            <?php $i=$offset+1;foreach($pengguna as $user) { ?>
                <tr>
                    <td><center><?php echo $i++; ?></center></td>
                    <td><?php echo ucwords(strtolower($user->uacc_username));?></td>
                    <td class="align_ctr"><?php echo $user->ugrp_name;?></td>
                    <?php if($status == 'failed_login'){ ?>
                      <td><center><?php echo $user->uacc_fail_login_attempts; ?></center></td>
                    <?php } else { ?>
                      <td><?php echo ($user->uacc_active) ? 'Active' : 'Not Active'?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
        <?php } else { ?>
        <tbody>
            <tr>
                <td colspan="<?php echo (isset($status) && $status == 'failed_login_users') ? '6' : '5'; ?>" class="highlight_red"> No users are available. </td>
            </tr>
        </tbody>
    <?php } ?>
    </table>
</div>
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
  $("ul.pagination li a").on('click',(function(e){
      var this_url = $(this).attr('href');
        $.post(this_url,{},function(data){
        $("#place").html(data);
      });
      return false;
  }));
  $('.gr').slimScroll({
      position: 'right',
      height: '500px',
      railVisible: true,
      alwaysVisible: true
  });
</script>