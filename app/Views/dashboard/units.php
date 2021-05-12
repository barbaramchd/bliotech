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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-xl">
                    Add new unit
                </button>
                <div class="modal fade" id="modal-xl" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">New Unit Info</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="form-group">
                                <label >Unit's name</label>
                                <input type="text" name="u_name" class="form-control" placeholder="Enter name"
                                       required="required">
                            </div>
                            <div class="form-group">
                                <label >Company</label>
                                <input type="text" name="u_company" class="form-control" placeholder="Enter company">
                            </div>
                            <div class="form-group">
                                <label >Address 1</label>
                                <input type="text" name="u_address1" class="form-control" placeholder="Enter address"
                                       required="required">
                            </div>
                            <div class="form-group">
                                <label >Address 2</label>
                                <input type="text" name="u_address2" class="form-control" placeholder="Enter address">
                            </div>
                            <div class="form-group">
                                <label >City</label>
                                <input type="text" name="u_city" class="form-control" placeholder="Enter city"
                                       required="required">
                            </div>
                            <div class="form-group">
                                <label >State</label>
                                <input type="text" name="u_state" class="form-control" placeholder="Enter state"
                                       required="required">
                            </div>
                            <div class="form-group">
                                <label >Postal Code</label>
                                <input type="number" name="u_zip" class="form-control" placeholder="Enter postal code (only numbers)"
                                       required="required">
                            </div>
                            <div class="form-group">
                                <label >Phone</label>
                                <input type="number" name="u_phone" class="form-control" placeholder="Enter phone (only numbers)">
                            </div>
                            <div class="form-group">
                                <label >Email</label>
                                <input type="email" name="u_email" class="form-control" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label >Website</label>
                                <input type="url" name="u_website" class="form-control" placeholder="Enter website">
                            </div>
                            <div class="form-group">
                                <label >Sector</label>
                                <select id="u_type" name="u_type">
                                    <option style="display:none;"></option>
                                    <option value="Option 1">Option 1</option>
                                    <option value="Option 2">Option 2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Unit size</label>
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
                        <td><?= ""; //$unit["id"];     ?></td>
                        <td><?= ""; //$unit["name"];   ?></td>
                        <td><?= ""; //$unit["address1"];   ?></td>
                        <td><?= "";// $unit["city"];   ?></td>
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