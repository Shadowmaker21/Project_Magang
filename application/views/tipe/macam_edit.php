<form role="form" id="newjndo">
	<div class="form-group">
		<label for="exampleInputEmail1">Macam Download</label>
		<input type="text" id="macam" class="form-control" name="macam" placeholder="Masukan Macam Download" value="<?php echo ucwords(strtolower($d->nama_jenis_peraturan))?>">
		<input type="hidden" id="id" name="id" value="<?php echo $d->id_download_macam?>">
		<span class="text-red" id="invalid-macam"></span>
	</div>
	<div class="form-group">
		<button type="submit" id="block" class="btn bg-green btn-lg">Simpan</button>
	</div>
</form>
<script type="text/javascript">
	$("#block").click(function(){
		rule = {
			tipe:'required'
		};

		pesan = {
			tipe:'Bidang Macam Download tidak boleh kosong'
		};
		validater('#newjndo',rule,pesan,'POST','<?php echo base_url('tipe/macam_update')?>','json','#preview',36);
	});
</script>
