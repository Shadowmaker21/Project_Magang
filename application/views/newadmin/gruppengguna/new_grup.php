<div class="row">
	<form id="newgrup">
	<div class="col-xs-12">
			<div class="col-xs-5">
				<div class="form-group skpd">
					<label>Nama Grup</label>
					<input class="form-control" type="text" name="nama" id="nama" placeholder="Nama Grup">
				</div>
			</div>
			<div class="col-xs-7">
				<div class="form-group skpd">
					<label>Deskripsi Grup</label>
					<textarea class="form-control" type="text" placeholder="Deskripsi Grup" name="desc" id="desc"></textarea>
				</div>
			</div>
	</div>
	<div class="col-xs-12">
		<div class="col-xs-12">
			<label>Hak Akses</label>
		</div>
	</div>
	<div class="col-xs-12">
		<?php if($privileges){ ?>
		<?php $i=1;foreach($privileges as $data){ ?>
		<div class="col-xs-3">
			<input type="checkbox" class="hakakses" id="isian<?php echo $data['upriv_id']?>" value="<?php echo $data['upriv_id']?>" name="isian<?php echo $data['upriv_id']?>"> <?php echo $data['upriv_name'] ?>
		</div>
		<?php if($i%4==0){ echo "<br><br>";} $i++;}} else { ?>
			<div class="col-xs-12">
				<i class="fa fa-close"></i> Hak akses tidak ditemukan.	<a href="<?php echo base_url('admin/role')?>">Buat Hak Akses</a>
			</div>
		<?php } ?>
	</div>
	<div class="col-xs-12" style="padding-top:20px">
		<div class="col-xs-12">
			<button class="btn bg-purple" data-dismiss="modal"> Batal</button>
			<button type="submit" id="block" class="btn bg-olive"><i class="zmdi zmdi-refresh-sync"></i> Simpan</button>
		</div>
	</div>
	</form>
</div>

<script type="text/javascript">
	$("#block").click(function(){
		is_check('is_grup','POST','<?php echo base_url('admin/is_grup')?>');
		rule = {
			nama:{
				required:true,
				is_grup:true
			},
			desc:'required'
		};

		pesan = {};
		validater('#newgrup',rule,pesan,'POST','<?php echo base_url('admin/store_new_grup')?>','json','#preview',11,1);
	})
	$(function () {
	    $('input.hakakses').iCheck({
	      checkboxClass: 'icheckbox_flat-green',
	      increaseArea: '20%' // optional
	    });
	});
</script>
