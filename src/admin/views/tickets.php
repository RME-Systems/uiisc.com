<?php
if (!defined('IN_CRONLITE')) {
    // exit('禁止访问');
    header("Location: ../../admin.php");
    exit;
}
?>

<div class="container">
    <?php echo (getMsg("msg_notify")); ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <span class="panel-title"><?php echo $lang->I18N('tickets'); ?></span>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th style="width: 150px;">Date</th>
                            <th>Department</th>
                            <th>Subject</th>
                            <th>Status</th>
                            <th style="width: 150px;">Last Updated</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($tickets["total"]) {
                            foreach ($tickets["list"] as $key => $value) { ?>
                                <tr>
                                    <td style="width: 150px;"><?php echo cTime($value["date"]); ?></td>
                                    <td><?php echo $ticket_types[$value["department"]]; ?></td>
                                    <td><?php echo $value["subject"]; ?></td>
                                    <td><?php echo $status_types[$value["status"]]; ?></td>
                                    <td style="width: 150px;"><?php echo cTime($value["lastupdated"]); ?></td>
                                    <td><a class="btn btn-default btn-xs pull-right" href="<?php echo setRouter('admin', 'tickets_details', ['id' => $value['id']]); ?>"><?php echo $lang->I18N('details'); ?></a></td>
                                </tr>
                            <?php }
                    } else { ?>
                            <tr>
                                <td colspan="6" class="text-center">No Records Found</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="panel-footer">
            <span><?php echo $tickets["total"]; ?> Records Found, Page <?php echo $tickets["page"]; ?> of <?php echo $tickets["pages"]; ?></span>
        </div>
    </div>
</div>