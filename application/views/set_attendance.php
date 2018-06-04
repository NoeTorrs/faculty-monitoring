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
                            <strong class="card-title">Set Attendance</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>Id No.</th>
                                    <th>Name</th>
                                    <th>Day</th>
                                    <th>Subject</th>
                                    <th>Section</th>
                                    <th>Time Start</th>
                                    <th>Time End</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($schedule as $row): ?>
                                    <form id="form">
                                    <tr>
                                        <input type="hidden" name="user_id" value="<?= $row->user_id?>">
                                        <td><?= $row->user_id?></td>
                                        <td><?= $row->Name?></td>
                                        <td><?= $row->day?>Tiger Nixon</td>
                                        <td><?= $row->subject_code?></td>
                                        <td><?= $row->section?></td>
                                        <td><?= $row->time_start?></td>
                                        <td><?= $row->time_end?></td>
                                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#setmodal" ">Set </button></td>
                                    </tr>
                                    </form>
                                    <?php endforeach; ?>
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
                        <h5 class="modal-title" id="smallmodalLabel">Set Attendance</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body card-block">
                            <div class="row form-group">
                                <div class="col col-md-4"><label for="hf-subject" class=" form-control-label">Subject Code</label></div>
                                <div class="col-12 col-md-8">
                                  <select name="select" id="hf-subject" class="form-control">
                                    <option value="0">Please select</option>
                                    <option value=""></option>
                                  </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-4"><label for="hf-course" class=" form-control-label">Course</label></div>
                                <div class="col-12 col-md-8">
                                  <select name="select" id="hf-course" class="form-control">
                                    <option value="0">Please select</option>
                                    <option value=""></option>
                                  </select>
                                </div>
                             </div>
                             <div class="row form-group">
                                <div class="col col-md-4"><label for="hf-section" class=" form-control-label">Section</label></div>
                                <div class="col-12 col-md-8"><input type="text" id="hl-section" name="hl-section" placeholder="Enter Section ..." class="form-control"></div>
                             </div> 
                            <div class="row form-group">
                                <div class="col col-md-4"><label for="hl-room" class=" form-control-label">Room</label></div>
                                <div class="col-12 col-md-8"><input type="text" id="hl-room" name="hl-room" placeholder="Enter Room ..." class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-4"><label for="hl-scheddate" class=" form-control-label">Date</label></div>
                                <div class="col-12 col-md-8"><input type="date" id="hl-scheddate" name="hl-scheddate" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-4"><label for="hl-timestart" class=" form-control-label">Time Start</label></div>
                                <div class="col-12 col-md-8"><input type="time" id="hl-timestart" name="hl-timestart" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-4"><label for="hl-timestart" class=" form-control-label">Time End</label></div>
                                <div class="col-12 col-md-8"><input type="time" id="hl-timeend" name="hl-timeend" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-4"><label for="hl-timein" class=" form-control-label">Time In</label></div>
                                <div class="col-12 col-md-8"><input type="time" id="hl-timein" name="hl-timein" class="form-control"><small class="form-text text-muted">ex. 00:00 AM</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-4"><label for="hl-timeout" class=" form-control-label">Time Out</label></div>
                                <div class="col-12 col-md-8"><input type="time" id="hl-timeout" name="hl-timeout" class="form-control"><small class="form-text text-muted">ex. 00:00 AM</small></div>
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
