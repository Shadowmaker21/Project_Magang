<form id="selection" name="selection">
<table id="table" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th></th>
            <th><center>No</center></th>
            <th>Grup</th>
            <th>Desc</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody></tbody>
    <tfoot>
        <tr>
            <th></th>
            <th><center>No</center></th>
            <th>Grup</th>
            <th>Desc</th>
            <th>Aksi</th>
        </tr>
    </tfoot> 
</table>
</form>
<script type="text/javascript">
    var table;
    $(document).ready(function() {
        table = $('#table').DataTable({ 
            "processing": true, 
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?php echo base_url('admin/grup_list')?>",
                "type": "POST",
                "data": function ( data ) {
                    // data.tahun = $('#tahun').val();
                }
            },
     
            "columnDefs": [
            { 
                "targets": [ 0 ], 
                "orderable": false,
            },
            ],
        }); 
    });
    function delete_item(id){
      a = "<i class='fa fa-trash'></i> Konfirmasi Penghapusan Data ";
      $(".modal-title").html(a);
      fm = '<div class="container">'+
          '<div id="preview"><h5 >Anda yakin ingin menghapus data tersebut ?</h5></div></div>';
      a = '<p class="pull-right">'+
            '<button class="btn btn-default" data-dismiss="modal"> Batal</button> '+
            '<a href="#"><button id="hapus" class="btn btn-primary"><i class="fa fa-trash-o"></i> Hapus</button></a>'+
            '</p>';
      $("#isi").html(fm);
      $("#tombol").html(a);
      $("#hapus").click(function(){
          hapus(id);
      })
      $('.modal').modal(); 
    }

    function hapus(id){
      data = {id:id};
      submit_ajax_function('POST','<?php echo base_url('admin/hapusgrup')?>',data,'json','#boks',11,2);
    }
</script>