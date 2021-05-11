<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content-header"></div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-7 connectedSortable">

                    <!-- Add Unit Modal -->

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Add new unit
                    </button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New Unit Info</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Unit's Name">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Company">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="Address 1">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-address-book"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="Address 2">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="City">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="State">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="Postal Code">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-map-pin"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="Country">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="number" class="form-control" placeholder="Phone">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-phone"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" placeholder="Email">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" placeholder="Phone">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-phone"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" placeholder="Website">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" placeholder="Sector">
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" placeholder="Unit's Size">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- TODO: make unit form pop up when clicked linked -->
                    <div class="card">
                        <div class="card-body register-card-body">
                            <p class="login-box-msg">Add new restaurant</p>

                            <form action="./index.html" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Unit Name">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-user"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="Address">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" placeholder="City">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <input type="password" class="form-control" placeholder="State">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- /.col -->
                                    <div class="card-footer clearfix">
                                        <button type="button" class="btn btn-primary float-right"><i
                                                class="fas fa-plus"></i>
                                            Add
                                        </button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>
                        </div>
                        <!-- /.form-box -->
                    </div><!-- /.card -->
                </section>
                <!-- /.Left col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

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
                            <td><?=""; //$unit["id"];  ?></td>
                            <td><?=""; //$unit["name"];?></td>
                            <td><?=""; //$unit["address1"];?></td>
                            <td><?="";// $unit["city"];?></td>
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