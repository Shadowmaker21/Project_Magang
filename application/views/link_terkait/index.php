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
                          <h3 class="box-title"><i class="fa fa-folder-open-o"></i> List <?php echo $judul ?></h3>
                          <div class="box-tools pull-right">
                                <a href="<?php echo base_url('link_terkait/link_terkait_add') ?>" class="btn bg-green"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Tambah</a>
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
        function refresh_link_terkait(){
            show_ajax('POST','<?php echo base_url('link_terkait/link_terkait_view')?>',null,'html','#dt_w');
        }
        function confirm_link_terkait(id){
            data={judul:'Konfirmasi Penghapusan <?php echo $judul ?>',name:' ',id:id};
            modal_ajax(data,'POST','<?php echo base_url('link_terkait/confirm_link_terkait_delete')?>','html','#preview',2);
        }
        function delete_link_terkait(id){
            data={id:id,judul:'Delete <?php echo $judul ?>',name:' '};
            submit_ajax_function('POST','<?php echo base_url('link_terkait/link_terkait_delete')?>',data,'json','#preview',22);
        }
        refresh_link_terkait();
    </script>