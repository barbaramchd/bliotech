<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content-header"></div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <!-- Add Unit Modal -->

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                    Add new unit
                </button>
                <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">New Unit Info</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" name="u_name" placeholder="Unit's Name" class="form-control"
                                       required="required">
                                <span class="input-group-append"></span>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" name="u_company" placeholder="Company" class="form-control">
                                <span class="input-group-append"></span>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" name="u_address1" placeholder="Address 1" class="form-control"
                                       required="required">
                                <span class="input-group-append"></span>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" name="u_address2" placeholder="Address 2" class="form-control">
                                <span class="input-group-append"></span>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" name="u_city" placeholder="City" class="form-control"
                                       required="required">
                                <span class="input-group-append"></span>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" name="u_state" placeholder="State" class="form-control">
                                <span class="input-group-append"></span>
                            </div>
                            <div class="input-group mb-3">
                                <input type="number" name="u_zip" placeholder="Postal Code (only numbers)" class="form-control"
                                       required="required">
                                <span class="input-group-append"></span>
                            </div>
                            <div class="input-group mb-3">
                                <input type="number" name="u_phone" placeholder="Phone (only numbers)" class="form-control">
                                <span class="input-group-append"></span>
                            </div>
                            <div class="input-group mb-3">
                                <input type="email" name="u_email" placeholder="Email" class="form-control">
                                <span class="input-group-append"></span>
                            </div>
                            <div class="input-group mb-3">
                                <input type="url" name="u_website" placeholder="Website" class="form-control">
                                <span class="input-group-append"></span>
                            </div>
                            <!-- TODO: get dropdown menu style from AdminLTE -->
                            <div class="input-group mb-3">
                                <!-- TODO: add the options of the dropdown menu should match the restaurants that the manager has -->
                                <label for="u_type">Sector:</label>
                                <select id="u_type" name="u_type">
                                    <option style="display:none;"></option>
                                    <option value="Option 1">Option 1</option>
                                    <option value="Option 2">Option 2</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <!-- TODO: the options of the dropdown menu should match the restaurants that the manager has -->
                                <label for="u_size">Unit's Size:</label>
                                <select id="u_size" name="u_size">
                                    <option style="display:none;"></option>
                                    <option value="Option 1">Option 1</option>
                                    <option value="Option 2">Option 2</option>
                                </select>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save</button>
                            </div>
                            <!-- TODO: add employee on the next button -->
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
                        <th>Restaurant</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Employees</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php //foreach($units as $unit){ ?>
                    <tr>
                        <td><?= ""; //$unit["id"];    ?></td>
                        <td><?= ""; //$unit["name"];  ?></td>
                        <td><?= ""; //$unit["address1"];  ?></td>
                        <td><?= "";// $unit["city"];  ?></td>
                        <td>CA</td>
                        <td>Names</td>
                        <td>4444444444</td>
                        <td>email@gmail.com</td>
                        <td>
                            <a href="#" class="text-muted">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                    </tr>
                    <?php // } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card -->
    </section>
</div>
<!-- /.content-wrapper -->