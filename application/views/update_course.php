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
                            <strong class="card-title">Update Course</strong></button>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>Course Code</th>
                                    <th>Courses Description</th>
                                    <th>College</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td></td>
                                    <td>System Architect</td>
                                    <td></td>
                                    <td><button type="button" class="btn btn-primary " data-toggle="modal" data-target="#editmodal">Edit</button>
                                    <button type="button" class="btn btn-danger ">Inactive</button></td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="smallmodalLabel">Update Course</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-md-5"><label for="hf-coursecode" class=" form-control-label">Course Code</label></div>
                            <div class="col-12 col-md-7"><input type="text" id="hf-subjectcode" name="hf-coursecode" placeholder="Enter Course Code ... " class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-5"><label for="hf-coursedesc" class=" form-control-label">Course Description</label></div>
                            <div class="col-12 col-md-7"><input type="text" id="hf-subjectdesc" name="hf-coursedesc" placeholder="Enter Course Description ... " class="form-control"></div>
                          </div>
                          <div class="row form-group">
                              <div class="col col-md-5"><label for="hf-college" class=" form-control-label">College</label></div>
                              <div class="col-12 col-md-7">
                                <select name="select" id="select" class="form-control">
                                  <option value="0">Please select</option>
                                  <option value="1">CITC</option>
                                  <option value="2">COT</option>
                                  <option value="3">CEA</option>
                                </select>
                              </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger btn-sm" data-dismiss="modal">
                            <i class="fa fa-ban"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm" >
                            <i class="fa fa-dot-circle-o"></i> Confirm
                        </button>     
                    </div>
                </div>
            </div>
        </div>
