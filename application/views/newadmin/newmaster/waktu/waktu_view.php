<form id="selectionwaktu" name="selectionwaktu">
<div class="table-responsive">
<table id="tablewaktu" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th></th>
            <th><center>N</center></th>
            <th><center>Mulai</center></th>
            <th><center>Selesai</center></th>
            <th><center>Agenda</center></th>
            <th><center>Status</center></th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody></tbody>
    <tfoot>
        <tr>
            <th></th>
            <th><center>N</center></th>
            <th><center>Mulai</center></th>
            <th><center>Selesai</center></th>
            <th><center>Agenda</center></th>
            <th><center>Status</center></th>
            <th>Aksi</th>
        </tr>
    </tfoot> 
</table>
</div>
</form>
<script type="text/javascript">
    var table;
    $(document).ready(function() {
        table = $('#tablewaktu').DataTable({ 
            "processing": true, 
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?php echo base_url('admin/waktu_list')?>",
                "type": "POST",
                "data": function ( data ) {
                  
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
          '<div id="preview"><h5>Anda yakin ingin menghapus data tersebut ?</h5></div></div>';
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
      submit_ajax_function('POST','<?php echo base_url('admin/hapus_waktu')?>',data,'json','#boks',2);
    }
</script>
