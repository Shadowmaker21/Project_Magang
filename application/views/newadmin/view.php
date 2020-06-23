<?php $this->load->view('admin/includes/head')?>
    
<body class="skin-blue sidebar-mini">
    <div class="wrapper">
        <?php $this->load->view('admin/includes/menu')?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 916px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                </h1>
                <ol class="breadcrumb">
                    <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
                </ol>
            </section>
            <section class="content-header">
              <div class="row">
                <div class="col-xs-6">
                  <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#opd" data-toggle="tab" aria-expanded="false">OPD</a></li>
                      <li class=""><a href="#provinsi" data-toggle="tab" aria-expanded="false">Provinsi</a></li>
                      <li class=""><a href="#kabkota" data-toggle="tab" aria-expanded="false">Kabupaten Kota</a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane" id="provinsi">
                        <h5>Monitoring Provinsi</h5>
                      </div>
                      <div class="tab-pane" id="kabkota">
                        <h5>Monitoring Kabupaten Kota</h5>
                        <table class="table table-bordered table-hover">
                          <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Perencanaan</th>
                            <th>Pengukuran</th>
                          </thead>
                          <tbody>
                            <?php if($opd){ ?>
                              <?php $i=1;foreach($kabkota as $data){ ?>
                                <tr>
                                  <td><?php echo $i++; ?></td>
                                  <td><?php echo $data->nama_kab; ?></td>
                                  <td class="text-center"><?php echo $data->perencanaan ?></td>
                                  <td class="text-center"><a href="<?php echo base_url('admin/pengukuran/33/'.$data->id.'/0')?>"><i class="fa fa-search"></i></a></td>
                                </tr>
                              <?php } ?>
                            <?php } ?>
                          </tbody>
                        </table>
                      </div>
                      <div class="tab-pane active" id="opd">                        
                        <h5>Monitoring OPD</h5>
                        <dl class="dl-horizontal">
                          <dt><i style="color:#e64759" class="fa fa-circle-o-notch" aria-hidden="true"></i></dt>
                          <dd>OPD belum mengisikan Renstra</dd>
                          <dt><i style="color:#1BC98E" class="fa fa-check-square-o" aria-hidden="true"></i></dt>
                          <dd>OPD sudah mengisikan lebih dari 3 tujuan Renstra</dd>
                          <dt><i class="fa fa-search"></i></dt>
                          <dd>Detail Monev</dd>
                        </dl>
                        <table class="table table-bordered table-hover">
                          <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Perencanaan</th>
                            <th>Pengukuran</th>
                          </thead>
                          <tbody>
                            <?php if($opd){ ?>
                              <?php $i=1;foreach($opd as $data){ ?>
                                <tr>
                                  <td><?php echo $i++; ?></td>
                                  <td><?php echo $data->nama; ?></td>
                                  <td class="text-center"><?php echo $data->perencanaan ?></td>
                                  <td class="text-center"><a href="<?php echo base_url('admin/pengukuran/33/0/'.$data->id.'')?>"><i class="fa fa-search"></i></a></td>
                                </tr>
                              <?php } ?>
                            <?php } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6">
                  <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#jadwalinput" data-toggle="tab" aria-expanded="false" onclick="load_jadwal_view()">Jadwal Input</a></li>
                      <li class=""><a href="#aksesinput" data-toggle="tab" aria-expanded="false" onclick="load_akses_view()">Akses Input</a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="jadwalinput">

                      </div>
                      <div class="tab-pane" id="aksesinput">

                      </div>
                    </div>
                  </div>
                  <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#errorlogin" data-toggle="tab" aria-expanded="false">Pengguna melakukan Kesalahan Login</a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="errorlogin">

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
        </div>
        <!-- /.content-wrapper -->

<?php $this->load->view('admin/includes/footer')?>
<script type="text/javascript">
  function load_error_login(){
    show_ajax('POST','<?php echo base_url('admin/failed_login_users')?>',null,'html','#errorlogin');
  }
  function load_jadwal(){
    show_ajax('POST','<?php echo base_url('admin/waktu_index')?>',null,'html','#jadwalinput');
  }
  function load_jadwal_view(){
    show_ajax('POST','<?php echo base_url('admin/waktu_view')?>',null,'html','#jadwalinputview');
  }
  function add_jadwal(){
    data={judul:'Tambah Jadwal Baru',name:' '};
    modal_ajax(data,'POST','<?php echo base_url('admin/add_jadwal')?>','html','#preview',0);
  }
  function edit_jadwal(id){
    $("#tombol").html('');
    data={id:id,judul:'Perbarui Jadwal ',name:' '};
    modal_ajax(data,'POST','<?php echo base_url('admin/edit_jadwal')?>','html','#preview',0);
  }
  function refresh_jadwal(){
    load_jadwal_view();
  }
  
  function confirm_jadwal(){
    var data = $("#selectionwaktu").serializeArray();
    var judul= 'Konfirmasi Penghapusan';
    var name = 'Beberapa Data';
    var b = [];
    var j=1;
    jQuery.each( data, function( i, data ) {
      b.push(data.value);
      if(j==1){
        b.pop();
      }
      j++;
    });
    a={data:b,judul:judul,name:name};
    $("#tombol").html('');
    modal_ajax(a,'POST','<?php echo base_url('admin/databeberapajadwal')?>','html','#preview',0);
  }

  function load_akses(){
    show_ajax('POST','<?php echo base_url('admin/akses_index')?>',null,'html','#aksesinput');
  }

  function load_akses_view(){
    show_ajax('POST','<?php echo base_url('admin/akses_view')?>',null,'html','#jadwalaksesview');
  }

  function refresh_akses(){
    load_akses_view();
  }

  function confirm_akses(){
    var data = $("#selectionakses").serializeArray();
    var judul= 'Konfirmasi Pengubahan Status Akses Input Data';
    var name = 'Beberapa User';
    var b = [];
    var j=1;
    jQuery.each( data, function( i, data ) {
      b.push(data.value);
      if(j==1){
        b.pop();
      }
      j++;
    });
    a={data:b,judul:judul,name:name};
    $("#tombol").html('');
    modal_ajax(a,'POST','<?php echo base_url('admin/databeberapaakses')?>','html','#preview',0);
  }

  function load_semua(){
    load_jadwal();
    load_akses();
    load_error_login();    
  }

  load_semua();
</script>