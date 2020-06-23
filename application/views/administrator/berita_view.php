<div class="dragscroll" style="overflow: scroll; cursor: grab; cursor : -o-grab; cursor : -moz-grab; cursor : -webkit-grab;">
	<table class="table table-hover table-bordered" id="dt">
		<thead class="newfont">
			<tr>
				<th>No</th>
				<th>Jenis Berita</th>
				<th>Judul</th>
				<th>Isi</th>
				<th>User</th>
				<th>Hits</th>
				<th>Comments</th>
				<th>Date Upload</th>
			</tr>
		</thead>
		<tbody>
			<?php $i=1;foreach($w as $data){ ?>
			<tr>
				<td><?php echo $i++; ?></td>
				<td><?php echo ucwords(strtolower($data->jenis_berita)); ?></td>
				<td><?php echo ucwords(strtolower(character_limiter($data->judul,100))) ?></td>
				<td><?php echo character_limiter(strip_tags($data->isi),100) ?></td>
				<td><?php echo $data->username ?></td>
				<td><?php echo $data->n_read ?></td>
				<td><?php echo $data->n_comment ?></td>
				<td><?php echo $data->tanggalan; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
<script type="text/javascript">
	dragscroll.reset()
</script>