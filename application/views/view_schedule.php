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
                            <strong class="card-title">View Schedule</strong><button class="btn btn-outline-primary btn-md pull-right mr-2"><i class="fa fa-print"></i>Print</button>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>Id No.</th>
                                    <th>Name</th>
                                    <th>Day</th>
                                    <th>Course</th>
                                    <th>Section</th>
                                    <th>Subject</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Tiger Nixon</td>
                                    <td></td>
                                    <td></td>
                                    <td>System Architect</td>
                                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#setmodal" ">Details</button></td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        <div class="modal fade" id="setmodal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="smallmodalLabel">View Schedule</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body card-block">
                        </div>
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
