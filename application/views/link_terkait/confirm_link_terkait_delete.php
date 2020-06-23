<div class="row">
	<div class="col-sm-12">	
		<center>
			<h4>Saya Yakin akan menghapus data.</h4>
			<input type="hidden" name="id" id="id" value="<?php echo $id;?>">
			<a href="#" class="btn bg-red btn-lg" id="hapus" onclick='hapus()'>Ya, Hapus</a>
		</center>
	</div>
</div>
<script type="text/javascript">
	function hapus(){
		$("#tombol").html(' ');
		var id = $("#id").val();
		data = {id:id};
		submit_ajax_function('POST','<?php echo base_url('link_terkait/link_terkait_delete')?>',data,'json','#place',22);
	}
</script>