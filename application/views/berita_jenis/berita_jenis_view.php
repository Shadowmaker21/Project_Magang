<table id="dt" class="table table-bordered table-striped">
    <thead class="newfont">
        <tr>
            <th>No.</th>
            <th>Jenis Berita</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1;foreach($jd as $data){ ?>
            <tr>
              <td><?php echo $i++; ?></td>            
              <td><a onclick="edit_berita_jenis(<?php echo $data->id_berita_jenis?>)" style="cursor:pointer"><?php echo ucwords(strtolower($data->nama_berita)) ?></a></td>            
        	    <td>
                <a onclick="confirm_delete_berita_jenis(<?php echo $data->id_berita_jenis?>)" class="btn btn-sm bg-red"><i class="fa fa-trash"></i></a>
              </td>
            </tr>
	   <?php } ?>
    </tbody>
    <tfoot class="newfont">
        <tr>
            <th>ID</th>
            <th>Jenis Dokumen</th>
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