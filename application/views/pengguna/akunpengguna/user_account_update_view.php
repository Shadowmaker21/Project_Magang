<div class="loading"></div>
<div class="row">
  <div class="col-sm-12">
    <div class="box box-widget widget-user-2">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-green">
        <div class="widget-user-image">
          <img class="img-circle" src="<?php echo base_url('includes/people.jpg')?>" alt="User Avatar">
        </div>
      <!-- /.widget-user-image -->
        <h3 class="widget-user-username"><?php echo $user->ugrp_name  ?></h3>
        <h5 class="widget-user-desc"><?php echo ucwords($user->uacc_username) ?></h5>
      </div>
      <div class="box-footer no-padding">
        <ul class="nav nav-stacked">
          <li><a href="#">Id User <span class="pull-right"><?php echo $user->uacc_id ?></span></a></li>
          <li><a href="#">Username <span class="pull-right"><?php echo $user->uacc_username ?></span></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>