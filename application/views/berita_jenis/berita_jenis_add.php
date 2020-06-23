<form role="form" id="newjndo">
	<div class="form-group">
		<label for="exampleInputEmail1">Jenis Berita</label>
		<input type="text" id="berita_jenis" class="form-control" name="berita_jenis" placeholder="Masukan Jenis Berita">
		<span class="text-red" id="invalid-berita_jenis"></span>
	</div>
	<div class="form-group">
		<button type="submit" id="block" class="btn bg-green btn-lg">Simpan</button>
	</div>
</form>
<script type="text/javascript">
	$("#block").click(function(){
		is_check('is_jndo','POST','<?php echo base_url('berita_jenis/is_berita_jenis')?>');
		rule = {
			berita_jenis:{
				required:true,
				is_jndo:true
			}
		};

		pesan = {
			berita_jenis:{
				required : 'Bidang Jenis Berita tidak boleh kosong',
				is_jndo : 'Jenis Berita tersebut sudah ada dalam database'
			}
		};
		validater('#newjndo',rule,pesan,'POST','<?php echo base_url('berita_jenis/berita_jenis_store')?>','json','#preview',10);
	});
</script>
