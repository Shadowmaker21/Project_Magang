<table class="table table-hover table-bordered" id="dt">
	<thead class="newfont">
		<tr>
			<th>No</th>
			<th>Pencipta Arsip / Riwayat</th>
			<th>Pelaksana / Hasil</th>
			<th>Masalah / Sub</th>
			<th>Isi</th>
			<th>User</th>
			<th>Aksi</th>
		</tr>
	</thead>
	
			</td>
		</tr>
		<?php $i=1;foreach($a as $data){ ?>
		<tr>
			<td><?php echo $i++; ?></td>
			<td><?php echo $data->nama_pencipta .'/'. $data->judul_riwayat ?></td>
			<td><?php echo $data->kode_pelaksana . '/'. $data->hasil ?></td>
			<td><?php echo $data->nama_masalah .'/'. $data->nama_submasalah ?></td>
			<td><?php echo $data->isi ?></td>
			<td><?php echo $data->uacc_username ?></td>
			<td>
				<a href="<?php echo base_url('statis/edit/'.$data->id_statis.'') ?>" data-toggle="popover" data-placement="left" title="" data-content="Edit Jadwal Kegiatan" data-original-title="" class="message btn btn-sm bg-orange"><i class="fa fa-edit"></i></a>
				<a href="#" data-toggle="popover" data-placement="left" title="" data-content="Edit Jadwal Kegiatan" data-original-title="" class="message btn btn-sm bg-red" onclick="confirm_statis(<?php echo $data->id_statis ?>)"><i class="fa fa-trash-o"></i></a>
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