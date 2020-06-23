<a onclick="add_tipe()" class="btn bg-green pull-right" style="cursor: pointer"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah </a>
<br>
<br>
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
              <td><a onclick="edit_tipe(<?php echo $data->id?>)" style="cursor:pointer"><?php echo ucwords(strtolower($data->nama)) ?></a></td>            
        	    <td>
                <a onclick="detail_macam(<?php echo $data->id?>)" class="btn btn-sm bg-teal"><i class="fa fa-search"></i></a>
                <a onclick="confirm_delete_tipe(<?php echo $data->id?>)" class="btn btn-sm bg-red"><i class="fa fa-trash"></i></a>
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