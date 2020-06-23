<?php $this->load->view('includes/head')?>
<link href="<?php echo base_url('includes/library/dropify/dropify.min.css')?>" rel="stylesheet">
<div class="wrapper">
    <?php $this->load->view('includes/menu')?>
    <div class="content-wrapper" style="min-height: 2014px;">
       	<section class="content-header">
          <h1>
            <?php echo $icon ?> <?php echo $judul ?>
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
	                <h3 class="box-title"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Banner Depan</h3>
	                <div class="box-title pull-right">
	                </div>
                </div>
                <div class="box-body" id="dt_w">
                  <div class="row">
                    <div class="col-xs-2"></div>
                    <div class="col-xs-8">
                      <ol class="breadcrumb">
                        <li class=""><a href="<?php echo base_url('carousel') ?>">Banner Depan</a></li>
                        <li class="active">Tambah Banner Depan</li>
                      </ol>
                      <?php $attribut = array('name' => 'addcarousel', 'type' => 'POST') ?>
                            <?php echo form_open_multipart('carousel/carousel_add',$attribut);?>
                        <?php if(!empty($message)) echo $message; ?>
                        <div class="form-group <?php $error = form_error('judul'); echo !empty($error) ? 'has-error': ''; ?>">
                          <label>Headline <span class="text-red">*)</span></label>
                          <input type="text" class="form-control" placeholder="Masukan headline foto" id="judul" name="judul" value="<?php echo set_value('judul')?>" autofocus>
                          <?php echo form_error('judul') ?>
                        </div>
                        <div class="form-group <?php $error = form_error('deskripsi'); echo !empty($error) ? 'has-error': ''; ?>">
                          <label>Keterangan <span class="text-red">*)</span></label>
                          <input type="text" class="form-control" placeholder="Masukan keterangan headline" id="deskripsi" name="deskripsi" value="<?php echo set_value('deskripsi')?>" autofocus>
                          <?php echo form_error('deskripsi') ?>
                        </div>
                        <div class="form-group">
                          <label>Ketentuan File Gambar</label>
                          <ul>
                            <li>Maksimal 10 MB</li>
                            <li>Jenis File hanya jpeg | jpg | png</li>
                          </ul>
                        </div>
                        <div class="form-group">
                          <label>File Gambar</label>
                          <input type="file" name="gambar" class="dropify" data-height="100" data-max-file-size="10M" data-allowed-file-extensions="jpg png jpeg">
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

      });

    </script>