<form role="form" id="newjndo">
	<div class="form-group">
		<label for="exampleInputEmail1">Bidang</label>
		<input type="text" id="bidang" class="form-control" name="bidang" placeholder="Masukan Bidang">
		<span class="text-red" id="invalid-bidang"></span>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<label for="exampleInputEmail1">Deskripsi Bidang</label>
			<textarea id="summernote" name="summernote"></textarea>
		</div>
	</div>
	<br>
	<div class="form-group">
		<button type="submit" id="block" class="btn btn-lg bg-green">Simpan</button>
	</div>
</form>
<script src="<?php echo base_url('includes/ckeditor/ckeditor.js'); ?>"></script>
<!-- <script src="<?php echo base_url('includes/text-editor/ckfinder/ckfinder.js'); ?>"></script> -->
<script type="text/javascript">
	$("#block").click(function(){
		is_check('is_jndo','POST','<?php echo base_url('bidang/is_bidang')?>');
		rule = {
			bidang:{
				required:true,
				is_jndo:true
			}
		};

		pesan = {
			bidang:{
				required : 'Bidang tidak boleh kosong',
				is_jndo : 'Bidang tersebut sudah ada dalam database'
			}
		};
		validater('#newjndo',rule,pesan,'POST','<?php echo base_url('bidang/bidang_store')?>','json','#preview',11);
	});
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
</script>
