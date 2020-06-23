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
                    <h2>
                        <i class="zmdi zmdi-globe-lock zmdi-hc-fw" style="color:#03A9F4"></i> Akses Input
                    </h2>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-dashboard"></i> Dashboard</li>
                        <li class="active"><i class="zmdi zmdi-card-sim"></i> Jadwal Input Data</li>
                        <li class="active"><i class="zmdi zmdi-globe-lock zmdi-hc-fw"></i> Akses Input</li>
                    </ol>
                    <div class="box box-default">
                        <div class="box-header with-border">
                          <h3 class="box-title"><i class="zmdi zmdi-globe-lock zmdi-hc-fw" style="color:#03A9F4"></i> Kelola Akses Input</h3>
                          <div class="box-title pull-right">
                          </div>
                        </div>
                        <div class="box-body">
                            <button class="btn bg-green margin" id="checkedakses"><i class="zmdi zmdi-edit zmdi-hc-fw"></i> Perbarui Data</button>
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

  function load_akun(){
    $.ajax({
      type:"POST",
      url :"<?php echo base_url('admin/show_akun')?>",
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
  load_akun();
 $("#checkedakses").on("click", function (){
    a = "<i class='zmdi zmdi-pin-help'></i> Konfirmasi Perubahan Status Akses Input ";
    b = $("#grid-data").bootgrid("getSelectedRows");
    $(".modal-title").html(a);
    fm = '<div id="preview"><p style="font-family:jenis8">Berikut merupakan daftar akun yang akan di perbarui statusnya. Tekan tombol [Perbarui] jika anda yakin.</p>'+
         '<p style="font-family:jenis8">Apabila status dalam keadaan <i class="zmdi zmdi-lock-outline" style="color:#E64759 !important"></i> maka akan berubah menjadi <i class="zmdi zmdi-lock-open" style="color:#1BC98E !important"></i>, begitu sebaliknya.<p>'+
         '<div id="hasil"></div></div>';
     a = '<p class="pull-right">'+
         '<button class="btn btn-outline" data-dismiss="modal"> Batal</button> '+
         '<a href="#"><button id="block" class="btn btn-outline"><i class="fa fa-trash-o"></i> Perbarui</button></a>'+
         '</p>';
    $.ajax({
      type:"POST",
      url :"<?php echo base_url('admin/databeberapaakses')?>",
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
      update_akses(b);
    })
    $('.modal').modal(); 
  });

  function update_akses(b){
    $.ajax({
      type:"POST",
      url :"<?php echo base_url('admin/updateaksesbyid')?>",
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
            load_akun();
            if(!b.length){
              notify('danger','<i class="zmdi zmdi-help-outline"></i> Anda tidak memilih akun yang akan diperbarui.');
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
</script>