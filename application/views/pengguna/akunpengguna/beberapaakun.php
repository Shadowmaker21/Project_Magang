<div class='row'>
	<div class="col-sm-4">	
		<h4>Tindakan</h4>
		<?php if($hasil){ ?>
			<?php if($jenis == 1){ ?>
				<h5>Saya akan menghapus data user dengan daftar terlampir</h5>
				<input type="hidden" name="id" id="id" value="<?php echo $hapus;?>">
				<a href="#" class="btn btn-lg btn-block bg-orange" onclick='hapus()'>Hapus</a>
			<?php } else { ?>
				<h5>Saya akan menonaktifkan akun user sementara dengan daftar terlampir</h5>
				<input type="hidden" name="id" id="id" value="<?php echo $hapus;?>">
				<a href="#" class="btn btn-lg btn-block bg-orange" onclick='block()'>Block / Unblock</a>
			<?php } ?>
		<?php } else { ?>
			<h5>Tidak ada tindakan yang dapat dilakukan</h5>
		<?php } ?>
	</div>
	<div class='col-sm-8 gr'>
		<h4>Daftar Terlampir</h4>
		<table class='table table-striped table-hover table-bordered'>
			<thead class="newfont">
				<tr>
					<th style='width:6%'><center>No</center></th>
					<th><center>Username</center></th>
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
					<td><?php echo ucwords($data->uacc_username) ?></td>
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
		submit_ajax_function('POST','<?php echo base_url('pengguna/hapusselecteduser')?>',data,'json','#dataperusahaan',31);
	}

	function block(){
		$("#tombol").html(' ');
		var data = $("#id").val();
		data = {data:data};
		submit_ajax_function('POST','<?php echo base_url('pengguna/blockakunbyid')?>',data,'json','#dataperusahaan',31);
	}
</script>
