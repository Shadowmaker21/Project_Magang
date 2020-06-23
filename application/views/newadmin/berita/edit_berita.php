<div class="row">
	<form id="editberita">
		<div class="col-lg-1">
		</div>
		<div class="col-lg-10">
				<div class="col-lg-6">
					<div class="form-group">
						<label>Judul Berita</label>
						<input type="hidden" name="id" id="id" value="<?php echo $berita->id_berita?>">
						<input class="form-control" type="text" name="nama" id="nama" placeholder="Judul Berita" value="<?php echo $berita->judul_berita?>">
					</div>
					<div class="form-group">
						<label>Isi Berita</label>
						<textarea class="form-control desc" type="text" placeholder="Deskripsi Grup" name="desc" id="desc"><?php echo $berita->isi_berita?></textarea>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="form-group">
						<label>Kategori Berita</label>
						<?php foreach($jenis as $data){ ?>
							<div class="form-group">
								<input type="radio" name="jenis" id="jenis" <?php if($data->id_jenis == $berita->id_jenis){ echo 'checked';} ?> value="<?php echo $data->id_jenis?>"> <?php echo $data->nama ?>
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
			rule = {
				nama:{
					required:true
				}
			};

			pesan = {};
			validater('#editberita',rule,pesan,'POST','<?php echo base_url('admin/update_berita')?>','json','#box',22,1);
		});
        $('.desc').summernote({
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