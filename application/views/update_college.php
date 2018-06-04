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
                            <strong class="card-title">Update College</strong></button>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>College Code</th>
                                    <th>College Description</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php foreach($college as $row): ?>
                                  <tr>
                                    <input type="hidden" id="id" value="<?= $row->college_id?>">
                                    <td><span><?= $row->college_code?></span></td>
                                    <td><span><?= $row->college_desc?></td></span>
                                    <td><button type="button" class="btn btn-primary" id="#btnedit" data-toggle="modal" data-target="#editmodal">Edit</button>
                                    <button type="button" class="btn btn-danger ">Inactive</button></td>
                                  </tr>
                                  <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="smallmodalLabel">Update College</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="put" class="form-horizontal">
                          <div class="row form-group">
                            <input type="hidden" name="college_id" id="id">
                            <div class="col col-md-5"><label for="collegecode" class=" form-control-label">College Code</label></div>
                            <div class="col-12 col-md-7"><input type="text" id="collegecode" name="college_code" placeholder="Enter College Code ... " class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-5"><label for="college_desc" class=" form-control-label">College Description</label></div>
                            <div class="col-12 col-md-7"><input type="text" id="collegedesc" name="college_desc" placeholder="Enter College Description ... " class="form-control"></div>
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
