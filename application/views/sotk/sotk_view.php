<?php if($w){ ?>
	<div class="box box-solid">
        <div class="box-header with-border">
        	<h3 class="box-title"><?php echo $judul ?></h3>
        	<div class="box-title pull-right">
        		<a href="#" class="btn bg-yellow" onclick="edit_sotk(<?php echo $w->id ?>)"><i class="fa fa-edit" aria-hidden="true"></i> Perbarui</a>
	        </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        	<?php echo $w->isi; ?>
        </div>
        <!-- /.box-body -->
    </div>
<?php } else { ?>
	<div class="box box-solid">
        <div class="box-header with-border">
        	<h3 class="box-title"><?php echo $judul ?></h3>
        	<div class="box-title pull-right">
        		<a href="#" class="btn bg-green" onclick="add_sotk()"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah</a>
	        </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        	Tidak Ada Data
        </div>
        <!-- /.box-body -->
    </div>

<?php } ?>