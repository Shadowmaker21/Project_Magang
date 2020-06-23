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
                <li class="active"><i class="fa fa-folder-open-o" aria-hidden="true"></i> List Akun Pengguna</li>
              </ol>
              <br>
              <div class="row">
                <div class="col-sm-12">
                   <div class="box">
                     <div class="box-header with-border">
                       <h3 class="box-title"><i class="fa fa-folder-open-o" aria-hidden="true"></i> List Akun Pengguna</h3>
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
                                      <input type="text" name="username" id="username" class="form-control" placeholder="Temukan by Username">
                                    <br>
                                    <input type="text" name="jum" id="jum" class="form-control" placeholder="Tampilkan lebih banyak" value="12">
                                    <br>
                                    <button class="btn btn-lg btn-block bg-teal btn-margin" onclick="searchusers()"><i class="fa fa-search"></i> Cari</button>
                                    <button class="btn btn-lg btn-block bg-navy btn-margin" onclick="resetusers()"><i class="fa fa-refresh"></i> Reset</button>                                  
                                    <br>    
                                  </div>
                                </div>
                                <div class="box box-solid">
                                  <div class="box-header a with-border">
                                    <h3 class="box-title">Tambah Akun</h3>
                                  </div>
                                  <div class="box-body">
                                    <a onclick='add_user()' class="message" href="#" data-toggle="popover" data-placement="right" title="" data-content="Tambahkan akun pengguna." data-original-title=""><button class="btn btn-sm bg-green margin"><i class="zmdi zmdi-accounts-add"></i> <i class="fa fa-plus-square"></i></button></a>
                                  </div>
                                </div>
                                <div class="box box-solid">
                                  <div class="box-header with-border">
                                    <h3 class="box-title">Nonaktifkan Akun</h3>
                                  </div>
                                  <div class="box-body">
                                    <button onclick='confirmblock()' href="#" data-toggle="popover" data-placement="right" title="" data-content="Pengguna tidak bisa login beberapa saat." data-original-title="" class="message btn bg-orange margin btn-sm"> <i class="fa fa-low-vision"></i></button>
                                  </div>
                                </div>
                                <div class="box box-solid">
                                  <div class="box-header a with-border">
                                    <h3 class="box-title">Hapus Akun</h3>
                                  </div>
                                  <div class="box-body">
                                    <button onclick='confirm()' href="#" data-toggle="popover" data-placement="right" title="" data-content="User pengguna akan dihapus." data-original-title="" class="message btn bg-red margin btn-sm"><i class="fa fa-trash-o"></i></button>
                                  </div>
                                </div>
                         </div>
                         <div class="col-md-9">
                           <h4>Daftar Pengguna</h4>
                           <div id="place"></div>
                         </div>
                         <br><br>
                       </div>
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
  // FIX
  function add_user(){
    data={judul:'Tambah User Baru',name:' '};
    $("#tombol").html('');
    modal_ajax(data,'POST','<?php echo base_url('pengguna/add_user')?>','html','#preview',0);
  }
  // FIX
  function refresh_akun_pengguna(){
    $.ajax({
      type:"POST",
      url :"<?php echo base_url('pengguna/show_useraccounts')?>",
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

  refresh_akun_pengguna();
  // FIX
  function searchusers(){
      var username = $("#username").val();
      var jum = $("#jum").val();
      data={username:username,jum:jum};
      show_ajax('POST','<?php echo base_url('pengguna/show_useraccounts')?>',data,'html','#place');
      izitoast('info','Info','Data sudah ditampilkan','','topCenter');
  }
  // FIX
  function resetusers(){
      $("#username").val('');
      $("#jum").val('12');
      refresh_akun_pengguna();
      izitoast('info','Info','Data sudah ditampilkan','','topCenter');
  }
  // FIX
  function confirm(){
      var data = $("#selection").serializeArray();
      var judul= 'Konfirmasi Penghapusan';
      var name = 'Beberapa Akun';
      var b = [];
      jQuery.each( data, function( i, data ) {
        b.push(data.value);
      });
      a={data:b,judul:judul,name:name,jenis:1};
      modal_ajax(a,'POST','<?php echo base_url('pengguna/databeberapaakun')?>','html','#preview',0);
  }
  
  function confirmblock(){
      var data = $("#selection").serializeArray();
      var judul= 'Konfirmasi Pen Non-Aktifan';
      var name = 'Beberapa Akun';
      var b = [];
      jQuery.each( data, function( i, data ) {
        b.push(data.value);
      });
      a={data:b,judul:judul,name:name,jenis:2};
      modal_ajax(a,'POST','<?php echo base_url('pengguna/databeberapaakun')?>','html','#preview',0);
    }

  function perbaruiakun(id,first,last,no,email,username){
    $.ajax({
      type:"POST",
      url :"<?php echo base_url('pengguna/perbaruiakun')?>",
      data:{
        id:id,
        first:first,
        last:last,
        no:no,
        email:email,
        username:username
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
              refreshs();
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
</script>