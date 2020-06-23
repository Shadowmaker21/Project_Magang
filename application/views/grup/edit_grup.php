<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
        <div class="header">
            <h2>
                DATA GRUP
            </h2>
            <ul class="header-dropdown m-r--5">
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">more_vert</i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);" onclick="add_grup('defaultModal','green')">Tambah Grup</a></li>
                    </ul>
                </li>
            </ul>
        </div>  
        <div class="body">
            <form class="form-horizontal" id="newgrup" method="POST" action="<?php echo base_url('grup/update_grup')?>">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label for="email_address_2">Nama Grup</label>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="name" name="name" class="form-control" placeholder="admin" required autofocus value="<?php echo $grup->ugrp_name?>">
                                <input type="hidden" id="id" name="id" required value="<?php echo $grup->ugrp_id?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 form-control-label">
                        <label for="email_address_2">Deskripsi Grup</label>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-5">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="desc" name="desc" class="form-control" placeholder="Admin : has not full admin access rights" required value="<?php echo $grup->ugrp_desc?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-offset-3 col-md-offset-3 col-sm-offset-4 col-xs-offset-5">
                        <button type="submit" class="btn btn-success m-t-15 waves-effect" id="simpan">SIMPAN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {  
      validate_grup('#newgrup');
    });
</script>