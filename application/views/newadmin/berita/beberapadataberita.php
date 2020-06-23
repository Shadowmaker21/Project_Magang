<div class="row">
	<div class="col-sm-12">	
		<h4>Tindakan</h4>
		<?php if($hapus){ ?>
			<h5>Saya akan menghapus data yang tercentang.</h5>
			<input type="hidden" name="id" id="id" value="<?php echo $hapus;?>">
			<a href="#" class="btn bg-red" onclick='hapus()'>Ya, Hapus</a>
		<?php } else { ?>
			<h5>Tidak ada tindakan yang dapat dilakukan</h5>
		<?php } ?>
	</div>
</div>
<script type="text/javascript">
	function hapus(){
		$("#tombol").html(' ');
		var data = $("#id").val();
		data = {data:data};
		submit_ajax_function('POST','<?php echo base_url('admin/hapusselectedberita')?>',data,'json','#place',22,2);
	}
</script>