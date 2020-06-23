<div class="row">
  <div class="col-md-2">
    <div class="col-md-12">
      <div class="bord">
      <h4><i class="fa fa-cog"></i> Pengaturan</h4>
      <hr>
      <div class="pad5">
      <button type="button" onclick="add_berita()" class="btn bg-green"><i class="fa fa-plus-square-o"></i> Buat</button>
      </div>
      <div class="pad5">
      <button type="button" onclick="confirm()" class="btn bg-red"><i class="fa fa-trash-o"></i> Hapus</button>
      </div>
      <div class="pad5">
      <button type="button" onclick="load_news()" class="btn bg-blue"><i class="fa fa-refresh"></i> Refresh</button>
      </div>
      </div>
    </div>
  </div>
  <div class="col-md-10">
    <form id="selection" name="selection">
      <table id="table" class="table table-bordered table-striped">
          <thead>
              <tr>
                  <th style="width:5%"></th>
                  <th style="width:5%"><center>No</center></th>
                  <th>Jenis</th>
                  <th>Berita</th>
                  <th style="width:10%"><center>Aksi</center></th>
              </tr>
          </thead>
          <tbody></tbody>
          <tfoot>
              <tr>
                  <th style="width:5%"></th>
                  <th style="width:5%"><center>No</center></th>
                  <th>Jenis</th>
                  <th>Berita</th>
                  <th style="width:10%"><center>Aksi</center></th>
              </tr>
          </tfoot> 
      </table>
    </form>
  </div>
</div>
<script type="text/javascript">
    var table;
    $(document).ready(function() {
        table = $('#table').DataTable({ 
            "processing": true, 
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?php echo base_url('admin/berita_list')?>",
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
      submit_ajax_function('POST','<?php echo base_url('admin/hapusberita')?>',data,'json','#boks',22,2);
    }
</script>
