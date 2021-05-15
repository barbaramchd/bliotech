<section class="content">
    <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->

            <!-- Add Account Modal -->

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                Add new account
            </button>
            <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
                <form id="accounts-form">
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
                    <th>Restaurant</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Marc Jones</td>
                    <td>marc@mcdonalds.com</td>
                    <td>McDonalds Link</td>
                    <td>Manager</td>
                    <td>
                        <a href="#" class="text-muted">
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Marc Jones</td>
                    <td>marc@mcdonalds.com</td>
                    <td>McDonalds Link</td>
                    <td>Manager</td>
                    <td>
                        <a href="#" class="text-muted">
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Marc Jones</td>
                    <td>marc@mcdonalds.com</td>
                    <td>McDonalds Link</td>
                    <td>Manager</td>
                    <td>
                        <a href="#" class="text-muted">
                            <i class="fas fa-edit"></i>
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card -->
</section>