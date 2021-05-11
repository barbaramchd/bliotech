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

                    <!-- Add Unit Form -->
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