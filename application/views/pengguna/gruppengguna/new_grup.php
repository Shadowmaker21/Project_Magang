<div class="row">
	<div class="col-xs-12">
		<p class="strong"><i class="fa fa-circle-o text-green"></i> Isikan Detail Grup</p>
	</div>
	<form id="newgrup">
		<div class="row">
			<div class="col-xs-12">
				<div class="col-xs-5">
					<div class="form-group">
						<input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Grup">
						<span class="text-red" id="invalid-nama"></span>
					</div>				
				</div>
				<div class="col-xs-7">
					<div class="form-group">
						<textarea class="form-control" type="text" placeholder="Deskripsi Grup" name="desc" id="desc"></textarea>
						<span class="text-red" id="invalid-desc"></span>
					</div>
				</div>
			</div>
		</div>
	<div class="col-xs-12">
		<p class="strong"><i class="fa fa-circle-o text-green"></i> Role Lists</p>
	</div>
	<div class="col-xs-12">
		<?php $i=1;foreach($privileges as $data){ ?>
		<div class="col-xs-4">
			<input type="checkbox" class="hakakses" id="isian<?php echo $data['upriv_id']?>" value="<?php echo $data['upriv_id']?>" name="isian<?php echo $data['upriv_id']?>"> <?php echo ucwords($data['upriv_name']) ?>
		</div>
		<?php if($i%3==0){ echo "<br><br>";} $i++;} ?>
	</div>
	<div class="col-xs-12" style="padding-top:20px">
		<div class="col-xs-12">
			<button class="btn bg-teal" data-dismiss="modal"> Batal</button>
			<button type="submit" id="block" class="btn btn-lg bg-olive"><i class="zmdi zmdi-refresh-sync"></i> Simpan</button>
		</div>
	</div>
</form>
</div>

<script type="text/javascript">
	$("#block").click(function(){
		is_check('is_grup','POST','<?php echo base_url('pengguna/is_grup')?>');
		rule = {
			nama:{
				required:true,
				is_grup:true
			},
			desc:'required'
		};

		pesan = {
			nama:{
				required : 'Bidang grup tidak boleh kosong',
				is_grup : 'Grup tersebut sudah ada dalam database'
			},
			desc:'Bidang description tidak boleh kosong'
		};
		validater('#newgrup',rule,pesan,'POST','<?php echo base_url('pengguna/store_new_grup')?>','json','#preview',32);
	})
	$(function () {
	    $('input.hakakses').iCheck({
	      checkboxClass: 'icheckbox_square-aero',
	      increaseArea: '20%' // optional
	    });
	});
</script>
