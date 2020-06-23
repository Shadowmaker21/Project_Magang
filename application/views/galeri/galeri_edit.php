<?php $this->load->view('includes/head')?>
<link href="<?php echo base_url('includes/library/dropify/dropify.min.css')?>" rel="stylesheet">
<div class="wrapper">
    <?php $this->load->view('includes/menu')?>
    <div class="content-wrapper" style="min-height: 2014px;">
       	<section class="content-header">
          <h1>
            <i class="fa fa-bullhorn text-info"></i> <?php echo $judul; ?>
          </h1>
          <ol class="breadcrumb">
            <li class="">Dashboard</li>
            <li class="active"><?php echo $judul ?></li>
          </ol>
          <br>
          <div class="row">
            <div class="col-sm-12">
              <div class="box">
                <div class="box-header with-border">
	                <h3 class="box-title"><i class="fa fa-folder-open-o" aria-hidden="true"></i> <?php echo $judul ?></h3>
	                <div class="box-title pull-right">
	                </div>
                </div>
                <div class="box-body" id="dt_w">
                  <div class="row">
                    <div class="col-xs-2"></div>
                    <div class="col-xs-8">
                      <ol class="breadcrumb">
                        <li class=""><a href="<?php echo base_url('galeri') ?>">Galeri</a></li>
                        <li class="active">Edit Foto</li>
                      </ol>
                      <?php $attribut = array('name' => 'addgaleri', 'type' => 'POST') ?>
                            <?php echo form_open_multipart('galeri/galeri_edit/'.$galeri->id.'',$attribut);?>
                        <?php if(!empty($message)) echo $message; ?>
                        <div class="form-group <?php $error = form_error('album'); echo !empty($error) ? 'has-error': ''; ?>">
                          <label>Album <span class="text-red">*)</span></label>
                          <select class="form-control" id="album" name="album">
                            <option value="">Pilih Album</option>
                            <?php foreach($album as $data){ ?>
                              <option <?php if($data->id == $galeri->id_album){ echo 'selected';} ?> value="<?php echo $data->id ?>"><?php echo $data->album ?></option>
                            <?php } ?>
                          </select>
                          <?php echo form_error('album') ?>
                        </div>
                        <div class="form-group <?php $error = form_error('judul'); echo !empty($error) ? 'has-error': ''; ?>">
                          <label>Judul <span class="text-red">*)</span></label>
                          <input type="text" class="form-control" placeholder="Masukan judul foto" id="judul" name="judul" value="<?php echo $galeri->judul?>" autofocus>
                          <?php echo form_error('judul') ?>
                        </div>
                        <div class="form-group <?php $error = form_error('deskripsi'); echo !empty($error) ? 'has-error': ''; ?>">
                          <label>Deskripsi <span class="text-red">*)</span></label>
                          <input type="text" class="form-control" placeholder="Masukan deskripsi foto" id="deskripsi" name="deskripsi" value="<?php echo $galeri->deskripsi?>" autofocus>
                          <?php echo form_error('deskripsi') ?>
                        </div>
                        <h5>Checklist Pilihan Dibawah:</h5>
                        <div class="form-group">
                            <div class="radio">
                                <label>
                                  <input type="radio" name="ulang" id="ulang" value="1">
                                  Saya akan upload ulang foto
                                </label>
                                <label>
                                  <input type="radio" name="ulang" id="ulang" value="2" checked>
                                  Saya tidak ingin upload ulang foto
                                </label>
                            </div>
                        </div>
                        <div id="uploadulang">
                        <div class="form-group">
                          <label>Ketentuan File Gambar</label>
                          <ul>
                            <li>Maksimal 10 MB</li>
                            <li>Jenis File hanya jpeg | jpg | png</li>
                          </ul>
                        </div>
                        <div class="form-group">
                          <label>File Gambar</label>
                          <input type="hidden" name="id" id="id" value="<?php echo $galeri->id; ?>">
                          <input type="file" name="gambar" class="dropify" data-height="100" data-max-file-size="3M" data-allowed-file-extensions="jpg png jpeg">
                        </div>
                        </div>
                        
                        <div class="input-group">
                          <span class="input-group-btn">
                            <input type="submit" name="simpan" id="simpan" class="btn bg-green btn-lg" value="Simpan">
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

      });

    </script>