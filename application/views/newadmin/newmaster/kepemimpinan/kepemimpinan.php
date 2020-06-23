<?php $this->load->view('admin/includes/head')?>
    
<body class="skin-blue sidebar-mini">
    <div class="wrapper">
        <?php $this->load->view('admin/includes/menu')?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 916px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="row">
                  <div class="col-sm-12">
                    <h3 class="font-head">
                        Pemimpin
                    </h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> Dashboard</li>
                        <li class="active"><i class="zmdi zmdi-card-sim"></i> Master Data</li>
                        <li class="active"><i class="zmdi zmdi-accounts-list-alt"></i> Masa Kepemimpinan</li>
                    </ol>
                    <div class="box box-default">
                        <div class="box-header with-border">
                          <h3 class="box-title"><i class="zmdi zmdi-accounts-list-alt zmdi-hc-fw" style="color:#03A9F4"></i> Kelola Pemimpin</h3>
                          <div class="box-title pull-right">
                          </div>
                        </div>
                        <div class="box-body">
                            <!-- <a href="javascript:void(0)" onclick='addgub()'><button class="btn bg-green margin"><i class="zmdi zmdi-accounts-add"></i> Tambah Gubernur</button></a>
                            <button class="btn bg-red margin" id="checkeddelete"><i class="zmdi zmdi-delete zmdi-hc-fw"></i> Hapus</button>

                            <br><br> -->
                            <div id="place"></div>
                        </div>
                    </div>
                  </div>
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->

<?php $this->load->view('admin/includes/footer')?>
<script type="text/javascript">

  function load_kepemimpinan(){
    $.ajax({
      type:"POST",
      url :"<?php echo base_url('admin/show_kepemimpinan')?>",
      data:{
      },
      dataType:"html",
      beforeSend:function(){
        $("#place").html(loading);
      },
      success:function(data){
        $("#place").html(data);
      },
      error:function(){
        $("#place").html(gagalkoneksi);
      }
    })
  }
  load_kepemimpinan();
  $("#checkeddelete").on("click", function (){
    a = "<i class='zmdi zmdi-pin-help'></i> Konfirmasi Penghapusan Gubernur";
    b = $("#grid-data").bootgrid("getSelectedRows");
    $(".modal-title").html(a);
    fm = '<div id="preview"><p style="font-family:jenis8">Berikut merupakan daftar gubernur yang akan di hapus. Tekan tombol [Hapus] jika anda yakin.</p>'+
         '<p style="font-family:jenis8">Data yang sudah <i class="zmdi zmdi-lock"></i> [saat ini sedang berjalan] dan <i class="zmdi zmdi-archive"></i> [untuk arsip] tidak ikut terhapus.</p>'+
         '<div id="hasil"></div></div>';
     a = '<p class="pull-right">'+
         '<button class="btn btn-outline" data-dismiss="modal"> Batal</button> '+
         '<a href="#"><button id="block" class="btn btn-outline"><i class="fa fa-trash-o"></i> HAPUS</button></a>'+
         '</p>';
    $.ajax({
      type:"POST",
      url :"<?php echo base_url('admin/databeberapagub')?>",
      data:{
        a : b
      },
      dataType:"html",
      beforeSend:function(){
        $("#hasil").html(loading);
      },
      success:function(data){
        $("#hasil").html(data);
      },
      error:function(){
        $("#hasil").html(gagalkoneksi);
      }
    });
    $("#isi").html(fm);
    $("#tombol").html(a);
    $("#block").click(function(){
      delete_gub(b);
    })
    $('.modal').modal(); 
  });

  function delete_gub(b){
    $.ajax({
      type:"POST",
      url :"<?php echo base_url('admin/deletegubbyid')?>",
      data:{
        a : b
      },
      dataType:"html",
      beforeSend:function(){
        $("#preview").html('<center>'+loading4x+'</center>');
      },
      success:function(data){
        if(!b.length){
          $("#preview").html('<center><i class="green zmdi zmdi-help zmdi-hc-4x"></i></center>');
        } else {
          $("#preview").html('<center><i class="green zmdi zmdi-check-circle zmdi-hc-4x"></i></center>');
        }
        setTimeout(function(){
          $("#preview").fadeOut(1000, function(){
            $(".modal").modal('hide');
            load_kepemimpinan();
            if(!b.length){
              notify('danger','<i class="zmdi zmdi-help-outline"></i> Anda tidak memilih gubernur yang akan dihapus.');
            } else {
              notify('success','<i class="zmdi zmdi-check-circle"></i> Proses berhasil dilakukan.');
            }
          });
        }, 1000);
      },
      error:function(data){
        console.log(data);        
      }
    });
  }

  function addgub(){
    a = "<i class='zmdi zmdi-globe-lock zmdi-hc-fw'></i> Gubernur Baru";
    $(".modal-title").html(a);
    awal1 ='<div class="loading"></div><div class="row">'+
           '<div class="col-sm-12">'+
           '<h5 class="head"><i class="fa fa-exclamation-circle"></i> Perhatian : </h5><h5 class="head2"> Anda akan menambah gubernur baru, Isilah Formulir mulai Nama, dan Periode Tahun kemudian tekan tombol simpan.</h5><br><h5 class="head"><i class="fa fa-edit"></i> Formulir </h5>';
    $.ajax({
      type:"POST",
      url :"<?php echo base_url('admin/getrangetahun')?>",
      data:{
      },
      dataType:"html",
      beforeSend:function(){
        $("#hasil").html(loading);
      },
      success:function(data){
        $("#isi").html(awal1+data);
      },
      error:function(){
        $("#hasil").html(gagalkoneksi);
      }
    });
    a = '<p class="pull-right">'+
        '<button class="btn btn-outline" data-dismiss="modal"> Batal</button> '+
        '<a href="#"><button id="save" class="btn btn-outline"><i class="zmdi zmdi-refresh-sync"></i> Simpan</button></a>'+
        '</p>';
    $("#tombol").html(a);
    $("#save").click(function(){
      var all = $("#gub").serialize();
      simpangub(all);
    })
    $('.modal').modal(); 
  }

  function simpangub(all){
    $.ajax({
      type:"POST",
      url :"<?php echo base_url('admin/simpangub')?>",
      data:all,
      dataType:"json",
      beforeSend:function(){
        $("#tambah").hide();
        $("#place").html(loading);
        $(".loading").html('<i class="fa fa-circle-o-notch fa-spin fa-2x" style="color:black"></i>');
      },
      success:function(data){
        if(data == 1){
          setTimeout(function(){
            $(".modal").fadeOut(500, function(){
              $(".modal").modal('hide');
              load_kepemimpinan();
              notify('success','Gubernur berhasil disimpan.');
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