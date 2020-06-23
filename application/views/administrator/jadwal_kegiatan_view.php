<div class="dragscroll" style="overflow: scroll; cursor: grab; cursor : -o-grab; cursor : -moz-grab; cursor : -webkit-grab;">
<table class="table table-hover table-bordered" id="dt">
	<thead class="newfont">
		<tr>
			<th>No</th>
			<th>Tanggal</th>
			<th>Jadwal Kegiatan</th>
			<th>User</th>
			<th>Date Upload</th>
		</tr>
	</thead>
	<tbody>
		<?php $i=1;foreach($w as $data){ ?>
		<tr>
			<td><?php echo $i++; ?></td>
			<td><?php echo $data->tanggalan ?></td>
			<td><?php echo ucwords(strtolower($data->nama)) ?></td>
			<td><?php echo $data->username ?></td>
			<td><?php echo $data->tanggalan_upload ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
</div>
<script type="text/javascript">
	dragscroll.reset()
</script>