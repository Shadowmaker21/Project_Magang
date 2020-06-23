  <table class="table table-bordered" id="table">
<thead class="newfont">
<tr>
<th>No</th>
<th>Jenis</th>
<th>Gambar</th>
<th>Size</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php $i=1;foreach($gambar as $data){ ?>
<tr>
<td><?php echo $i++; ?></td>
<td><?php if($data->utama == 1){ echo 'Utama'; } else { echo 'Pelengkap'; } ?><br><a href="javascript:void(0)" onclick="ubahstatus(<?php echo $data->id ?>)" class="btn btn-sm bg-yellow"><i class="fa fa-exchange"></i></a></td>
<td><img class="img-thumbnail" style="width:200px" src="<?php echo base_url('files/berita/'.$data->file_name.'')?>"></td>
<td><?php echo $data->file_size ?> KB</td>
<td><a href="#" onclick="confirm_delete_gambar(<?php echo $data->id?>)" class="btn btn-sm bg-red"><i class="fa fa-trash"></i></a></td>
</tr>
<?php } ?>
</tbody>
<tfoot class="newfont">
<tr>
<th>No</th>
<th>Jenis</th>
<th>Gambar</th>
<th>Size</th>
<th>Aksi</th>
</tr>
</tfoot>
</table>
<script type="text/javascript">
  $(function () {
    $('#table').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "columnDefs": [
        { "width": "2%", "targets": 0 },
        { "width": "4%", "targets": 1 },
        { "width": "20%", "targets": 2 },
        { "width": "10%", "targets": 3 },
        { "width": "2%", "targets": 4 }
      ]
    });
  });
</script>