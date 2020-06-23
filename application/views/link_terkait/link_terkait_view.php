<table class="table table-hover table-bordered" id="dt">
	<thead class="newfont">
		<tr>
			<th>No</th>
			<th>Gambar</th>
			<th>Link</th>
			<th>Deskripsi</th>
			<th>Size</th>
			<th>User</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $i=1;foreach($w as $data){ ?>
		<tr>
			<?php $image = $data->file_path.$data->file_name; ?>
			<td><?php echo $i++; ?></td>
			<td>
				<?php if($data->file_name){ ?>
					<img class="img-thumbnail" src="<?php echo base_url('files/link_terkait/'.$data->file_name.'')?>" style="width:200px">
				<?php } else { ?>
					No Image
				<?php } ?>
			</td>
			<td><?php echo $data->link ?></td>
			<td><?php echo $data->deskripsi ?></td>
			<td><?php echo $data->file_size ?></td>
			<td><?php echo $data->user ?></td>
			<td>
				<a href="<?php echo base_url('link_terkait/link_terkait_edit/'.$data->id.'') ?>" data-toggle="popover" data-placement="left" title="" data-content="Edit Jadwal Kegiatan" data-original-title="" class="message btn btn-sm bg-orange"><i class="fa fa-edit"></i></a>
				<a href="#" data-toggle="popover" data-placement="left" title="" data-content="Edit Jadwal Kegiatan" data-original-title="" class="message btn btn-sm bg-red" onclick="confirm_link_terkait(<?php echo $data->id ?>)"><i class="fa fa-trash-o"></i></a>
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