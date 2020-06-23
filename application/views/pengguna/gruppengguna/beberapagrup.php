<div class='row'>
	<div class="col-sm-4">	
		<h4>Tindakan</h4>
		<?php if($hasil){ ?>
			<h5>Saya akan menghapus data grup dengan daftar terlampir</h5>
			<input type="hidden" name="id" id="id" value="<?php echo $hapus;?>">
			<a href="#" class="btn btn-block btn-default" onclick='hapus()'>Hapus</a>
		<?php } else { ?>
			<h5>Tidak ada tindakan yang dapat dilakukan</h5>
		<?php } ?>
	</div>
	<div class='col-sm-8 gr'>
		<h4>Daftar Terlampir</h4>
		<table class='table table-striped table-hover table-bordered'>
			<thead>
				<tr>
					<th style='width:6%'><center>No</center></th>
					<th><center>Groups<center></th>
					</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				$i=1;
				if(!$hasil){ ?>
				<td colspan='3'>
					<center> Tidak ada akun terpilih.</center>
				</td>
				<?php }
				foreach ($hasil as $data) { ?>
					<td><center><?php echo $i; ?></center></td>
					<td><?php echo ucwords($data->ugrp_name) ?></td>
				</tr>
				<?php $i++; } ?>
			</tbody>
		</table>
	</div>
	
</div>
<script type="text/javascript">
	$('.gr').slimScroll({
	    position: 'right',
	    height: '500px',
	    railVisible: true,
	    alwaysVisible: true
	});
	function hapus(){
		$("#tombol").html(' ');
		var data = $("#id").val();
		data = {data:data};
		submit_ajax_function('POST','<?php echo base_url('pengguna/hapusselectedgrup')?>',data,'json','#dataperusahaan',32);
	}
</script>
