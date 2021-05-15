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
                                                    id="u_state" name="u_state">
                                                <option selected="selected"> --Select--</option>
                                                <option data-select2-id="115">Option 1</option>
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
                                    <div class="col-md-4">
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
                                            <label>Sector</label>
                                            <select class="form-control select2 select2-hidden-accessible"
                                                    style="width: 100%;"
                                                    data-select2-id="1" tabindex="-1" aria-hidden="true"
                                                    id="u_type" name="u_type">
                                                <option selected="selected"> --Select--</option>
                                                <option data-select2-id="105">Alaska</option>
                                                <option data-select2-id="106">California</option>
                                                <option data-select2-id="107">Delaware</option>
                                                <option data-select2-id="108">Tennessee</option>
                                                <option data-select2-id="109">Texas</option>
                                                <option data-select2-id="110">Washington</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Unit size</label>
                                            <select class="form-control select2 select2-hidden-accessible"
                                                    style="width: 100%;"
                                                    data-select2-id="1" tabindex="-1" aria-hidden="true"
                                                    id="u_size" name="u_size">
                                                <option selected="selected"> --Select--</option>
                                                <option data-select2-id="115">Option 1</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-primary" id="save-unit-button">Save</input>
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
                <?php //foreach($units as $unit){ ?>
                <tr>
                    <td><?= ""; //$unit["id"];            ?></td>
                    <td><?= ""; //$unit["name"];          ?></td>
                    <td><?= ""; //$unit["address1"];          ?></td>
                    <td><?= "";// $unit["city"];          ?></td>
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
