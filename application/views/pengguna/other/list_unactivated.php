<?php $this->load->view('pengguna/includes/head')?>
    
<body class="skin-red-light sidebar-mini">
    <div class="wrapper">
        <?php $this->load->view('pengguna/includes/menu')?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 916px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1><i class="fa fa-laptop"></i> Daftar Pengguna</h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li><a href="#"><i class="fa fa-laptop"></i> Daftar Pengguna</a></li>
                    <li class="active">Pengguna Tidak Aktif</li>
                </ol>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                       
                        <div class="box box-danger">
                            <div class="box-header with-border" style="color:#dd4b39">
                                <h3 class="box-title"><i class="zmdi zmdi-account-circle zmdi-hc-fw"></i> Pengguna (Tidak Aktif > 31 Hari)</h3>
                                <div class="box-title pull-right">
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive" style="overflow: auto;">
                                    <table id="grid-data" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th data-column-id="no">No</th>
                                                <th data-column-id="grup">Email</th>
                                                <th data-column-id="block">User Group</th>
                                                <th data-column-id="isgrup">Status</th>
                                            </tr>
                                        </thead>
                                        <?php if (!empty($users)) { ?>
                                        <tbody>
                                            <?php foreach ($users as $user) { ?>
                                                <tr>
                                                 <td><center><?php echo $i++; ?></center></td>
                                                <td><?php echo $user[$this->flexi_auth->db_column('user_acc', 'email')];?></td>
                                                <td class="align_ctr">
                                                    <?php echo $user[$this->flexi_auth->db_column('user_group', 'name')];?>
                                                </td>
                                                <td class="align_ctr">
                                                <?php echo ($user[$this->flexi_auth->db_column('user_acc', 'active')] == 1) ? 'Active' : 'Inactive';?>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="5">
                                                    <input type="submit" name="delete_unactivated" value="Delete Listed Users" class="btn btn-success btn-sm"/>
                                                </td>
                                            </tr>
                                        </tfoot>
                                        <?php } else { ?>
                                        <tbody>
                                            <tr>
                                                <td colspan="4" class="highlight_red">
                                                    <center>No users are available.</center>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->

<?php $this->load->view('pengguna/includes/footer')?>
<script type="text/javascript">
    function init(){
        $("#grid-data").bootgrid({
            selection: true,
            multiSelect: true
        });
    }
    init();
    $(".search").addClass('col-sm-6');
</script>