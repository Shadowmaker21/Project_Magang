<?php $this->load->view('admin/includes/head')?>
    
<body class="skin-blue sidebar-mini">
    <div class="wrapper">
        <?php $this->load->view('admin/includes/menu')?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 916px;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                </h1>
                <ol class="breadcrumb">
                    <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
                </ol>
                <br>
                <div class="row">
                  <div class="col-md-12">
                    <div class="box box-default">
                        <div class="box-header with-border">
                          <i class="fa fa-fw fa-barcode"></i>

                          <h3 class="box-title"><i class="zmdi zmdi-account-circle zmdi-hc-fw"></i> Pengguna (Tidak Aktif > 31 Hari)</h3>
                          <div class="box-title pull-right">

                          </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="card-body card-padding" id="place">
                    <?php if (! empty($message)) { ?>
                        <div id="message">
                            <div class="alert alert-info">
                                <?php echo $message; ?>
                            </div>
                        </div>
                    <?php } ?>
                    <?php echo form_open(current_url()); ?>
                        <table class="table table-hover">
                            <thead>
                                <tr class="success c-white">
                                    <th><i class="zmdi zmdi-email zmdi-hc-fw"></i> Email</th>
                                    <!-- <th>First Name</th>
                                    <th>Last Name</th> -->
                                    <th> <i class="zmdi zmdi-accounts-alt zmdi-hc-fw"></i> User Group </th>
                                    <th class="spacer_125 align_ctr tooltip_trigger"  title="Indicates whether the users account is currently set as 'active'."> <i class="zmdi zmdi-info-outline zmdi-hc-fw"></i> Status </th>
                                </tr>
                            </thead>
                            <?php if (!empty($users)) { ?>
                            <tbody>
                                <?php foreach ($users as $user) { ?>
                                    <tr>
                                        <td>
                                            <a href="<?php echo $base_url;?>admin/update_user_account/<?php echo $user[$this->flexi_auth->db_column('user_acc', 'id')];?>">
                                                <?php echo $user[$this->flexi_auth->db_column('user_acc', 'email')];?>
                                            </a>
                                        </td>
                                       <!--  <td>
                                            <?php echo $user['upro_first_name'];?>
                                        </td>
                                        <td>
                                            <?php echo $user['upro_last_name'];?>
                                        </td> -->
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
                                    <td colspan="5" class="highlight_red">
                                        No users are available.
                                    </td>
                                </tr>
                            </tbody>
                            <?php } ?>
                        </table>
                    <?php echo form_close(); ?>
                        <!-- /.box-body -->
                        </div>
                    </div>
                  </div>
            </section>
        </div>
        <!-- /.content-wrapper -->

<?php $this->load->view('admin/includes/footer')?>
