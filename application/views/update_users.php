        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Update Users</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Id No.</th>
                        <th>Name</th>
                        <th>College</th>
                        <th>Department</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td></td>
                        <td>Tiger Nixon</td>
                        <td></td>
                        <td>Edinburgh</td>
                        <td>$320,800</td>
                        <td><button type="button" class="btn btn-primary " data-toggle="modal" data-target="#editmodal">Edit</button>
                          <button type="button" class="btn btn-danger ">Inactive</button></td>
                      </tr>
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="smallmodalLabel">Update User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="card-body card-block">
                          <form action="" method="post" class="form-horizontal">
                            <div >
                              <div class="row form-group">
                                <div class="col col-md-2"><label for="hf-username" class=" form-control-label">Username</label></div>
                                <div class="col-12 col-md-10"><input type="text" id="hf-username" name="hf-username" class="form-control"></div>
                              </div>
                              <div class="row form-group">
                                <div class="col col-md-2"><label for="hf-userpass" class=" form-control-label">Password</label></div>
                                <div class="col-12 col-md-10"><input type="password" id="hf-mname" name="hf-password" placeholder="Enter a new password" class="form-control"></div>
                              </div>
                              <div class="row form-group">
                                <div class="col col-md-2"><label for="hf-usertype" class=" form-control-label">User Type</label></div>
                                <div class="col-12 col-md-10">
                                  <select name="select" id="select" class="form-control">
                                    <option value="0">Please select</option>
                                    <option value="1">Super Admin</option>
                                    <option value="2">Admin</option>
                                    <option value="3">Faculty</option>
                                  </select>
                                </div>
                              </div>
                              <div class="row form-group">
                                <div class="col col-md-2"><label for="hf-college" class=" form-control-label">College</label></div>
                                <div class="col-12 col-md-10">
                                  <select name="select" id="select" class="form-control">
                                    <option value="0">Please select</option>
                                    <option value=""></option>
                                  </select>
                                </div>
                              </div>
                              <div class="row form-group">
                                <div class="col col-md-2"><label for="hl-department" class=" form-control-label">Department</label></div>
                                <div class="col-12 col-md-10"><input type="text" id="hl-department" name="hl-department" class="form-control" value="CITC" disabled=""></div>
                              </div>
                            </div>
                            <div  >
                              <div class="row form-group">
                                <div class="col col-md-2"><label for="hf-fname" class=" form-control-label">First Name</label></div>
                                <div class="col-12 col-md-10"><input type="text" id="hf-fname" name="hf-fname" class="form-control"></div>
                              </div>
                              <div class="row form-group">
                                <div class="col col-md-2"><label for="hf-mname" class=" form-control-label">Middle Name</label></div>
                                <div class="col-12 col-md-10"><input type="text" id="hf-mname" name="hf-mname"  class="form-control"></div>
                              </div>
                              <div class="row form-group">
                                <div class="col col-md-2"><label for="hl-lname" class=" form-control-label">Last Name</label></div>
                                <div class="col-12 col-md-10"><input type="text" id="hl-lname" name="hl-lname"  class="form-control"></div>
                              </div>

                              <div class="row form-group">
                                <div class="col col-md-2"><label for="hl-date" class=" form-control-label">Date Input</label></div>
                                <div class="col-12 col-md-10"><input id="datepicker" type="date"/></div>
                              </div>

                              <div class="row form-group">
                                <div class="col col-md-2"><label for="hl-number" class=" form-control-label">Contact Number</label></div>
                                <div class="col-12 col-md-10"><input type="text" id="hl-number" name="hl-street" class="form-control"></div>
                              </div>

                              <div class="row form-group">
                                <div class="col col-md-2"><label for="hl-street" class=" form-control-label">Street</label></div>
                                <div class="col-12 col-md-10"><input type="text" id="hl-street" name="hl-street" class="form-control"></div>
                              </div>
                              <div class="row form-group">
                                <div class="col col-md-2"><label for="hl-barangay" class=" form-control-label">Barangay</label></div>
                                <div class="col-12 col-md-10"><input type="text" id="hl-barangay" name="hl-barangay"  class="form-control"></div>
                              </div>
                              <div class="row form-group">
                                <div class="col col-md-2"><label for="hl-city" class=" form-control-label">City</label></div>
                                <div class="col-12 col-md-10"><input type="text" id="hl-city" name="hl-city"  class="form-control"></div>
                              </div>
                              <div class="row form-group">
                                <div class="col col-md-2"><label for="hl-municipality" class=" form-control-label">Municipality</label></div>
                                <div class="col-12 col-md-10"><input type="text" id="hl-municipality" name="hl-municipality" class="form-control"></div>
                              </div>
                            </div>
                          </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal">
                            <i class="fa fa-ban"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm" >
                            <i class="fa fa-dot-circle-o"></i> Confirm
                        </button>
                    </div>
                </div>
            </div>
