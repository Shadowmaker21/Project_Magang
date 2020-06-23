<div class="table-responsive" style="overflow: auto;">
    <table id="grid-data" class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th style="width:30%" data-column-id="grup">Username</th>
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
                    <td><?php echo $user[$this->flexi_auth->db_column('user_acc', 'username')];?></td>
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