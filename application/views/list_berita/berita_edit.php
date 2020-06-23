<form role="form" id="newjadwal_kegiatan">
	<div class="row">
		<div class="col-xs-3">
			<div class="form-group">
				<label for="exampleInputEmail1">Jenis Berita</label>
				<select type="text" id="jenis_berita" class="form-control" name="jenis_berita">
					<option value="">Pilih Jenis Berita</option>
					<?php foreach($jenisberita as $data){ ?>
						<option <?php if($d->id_berita == $data->id_berita){ echo 'selected';} ?> value="<?php echo $data->id_berita?>"><?php echo ucwords($data->nama_berita) ?></option>
					<?php } ?>
				</select>
				<span class="text-red" id="invalid-jenis_berita"></span>
			</div>
		</div>
		<div class="col-xs-9">
			<div class="form-group">
				<label for="exampleInputEmail1">Judul</label>
				<input type="hidden" id="id" class="form-control" name="id" value="<?php echo $d->id_list_berita ?>">
				<input type="text" id="judul" class="form-control" name="judul" placeholder="Masukan Judul" value="<?php echo ucwords(strtolower($d->judul)) ?>">
				<span class="text-red" id="invalid-judul"></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="form-group">
				<label for="exampleInputEmail1">Slug</label>
				<input type="text" id="slugs" class="form-control" name="slugs" disabled="disabled" value="<?php echo $d->slug; ?>">
				<input type="hidden" id="slug" class="form-control" name="slug" value="<?php echo $d->slug; ?>">
				<span class="text-red" id="invalid-slug"></span>
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
			<textarea id="summernote" name="summernote"><?php echo $d->isi ?></textarea>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="form-group">
				<button type="submit" id="block" class="btn btn-info">Simpan</button>
			</div>
		</div>
	</div>
</form>
<script type="text/javascript">
	$(document).ready(function() {
	  	$('#summernote').on('change keyup keydown paste', function() {
      		console.log($(this).val());
    	});
	  	$('#summernote').summernote();
	  	var slugs = function(str) {
	        return str.toString().toLowerCase()
                      .replace(/\s+/g, '-')           // Replace spaces with -
                      .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
                      .replace(/\-\-+/g, '-')         // Replace multiple - with single -
                      .replace(/^-+/, '')             // Trim - from start of text
                      .replace(/-+$/, '');            // Trim - from end of text
	  	}
	    $('#judul').on('change keyup keydown paste', function() {
      		$('#slug').val(slugs($('#judul').val()));
      		$('#slugs').val(slugs($('#judul').val()));
    	});
    	
	});
	$('#tanggal').datepicker({
        format:'yyyy-mm-dd',
        autoclose:true,
        weekStart:4
    });
	$("#block").click(function(){
		is_check('is_wil1','POST','<?php echo base_url('jadwal_kegiatan/is_jadwal_kegiatan1')?>');
		rule = {
			judul:'required'
		};

		pesan = {
			judul: 'Bidang Judul Berita tidak boleh kosong'
		};
		validater('#newjadwal_kegiatan',rule,pesan,'POST','<?php echo base_url('berita/berita_update')?>','json','#preview',2);
	});
</script>
	