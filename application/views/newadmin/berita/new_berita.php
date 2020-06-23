<div class="row">
	<form id="newberita">
		<div class="col-lg-1">
		</div>
		<div class="col-lg-10">
				<div class="col-lg-6">
					<div class="form-group">
						<label>Judul Berita</label>
						<input class="form-control" type="text" name="nama" id="nama" placeholder="Judul Berita">
					</div>
					<div class="form-group">
						<label>Isi Berita</label>
						<textarea class="form-control" type="text" placeholder="Deskripsi Grup" name="desc" id="desc"></textarea>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="form-group">
						<label>Kategori Berita</label>
						<?php foreach($jenis as $data){ ?>
							<div class="form-group">
								<input type="radio" name="jenis" id="jenis" value="<?php echo $data->id_jenis?>"> <?php echo $data->nama ?>
							</div>
						<?php } ?>
					</div>
				</div>
		</div>
		<div class="col-lg-1">
		</div>
		<div class="col-lg-1">
		</div>
		<div class="col-lg-10">
			<div class="pull-right">
				<button type="submit" class="btn bg-green" id="block">Simpan</button>
			</div>
		</div>
		<div class="col-lg-1">
		</div>
	</form>
</div>
<script type="text/javascript">
	$(document).ready(function() {
        $("#block").click(function(){
			is_check('is_berita','POST','<?php echo base_url('admin/is_berita')?>');
			rule = {
				nama:{
					required:true,
					is_berita:true
				}
			};

			pesan = {};
			validater('#newberita',rule,pesan,'POST','<?php echo base_url('admin/store_new_berita')?>','json','#box',22,1);
		});
        $('#desc').summernote({
            height: 300,
            minHeight: null,
            maxHeight: null,
            focus: true
        });

        var slug = function(str) {
            var $slug = '';
            var trimmed = $.trim(str);
            $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
            replace(/-+/g, '-').
            replace(/^-|-$/g, '');
            return $slug.toLowerCase();
        }

        $('#title').on('change keyup keydown paste', function() {
            $('#slug').val(slug($('#title').val()));
        });

    });
</script>
</script>