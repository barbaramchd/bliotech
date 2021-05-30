<section class="content">
    <div class="container-fluid">

        <!-- TODO: Should we show some cards like we have on the dashboard? This place is basically-->
        <!-- TODO: a tiny dashboard that should provide us all necessary information about the unit-->
        <!-- TODO: And hopefully 90% can be reused as Employees dashboard. -->

        <div class="row">
            <div class="col-md-6">
                <!-- Unit Info Card -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Unit Info</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body" style="display: block;">
                        <div class="form-group">
                            <label for="u_name">Name</label>
                            <input type="text" name="u_name" id="u_name" class="form-control"
                                   value="<?= $unit["u_name"]; ?>"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="u_company">Company</label>
                            <input type="text" name="u_company" id="u_company" class="form-control"
                                   value="<?= $unit["u_company"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="u_address1">Address 1</label>
                            <input type="text" name="u_address1" id="u_address1" class="form-control"
                                   value="<?= $unit["u_address1"]; ?>"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="u_address2">Address 2</label>
                            <input type="text" name="u_address2" id="u_address2" class="form-control"
                                   value="<?= $unit["u_address2"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="u_city">City</label>
                            <input type="text" name="u_city" id="u_city" class="form-control"
                                   value="<?= $unit["u_city"]; ?>"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="u_state">State</label>
                            <select class="form-control select2 select2-hidden-accessible"
                                    style="width: 100%;"
                                    data-select2-id="1" tabindex="-1" aria-hidden="true"
                                    id="u_state" name="u_state" required>
                                <option <?= set_select('u_state', '', $unit["u_state"] == ""); ?> value="">Choose
                                </option>
                                <option <?= set_select('u_state', 'AL', $unit["u_state"] == "AL"); ?>value="AL">AL
                                </option>
                                <option <?= set_select('u_state', 'AK', $unit["u_state"] == "AK"); ?>value="AK">AK
                                </option>
                                <option <?= set_select('u_state', 'AS', $unit["u_state"] == "AS"); ?>value="AS">AS
                                </option>
                                <option <?= set_select('u_state', 'AZ', $unit["u_state"] == "AZ"); ?>value="AZ">AZ
                                </option>
                                <option <?= set_select('u_state', 'AR', $unit["u_state"] == "AR"); ?>value="AR">AR
                                </option>
                                <option <?= set_select('u_state', 'CA', $unit["u_state"] == "CA"); ?>value="CA">CA
                                </option>
                                <option <?= set_select('u_state', 'CO', $unit["u_state"] == "CO"); ?>value="CO">CO
                                </option>
                                <option <?= set_select('u_state', 'CT', $unit["u_state"] == "CT"); ?>value="CT">CT
                                </option>
                                <option <?= set_select('u_state', 'DE', $unit["u_state"] == "DE"); ?>value="DE">DE
                                </option>
                                <option <?= set_select('u_state', 'DC', $unit["u_state"] == "DC"); ?>value="DC">DC
                                </option>
                                <option <?= set_select('u_state', 'FL', $unit["u_state"] == "FL"); ?>value="FL">FL
                                </option>
                                <option <?= set_select('u_state', 'GA', $unit["u_state"] == "GA"); ?>value="GA">GA
                                </option>
                                <option <?= set_select('u_state', 'GU', $unit["u_state"] == "GU"); ?>value="GU">GU
                                </option>
                                <option <?= set_select('u_state', 'HI', $unit["u_state"] == "HI"); ?>value="HI">HI
                                </option>
                                <option <?= set_select('u_state', 'ID', $unit["u_state"] == "ID"); ?>value="ID">ID
                                </option>
                                <option <?= set_select('u_state', 'IL', $unit["u_state"] == "IL"); ?>value="IL">IL
                                </option>
                                <option <?= set_select('u_state', 'IN', $unit["u_state"] == "IN"); ?>value="IN">IN
                                </option>
                                <option <?= set_select('u_state', 'IA', $unit["u_state"] == "IA"); ?>value="IA">IA
                                </option>
                                <option <?= set_select('u_state', 'KS', $unit["u_state"] == "KS"); ?>value="KS">KS
                                </option>
                                <option <?= set_select('u_state', 'KY', $unit["u_state"] == "KY"); ?>value="KY">KY
                                </option>
                                <option <?= set_select('u_state', 'LA', $unit["u_state"] == "LA"); ?>value="LA">LA
                                </option>
                                <option <?= set_select('u_state', 'ME', $unit["u_state"] == "ME"); ?>value="ME">ME
                                </option>
                                <option <?= set_select('u_state', 'MD', $unit["u_state"] == "MD"); ?>value="MD">MD
                                </option>
                                <option <?= set_select('u_state', 'MA', $unit["u_state"] == "MA"); ?>value="MA">MA
                                </option>
                                <option <?= set_select('u_state', 'MI', $unit["u_state"] == "MI"); ?>value="MI">MI
                                </option>
                                <option <?= set_select('u_state', 'MN', $unit["u_state"] == "MN"); ?>value="MN">MN
                                </option>
                                <option <?= set_select('u_state', 'MS', $unit["u_state"] == "MS"); ?>value="MS">MS
                                </option>
                                <option <?= set_select('u_state', 'MO', $unit["u_state"] == "MO"); ?>value="MO">MO
                                </option>
                                <option <?= set_select('u_state', 'MT', $unit["u_state"] == "MT"); ?>value="MT">MT
                                </option>
                                <option <?= set_select('u_state', 'NE', $unit["u_state"] == "NE"); ?>value="NE">NE
                                </option>
                                <option <?= set_select('u_state', 'NV', $unit["u_state"] == "NV"); ?>value="NV">NV
                                </option>
                                <option <?= set_select('u_state', 'NH', $unit["u_state"] == "NH"); ?>value="NH">NH
                                </option>
                                <option <?= set_select('u_state', 'NJ', $unit["u_state"] == "NJ"); ?>value="NJ">NJ
                                </option>
                                <option <?= set_select('u_state', 'NM', $unit["u_state"] == "NM"); ?>value="NM">NM
                                </option>
                                <option <?= set_select('u_state', 'NY', $unit["u_state"] == "NY"); ?>value="NY">NY
                                </option>
                                <option <?= set_select('u_state', 'NC', $unit["u_state"] == "NC"); ?>value="NC">NC
                                </option>
                                <option <?= set_select('u_state', 'ND', $unit["u_state"] == "ND"); ?>value="ND">ND
                                </option>
                                <option <?= set_select('u_state', 'MP', $unit["u_state"] == "MP"); ?>value="MP">MP
                                </option>
                                <option <?= set_select('u_state', 'OH', $unit["u_state"] == "OH"); ?>value="OH">OH
                                </option>
                                <option <?= set_select('u_state', 'OK', $unit["u_state"] == "OK"); ?>value="OK">OK
                                </option>
                                <option <?= set_select('u_state', 'OR', $unit["u_state"] == "OR"); ?>value="OR">OR
                                </option>
                                <option <?= set_select('u_state', 'PA', $unit["u_state"] == "PA"); ?>value="PA">PA
                                </option>
                                <option <?= set_select('u_state', 'PR', $unit["u_state"] == "PR"); ?>value="PR">PR
                                </option>
                                <option <?= set_select('u_state', 'RI', $unit["u_state"] == "RI"); ?>value="RI">RI
                                </option>
                                <option <?= set_select('u_state', 'SC', $unit["u_state"] == "SC"); ?>value="SC">SC
                                </option>
                                <option <?= set_select('u_state', 'SD', $unit["u_state"] == "SD"); ?>value="SD">SD
                                </option>
                                <option <?= set_select('u_state', 'TN', $unit["u_state"] == "TN"); ?>value="TN">TN
                                </option>
                                <option <?= set_select('u_state', 'TX', $unit["u_state"] == "TX"); ?>value="TX">TX
                                </option>
                                <option <?= set_select('u_state', 'UT', $unit["u_state"] == "UT"); ?>value="UT">UT
                                </option>
                                <option <?= set_select('u_state', 'VT', $unit["u_state"] == "VT"); ?>value="VT">VT
                                </option>
                                <option <?= set_select('u_state', 'VA', $unit["u_state"] == "VA"); ?>value="VA">VA
                                </option>
                                <option <?= set_select('u_state', 'VI', $unit["u_state"] == "VI"); ?>value="VI">VI
                                </option>
                                <option <?= set_select('u_state', 'WA', $unit["u_state"] == "WA"); ?>value="WA">WA
                                </option>
                                <option <?= set_select('u_state', 'WV', $unit["u_state"] == "WV"); ?>value="WV">WV
                                </option>
                                <option <?= set_select('u_state', 'WI', $unit["u_state"] == "WI"); ?>value="WI">WI
                                </option>
                                <option <?= set_select('u_state', 'WY', $unit["u_state"] == "WY"); ?>value="WY">WY
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="u_zip">Postal Code</label>
                            <input type="text" name="u_zip" id="u_zip"
                                   class="form-control"
                                   value="<?= $unit["u_zip"]; ?>"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="u_phone">Phone</label>
                            <input type="text" name="u_phone" id="u_phone"
                                   class="form-control"
                                   value="<?= $unit["u_phone"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="u_email">Email</label>
                            <input type="email" name="u_email" id="u_email" class="form-control"
                                   value="<?= $unit["u_email"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="u_website">Website</label>
                            <input type="url" name="u_website" id="u_website" class="form-control"
                                   value="<?= $unit["u_website"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="u_size">Unit Size</label>
                            <select class="form-control select2 select2-hidden-accessible"
                                    style="width: 100%;"
                                    data-select2-id="1" tabindex="-1" aria-hidden="true"
                                    id="u_size" name="u_size">
                                <option <?= set_select('u_size', '', $unit["u_size"] == ""); ?>value="">Choose</option>
                                <option <?= set_select('u_size', '1', $unit["u_size"] == "1"); ?>value="self_employed">
                                    Self-employed
                                </option>
                                <option <?= set_select('u_size', '2', $unit["u_size"] == "2"); ?>value="1-10">1-10
                                    employees
                                </option>
                                <option <?= set_select('u_size', '3', $unit["u_size"] == "3"); ?>value="11-50">11-50
                                    employees
                                </option>
                                <option <?= set_select('u_size', '4', $unit["u_size"] == "4"); ?>value="51-200">51-200
                                    employees
                                </option>
                                <option <?= set_select('u_size', '5', $unit["u_size"] == "5"); ?>value="201-500">201-500
                                    employees
                                </option>
                                <option <?= set_select('u_size', '6', $unit["u_size"] == "6"); ?>value="501-1000">
                                    501-1,000 employees
                                </option>
                                <option <?= set_select('u_size', '7', $unit["u_size"] == "7"); ?>value="1001">1,001+
                                    employees
                                </option>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <input type="submit" value="Save changes" class="btn btn-primary float-right">
                    </div>
                </div>
                <!-- /.card -->
            </div>

            <div class="col-md-6">
                <!-- Unit Chart -->
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
                            <div class="chart tab-pane tex" id="sales-chart"
                                 style="position: relative; height: 208px;">
                                <canvas id="sales-chart-canvas" height="300"
                                        style="height: 300px;"></canvas>
                            </div>
                        </div>
                    </div><!-- /.card-body -->
                </div>

                <!-- Device Card -->
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Unit's Devices</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Device Name</th>
                                <th>Enabled?</th>
                                <th>Status</th>
                                <th style="width: 40px">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $counter = 0;
                            foreach ($devices as $device) {
                                $counter++;
                                ?>

                                <tr>
                                    <td><?= $counter; ?></td>
                                    <td><?= $device["d_name"]; ?></td>
                                    <td>
                                        <input type="checkbox" name="my-checkbox" data-bootstrap-switch
                                               data-off-color="danger" <?= set_checkbox('d_active', '1', $device["d_active"]); ?>
                                               data-on-color="success">
                                    </td>
                                    <td>
                                        <!-- TODO: should show the device status here -->
                                        TODO
                                    </td>
                                    <td>
                                        <a href="#" class="text-muted" data-toggle="modal"
                                           data-target="#modal-default-device<?= $counter; ?>" title="Edit">
                                            <i class="fas  fa-edit"></i>
                                        </a>
                                        <!-- Device Edit modal -->
                                        <div class="modal fade" id="modal-default-device<?= $counter; ?>"
                                             style="display: none;"
                                             aria-hidden="true">
                                            <div class="modal-dialog modal-default-device">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title"><?= $device["d_name"]; ?></h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- TODO: get real serial number -->
                                                        <div class="form-group">
                                                            <label for="d_serial_number"> Serial Number</label>
                                                            <input type="text" name="d_serial_number"
                                                                   id="d_serial_number"
                                                                   class="form-control" disabled
                                                                   value="<?= $device["d_serial_number"]; ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="d_name"> Device Name</label>
                                                            <input type="text" name="d_name" id="d_name"
                                                                   class="form-control"
                                                                   value="<?= $device["d_name"]; ?>"
                                                                   required>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <label for="d_name"> Notifications</label>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label>Email</label>
                                                                    <!-- Select multiple-->
                                                                    <!-- TODO: get real emails -->
                                                                    <div class="form-group">
                                                                        <h6>Select all the email addresses that you want
                                                                            to
                                                                            be notified:</h6>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                   type="checkbox">
                                                                            <label class="form-check-label">Email
                                                                                1</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                   type="checkbox">
                                                                            <label class="form-check-label">Email
                                                                                2</label>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="text"
                                                                                   class="form-control form-control-border"
                                                                                   id="exampleInputBorder"
                                                                                   placeholder="Add new email">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label>SMS</label>
                                                                    <!-- Select multiple-->
                                                                    <!-- TODO: get real emails -->
                                                                    <div class="form-group">
                                                                        <h6>Select all the numbers that you want to
                                                                            be notified:</h6>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                   type="checkbox">
                                                                            <label class="form-check-label">Number
                                                                                1</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input"
                                                                                   type="checkbox">
                                                                            <label class="form-check-label">Number
                                                                                2</label>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="text"
                                                                                   class="form-control form-control-border"
                                                                                   id="exampleInputBorder"
                                                                                   placeholder="Add new number">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <!-- TODO: autosave function in note -->
                                                                <label>Note:</label>
                                                                <textarea class="form-control"
                                                                          id="autosave-note"
                                                                          rows="3"
                                                                          placeholder="Enter ..."
                                                                          spellcheck="true"><?= $device["d_note"]; ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default btn-sm"
                                                                    data-dismiss="modal">Close
                                                            </button>
                                                            <input type="submit" class="btn btn-success btn-sm"
                                                                   id="save-note-device" value="Save">
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
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- Employees Card -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Unit's Employees</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Status</th>
                                <th>Last Active</th>
                                <th style="width: 40px">Actions</th>
                            </tr>
                            </thead>
                            <tbody>


                            <?php
                            $counter = 0;
                            foreach ($accounts as $account) {
                                $counter++;
                                ?>
                                <tr>
                                    <td><?= $counter; ?></td>
                                    <td><?= $account["first_name"]; ?></td>
                                    <td>
                                        <?= $account["last_name"]; ?>
                                    </td>
                                    <td><?= $account["active"]=="1"?"Active":"Disabled";?></td>
                                    <td><?= date("Y-m-d",$account["last_login"]);?></td>
                                    <td>
                                        <a href="#" class="text-muted" data-toggle="modal"
                                           data-target="#modal-default-employee<?= $counter; ?>" title="Edit">
                                            <i class="fas  fa-edit"></i>
                                        </a>
                                        <!-- Employee Edit modal -->
                                        <div class="modal fade" id="modal-default-employee<?= $counter; ?>"
                                             style="display: none;"
                                             aria-hidden="true">
                                            <div class="modal-dialog modal-default-employee">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title"><?= $account["first_name"]; ?> <?= $account["last_name"]; ?></h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="first_name"> First Name</label>
                                                            <input type="text" name="first_name" id="first_name"
                                                                   class="form-control"
                                                                   value="<?= $account["first_name"]; ?>"
                                                                   required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="last_name"> Last Name</label>
                                                            <input type="text" name="last_name" id="last_name"
                                                                   class="form-control"
                                                                   value="<?= $account["last_name"]; ?>"
                                                                   required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="email" name="email" id="email" disabled
                                                                   class="form-control" value="<?= $account["email"]; ?>"
                                                                   placeholder="Enter email" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phone">Phone</label>
                                                            <input type="number" name="phone" id="phone"
                                                                   class="form-control", value="<?= $account["phone"]; ?>"
                                                                   placeholder="Enter phone (only digits)">
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="button"
                                                                    class="btn btn-outline-info btn-xs">
                                                                Disable account
                                                            </button>
                                                            <button type="button"
                                                                    class="btn btn-outline-danger btn-xs">
                                                                Delete
                                                                account
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default btn-sm"
                                                                data-dismiss="modal">Close
                                                        </button>
                                                        <input type="submit" class="btn btn-secondary btn-sm"
                                                               id="save-note-device" value="Save">
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
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>


    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
