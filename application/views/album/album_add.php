<form role="form" id="newjndo">
	<div class="form-group">
		<label for="exampleInputEmail1">Album</label>
		<input type="text" id="album" class="form-control" name="album" placeholder="Masukan album">
		<span class="text-red" id="invalid-album"></span>
	</div>
	<div class="form-group">
		<button type="submit" id="block" class="btn btn-lg bg-green">Simpan</button>
	</div>
</form>
<script type="text/javascript">
	$("#block").click(function(){
		is_check('is_jndo','POST','<?php echo base_url('album/is_album')?>');
		rule = {
			album:{
				required:true,
				is_jndo:true
			}
		};

		pesan = {
			album:{
				required : 'album tidak boleh kosong',
				is_jndo : 'album tersebut sudah ada dalam database'
			}
		};
		validater('#newjndo',rule,pesan,'POST','<?php echo base_url('album/album_store')?>','json','#preview',34);
	});
</script>
