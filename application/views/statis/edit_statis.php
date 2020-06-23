<?php $this->load->view('includes/head')?>
<link href="<?php echo base_url('includes/library/dropify/dropify.min.css')?>" rel="stylesheet">
<div class="wrapper">
    <?php $this->load->view('includes/menu')?>
    <div class="content-wrapper" style="min-height: 2014px;">
       	<section class="content-header">
          <h1>
            <i class="fa fa-cloud-upload text-purple"></i> Statis	
          </h1>
          <ol class="breadcrumb">
            <li class="">Dashboard</li>
            <li class="active">Statis</li>
          </ol>
          <br>
          <div class="row">
            <div class="col-sm-12">
              <div class="box">
                <div class="box-header with-border">
	                <h3 class="box-title"><i class="fa fa-folder-open-o" aria-hidden="true"></i> Statis</h3>
	                <div class="box-title pull-right">
	                </div>
                </div>
                <div class="box-body" id="dt_w">
                  <div class="row">
                    <div class="col-xs-2"></div>
                    <div class="col-xs-8">
                      <ol class="breadcrumb">
                        <li class=""><a href="<?php echo base_url('statis') ?>">Statis</a></li>
                        <li class="active">Edit File Statis</li>
                      </ol>
                      <?php $attribut = array('name' => 'editstatis', 'type' => 'POST') ?>
                            <?php echo form_open_multipart('statis/edit/'.$d->id_statis.'',$attribut);?>
                        <?php if(!empty($message)) echo $message; ?>
                        <div class="form-group">
                          <label>Pencipta Arsip</label>
                          <select class="form-control" name="pencipta_arsip" required id="pencipta_arsip">
                            <option value="">Pilih Jenis</option>
                            <?php foreach($a as $data){ ?>
                                <option <?php if($d->id_pencipta_arsip == $data->id_pencipta_arsip){ echo 'selected'; } ?> value="<?php echo $data->id_pencipta_arsip?>"><?php echo ucwords($data->kode) ?><?php echo ucwords($data->nama_pencipta) ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Riwayat</label>
                          <select class="form-control" name="riwayat"  id="riwayat">
                            <option value="">Pilih Data</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Masalah</label>
                          <select class="form-control" name="masalah"  id="masalah">
                            <option value="">Pilih Masalah</option>
                            <?php foreach($b as $data){ ?>
                              <option value="<?php echo $data->id_masalah?>"><?php echo ucwords($data->kode) ?><?php echo ucwords($data->nama_masalah) ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Sub Masalah</label>
                          <select class="form-control" name="sub_masalah"  id="sub_masalah">
                            <option value="">Pilih Sub Masalah</option>
                          </select>
                        </div>
                        <br>
                        <div class="form-group">
                          <label>Kode Pelaksana</label>
                          <input type="text" class="form-control" name="kode_pelaksana" required id="kode_pelaksana" placeholder="Kode Pelaksana" value="<?php echo $d->kode_pelaksana ?>">
                        </div>
            <div class="form-group">
                          <label>Hasil</label>
                          <input type="text" class="form-control" name="hasil" required id="hasil" placeholder="Hasil" value="<?php echo $d->hasil ?>">
                        </div>
                        <div class="form-group">
        
                          <input type="hidden" class="form-control" name="id_statis" required id="id_statis" placeholder="Hasil" value="<?php echo $d->id_statis ?>">
                        </div>
                        <div class="form-group">
                          <label>Jenis Naskah</label>
                          <select class="form-control" name="jenis_naskah" required id="jenis_naskah">
                            <option value="">Pilih Data</option>
                            <?php foreach($e as $data){ ?>
                             <option <?php if($d->id_jenis_naskah == $data->id_jenis_naskah){ echo 'selected'; } ?> value="<?php echo $data->id_jenis_naskah?>"><?php echo ucwords($data->nama_naskah) ?></option>
                            <?php } ?></select>
                        </div>
                        <div class="form-group">
                          <label>Bahasa</label>
                          <select class="form-control" name="bahasa" required id="bahasa">
                            <option value="">Pilih Bahasa</option>
                            <?php foreach($f as $data){ ?>
                              <?php if($user[''] == 7){?>
                                <?php if($data->id == 2){ ?>
                                <option <?php if($d->id_bahasa == $data->id_bahasa){ echo 'selected'; } ?> value="<?php echo $data->id_bahasa?>"><?php echo ucwords($data->nama_bahasa) ?></option>
                                <?php } ?>
                                <?php } else { ?> 
                                <option <?php if($d->id_bahasa == $data->id_bahasa){ echo 'selected'; } ?> value="<?php echo $data->id_bahasa?>"><?php echo ucwords($data->nama_bahasa) ?></option>
                                <?php } ?>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Indeks</label>
                          <input type="text" class="form-control" name="indeks" required id="indeks" placeholder="Indeks" value="<?php echo $d->indeks ?>">
                        </div>
            <div class="form-group">
                          <label>Isi</label>
                          <input type="text" class="form-control" name="isi" required id="isi" placeholder="isi" value="<?php echo $d->isi ?>">
                        </div>
            <div class="form-group">
                          <label>Media</label>
                          <select class="form-control" name="media" required id="media">
                            <option value="">Pilih Media</option>
                            <?php foreach($g as $data){ ?>
                              <?php if($user[''] == 7){?>
                                <?php if($data->id == 2){ ?>
                                <option <?php if($d->id_media == $data->id_media){ echo 'selected'; } ?> value="<?php echo $data->id_media?>"><?php echo ucwords($data->nama_media) ?></option>
                <?php } ?>
                <?php } else { ?> 
                <option <?php if($d->id_media == $data->id_media){ echo 'selected'; } ?> value="<?php echo $data->id_media?>"><?php echo ucwords($data->nama_media) ?></option>
                                <?php } ?>
                            <?php } ?>
              </select>
                        </div>
            <div class="form-group">
                          <label>Tingkat Perkembangan</label>
                          <select class="form-control" name="tingkat_perkembangan" required id="tingkat_perkembangan">
                            <option value="">Pilih Tingkat Perkembangan</option>
                            <?php foreach($h as $data){ ?>
                              <?php if($user[''] == 7){?>
                                <?php if($data->id == 2){ ?>
                                <option <?php if($d->id_tingkat_perkembangan == $data->id_tingkat_perkembangan){ echo 'selected'; } ?> value="<?php echo $data->id_tingkat_perkembangan?>"><?php echo ucwords($data->nama_tingkatperkembangan) ?></option>
                                <?php } ?>
                                <?php } else { ?> 
                                <option <?php if($d->id_tingkat_perkembangan == $data->id_tingkat_perkembangan){ echo 'selected'; } ?> value="<?php echo $data->id_tingkat_perkembangan?>"><?php echo ucwords($data->nama_tingkatperkembangan) ?></option>
                                <?php } ?>
                            <?php } ?>
              </select>
                        </div>
                        <div class="form-group">
                          <label>File download</label>
                          <!-- <input type="file" name="download" required class="dropify" data-height="100" data-max-file-size="30M" data-allowed-file-extensions="pdf zip rar"> -->
                          <input type="file" name="download" id="download" class="dropify" data-height="100">
                          <input type="text" name="id_user" id="id_user" value="<?php echo $user['uacc_id']?>">
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

       $("#pencipta_arsip").on('change',function(){
          data={id:$(this).val()};
          show_ajax('POST','<?php echo base_url('statis/field_riwayat')?>',data,'html','#riwayat');
        });
       $("#riwayat").on('change',function(){
          data={id:$(this).val()};
          show_ajax('POST','<?php echo base_url('statis/field_masalah')?>',data,'html','#masalah');
        });
       $("#masalah").on('change',function(){
          data={id:$(this).val()};
          show_ajax('POST','<?php echo base_url('statis/field_submasalah')?>',data,'html','#sub_masalah');
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