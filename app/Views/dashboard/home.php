<!-- Content Wrapper. Contains home content -->


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
                                <h3><?= $restaurants_no; ?></h3>
                                <p>Units</p>
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
                                <h3><?= round(100 * $solved_no / $devices_no); ?><sup style="font-size: 20px">%</sup>
                                </h3>
                                <p>Solved</p>
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
                                <h3><?= $needs_attention_no ?></h3>
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
                                <h3><?= $overdue_no ?></h3>
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
            <div class="col-12">
                <h3>Recent Events</h3>
            </div>
            <!-- Left col -->
            <section class="col-lg-12 col-12 connectedSortable">

                <!-- Unit List -->
                <div class="card">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-striped table-valign-middle">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Unit</th>
                                <th>Device</th>
                                <th>Status</th>
                                <th>Clicks</th>
                                <th>Date & Time</th>
                                <th>More</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $counter = 0;
                            foreach ($events

                                     as $event) {
                                $counter++; ?>
                                <tr>
                                    <td><?= $counter ?></td>
                                    <td><?= $event["u_name"]; ?></td>
                                    <td><?= $event["d_name"]; ?></td>
                                    <td>
                                        <?php switch ($event["e_type"]) {
                                            case 1:
                                                if (time() - strtotime($event["e_created_at"]) < 3 * 3601) {
                                                    ?>
                                                    <span class="float-left badge badge-warning">Attention</span>
                                                <?php } else {
                                                    ?>
                                                    <span class="float-left badge bg-danger">Overdue</span>
                                                <?php }
                                                break;
                                            case 2: ?>
                                                <span class="float-left badge bg-success">Solved</span>
                                                <?php break;
                                            case 3: ?>
                                                <span class="float-left badge bg-info">Unknown</span>
                                                <?php break;
                                        } ?>
                                    </td>
                                    <td><?= $clicks_model->getClickCount($event["e_id"]); ?></td>
                                    <td><?= $event["e_created_at"]; ?></td>
                                    <td>
                                        <a href="#" class="text-muted" data-toggle="modal" data-target="#modal-lg">
                                            <i class="fas  fa-search"></i>
                                        </a>
                                        <div class="modal fade" id="modal-lg" style="display: none;"
                                             aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title"><?= $event["u_name"]; ?></h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <label>Info: </label>
                                                                <?= $event["d_name"]; ?>
                                                            </div>
                                                            <div class="col-md-1">
                                                                (<?= $clicks_model->getClickCount($event["e_id"]); ?>x)
                                                            </div>
                                                            <div class="col-md-3">
                                                                <?= $event["e_created_at"]; ?>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <?php switch ($event["e_type"]) {
                                                                    case 1:
                                                                        if (time() - strtotime($event["e_created_at"]) < 3 * 3601) {
                                                                            ?>
                                                                            <span class="float-left badge badge-warning">Attention</span>
                                                                        <?php } else {
                                                                            ?>
                                                                            <span class="float-left badge bg-danger">Overdue</span>
                                                                        <?php }
                                                                        break;
                                                                    case 2: ?>
                                                                        <span class="float-left badge bg-success">Solved</span>
                                                                        <label>By: </label>
                                                                        <?php break;
                                                                    case 3: ?>
                                                                        <span class="float-left badge bg-info">Unknown</span>
                                                                        <?php break;
                                                                } ?>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label>Note:</label>
                                                                    <textarea class="form-control" rows="3"
                                                                              placeholder="Enter ..."
                                                                              spellcheck="true"></textarea>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <a class="btn btn-warning btn-sm" href="#">
                                                                        <i class="fas fa-pencil-alt">
                                                                        </i>
                                                                    </a>
                                                                    <a class="btn btn-danger btn-sm" href="#">
                                                                        <i class="fas fa-trash">
                                                                        </i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <input type="submit" class="btn btn-primary"
                                                               value="Save" id="save-note">
                                                        </input>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
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