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
                                   value="NAMENAME"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="u_company">Company</label>
                            <input type="text" name="u_company" id="u_company" class="form-control"
                                   value="AdminLTE">
                        </div>
                        <div class="form-group">
                            <label for="u_address1">Address 1</label>
                            <input type="text" name="u_address1" id="u_address1" class="form-control"
                                   value="AdminLTE"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="u_address2">Address 2</label>
                            <input type="text" name="u_address2" id="u_address2" class="form-control"
                                   value="AdminLTE">
                        </div>
                        <div class="form-group">
                            <label for="u_city">City</label>
                            <input type="text" name="u_city" id="u_city" class="form-control"
                                   value="CITY"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="u_state">State</label>
                            <select class="form-control select2 select2-hidden-accessible"
                                    style="width: 100%;"
                                    data-select2-id="1" tabindex="-1" aria-hidden="true"
                                    id="u_state" name="u_state" required>
                                <option selected="selected" value="">Choose</option>
                                <option value="AL">AL</option>
                                <option value="AK">AK</option>
                                <option value="AS">AS</option>
                                <option value="AZ">AZ</option>
                                <option value="AR">AR</option>
                                <option value="CA">CA</option>
                                <option value="CO">CO</option>
                                <option value="CT">CT</option>
                                <option value="DE">DE</option>
                                <option value="DC">DC</option>
                                <option value="FL">FL</option>
                                <option value="GA">GA</option>
                                <option value="GU">GU</option>
                                <option value="HI">HI</option>
                                <option value="ID">ID</option>
                                <option value="IL">IL</option>
                                <option value="IN">IN</option>
                                <option value="IA">IA</option>
                                <option value="KS">KS</option>
                                <option value="KY">KY</option>
                                <option value="LA">LA</option>
                                <option value="ME">ME</option>
                                <option value="MD">MD</option>
                                <option value="MA">MA</option>
                                <option value="MI">MI</option>
                                <option value="MN">MN</option>
                                <option value="MS">MS</option>
                                <option value="MO">MO</option>
                                <option value="MT">MT</option>
                                <option value="NE">NE</option>
                                <option value="NV">NV</option>
                                <option value="NH">NH</option>
                                <option value="NJ">NJ</option>
                                <option value="NM">NM</option>
                                <option value="NY">NY</option>
                                <option value="NC">NC</option>
                                <option value="ND">ND</option>
                                <option value="MP">MP</option>
                                <option value="OH">OH</option>
                                <option value="OK">OK</option>
                                <option value="OR">OR</option>
                                <option value="PA">PA</option>
                                <option value="PR">PR</option>
                                <option value="RI">RI</option>
                                <option value="SC">SC</option>
                                <option value="SD">SD</option>
                                <option value="TN">TN</option>
                                <option value="TX">TX</option>
                                <option value="UT">UT</option>
                                <option value="VT">VT</option>
                                <option value="VA">VA</option>
                                <option value="VI">VI</option>
                                <option value="WA">WA</option>
                                <option value="WV">WV</option>
                                <option value="WI">WI</option>
                                <option value="WY">WY</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="u_zip">Postal Code</label>
                            <input type="text" name="u_zip" id="u_zip"
                                   class="form-control"
                                   value="AAA"
                                   required>
                        </div>
                        <div class="form-group">
                            <label for="u_phone">Phone</label>
                            <input type="text" name="u_phone" id="u_phone"
                                   class="form-control"
                                   value="AAA">
                        </div>
                        <div class="form-group">
                            <label for="u_email">Email</label>
                            <input type="email" name="u_email" id="u_email" class="form-control"
                                   value="AAA">
                        </div>
                        <div class="form-group">
                            <label for="u_website">Website</label>
                            <input type="url" name="u_website" id="u_website" class="form-control"
                                   value="AAA">
                        </div>
                        <div class="form-group">
                            <label for="u_size">Unit Size</label>
                            <select class="form-control select2 select2-hidden-accessible"
                                    style="width: 100%;"
                                    data-select2-id="1" tabindex="-1" aria-hidden="true"
                                    id="u_size" name="u_size">
                                <option value="">Choose</option>
                                <option value="self_employed">Self-employed</option>
                                <option value="1-10">1-10 employees</option>
                                <option value="11-50">11-50 employees</option>
                                <option value="51-200">51-200 employees</option>
                                <option value="201-500">201-500 employees</option>
                                <option value="501-1000">501-1,000 employees</option>
                                <option value="1001">1,001+ employees</option>
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
                            <tr>
                                <td>1.</td>
                                <td>Update software</td>
                                <td>
                                    <input type="checkbox" name="my-checkbox" data-bootstrap-switch
                                           data-off-color="danger" data-on-color="success">
                                </td>
                                <td>
                                    ATTENTION
                                </td>
                                <td>
                                    <a href="#" class="text-muted" data-toggle="modal"
                                       data-target="#modal-default-device" title="Edit">
                                        <i class="fas  fa-edit"></i>
                                    </a>
                                    <!-- Device Edit modal -->
                                    <div class="modal fade" id="modal-default-device" style="display: none;"
                                         aria-hidden="true">
                                        <div class="modal-dialog modal-default-device">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">DEVICE NAME</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="d_name"> Device Name</label>
                                                        <input type="text" name="d_name" id="d_name"
                                                               class="form-control"
                                                               value="NAMENAME"
                                                               required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Note:</label>
                                                        <textarea class="form-control"
                                                                  id="autosave-note"
                                                                  rows="3"
                                                                  placeholder="Enter ..."
                                                                  spellcheck="true"></textarea>
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
                                <th style="width: 40px">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1.</td>
                                <td>John</td>
                                <td>
                                    Smith
                                </td>
                                <td>
                                    <a href="#" class="text-muted" data-toggle="modal"
                                       data-target="#modal-default-employee" title="Edit">
                                        <i class="fas  fa-edit"></i>
                                    </a>
                                    <!-- Employee Edit modal -->
                                    <div class="modal fade" id="modal-default-employee" style="display: none;"
                                         aria-hidden="true">
                                        <div class="modal-dialog modal-default-employee">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">EMPLOYEE FULL NAME</h4>
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
                                                               value="NAMENAME"
                                                               required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="last_name"> Last Name</label>
                                                        <input type="text" name="last_name" id="last_name"
                                                               class="form-control"
                                                               value="NAMENAME"
                                                               required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" name="email" id="email" class="form-control"
                                                               placeholder="Enter email" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <input type="number" name="phone" id="phone"
                                                               class="form-control"
                                                               placeholder="Enter phone (only digits)">
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
