<?php $this->load->view('includes/head')?>
<link href="<?php echo base_url('includes/library/dropify/dropify.min.css')?>" rel="stylesheet">
<div class="wrapper">
    <?php $this->load->view('includes/menu')?>
    <div class="content-wrapper" style="min-height: 2014px;">
       	<section class="content-header">
          <h1>
            <i class="fa fa-cloud-upload text-purple"></i> Download
          </h1>
          <ol class="breadcrumb">
            <li class="">Dashboard</li>
            <li class="active">Download</li>
          </ol>
          <br>
          <div class="row">
            <div class="col-sm-12">
              <div class="box">
                <div class="box-header with-border">
	                <h3 class="box-title"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Download</h3>
	                <div class="box-title pull-right">
	                </div>
                </div>
                <div class="box-body" id="dt_w">
                  <div class="row">
                    <div class="col-xs-2"></div>
                    <div class="col-xs-8">
                      <ol class="breadcrumb">
                        <li class=""><a href="<?php echo base_url('download') ?>">Download</a></li>
                        <li class="active">Edit File Download</li>
                      </ol>
                      <?php $attribut = array('name' => 'editdownload', 'type' => 'POST') ?>
                            <?php echo form_open_multipart('download/edit/'.$d->id.'',$attribut);?>
                        <?php if(!empty($message)) echo $message; ?>
                        <div class="form-group  <?php $error = form_error('tipe'); echo !empty($error) ? 'has-error': ''; ?>">
                          <label>Tipe Dokumen</label>
                          <select class="form-control" name="tipe" required id="tipe">
                            <option value="">Pilih Jenis</option>
                            <?php foreach($w as $data){ ?>
                              <option value="<?php echo $data->id?>" <?php if($d->download_jenis==$data->id){echo 'selected';} ?>><?php echo ucwords($data->nama) ?></option>
                            <?php } ?>
                          </select>
                          <?php echo form_error('tipe') ?>
                        </div>
                        <div class="form-group <?php $error = form_error('macam'); echo !empty($error) ? 'has-error': ''; ?>">
                          <label>Macam Dokumen</label>
                          <select class="form-control" name="macam" required id="macam">
                            <option value="">Pilih Jenis</option>
                            <?php foreach($m as $data){ ?>
                              <option value="<?php echo $data->id_download_macam?>" <?php if($d->download_macam==$data->id_download_macam){echo 'selected';} ?>><?php echo ucwords($data->nama_jenis_peraturan) ?></option>
                            <?php } ?>
                          </select>
                          <?php echo form_error('macam') ?>
                        </div>
                        <div class="form-group  <?php $error = form_error('nama'); echo !empty($error) ? 'has-error': ''; ?>">
                          <label>Nama File</label>
                          <input type="hidden" class="form-control" name="id" required id="id" value="<?php echo $d->id ?>">
                          <input type="text" class="form-control" name="nama" required id="nama" placeholder="Nama download" value="<?php echo $d->nama ?>">
                          <?php echo form_error('nama') ?>
                        </div>
                        <div class="form-group  <?php $error = form_error('deskripsi'); echo !empty($error) ? 'has-error': ''; ?>">
                          <label>Deskripsi</label>
                          <input type="text" class="form-control" name="deskripsi" required id="deskripsi" placeholder="Deskripsi" value="<?php echo $d->deskripsi; ?>">
                          <?php echo form_error('deskripsi') ?>
                        </div>
                        <h5>Checklist Pilihan Dibawah:</h5>
                        <div class="form-group">
                            <div class="radio">
                                <label>
                                  <input type="radio" name="ulang" id="ulang" value="1">
                                  Saya akan upload ulang file
                                </label>
                                <label>
                                  <input type="radio" name="ulang" id="ulang" value="2" checked>
                                  Saya tidak ingin upload ulang file
                                </label>
                            </div>
                        </div>
                        <div id="uploadulang">
                        <div class="form-group">
                          <label>File download</label>
                          <input type="file" name="download" id="download" class="dropify" data-height="100">
                        </div>
                        </div>
                        <div class="input-group">
                          <span class="input-group-btn">
                            <input type="submit" name="simpan" id="simpan" class="btn btn-lg bg-green" value="Simpan">
                          </span>
                        </div>
                      </form>
                    </div>
                    <div class="col-xs-2"></div>
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
       $("#tipe").on('change',function(){
          data={id:$(this).val()};
          show_ajax('POST','<?php echo base_url('download/field_macam')?>',data,'html','#macam');
        });
      });
      $("#uploadulang").hide();
      $("input[name='ulang']").on( "click", function() {
        if($(this).val() == 1){
          setTimeout(function() {
            $("#uploadulang").show('slideUp');
          }, 500 );
        } else {
          setTimeout(function() {
            $("#uploadulang").hide('slideDown');
          }, 500 );
        }
      });
    </script>