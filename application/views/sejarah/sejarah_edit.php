<form role="form" id="newsejarah">
	<div class="row">
		<div class="col-xs-12">
			<input type="hidden" id="id" name="id" value="<?php echo $d->id ?>">
			<textarea id="summernote" name="summernote"><?php echo $d->isi ?></textarea>
		</div>
	</div>
	<br><br>
	<div class="row">
		<div class="col-xs-12">
			<div class="form-group">
				<button type="submit" id="block" class="btn bg-green btn-lg">Simpan</button>
			</div>
		</div>
	</div>
</form>
<script src="<?php echo base_url('includes/ckeditor/ckeditor.js'); ?>"></script>
<script src="<?php echo base_url('includes/ckfinder/ckfinder.js'); ?>"></script>
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
	$("#block").click(function(){
		rule = {
		};

		pesan = {
		};
		validater('#newsejarah',rule,pesan,'POST','<?php echo base_url('sejarah/sejarah_update')?>','json','#preview',6);
	});
</script>
