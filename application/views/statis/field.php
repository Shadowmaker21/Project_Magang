<option value="">Pilih Data</option>
<?php foreach ($b as $data) { ?>
	<option value="<?php echo $data->id_masalah ?>"><?php echo ucwords(strtolower($data->nama_masalah)) ?></option>
<?php } ?>
<?php foreach ($c as $data) { ?>
	<option value="<?php echo $data->id_riwayat ?>"><?php echo ucwords(strtolower($data->judul_riwayat)) ?></option>
<?php } ?>
<?php foreach ($d as $data) { ?>
	<option value="<?php echo $data->id_submasalah ?>"><?php echo ucwords(strtolower($data->nama_submasalah)) ?></option>
<?php } ?>
<?php foreach ($e as $data) { ?>
	<option value="<?php echo $data->id_jenis_naskah ?>"><?php echo ucwords(strtolower($data->nama_naskah)) ?></option>
<?php } ?>
<?php foreach ($f as $data) { ?>
	<option value="<?php echo $data->id_bahasa ?>"><?php echo ucwords(strtolower($data->nama_bahasa)) ?></option>
<?php } ?>
<?php foreach ($g as $data) { ?>
	<option value="<?php echo $data->id_media ?>"><?php echo ucwords(strtolower($data->nama_media)) ?></option>
<?php } ?>
<?php foreach ($h as $data) { ?>
	<option value="<?php echo $data->id_tingkat_perkembangan ?>"><?php echo ucwords(strtolower($data->nama_tingkatperkembangan)) ?></option>
<?php } ?>