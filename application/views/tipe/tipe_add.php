<form role="form" id="newjndo">
	<div class="form-group">
		<label for="exampleInputEmail1">Nama</label>
		<input type="text" id="tipe" class="form-control" name="tipe" placeholder="Masukan Nama">
		<span class="text-red" id="invalid-tipe"></span>
	</div>
	<div class="form-group">
		<button type="submit" id="block" class="btn bg-green btn-lg">Simpan</button>
	</div>
</form>
<script type="text/javascript">
	$("#block").click(function(){
		is_check('is_jndo','POST','<?php echo base_url('tipe/is_tipe')?>');
		rule = {
			tipe:{
				required:true,
				is_jndo:true
			}
		};

		pesan = {
			tipe:{
				required : 'Bidang Tipe Download tidak boleh kosong',
				is_jndo : 'Tipe Download tersebut sudah ada dalam database'
			}
		};
		validater('#newjndo',rule,pesan,'POST','<?php echo base_url('tipe/tipe_store')?>','json','#preview',35);
	});
</script>
