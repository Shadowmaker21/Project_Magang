<form role="form" id="newjadwal_kegiatan">
	<div class="row">
		<div class="col-xs-8">
			<div class="form-group">
				<label for="exampleInputEmail1"><?php echo $judul ?></label>
				<input type="hidden" id="id" name="id" value="<?php echo $d->id?>">
				<input type="text" id="jadwal_kegiatan" class="form-control" name="jadwal_kegiatan" placeholder="Masukan Jadwal Kegiatan" value="<?php echo $d->nama?>">
				<span class="text-red" id="invalid-jadwal_kegiatan"></span>
			</div>
		</div>
		<div class="col-xs-4">
			<div class="form-group">
				<label for="exampleInputEmail1">Tanggal</label>
				<input type="text" id="tanggal" class="form-control" name="tanggal" placeholder="Masukan Tanggal Kegiatan" value="<?php echo $d->tanggal?>">
				<span class="text-red" id="invalid-tanggal"></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="form-group">
				<label for="exampleInputEmail1">Bidang</label>
				<?php foreach($sotk as $data){ ?>
				<div class="col-xs-12">
					<input type="radio" 
						<?php if($user['uacc_group_fk'] == 7){ 
							if($data->id == $user['uacc_bidang']) { 
								echo 'checked="checked"'; 
							} else { 
								echo 'disabled="disabled"'; 
							} 
						  } else {
						  	if($d->id_bidang == $data->id){
							  	echo 'checked="checked"';
							}
						  } ?> 
					class="bidang" id="bidang" value="<?php echo $data->id ?>" name="bidang"> <?php echo ucwords(strtolower($data->bidang)) ?>
				</div>
				<?php } ?>
				<br>
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-xs-12">
			<div class="form-group">
				<button type="submit" id="block" class="btn bg-green btn-lg">Simpan</button>
			</div>
		</div>
	</div>
</form>
<script type="text/javascript">
	$('#tanggal').datepicker({
        format:'yyyy-mm-dd',
        autoclose:true,
        weekStart:4
    });
	$("#block").click(function(){
		is_check('is_wil1','POST','<?php echo base_url('jadwal_kegiatan/is_jadwal_kegiatan1')?>');
		rule = {
			jadwal_kegiatan:{
				required:true,
				is_wil1:true
			},
			tangal:'required'
		};

		pesan = {
			jadwal_kegiatan:{
				required : 'Bidang Jadwal Kegiatan tidak boleh kosong',
				is_jadwal_kegiatan : 'Jadwal Kegiatan tersebut sudah ada dalam database'
			}
		};
		validater('#newjadwal_kegiatan',rule,pesan,'POST','<?php echo base_url('jadwal_kegiatan/jadwal_kegiatan_update')?>','json','#preview',1);
	});
</script>
	