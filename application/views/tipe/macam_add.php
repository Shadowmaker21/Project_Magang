<form role="form" id="newjndo">
	<div class="form-group">
		<label for="exampleInputEmail1">Nama</label>
		<input type="text" id="id" class="form-control" name="id" value="<?php echo $id ?>">
		<input type="text" id="macam" class="form-control" name="macam" placeholder="Masukan Macam Download">
		<span class="text-red" id="invalid-macam"></span>
	</div>
	<div class="form-group">
		<button type="submit" id="block" class="btn bg-green btn-lg">Simpan</button>
	</div>
</form>
<script type="text/javascript">
	$("#block").click(function(){
		is_check('is_jndo','POST','<?php echo base_url('tipe/is_macam')?>');
		rule = {
			tipe:{
				required:true,
				is_jndo:true
			}
		};

		pesan = {
			tipe:{
				required : 'Bidang Macam Download tidak boleh kosong',
				is_jndo : 'Macam Download tersebut sudah ada dalam database'
			}
		};
		validater('#newjndo',rule,pesan,'POST','<?php echo base_url('tipe/macam_store')?>','json','#preview',36);
	});
</script>
