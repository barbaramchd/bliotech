
<!-- Content Wrapper. Contains home content -->
<div class="content-wrapper">
    <div class="content-header"></div>

    <!-- Boxes content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Boxes Col (Stat box) -->
                <div class="col-6">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <!-- Total Restaurant -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>150</h3>
                                    <p>Restaurants</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-android-apps"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-6 col-12">
                            <!-- Clean Restaurants -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>53<sup style="font-size: 20px">%</sup></h3>
                                    <p>Clean</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-android-done-all"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-6 col-12">
                            <!-- Attention -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>44</h3>
                                    <p>Needs Attention</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-android-locate"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-6 col-12">
                            <!-- Overdue -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>65</h3>
                                    <p>Overdue</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-alert-circled"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ./col -->

                <!-- Graph Col -->
                <div class="col-6">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-chart-pie mr-1"></i>
                                Overview
                            </h3>
                            <div class="card-tools">
                                <ul class="nav nav-pills ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#revenue-chart"
                                           data-toggle="tab">Area</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content p-0">
                                <!-- Morris chart - Sales -->
                                <div class="chart tab-pane active" id="revenue-chart"
                                     style="position: relative; height: 208px;">
                                    <canvas id="revenue-chart-canvas" height="300"
                                            style="height: 300px;"></canvas>
                                </div>
                                <div class="chart tab-pane" id="sales-chart"
                                     style="position: relative; height: 208px;">
                                    <canvas id="sales-chart-canvas" height="300"
                                            style="height: 300px;"></canvas>
                                </div>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 col-12 connectedSortable">

                    <!-- Restaurant List -->
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-striped table-valign-middle">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Restaurant</th>
                                    <th>Representative</th>
                                    <th>Status</th>
                                    <th>Details</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach($events as $event){ ?>
                                <tr>
                                    <td><?= $event["u_id"];?></td>
                                    <td><?= $event["u_name"];?></td>
                                    <td>TODO</td>
                                    <td>
                                        <?= $event["e_created_at"];?>
                                        <small class="text-success mr-1">
                                            <?= $event["e_type"];?>
                                        </small>
                                    </td>
                                    <td>
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->
                </section>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>