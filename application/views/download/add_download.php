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
                        <li class="active">Tambah File Download</li>
                      </ol>
                      <?php echo form_open_multipart('download/download_upload');?>
                        <?php if(!empty($message)) echo $message; ?>
                        <div class="form-group">
                          <label>Tipe Dokumen</label>
                          <select class="form-control" name="tipe" required id="tipe">
                            <option value="">Pilih Jenis</option>
                            <?php foreach($w as $data){ ?>
                              <?php if($user['uacc_group_fk'] == 7){?>
                                <?php if($data->id == 2){ ?>
                                  <option value="<?php echo $data->id?>"><?php echo ucwords($data->nama) ?></option>
                                <?php } ?>
                                <?php } else { ?> 
                                <option value="<?php echo $data->id?>"><?php echo ucwords($data->nama) ?></option>
                                <?php } ?>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Macam Dokumen</label>
                          <select class="form-control" name="macam" required id="macam">
                            <option value="">Pilih Jenis</option>
                            <div id="placemacam"></div>
                          </select>
                        </div>
						<div class="form-group">
                          <label>Macam Dokumen 1</label>
                          <select class="form-control" name="macam" required id="macam">
                            <option value="">Pilih Jenis</option>
                            <div id="placemacam"></div>
                          </select>
                        </div>
                        <div class="row">
                          <div class="col-xs-12">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Bidang</label>
                              <?php foreach($sotk as $data){ ?>
                              <div class="col-xs-12">
                                <input type="radio" <?php if($user['uacc_group_fk'] == 7){ if($data->id == $user['uacc_bidang']) { echo 'checked="checked"'; } else { echo 'disabled="disabled"'; } }?> class="bidang" id="bidang" value="<?php echo $data->id ?>" name="bidang"> <?php echo ucwords(strtolower($data->bidang)) ?>
                              </div>
                              <?php } ?>
                              <br>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="form-group">
                          <label>Nama File</label>
                          <input type="text" class="form-control" name="nama" required id="nama" placeholder="Nama download">
                        </div>
                        <div class="form-group">
                          <label>Deskripsi</label>
                          <input type="text" class="form-control" name="deskripsi" required id="deskripsi" placeholder="Deskripsi">
                        </div>
                        <div class="form-group">
                          <label>File download</label>
                          <!-- <input type="file" name="download" required class="dropify" data-height="100" data-max-file-size="30M" data-allowed-file-extensions="pdf zip rar"> -->
                          <input type="file" name="download" id="download" class="dropify" data-height="100">
                        </div>
                        <div class="input-group">
                          <span class="input-group-btn">
                            <button type="submit" class="btn bg-green btn-lg">Simpan</button>
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

    </script>