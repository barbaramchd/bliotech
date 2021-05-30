<section class="content">
    <div class="container-fluid">

        <?php if (isset($flashdata)){?>
            <!-- Showing alerts if needed -->
            <div class="row">
                <?php if (isset($flashdata["operation_action"])){
                    if($flashdata["operation_action"] == "show_alert_success"){?>
                        <div class="callout callout-success">
                            <h5>User account was successfully created!</h5>

                            <p>An email with instructions about how to create a new password has been sent to: <?= $flashdata["operation_id"];?>.
                            </p>
                        </div>
                    <?php }else{?>
                        <div class="alert alert-<?= $flashdata["operation_result"];?> alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fas fa-check"></i> Warning!</h5>
                            <?= $flashdata["operation_content"];?>
                        </div>
                    <?php }}?>
            </div>
        <?php } ?>

        <!-- Main row -->
        <div class="row">
            <!-- Left col -->

            <!-- Add Account Modal -->

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                Add new account
            </button>
            <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
                <form id="accounts-form" action="<?=base_url("/Actions/add_account");?>" method="post">
                    <div class="modal-dialog modal-default">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">New Account Info</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First name</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control"
                                                   placeholder="Enter first name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Last name</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control"
                                                   placeholder="Enter last name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" id="email" class="form-control"
                                                   placeholder="Enter email" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="number" name="phone" id="phone"
                                                   class="form-control"
                                                   placeholder="Enter phone (only digits)">
                                        </div>
                                        <div class="form-group">

                                            <label>Works at:</label>
                                            <select class="form-control select2 select2-hidden-accessible"
                                                    style="width: 100%;"
                                                    data-select2-id="1" tabindex="-1" aria-hidden="true"
                                                    id="user_unit" name="user_unit" required>
                                                <option selected="selected" value="">Choose</option>
                                                <?php foreach ($units_all as $unit){?>
                                                    <option selected="selected" value="<?= $unit["u_id"];?>"><?= $unit["u_name"];?></option>

                                                <?php }?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" id="save-unit-button" value="Save"></input>
                            </div>
                        </div>
                    </div>
                    <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
            </form>
        </div>
        <!-- /.Left col -->
    </div>
    <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
<div class="content-header"></div>
<section class="col-lg-12 col-12 connectedSortable">

    <!-- Restaurant List -->
    <div class="card">
        <div class="card-body table-responsive p-0">
            <table class="table table-striped table-valign-middle">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Employee</th>
                    <th>Email</th>
                    <th>Unit</th>
                    <th>Status</th>
                    <th>Last Login</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td><?= $user->first_name;?> <?= $user->last_name;?> <small>(you)</small></td>
                    <td><?= $user->email;?></td>
                    <td>-</td>
                    <td><?= $user->active=="1"?"Active":"Disabled";?></td>
                    <td><?= isset($user->last_login)?date("Y-m-d",$user->last_login):"";?></td>
                    <td>Manager</td>
                    <td>
                        <a href="#" class="text-muted">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                </tr>
                <?php $counter = 1;
                foreach ($accounts_all as $account) {
                    $counter ++; ?>
                    <tr>
                        <td><?=$counter;?></td>
                        <td><?=$account["first_name"];?> <?=$account["last_name"];?></td>
                        <td><?=$account["email"];?></td>
                        <td><?=$account["u_name"];?></td>
                        <td><?= $account["active"]=="1"?"Active":"Disabled";?></td>
                        <td><?= isset($account["last_login"])?date("Y-m-d",$account["last_login"]):"";?></td>
                        <td>Employee</td>
                        <td>
                            <a href="#" class="text-muted">
                                <i class="fas fa-edit"></i>
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php }?>


                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card -->
</section>