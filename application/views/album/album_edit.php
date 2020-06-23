<form role="form" id="newjndo">
	<div class="form-group">
		<label for="exampleInputEmail1">Album</label>
		<input type="text" id="album" class="form-control" name="album" placeholder="Masukan album" value="<?php echo ucwords(strtolower($d->album))?>">
		<input type="hidden" id="id" name="id" value="<?php echo $d->id?>">
		<span class="text-red" id="invalid-album"></span>
	</div>
	<div class="form-group">
		<button type="submit" id="block" class="btn btn-lg bg-green">Simpan</button>
	</div>
</form>
<script type="text/javascript">
	$("#block").click(function(){
		rule = {
			album:'required'
		};

		pesan = {
			album:'album tidak boleh kosong'
		};
		validater('#newjndo',rule,pesan,'POST','<?php echo base_url('album/album_update')?>','json','#preview',34);
	});
</script>
