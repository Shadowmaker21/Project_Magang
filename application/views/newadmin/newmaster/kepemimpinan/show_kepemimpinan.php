<div class="table-responsive" style="overflow: auto;">
<table id="grid-data" class="table table-striped table-hover">
    <thead>
        <tr>
           <th data-column-id="idp" data-visible="false" data-identifier="true">ID</th>
           <th data-column-id="kab">Daerah</th>
           <th data-column-id="username">Nama Pemimpin</th>
           <th data-column-id="masa">Masa Kepemimpinan</th>
           <th data-column-id="status">Status</th>
           <!-- <th data-column-id="akses" data-formatter="akses">Aksi</th> -->
        </tr>
    </thead>
    <tbody>
      <tr>
    		<?php foreach($pimpinan as $data){ ?>
    			 <td><?php echo $data->idgub ?></td>
           <td><?php if($data->id_kabko == 0){ echo 'Provinsi Jawa Tengah'; } else { echo ucwords(strtolower($data->namakab)); } ?></td>
           <td><?php echo ucwords($data->namagub) ?></td>
           <td><?php echo ucwords($data->masa) ?></td>
    			 <td><?php if($data->status == 2){echo "Arsip";} else if($data->status == 1){ echo "Active";} else {echo "Not Active";} ?></td>
          </tr>
    		<?php } ?>
    	</tr>
    </tbody>
</table>
</div>
<script type="text/javascript">
	$("#addaccount").popover({ trigger: "hover" });
  $("#checkedblock").popover({ trigger: "hover" });
  function init(){
	    $("#grid-data").bootgrid({
	        selection: true,
	        multiSelect: true,
          formatters: {
              "akses": function(column, row){
                return "<a href=\"javascript:void(0)\" onclick=\"editgubernur("+row.idp+",'"+row.username+"')\"><i class='zmdi zmdi-edit' style='font-size:1.5em;color:#E64759 !important'></i></a>";
              }
          }
	    });
	}
	init();
	$(".search").addClass('col-sm-6');
  function editgubernur(id,nama){
    a = "<i class='zmdi zmdi-zoom-in'></i> Edit Data : "+nama;
    $(".modal-title").html(a);
    awal1 = '<section class="invoice">'+
            '<div class="row">'+
             '<div class="col-xs-12">'+
                '<h2 class="page-header">'+
                'Perbarui Data Gubernur : '+nama+
                '<small class="pull-right loading"></small>'+
                '</h2>'+
              '</div>'+
           '</div><p></p><div class="row"><div class="col-xs-12">';
    awal = '<form class="form-horizontal" id="formeditgub" method="post" action="<?php current_url()?>">';
    akhir = '</form>';
    fm = awal1+awal+
        '<div class="input-group">'+
          '<div class="input-group-addon newfont600">'+
            'Nama Gubernur'+
          '</div>'+
          "<input type='text' class='form-control'autocomplete='off' placeholder='Perbarui Nama Gubernur' name='gubernur' id='gubernur'>"+
        '</div><br>'+
      akhir;
      $("#isi").html(fm);
      $.ajax({
          type:"POST",
          url :"<?php echo base_url('admin/edit_kepemimpinan')?>",
          data:{
            id:id
          },
          dataType:"json",
          success:function(data){
            $("#gubernur").val(data.nama_range);
          },
          error:function(){
            $("#place").html(error);
          }
        });
      a = '<p class="pull-right">'+
          '<button class="btn btn-outline" data-dismiss="modal"> Batal</button> '+
          '<a href="#"><button id="tambah" class="btn btn-outline"><i class="fa fa-save"></i> Perbarui</button></a>'+
          '</p>';
      $("#tombol").html(a);
      $("#tambah").click(function(){
        var gub =  $("#gubernur").val();
        perbaruigubernur(id,gub);
      });
      $('.modal').modal(); 
    }

    function perbaruigubernur(id,gub){
      $.ajax({
      type:"POST",
      url :"<?php echo base_url('admin/perbarui_kepemimpinan')?>",
      data:{
        id:id,
        gub:gub
      },
      dataType:"json",
      beforeSend:function(){
        $("#tambah").hide();
        $(".loading").html('<i class="fa fa-circle-o-notch fa-spin" style="color:black"></i> Proses Menyimpan..');
      },
      success:function(data){
        if(data == 1){
          $(".loading").html('<i class="fa fa-check-square-o" style="color:black"></i> Berhasil Menyimpan..');
          setTimeout(function(){
            $(".modal").fadeOut(500, function(){
              $(".modal").modal('hide');
              load_kepemimpinan();
              notify('success','Data gubernur berhasil diperbarui.');
            });
          }, 500);
        }
      },
      error:function(){
        $("#place").html(error);
      }
    })
    }
</script>