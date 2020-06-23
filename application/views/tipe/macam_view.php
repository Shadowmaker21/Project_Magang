<a onclick="refresh_tipe()" class="btn bg-teal" style="cursor: pointer"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Kembali </a>
<a onclick="add_macam()" class="btn bg-green" style="cursor: pointer"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah </a>
<a onclick="refresh_macam()" class="btn bg-blue" style="cursor: pointer"><i class="fa fa-refresh" aria-hidden="true"></i> Refresh </a>
<br><br>
<table id="dt" class="table table-bordered table-striped">
    <thead class="newfont">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1;foreach($jd as $data){ ?>
            <tr>
              <td><?php echo $i++; ?></td>            
              <td><a onclick="edit_macam(<?php echo $data->id_download_macam?>)" style="cursor:pointer"><?php echo ucwords(strtolower($data->nama_jenis_peraturan)) ?></a></td>            
        	    <td>
                <a onclick="confirm_delete_macam(<?php echo $data->id_download_macam?>)" class="btn btn-sm bg-red"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
	   <?php } ?>
    </tbody>
    <tfoot class="newfont">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>
<script>
  $(function () {
    $('#dt').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "columnDefs": [
        { "width": "2%", "targets": 0 },
        { "width": "40%", "targets": 1 },
        { "width": "8%", "targets": 2 }
      ]
    });
  });
</script>