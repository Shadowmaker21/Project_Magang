<table class="table table-hover table-bordered" id="dt">
	<thead class="newfont">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Deskripsi</th>
			<th>Size</th>
			<th>Download</th>
			<th>User</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $i=1;foreach($w as $data){ ?>
		<tr>
			<td><?php echo $i++; ?></td>
			<td><?php echo $data->nama ?></td>
			<td><?php echo $data->deskripsi ?></td>
			<td><?php echo $data->file_size ?> KB</td>
			<td><?php echo $data->n_download ?></td>
			<td><?php echo $data->user ?></td>
			<td>
				<a href="<?php echo base_url('download/edit/'.$data->id.'') ?>" data-toggle="popover" data-placement="left" title="" data-content="Edit Jadwal Kegiatan" data-original-title="" class="message btn btn-sm bg-orange"><i class="fa fa-edit"></i></a>
				<a href="#" data-toggle="popover" data-placement="left" title="" data-content="Edit Jadwal Kegiatan" data-original-title="" class="message btn btn-sm bg-red" onclick="confirm_download(<?php echo $data->id ?>)"><i class="fa fa-trash-o"></i></a>
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