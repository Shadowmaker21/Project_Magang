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
            <li class="active">Berita</li>
          </ol>
          <br>
          <div class="row">
            <div class="col-sm-12">
              <div class="box">
                <div class="box-header with-border">
	                <h3 class="box-title"><i class="fa fa-folder-open-o" aria-hidden="true"></i> List Berita</h3>
	                <div class="box-title pull-right">
	                </div>
                </div>
                <div class="box-body" id="dt_w">
                  <div class="row">
                    <div class="col-xs-6">
                      <table class="table table-bordered" id="table">
                        <thead class="newfont">
                          <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Size</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i=1;foreach($gambar as $data){ ?>
                            <tr>
                              <td><?php echo $i++; ?></td>
                              <td><img class="img-thumbnail" style="width:300px;height:150px" src="<?php echo base_url('includes/images/berita/'.$data->file_name.'')?>"></td>
                              <td><?php echo $data->file_size ?></td>
                              <td><a href="" class="btn btn-sm bg-red"><i class="fa fa-trash"></i></a></td>
                            </tr>
                          <?php } ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Size</th>
                            <th>Aksi</th>
                          </tr>
                        </tfoot>
                      </table>
    			          </div>
                    <div class="col-xs-6">
                      <?php echo form_open_multipart('berita/berita_upload');?>
                        <?php if(!empty($message)) echo $message; ?>
                        <div class="form-group">
                          <label>File Gambar</label>
                          <input type="hidden" id="id" name="id" value="<?php echo $d->id_list_berita?>">
                          <input type="file" name="gambar" required class="dropify" data-height="100" data-max-file-size="3M" data-allowed-file-extensions="jpg jpeg png">
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
       $(function () {
        $('#table').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "columnDefs": [
          { "width": "2%", "targets": 0 },
          { "width": "20%", "targets": 1 },
          { "width": "11%", "targets": 2 },
          { "width": "2%", "targets": 3 }
        ]
        });
      });
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

      function load_cascading(){



        show_ajax('POST','<?php echo base_url('admin_skpd/cascading_view')?>',null,'html','#place');



      }

      //load_cascading();

      //new WOW().init();

      function show_file(id){

        data={id:id,judul:'Detail Berkas',name:' '};

        $("#tombol").html('');

        modal_ajax(data,'POST','<?php echo base_url('admin_skpd/show_file')?>','html','#preview',0);

      }

      function askhapus_cascading(id){



        data={judul:'Rencana Strategis',name:' ',id:id};



        $("#tombol").html('');



        modal_ajax(data,'POST','<?php echo base_url('admin_skpd/askhapus_cascading')?>','html','#preview',0);



      }

    </script>