<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
		<div class="header">
        	<h2>
        		DATA GRUP
			</h2>
			<ul class="header-dropdown m-r--5">
				<li class="dropdown">
					<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<i class="material-icons">more_vert</i>
					</a>
					<ul class="dropdown-menu pull-right">
						<li><a href="javascript:void(0);" onclick="add_grup('defaultModal','green')">Tambah Grup</a></li>
					</ul>
				</li>
			</ul>
		</div>	
		<div class="body">
      		<div class="table-responsive">
				<table class="table table-bordered table-striped table-hover grup dataTable">
					<thead>
						<tr>
							<td>No</td>
							<td>Nama Grup</td>
							<td>Deskripsi Grup</td>
							<td>Aksi</td>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<td>No</td>
							<td>Nama Grup</td>
							<td>Deskripsi Grup</td>
							<td>Aksi</td>
						</tr>
					</tfoot>
					<tbody>
						<tr>
						<?php $i=1;foreach($grup as $data){ ?>
							<td><?php echo $i++; ?></td>
							<td><?php echo $data->ugrp_name ?></td>
							<td><?php echo $data->ugrp_desc ?></td>
							<td>
								<a onclick="edit_grup(<?php echo $data->ugrp_id?>)" class="btn bg-orange btn-circle waves-effect waves-circle waves-float"><i class="material-icons">edit</i></a>
								<a onclick="delete_grup(<?php echo $data->ugrp_id?>)" class="btn bg-red btn-circle waves-effect waves-circle waves-float"><i class="material-icons">delete_sweep</i></a>
							</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>                      
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function () {
        $('.grup').DataTable({
            responsive: true
        });
    });
</script>