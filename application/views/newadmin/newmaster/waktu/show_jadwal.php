<div class="table-responsive" style="overflow: auto;">
<table id="grid-data" class="table table-striped table-hover">
    <thead>
        <tr>
           <th data-column-id="idp" data-visible="false" data-identifier="true">ID</th>
           <th data-column-id="no">No</th>
           <th data-column-id="jadwalstart">Jadwal Mulai</th>
           <th data-column-id="jadwalselesai">Jadwal Selesai</th>
           <th data-column-id="data">Agenda</th>
           <th data-column-id="status">Status</th>
           <th data-column-id="akses" data-formatter="akses">Aksi</th>
        </tr>
    </thead>
    <tbody>
      <tr>
    		<?php $i=1;foreach($jadwal as $data){ ?>
    			 <td><?php echo $data->id_waktu ?></td>
           <td><?php echo $i++; ?></td>
           <td><?php echo $data->waktu_mulai ?></td>
           <td><?php echo $data->waktu_selesai ?></td>
           <td>
             <?php if($data->rpjmd == 1){ echo "RPJMD, ";} else { echo "-, ";} ?>
             <?php if($data->renstra == 1){ echo "RENSTRA, ";} else { echo "-, ";} ?>
             <?php if($data->iku == 1){ echo "IKU, ";} else { echo "-, ";} ?>
             <?php if($data->pk == 1){ echo "PK, ";} else { echo "-, ";} ?>
             <?php if($data->rkt == 1){ echo "RKT, ";} else { echo "-, ";} ?>
             <?php if($data->monev == 1){ echo "MONEV, ";} else { echo "-, ";} ?>
             <?php if($data->lkjip == 1){ echo "LKjIP, ";} else { echo "-, ";} ?>
             <?php if($data->akuntabilitas == 1){ echo "AKUNTABILITAS, ";} else { echo "-, ";} ?>
           </td>
           <?php if($data->status_input == 0){?>
            <td>Belum Dimulai</td>
           <? } else if($data->status_input == 1) { ?>
            <td>Sedang Berjalan</td>
           <?php } else { ?>
           <td>Selesai</td>
           <?php } ?>
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
                return "<a href=\"javascript:void(0)\" onclick=\"editwaktu("+row.idp+")\"><i class='fa fa-edit' style='font-size:1.5em;color:#E64759 !important'></i></a>";
              }
          }
	    });
	}
	init();
	$(".search").addClass('col-sm-6');
  function editwaktu(id){
    a = "<i class='zmdi zmdi-zoom-in'></i> Edit Jadwal";
    $(".modal-title").html(a);
    awal1 = '<section class="invoice">'+
            '<div class="row">'+
             '<div class="col-xs-12">'+
                '<h2 class="page-header">'+
                'Perbarui Jadwal Input Data'+
                '<small class="pull-right loading"></small>'+
                '</h2>'+
              '</div>'+
           '</div><p></p><div class="row"><div class="col-xs-12">';
    awal = '<form class="form-horizontal" id="formeditgub" method="post" action="<?php current_url()?>">';
    akhir = '</form>';
    fm = awal1+awal+
        '<div class="input-group">'+
          '<div class="input-group-addon newfont600">'+
            'Jadwal Semula'+
          '</div>'+
          '<input type="text" name="range" id="range" class="form-control">'+
        '</div><br>'+
      akhir;
      $("#isi").html(fm);
      $.ajax({
          type:"POST",
          url :"<?php echo base_url('admin/edit_jadwal')?>",
          data:{
            id:id
          },
          dataType:"json",
          success:function(data){
            $("#range").val(data.waktu_mulai+' - '+data.waktu_selesai);
            $('input[name="range"]').daterangepicker({
              timePicker: true,
              timePickerIncrement: 1,
              timePickerSeconds:true,
              timePicker24Hour:true,
              locale: {
                format: 'YYYY-MM-DD HH:mm:ss'
              },
              startDate : data.waktu_mulai,
              endDate : data.waktu_selesai
            });
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
        var range =  $("#range").val();
        perbaruiwaktu(id,range);
      });
      $('.modal').modal(); 
    }
    function perbaruiwaktu(id,range){
  $.ajax({
      type:"POST",
      url :"<?php echo base_url('admin/perbaruiwaktu')?>",
      data:{
        id:id,
        range:range
      },
      dataType:"json",
      beforeSend:function(){
        $("#tambah").hide();
        $(".loading").html('<i class="fa fa-circle-o-notch fa-spin fa-2x" style="color:black"></i>');
      },
      success:function(data){
        if(data == 1){
          setTimeout(function(){
            $(".modal").fadeOut(500, function(){
              $(".modal").modal('hide');
              load_jadwal();
              notify('success','Jadwal berhasil diperbarui.');
            });
          }, 500);
        }
      },
      error:function(data){
        console.log(data);        
      }
    });
 }
</script>