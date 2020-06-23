<div class="row">
	<div class="col-xs-12">
		<h5 class="strong"><i class="fa fa-circle-o text-green"></i> Isikan Role</h5>
	</div>
	<form id="newrole">
		<div class="row">
			<div class="col-xs-12">
				<div class="col-xs-5">
				<div class="form-group">
					<input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Role">
					<span class="text-red" id="invalid-nama"></span>
				</div>
				</div>
				<div class="col-xs-7">
				<div class="form-group">
					<textarea class="form-control" type="text" placeholder="Deskripsi Role" name="desc" id="desc"></textarea>
					<span class="text-red" id="invalid-desc"></span>
				</div>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="col-xs-5">
					<input type="checkbox" class="menu" id="menu" value="1" name="menu"> Is Menu ?
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-xs-12">
				<div class="col-xs-12">
					<button class="btn bg-purple" data-dismiss="modal"> Batal</button>
					<button type="submit" id="block" class="btn bg-olive"><i class="zmdi zmdi-refresh-sync"></i> Simpan</button>
				</div>
			</div>
		</div>
	</form>
</div>

<script type="text/javascript">
$(document).ready(function() {  
	$("#block").click(function(){
		is_check('is_role','POST','<?php echo base_url('pengguna/is_role')?>');
		rule = {
			nama:{
				required:true,
				is_role:true
			},
			desc:'required'
		};

		pesan = {
			nama:{
				required : 'Bidang role tidak boleh kosong',
				is_role : 'Role tersebut sudah ada dalam database'
			},
			desc:'Bidang description tidak boleh kosong'
		};
		validater('#newrole',rule,pesan,'POST','<?php echo base_url('pengguna/store_new_role')?>','json','#preview',33);
	});
});
</script>
