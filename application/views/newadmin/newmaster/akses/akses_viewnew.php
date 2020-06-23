<div class="table-responsive" style="overflow: auto;">
<table id="grid-data" class="table table-striped table-hover">
    <thead>
        <tr>
           <th data-column-id="idp" data-visible="false" data-identifier="true">ID</th>
           <th data-column-id="ida" data-visible="false" data-identifier="true">Akses Input</th>
           <th data-column-id="no">No</th>
           <th data-column-id="skpd">Provinsi / Kota / Kabupaten / SKPD</th>
           <th data-column-id="grup">Nama Grup</th>
           <th data-column-id="akses" data-formatter="akses">Status</th>
        </tr>
    </thead>
    <tbody>
      <tr>
    	<?php $i=1;foreach($akses as $data){ ?>
      		<td><?php echo $data->uacc_id ?></td>
          <td><?php echo $data->uacc_akses_input ?></td>
          <td><?php echo $i++; ?></td>
          <td><?php echo ucwords($data->uacc_username) ?></td>
          <td><?php echo $data->ugrp_name ?></td>
      	</tr>
    	<?php } ?>
    </tbody>
</table>
</div>
<script type="text/javascript">
	$("#addaccount").popover({ trigger: "hover" });
  $("#checkedblock").popover({ trigger: "hover" });
  function init(){
	    $("#grid-data").bootgrid({
	        selection: true,
	        multiSelect: true,
          formatters: {
              "akses": function(column, row){
                  if(row.ida == 0){
                    return '<i class="fa fa-lock" style="font-size:1.5em;color:#E64759 !important"></i>';
                  } else {
                    return '<i class="fa fa-unlock" style="font-size:1.5em;color:#1BC98E !important"></i>';
                  }
              }
          }
	    });
	}
	init();
	$(".search").addClass('col-sm-6');
</script>