<?php $this->load->view('includes/head')?>
<div class="wrapper">
    <?php $this->load->view('includes/menu')?>
    <div class="content-wrapper" style="min-height: 2014px;">
        <section class="content-header">
            <h1>
                <?php echo $icon ?> <?php echo $judul ?>
            </h1>
            <ol class="breadcrumb">
                <li class="">Dashboard</li>
                <li class="active"><?php echo ucwords($judul) ?></li>
            </ol>
            <br>
            <div class="row">
                <div class="col-sm-12">
                   <div class="box">
                      <div class="box-header with-border">
                          <h3 class="box-title"> <i class="fa fa-folder-open-o" aria-hidden="true"></i> List <?php echo $judul ?></h3>
                          <div class="box-tools pull-right">
                                <a href="<?php echo base_url('carousel/carousel_add') ?>" class="btn bg-green"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah</a>
                          </div>
                      </div>
                      <div class="box-body">
                        <?php if($message){?>
                            <script type="text/javascript">
                                izitoast("<?php echo $message['jenis'] ?>","<?php echo $message['title'] ?>","<?php echo $message['message'] ?>",' ','topCenter');
                            </script>
                        <?php } ?>
                        <div id="dt_w">
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
  <?php $this->load->view('includes/footer')?>     
    <script type="text/javascript">
        function refresh_carousel(){
            show_ajax('POST','<?php echo base_url('carousel/carousel_view')?>',null,'html','#dt_w');
        }
        function add_carousel(){
            data={judul:'Tambah <?php echo $judul ?>',name:' '};
            modal_ajax(data,'POST','<?php echo base_url('carousel/carousel_add')?>','html','#preview',2);
        }
        function edit_carousel(id){
            data={judul:'Edit <?php echo $judul ?>',name:' ',id:id};
            modal_ajax(data,'POST','<?php echo base_url('carousel/carousel_edit')?>','html','#preview',2);
        }
        function confirm_carousel(id){
            data={judul:'Konfirmasi Penghapusan Foto <?php echo $judul ?>',name:' ',id:id};
            modal_ajax(data,'POST','<?php echo base_url('carousel/confirm_carousel_delete')?>','html','#preview',2);
        }
        refresh_carousel();
    </script>