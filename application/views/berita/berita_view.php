	<table class="table table-hover table-bordered" id="dt">
		<thead class="newfont">
			<tr>
				<th>No</th>
				<th>Bidang</th>
				<th>Jenis Berita</th>
				<th>Judul</th>
				<th>Isi</th>
				<th>User</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $i=1;foreach($w as $data){ ?>
			<tr>
				<td><?php echo $i++;?></td>
				<td><?php echo ucwords(strtolower($data->bidang)) ?></td>
				<td><?php echo ucwords(strtolower($data->jenis_berita)); ?></td>
				<td><?php echo ucwords(strtolower(character_limiter($data->judul,100))) ?></td>
				<td><?php echo character_limiter(strip_tags($data->isi),250) ?></td>
				<td><?php echo $data->username ?></td>
				<td>
					<a href="#" data-toggle="popover" data-placement="left" title="" data-content="Edit Jadwal Kegiatan" data-original-title="" class="message btn btn-sm bg-orange" onclick="edit_berita(<?php echo $data->id_berita ?>)"><i class="fa fa-edit"></i></a>
					<a href="#" data-toggle="popover" data-placement="left" title="" data-content="Edit Jadwal Kegiatan" data-original-title="" class="message btn btn-sm bg-red" onclick="confirm_delete_berita(<?php echo $data->id_berita ?>)"><i class="fa fa-trash-o"></i></a>
					<a href="<?php echo base_url('berita/add_gambar/'.$data->id_berita.'') ?>" data-toggle="popover" data-placement="left" title="" data-content="Edit Jadwal Kegiatan" data-original-title="" class="message btn btn-sm bg-navy" onclick="delete_jadwal_kegiatan(<?php echo $data->id_berita ?>)"><i class="fa fa-image"></i></a>
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
      "autoWidth": true,
      "columnDefs": [
	     { "width": "2%", "targets": 0 },
         { "width": "6%", "targets": 1 },
         { "width": "8%", "targets": 2 },
         { "width": "6%", "targets": 3 },
         { "width": "20%", "targets": 4 },
         { "width": "4%", "targets": 5 },
         { "width": "8%", "targets": 6 }
	  ]
    });
  });
</script>