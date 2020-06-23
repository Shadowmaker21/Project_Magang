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
                                    <span class="breadcrumb-item active">Download</span>
                                </nav>
                                <br>
                                <h3 class="font-bold">DOWNLOAD</h3>
                                <p>Cari file yang anda butuhkan disini.</p>
                                <ul class="nav nav-pills m-t-30 justify-content-start m-b-30">
                                    <?php $i=1;foreach($download as $data){ ?>
                                        <li class=" nav-item"> <a href="#<?php echo $data->nama ?>" class="nav-link <?php if($i == 3){ echo 'active'; } ?>" data-toggle="tab" aria-expanded="false"><?php echo ucwords($data->nama) ?></a> </li>
                                    <?php $i++; } ?>
                                </ul>
                                <div class="tab-content br-n pn">
                                    <?php $j=1;foreach($download as $data){ ?>
                                    <div id="<?php echo $data->nama ?>" class="tab-pane <?php if($j == 3){ echo 'active'; } ?>" aria-expanded="false">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table table-bordered">
                                                    <thead class="newfont">
                                                        <tr>
                                                            <th>Nomor</th>
                                                            <th><?php echo ucwords($data->nama) ?></th>
                                                            <th>Deskripsi</th>
                                                            <th>File Size</th>
                                                            <th>Download</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                        <?php $a=1;foreach($data->data as $datar){ ?>
                                                            <td><?php echo $a++; ?></td>    
                                                            <td><?php echo ucwords($datar->nama); ?></td>
                                                            <td><?php echo ucwords(strtolower($datar->deskripsi)) ?></td>
                                                            <td><?php echo round(($datar->file_size/1024),2).' MB'; ?> <span class="badge badge-pill badge-success"><?php echo $datar->n_download.' download'; ?></span></td>
                                                            <td><a onclick="downloaded(<?php echo $datar->id?>)"><button type="button" class="btn btn-info btn-circle"><i class="fa fa-download"></i> </button></a></td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $j++; } ?>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php $this->load->view('home/includes/footer') ?>
        <script type="text/javascript">
            function downloaded(id){
                data={id:id};
                location.href="<?php echo base_url('home/download_file')?>"+"/"+id;
            }
        </script>