<?php 
	function color($angka){
		if(is_numeric($angka)){
			if(($angka>=0) && ($angka<=50)){
				echo 'danger';
			} else if(($angka>50) && ($angka <= 75)){
				echo 'warning';
			} else if($angka>75){
				echo 'success';
			} else {
				echo 'danger';
			}
		} 
	}
?>
<table class="table table-bordered table-striped table-hover">
	<thead class="blue">
		<tr>
			<th class="white-text center-align">No</th>
			<th class="white-text center-align">Sasaran Strategis</th>
			<th class="white-text center-align">Indikator Kinerja</th>
			<th class="white-text center-align">Satuan</th>
			<th class="white-text center-align">Target</th>
			<th class="white-text center-align">Triwulan</th>
			<th class="white-text center-align">Target</th>
			<th class="white-text center-align">Realisasi</th>
			<th class="white-text center-align">Capaian (%)</th>
		</tr>
	</thead>
	<tbody>
		<?php $a=1;$sas=0;foreach($utama as $data){ ?>
			<tr>
			<?php if($sas != $data->sasaranid){ ?>
				<td rowspan="5"><?php echo $a++; ?></td>
				<td rowspan="5"><?php echo $data->sasaran ?></td>
				<td rowspan="5"><?php echo $data->indikator ?></td>
				<td rowspan="5" class="center-align"><?php echo $data->satuan ?></td>
				<td rowspan="5"><?php echo $data->target ?></td>
				<?php $i=1;foreach($data->datas as $aa){ ?>
					<?php if($i == 1){ ?>
						<td>Triwulan <?php echo $aa->triwulan ?></td>
						<td>-</td>
						<td><?php echo $aa->real ?></td>
						<td><?php echo $aa->capaian ?></td>
					</tr>
					<?php } else { ?>
					<tr>
						<td>Triwulan <?php echo $aa->triwulan ?></td>
						<td>-</td>
						<td><?php echo $aa->real ?></td>
						<td><?php echo $aa->capaian ?></td>
					</tr>
					<?php } ?>
				<?php } ?>
				<tr>
					<td colspan="2">Kondisi Akhir</td>
					<td><?php echo $data->jum; ?></td>
					<td class="<?php color($data->cap)?>"><?php echo $data->cap; ?></td>
				</tr>
			<?php $sas = $data->sasaranid;} else { ?>
				<td rowspan="5"></td>
				<td rowspan="5"></td>
				<td rowspan="5"><?php echo $data->indikator ?></td>
				<td rowspan="5" class="center-align"><?php echo $data->satuan ?></td>
				<td rowspan="5"><?php echo $data->target ?></td>
				<?php $i=1;foreach($data->datas as $aa){ ?>
					<?php if($i == 1){ ?>
						<td>Triwulan <?php echo $aa->triwulan ?></td>
						<td>-</td>
						<td><?php echo $aa->real ?></td>
						<td><?php echo $aa->capaian ?></td>
					</tr>
					<?php } else { ?>
					<tr>
						<td>Triwulan <?php echo $aa->triwulan ?></td>
						<td>-</td>
						<td><?php echo $aa->real ?></td>
						<td><?php echo $aa->capaian ?></td>
					</tr>
					<?php } ?>
				<?php } ?>
				<tr>
					<td colspan="2">Kondisi Akhir</td>
					<td><?php echo $data->jum; ?></td>
					<td class="<?php color($data->cap)?>"><?php echo $data->cap; ?></td>
				</tr>
			<?php } ?>
		<?php } ?>
	</tbody>
</table>