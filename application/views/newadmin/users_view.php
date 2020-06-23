<?php $this->load->view('admin/includes/head')?>
    
<body class="skin-blue sidebar-mini">
    <div class="wrapper">
        <?php $this->load->view('admin/includes/menu')?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 916px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Daftar Pengguna</h2>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-dashboard"></i> Dashboard</li>
                            <li class="active"><i class="fa fa-dashboard"></i> <?php echo $page_title;?></li>
                        </ol>
                        <div class="box box-default">
                            <div class="box-header with-border">
                                <h3 class="box-title"><i class="zmdi zmdi-account-circle zmdi-hc-fw" style="color:#03A9F4"></i> <?php echo $page_title;?></h3>
                                <div class="box-title pull-right">
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive" style="overflow: auto;">
                                    <table id="grid-data" class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                               <th>No</th>
                                               <th style="width:30%" data-column-id="grup">Email</th>
                                               <th data-column-id="block">User Group</th>
                                               <?php if (isset($status) && $status == 'failed_login_users') { ?>
                                                    <th data-column-id="failed">Failed Attempts</th>
                                                <?php } ?>
                                               <th data-column-id="isgrup">Status</th>
                                            </tr>
                                        </thead>
                                        <?php if (!empty($users)) { ?>
                                        <tbody>
                                        <?php $i=1;foreach($users as $user) { ?>
                                            <tr>
                                                <td><center><?php echo $i++; ?></center></td>
                                                <td><?php echo $user[$this->flexi_auth->db_column('user_acc', 'email')];?></td>
                                                <td class="align_ctr">
                                                    <?php echo $user[$this->flexi_auth->db_column('user_group', 'name')];?>
                                                </td>
                                                <?php if (isset($status) && $status == 'failed_login_users') { ?>
                                                    <td class="align_ctr">
                                                        <?php echo $user[$this->flexi_auth->db_column('user_acc', 'failed_logins')];?>
                                                    </td>
                                                <?php } ?>
                                                <td class="align_ctr">
                                                        <?php echo ($user[$this->flexi_auth->db_column('user_acc', 'active')] == 1) ? 'Active' : 'Inactive';?>
                                                    </td>
                                                </tr>
                                        <?php } ?>
                                        </tbody>
                                        <?php } else { ?>
                                        <tbody>
                                            <tr>
                                                <td colspan="<?php echo (isset($status) && $status == 'failed_login_users') ? '6' : '5'; ?>" class="highlight_red"> No users are available. </td>
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

<?php $this->load->view('admin/includes/footer')?>
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