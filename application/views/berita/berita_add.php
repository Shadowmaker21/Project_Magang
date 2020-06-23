
<form role="form" id="newjadwal_kegiatan">
	<div class="row">
		<div class="col-xs-4">
			<div class="form-group">
				<label for="exampleInputEmail1">Jenis Berita</label>
				<select type="text" id="jenis_berita" class="form-control" name="jenis_berita">
					<option value="" selected>Pilih Jenis Berita</option>
					<?php foreach($jenisberita as $data){ ?>
						<option value="<?php echo $data->id_berita_jenis?>"><?php echo ucwords($data->nama_berita) ?></option>
					<?php } ?>
				</select>
				<span class="text-red" id="invalid-jenis_berita"></span>
			</div>
		</div>
		<div class="col-xs-8">
			<div class="form-group">
				<label for="exampleInputEmail1">Judul</label>
				<input type="text" id="judul" class="form-control" name="judul" placeholder="Masukan Judul">
				<span class="text-red" id="invalid-judul"></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="form-group">
				<label for="exampleInputEmail1">Slug</label>
				<input type="text" id="slugs" class="form-control" name="slugs" disabled="disabled">
				<input type="hidden" id="slug" class="form-control" name="slug">
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
					<input type="radio" <?php if($user['uacc_group_fk'] == 7){ if($data->id == $user['uacc_bidang']) { echo 'checked="checked"'; } else { echo 'disabled="disabled"'; } }?> class="bidang" id="bidang" value="<?php echo $data->id ?>" name="bidang"> <?php echo ucwords(strtolower($data->bidang)) ?>
				</div>
				<?php } ?>
				<br>
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-xs-12">
			<label for="exampleInputEmail1">Isi Berita</label>
			<textarea id="summernote" name="summernote"></textarea>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-xs-12">
			<div class="form-group">
				<button type="submit" id="block" class="btn btn-lg bg-green">Simpan</button>
			</div>
		</div>
	</div>
</form>
<script src="<?php echo base_url('includes/ckeditor/ckeditor.js'); ?>"></script>
<!-- <script src="<?php echo base_url('includes/text-editor/ckfinder/ckfinder.js'); ?>"></script> -->
<script type="text/javascript">
CKEDITOR.replace('summernote', {
    filebrowserBrowseUrl : '../includes/text-editor/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : '../includes/text-editor/ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : '../includes/text-editor/ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : '../includes/text-editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : '../includes/text-editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : '../includes/text-editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
CKEDITOR.on('instanceReady', function () {
    $.each(CKEDITOR.instances, function (instance) {
      CKEDITOR.instances[instance].document.on("keyup", CK_jQ);
      CKEDITOR.instances[instance].document.on("paste", CK_jQ);
      CKEDITOR.instances[instance].document.on("keypress", CK_jQ);
      CKEDITOR.instances[instance].document.on("blur", CK_jQ);
      CKEDITOR.instances[instance].document.on("change", CK_jQ);
    });
});
function CK_jQ() {
    for (instance in CKEDITOR.instances) {
      CKEDITOR.instances[instance].updateElement();
    }
}
$(document).ready(function() {
	// $('#summernote').summernote();
	var slug = function(str) {
		return str.toString().toLowerCase()
        .replace(/\s+/g, '-')           // Replace spaces with -
        .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
        .replace(/\-\-+/g, '-')         // Replace multiple - with single -
        .replace(/^-+/, '')             // Trim - from start of text
        .replace(/-+$/, '');            // Trim - from end of text
	}
	$('#judul').on('change keyup keydown paste', function() {
      	$('#slug').val(slug($('#judul').val()));
      	$('#slugs').val(slug($('#judul').val()));
    });
});
$('#tanggal').datepicker({
    format:'yyyy-mm-dd',
    autoclose:true,
    showOnFocus:true,
    weekStart:4
});
$("#block").click(function(){
	rule = {
		judul:'required',
		jenis_berita:'required'
		// bidang:'required'
	};

	pesan = {
		judul: 'Bidang Judul Berita tidak boleh kosong',
		jenis_berita: 'Bidang Jenis Berita tidak boleh kosong'
		// bidang : 'Bidang ini tidak boleh kosong'
	};
	validater('#newjadwal_kegiatan',rule,pesan,'POST','<?php echo base_url('berita/berita_store')?>','json','#preview',2);
});
</script>
