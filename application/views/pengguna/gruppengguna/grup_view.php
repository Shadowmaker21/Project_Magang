<?php $this->load->view('includes/head')?>
    
<body class="skin-red-light sidebar-mini">
    <div class="wrapper">
        <?php $this->load->view('includes/menu')?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 916px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                <i class="fa fa-vcard-o" aria-hidden="true"></i> Akun Pengguna
                </h1>
                <ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                  <li><a href="#"><i class="fa fa-vcard-o" aria-hidden="true"></i> Akun Pengguna</a></li>
                  <li class="active"><i class="fa fa-folder-open-o" aria-hidden="true"></i> List Grup Pengguna</li>
                </ol>
                <br>
                <div class="row">
                  <div class="col-sm-12">
                    
                    <div class="box">
                        <div class="box-header with-border">
                          <h3 class="box-title"><i class="fa fa-folder-open-o" aria-hidden="true"></i> List Grup Pengguna</h3>
                          <div class="box-title pull-right">
                          </div>
                        </div>
                        <div class="box-body">
                          <div class="row">
                              <div class="col-md-3">
                                <div class="box box-solid">
                                  <div class="box-header a with-border">
                                      <h3 class="box-title">Pencarian</h3>
                                  </div>
                                  <div class="box-body">
                                      <input type="text" name="grup" id="grup" class="form-control" placeholder="Temukan by Name">
                                    <br>
                                    <input type="text" name="jum" id="jum" class="form-control" placeholder="Tampilkan lebih banyak" value="12">
                                    <br>
                                    <button class="btn btn-lg btn-block bg-teal btn-margin" onclick="searchgroups()"><i class="fa fa-search"></i> Cari</button>
                                    <button class="btn btn-lg btn-block bg-navy btn-margin" onclick="resetgroups()"><i class="fa fa-refresh"></i> Reset</button>                                  
                                    <br>    
                                  </div>
                                </div>
                                <div class="box box-solid">
                                  <div class="box-header a with-border">
                                    <h3 class="box-title">Tambah Grup</h3>
                                  </div>
                                  <div class="box-body">
                                    <a class="message" href="#" data-toggle="popover" data-placement="right" title="" data-content="Tambahkan grup pengguna." data-original-title="" onclick='addgrup()'><button class="btn btn-sm bg-green margin"><i class="fa fa-plus"></i> </button></a>
                                  </div>
                                </div>
                                <div class="box box-solid">
                                  <div class="box-header a with-border">
                                    <h3 class="box-title">Hapus Grup</h3>
                                  </div>
                                  <div class="box-body">
                                    <button onclick='confirm()' href="#" data-toggle="popover" data-placement="right" title="" data-content="Grup pengguna akan dihapus." data-original-title="" class="btn message bg-red btn-sm margin"><i class="fa fa-trash-o"></i> </button>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-9">
                                <h4>Daftar Grup</h4>
                                <div id="place"></div>
                              </div>
                            </div>
                            <br><br>
                        </div>
                    </div>
                  </div>
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->

<?php $this->load->view('includes/footer')?>
<script type="text/javascript">
  $(".message").popover({ trigger: "hover" });
  function refresh_grup(){
    $.ajax({
      type:"POST",
      url :"<?php echo base_url('pengguna/show_usergroups')?>",
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
  refresh_grup();

  // FIX
  function searchgroups(){
      var grup = $("#grup").val();
      var jum = $("#jum").val();
      data={grup:grup,jum:jum};
      show_ajax('POST','<?php echo base_url('pengguna/show_usergroups')?>',data,'html','#place');
      izitoast('info','Info','Data sudah ditampilkan','','topCenter');
  }

  function resetgroups(){
      $("#grup").val('');
      $("#jum").val('12');
      refresh_grup();
      izitoast('info','Info','Data sudah ditampilkan','','topCenter');
  }

  function addgrup(){
     data={judul:'Tambah Grup Baru',name:' '};
     modal_ajax(data,'POST','<?php echo base_url('pengguna/new_grup')?>','html','#preview',0);
  }

  // FIX
  function confirm(){
      var data = $("#selection").serializeArray();
      var judul= 'Konfirmasi Penghapusan';
      var name = 'Beberapa Grup';
      var b = [];
      jQuery.each( data, function( i, data ) {
        b.push(data.value);
      });
      a={data:b,judul:judul,name:name};
      modal_ajax(a,'POST','<?php echo base_url('pengguna/databeberapagrup')?>','html','#preview',0);
  }

  function simpangrup(nama,deskripsi,check){
    //alert(nama+'_'+deskripsi+'_'+check);
    $.ajax({
      type:"POST",
      url :"<?php echo base_url('pengguna/simpangrup')?>",
      data:{
        nama:nama,
        deskripsi:deskripsi,
        check:check
      },
      dataType:"html",
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
              load_grup();
              notify('success','Grup berhasil disimpan.');
            });
          }, 500);
        }
      },
      error:function(data){
        console.log(data);        
      }
    });
  }

  function perbaruigrup(id,namas,deskripsi,check){
    $.ajax({
      type:"POST",
      url :"<?php echo base_url('pengguna/perbaruigrup')?>",
      data:{
        id:id,
        nama:namas,
        desc:deskripsi,
        check:check
      },
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
              load_grup();
              notify('success','Realisasi, prosentase realisasi, capaian tahun sebelumnya dan evaluasi berhasil diperbarui, Data sudah ditampilkan pada tabel dibawah.');
            });
          }, 500);
        }
      },
      error:function(data){
        $("#place").html(gagalkoneksi);
      }
    })
  }

  $("#checkeddeleted").on("click", function (){
    a = "<i class='zmdi zmdi-pin-help'></i> Konfirmasi Penghapusan Beberapa Grup Pengguna";
    b = $("#grid-data").bootgrid("getSelectedRows");
    $(".modal-title").html(a);
    fm = '<div id="preview"><p style="font-family:jenis8">Berikut merupakan daftar grup yang akan di hapus. Tekan tombol Ya jika anda yakin.</p>'+
         '<div id="hasil"></div></div>';
     a = '<p class="pull-right">'+
         '<button class="btn btn-outline" data-dismiss="modal"> Batal</button> '+
         '<a href="#"><button id="block" class="btn btn-outline"><i class="fa fa-trash-o"></i> HAPUS</button></a>'+
         '</p>';
    $.ajax({
      type:"POST",
      url :"<?php echo base_url('pengguna/databeberapagrup')?>",
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
      delete_grup(b);
    })
    $('.modal').modal(); 
  });

  function delete_grup(b){
    $.ajax({
      type:"POST",
      url :"<?php echo base_url('pengguna/deletegrupbyid')?>",
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
            load_grup();
            if(!b.length){
              notify('danger','<i class="zmdi zmdi-help-outline"></i> Anda tidak memilih grup yang akan dihapus.');
            } else {
              notify('success','<i class="zmdi zmdi-check-circle"></i> Beberapa grup berhasil dihapus.');
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