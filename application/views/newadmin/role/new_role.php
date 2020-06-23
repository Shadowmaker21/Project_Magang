<div class="row">
	<form id="newrole">
		<div class="row">
			<div class="col-xs-12">
				<div class="col-xs-5">
					<div class="form-group">
						<label>Nama Aturan</label>
						<input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Role">
					</div>
				</div>
				<div class="col-xs-7">
					<div class="form-group">
						<label>Deskripsi</label>
						<textarea class="form-control" type="text" placeholder="Deskripsi Role" name="desc" id="desc"></textarea>
					</div>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="col-xs-5">
					<div class="form-group">
						<input type="checkbox" class="menu" id="menu" value="1" name="menu"> Role ini merupakan menu
					</div>
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
		is_check('is_role','POST','<?php echo base_url('admin/is_role')?>');
		rule = {
			nama:{
				required:true,
				is_role:true
			},
			desc:'required'
		};

		pesan = {};
		validater('#newrole',rule,pesan,'POST','<?php echo base_url('admin/store_new_role')?>','json','#preview',12,1);
	});
});
$(function () {
    $('input.menu').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
});
</script>
