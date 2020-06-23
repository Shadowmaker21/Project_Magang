<?php $this->load->view('home/includes/head') ?>
    <?php $this->load->view('home/includes/menu') ?>
<div class="page-wrapper">
            <div class="container">
                <div class="row m-t-10">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <nav class="breadcrumb">
                                    <a class="breadcrumb-item" href="<?php echo base_url('')?>">Beranda</a>
                                    <span class="breadcrumb-item"><?php echo ucwords(strtolower($judul)) ?></span>
                                </nav>
                                <br>
                                <h3 class="font-bold"><?php echo strtoupper($judul) ?></h3>
                                <p><?php echo $data->isi; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php $this->load->view('home/includes/footer') ?>

