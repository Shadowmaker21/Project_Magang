<form role="form" id="newjndo">
	<div class="form-group">
		<label for="exampleInputEmail1">Tipe Download</label>
		<input type="text" id="tipe" class="form-control" name="tipe" placeholder="Masukan Tipe Download" value="<?php echo ucwords(strtolower($d->nama))?>">
		<input type="hidden" id="id" name="id" value="<?php echo $d->id?>">
		<span class="text-red" id="invalid-tipe"></span>
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
			tipe:'Bidang Tipe Download tidak boleh kosong'
		};
		validater('#newjndo',rule,pesan,'POST','<?php echo base_url('tipe/tipe_update')?>','json','#preview',35);
	});
</script>
