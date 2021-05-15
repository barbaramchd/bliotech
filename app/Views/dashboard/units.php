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
                <form id="units-form">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">New Unit Info</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Unit's name</label>
                                            <input type="text" name="u_name" id="u_name" class="form-control"
                                                   placeholder="Enter name"
                                                   required>
                                        </div>
                                        <div class="form-group">
                                            <label>Company</label>
                                            <input type="text" name="u_company" id="u_company" class="form-control"
                                                   placeholder="Enter company">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address 1</label>
                                            <input type="text" name="u_address1" id="u_address1" class="form-control"
                                                   placeholder="Enter address"
                                                   required>
                                        </div>
                                        <div class="form-group">
                                            <label>Address 2</label>
                                            <input type="text" name="u_address2" id="u_address2" class="form-control"
                                                   placeholder="Enter address">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" name="u_city" id="u_city" class="form-control"
                                                   placeholder="Enter city"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>State</label>
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
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Postal Code</label>
                                            <input type="text" name="u_zip" id="u_zip"
                                                   class="form-control"
                                                   placeholder="Enter postal code (only digits)"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" name="u_phone" id="u_phone"
                                                   class="form-control"
                                                   placeholder="Enter phone (only digits)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="u_email" id="u_email" class="form-control"
                                                   placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Website</label>
                                            <input type="url" name="u_website" id="u_website" class="form-control"
                                                   placeholder="Enter website">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Unit size</label>
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
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary float-right"
                                           id="save-unit-button" value="Save"></input>
                                </div>
                                <div class="float-right">
                                    <a href="<?= base_url(); ?>/dashboard/accounts">Click here to add employer to this
                                        unit</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </form>
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
                <?php foreach($units_all as $unit){ ?>
                <tr>
                    <td><?= $unit["u_id"]; ?></td>
                    <td><?= $unit["u_name"]; ?></td>
                    <td><?= $unit["u_address1"];?></td>
                    <td><?= $unit["u_city"]; ?></td>
                    <td><?= $unit["u_state"]; ?></td>
                    <td>TODO</td>
                    <td><?= $unit["u_phone"]; ?></td>
                    <td><?= $unit["u_email"]; ?></td>
                    <td>
                        <a href="#" class="text-muted">
                            <i class="fas fa-edit"></i>
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
