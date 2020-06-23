<?php $this->load->view('includes/head')?>
<link href="<?php echo base_url('includes/library/dropify/dropify.min.css')?>" rel="stylesheet">
<div class="wrapper">
    <?php $this->load->view('includes/menu')?>
    <div class="content-wrapper" style="min-height: 2014px;">
       	<section class="content-header">
          <h1>
            <i class="fa fa-newspaper-o text-success"></i> Berita
          </h1>
          <ol class="breadcrumb">
            <li class="">Dashboard</li>
            <li class="">Berita</li>
            <li class="active">Tambah Gambar</li>
          </ol>
          <br>
          <div class="row">
            <div class="col-sm-12">
              <div class="box">
                <div class="box-header with-border">
	                <h3 class="box-title"><i class="fa fa-folder-open-o" aria-hidden="true"></i> List Berita</h3>
	                <div class="box-tools pull-right">
	                </div>
                </div>
                <div class="box-body">
                  <div class="row">
                    <input type="hidden" name="idber" id="idber" value="<?php echo $d->id_berita ?>">
                    <div class="col-xs-7" id="dt_w">
                      
    			          </div>
                    <div class="col-xs-5">
                      <ol class="breadcrumb">
                        <li class=""><a href="<?php echo base_url('berita') ?>">Berita</a></li>
                        <li class="active">Detail Berita</li>
                      </ol>
                      <?php if($message){?>
                        <script type="text/javascript">
                          izitoast("<?php echo $message['jenis'] ?>","<?php echo $message['title'] ?>","<?php echo $message['message'] ?>",' ','topCenter');
                        </script>
                      <?php } ?>
                      <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Tambah Gambar</a></li>
                          <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Detail Berita</a></li>
                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane active" id="tab_1">
                            <div class="box box-solid">
                              <div class="box-header with-border">
                                <h3 class="box-title">Gambar Terkait Berita</h3>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body">
                                <?php $attribut = array('name' => 'tambaharsip', 'type' => 'POST') ?>
                                <?php echo form_open_multipart('berita/berita_upload',$attribut);?>
                                  <div class="form-group">
                                    <div class="col-md-12">
                                      <input type="radio" class="tampil" id="tampil" value="1" name="tampil"> Tetapkan Sebagai Gambar Utama
                                    </div>
                                    <div class="col-md-12">
                                      <input type="radio" class="tampil" id="tampil" value="0" name="tampil" checked="checked"> Tetapkan Sebagai Gambar Pelengkap
                                    </div>
                                  </div>
                                  <br><br><br>
                                  <div class="form-group">
                                    <label>Ketentuan File Gambar</label>
                                    <ul>
                                      <li>Maksimal 10 Mb</li>
                                      <li>Jenis File hanya jpeg | jpg | png</li>
                                    </ul>
                                  </div>
                                  <div class="form-group">
                                    <label>File Gambar</label>
                                    <input type="hidden" id="id" name="id" value="<?php echo $d->id_berita?>">
                                    <input type="file" name="gambar" required class="dropify" data-height="100" data-max-file-size="10M" data-allowed-file-extensions="jpg jpeg png">
                                  </div>
                                  <div class="input-group">
                                    <span class="input-group-btn">
                                      <button type="submit" class="btn bg-green btn-lg">Simpan</button>
                                    </span>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane" id="tab_2">
                            <div class="box box-solid">
                              <div class="box-header with-border">
                                <h3 class="box-title">Detail Berita</h3>
                                <div class="box-tools">
                                  <span class="pull-right badge bg-light-blue"> Hits <?php echo $d->n_read; ?></span>
                                  <span class="pull-right badge bg-navy"> Comments <?php echo $d->n_comment; ?></span>
                                </div>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body">

                                <h4><b><?php echo $d->judul; ?></b></h4>
                                <h4><?php echo $d->isi; ?></h4>
                              </div>
                            </div>
                          </div>
                        </div>                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    </div>
	<?php $this->load->view('includes/footer')?>     
    <script src="<?php echo base_url('includes/library/dropify/dropify.min.js')?>"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.dropify').dropify({
          messages: {
            default: 'Drag atau drop untuk memilih file',
            replace: 'Ganti',
            remove:  'Hapus',
            error:   'error'
          }
       });
      });
      function ubahstatus(id){
        var data = {id:id};
        submit_ajax_function('POST','<?php echo base_url('berita/ubahstatus')?>',data,'json','#preview',23);
      }
      function refresh_list_gambar(){
        var data = {id:$("#idber").val()};
        show_ajax('POST','<?php echo base_url('berita/gambar_view')?>',data,'html','#dt_w');
      }
      refresh_list_gambar();
      function show_file(id){
        data={id:id,judul:'Detail Berkas',name:' '};
        $("#tombol").html('');
        modal_ajax(data,'POST','<?php echo base_url('admin_skpd/show_file')?>','html','#preview',0);
      }

      function confirm_delete_gambar(id){
        data={judul:'Konfirmasi Penghapusan Gambar',name:' ',id:id};
        modal_ajax(data,'POST','<?php echo base_url('berita/confirm_gambar_delete')?>','html','#preview',2);
      }
    </script>