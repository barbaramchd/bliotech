    <section class="content">
        <div class="container-fluid">

            <!-- TODO: Should we show some cards like we have on the dashboard? This place is basically-->
            <!-- TODO: a tiny dashboard that should provide us all necessary information about the unit-->
            <!-- TODO: And hopefully 90% can be reused as Employees dashboard. -->
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    Card 1
                </div>
                <div class="col-md-6 col-lg-3">
                    Card 2
                </div>
                <div class="col-md-6 col-lg-3">
                    Card 3
                </div>
                <div class="col-md-6 col-lg-3">
                    Card 4
                </div>
            </div>

            <!-- TODO: Maybe some card with details about the store -->

            <div class="row">


                <div class="col-md-6">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Store details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <h5>Unit Info</h5>
                            <h6>Unit Name</h6>
                            <input type="text" class="input" value="Some Name">
                            <h6>Address 1</h6>
                            <input type="text" class="input" value="Some Address">
                            <h6>Address 2</h6>
                            <input type="text" class="input" value="Some Number">
                            <h6>City</h6>
                            <input type="text" class="input" value="Some City">
                            <h6>State</h6>
                            <input type="text" class="input" value="Some State">
                            <h6>Postal Code</h6>
                            <input type="text" class="input" value="Postal Code">
                            <h6>Country</h6>
                            <input type="text" class="input" value="Country">
                            <h6>Phone</h6>
                            <input type="text" class="input" value="Phone">
                            <h6>Email</h6>
                            <input type="text" class="input" value="Email">
                            <h6>Website</h6>
                            <input type="text" class="input" value="Website">
                            <h6>Sector</h6>
                            <input type="text" class="input" value="Sector">
                            <h6>Unit's Size</h6>
                            <input type="text" class="input" value="Unit's Size">
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

                <div class="col-md-6">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Maybe List of Devices + Their statuses</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Task</th>
                                    <th>Progress</th>
                                    <th style="width: 40px">Label</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Update software</td>
                                    <td><div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div></td>
                                    <td><span class="badge bg-danger">55%</span></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Clean database</td>
                                    <td><div class="progress progress-xs">
                                            <div class="progress-bar bg-warning" style="width: 70%"></div>
                                        </div></td>
                                    <td><span class="badge bg-warning">70%</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>

            <div class="row">
                <div class="col-md-6">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Maybe List of Employees?</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Task</th>
                                    <th>Progress</th>
                                    <th style="width: 40px">Label</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Update software</td>
                                    <td><div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div></td>
                                    <td><span class="badge bg-danger">55%</span></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Clean database</td>
                                    <td><div class="progress progress-xs">
                                            <div class="progress-bar bg-warning" style="width: 70%"></div>
                                        </div></td>
                                    <td><span class="badge bg-warning">70%</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

                <div class="col-md-6">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Some other code</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <h5>Devices Info</h5>
                            <h6>Device Name</h6>
                            <input type="text" class="input" value="Device Name">
                            <h6>Enabled?</h6>
                            <input type="text" class="input" value="Enabled">
                            <h6>Note</h6>
                            <input type="text" class="input" value="Device Name">
                            <h5>Employees Info</h5>
                            <h6>Employee's First Name</h6>
                            <input type="text" class="input" value="Employee's First Name">
                            <h6>Employee's Last Name</h6>
                            <input type="text" class="input" value="Employee's Last Name">
                            <h6>Email</h6>
                            <input type="text" class="input" value="Email">
                            <h6>Phone</h6>
                            <input type="text" class="input" value="Phone">
                            <h6>Employee's Role</h6>
                            <input type="text" class="input" value="Employee's Role">
                            <button class="btn">Update</button>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
