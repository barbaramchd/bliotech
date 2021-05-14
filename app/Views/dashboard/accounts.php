
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
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">New Account Info</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="input-group">
                                <input type="text" name="first_name" placeholder="John" class="form-control"
                                       required="required">
                                <span class="input-group-append"></span>
                            </div>
                            <div class="input-group">
                                <input type="text" name="last_name" placeholder="Smith" class="form-control"
                                       required="required">
                                <span class="input-group-append"></span>
                            </div>
                            <div class="input-group">
                                <input type="email" name="email" placeholder="name@example.com" class="form-control"
                                       required="required">
                                <span class="input-group-append"></span>
                            </div>
                            <div class="input-group">
                                <input type="number" name="phone" placeholder="Phone" class="form-control">
                                <span class="input-group-append"></span>
                            </div>
                            <div class="input-group">
                                <input type="text" name="role" placeholder="Role" class="form-control">
                                <span class="input-group-append"></span>
                            </div>
                            <div class="input-group">
                                <!-- TODO: the options of the dropdown menu should match the restaurants that the manager has -->
                                <label for="user_unit">This employee works at:</label>
                                <select id="user_unit" name="user_unit">
                                    <option style="display:none;"></option>
                                    <option value="Option 1">Option 1</option>
                                    <option value="Option 2">Option 2</option>
                                </select>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
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