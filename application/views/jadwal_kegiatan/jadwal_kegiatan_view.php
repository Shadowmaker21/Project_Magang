<table class="table table-hover table-bordered" id="dt">
	<thead class="newfont">
		<tr>
			<th>No</th>
			<th>Bidang</th>
			<th>Jadwal Kegiatan</th>
			<th>Tanggal</th>
			<th>User</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $i=1;foreach($w as $data){ ?>
		<tr>
			<td><?php echo $i++; ?></td>
			<td><?php echo ucwords(strtolower($data->bidang)); ?></td>
			<td><a href="javascript:void(0)" onclick="edit_jadwal_kegiatan(<?php echo $data->id ?>)"><?php echo ucwords(strtolower($data->nama)) ?></a></td>
			<td><?php echo $data->tanggalan ?></td>
			<td><?php echo $data->username ?></td>
			<td>
				<a href="#" data-toggle="popover" data-placement="left" title="" data-content="Edit Jadwal Kegiatan" data-original-title="" class="message btn btn-sm bg-red" onclick="confirm_jadwal_kegiatan(<?php echo $data->id ?>)"><i class="fa fa-trash-o"></i></a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<script>
  $(function () {
    $('#dt').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>