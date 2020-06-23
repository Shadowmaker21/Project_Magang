<?php $this->load->view('includes/head')?>
<link href="<?php echo base_url('includes/library/dropify/dropify.min.css')?>" rel="stylesheet">
<div class="wrapper">
    <?php $this->load->view('includes/menu')?>
    <div class="content-wrapper" style="min-height: 2014px;">
       	<section class="content-header">
          <h1>
            <i class="fa fa-bullhorn text-info"></i> Link Terkait
          </h1>
          <ol class="breadcrumb">
            <li class="">Dashboard</li>
            <li class="active">Link Terkait</li>
          </ol>
          <br>
          <div class="row">
            <div class="col-sm-12">
              <div class="box">
                <div class="box-header with-border">
	                <h3 class="box-title"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Link Terkait</h3>
	                <div class="box-title pull-right">
	                </div>
                </div>
                <div class="box-body" id="dt_w">
                  <div class="row">
                    <div class="col-xs-6">
                      <?php echo form_open_multipart('link_terkait/link_terkait_upload');?>
                        <?php if(!empty($message)) echo $message; ?>
                        <div class="form-group">
                          <label>Link</label>
                          <input type="text" class="form-control" name="link" required id="link" placeholder="Tautkan Link">
                        </div>
                        <div class="form-group">
                          <label>Deskripsi</label>
                          <input type="text" class="form-control" name="deskripsi" required id="deskripsi" placeholder="Deskripsi">
                        </div>
                        <div class="form-group">
                          <label>File Gambar</label>
                          <input type="file" name="gambar" required class="dropify" data-height="100" data-max-file-size="3M" data-allowed-file-extensions="jpg png jpeg">
                        </div>
                        <div class="input-group">
                          <span class="input-group-btn">
                            <button type="submit" class="btn btn-info btn-flat">Upload</button>
                          </span>
                        </div>
                      </form>
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

    </script>