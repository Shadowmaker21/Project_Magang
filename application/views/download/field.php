<?php foreach ($data as $data) { ?>
	<option value="<?php echo $data->id_download_macam ?>"><?php echo ucwords(strtolower($data->nama_jenis_peraturan)) ?></option>
<?php } ?>