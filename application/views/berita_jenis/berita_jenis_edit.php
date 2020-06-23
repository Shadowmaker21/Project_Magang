<form role="form" id="newjndo">
	<div class="form-group">
		<label for="exampleInputEmail1">Jenis Berita</label>
		<input type="text" id="berita_jenis" class="form-control" name="berita_jenis" placeholder="Masukan Jenis Berita" value="<?php echo ucwords(strtolower($d->nama_berita))?>">
		<input type="hidden" id="id" name="id" value="<?php echo $d->id_berita_jenis?>">
		<span class="text-red" id="invalid-berita_jenis"></span>
	</div>
	<div class="form-group">
		<button type="submit" id="block" class="btn bg-green btn-lg">Simpan</button>
	</div>
</form>
<script type="text/javascript">
	$("#block").click(function(){
		rule = {
			berita_jenis:'required'
		};

		pesan = {
			berita_jenis:'Bidang Jenis Berita tidak boleh kosong'
		};
		validater('#newjndo',rule,pesan,'POST','<?php echo base_url('berita_jenis/berita_jenis_update')?>','json','#preview',10);
	});
</script>
