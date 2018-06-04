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
                            <strong class="card-title">Set Schedule</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>Id No.</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Course</th>
                                    <th>College</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php foreach($users as $row): ?>
                                  <form id="form">
                                      <tr>
                                        <input type="hidden" name="user_id" value="<?= $row->user_id?>">
                                        <td><?= $row->user_id?></td>
                                        <td><?= $row->fName?></td>
                                        <td><?= $row->mName?></td>
                                        <td><?= $row->lName?></td>
                                        <td><?= $row->course_code?></td>
                                        <td><?= $row->college_code?></td>
                                        <td><button type="button" id="btnmod" name="mod_sched" class="btn btn-primary" data-toggle="modal" data-target="#setmodal">Set Schedule</button></td>
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
                        <h5 class="modal-title" id="smallmodalLabel">Set Schedule</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="form">
                        <div class="card-body card-block">
                            <div class="row form-group">
                                <div class="col col-md-4"><label for="subject" class=" form-control-label">Subject Code</label></div>
                                <div class="col-12 col-md-8">
                                  <select name="subject_id" id="subject" class="form-control">
                                    <option value="">Please select</option>
                                    <?php foreach($subject as $row): ?>
                                        <option value="<?= $row->subject_id?>">
                                          <?= $row->subject_code?>
                                        </option>
                                    <?php endforeach; ?>
                                  </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-4"><label for="course" class=" form-control-label">Course</label></div>
                                <div class="col-12 col-md-8">
                                  <select name="course_id" id="course" class="form-control">
                                    <option value="">Please select</option>
                                    <?php foreach($course as $row): ?>
                                        <option value="<?= $row->course_id?>">
                                          <?= $row->course_code?>
                                        </option>
                                    <?php endforeach; ?>
                                  </select>
                                </div>
                             </div>
                             <div class="row form-group">
                                <div class="col col-md-4"><label for="room" class=" form-control-label">Room</label></div>
                                <div class="col-12 col-md-8"><input type="text" id="room" name="room" placeholder="Enter Room ..." class="form-control"><small class="form-text text-muted">ex. 09-302</small></div>
                             </div> 
                             <div class="row form-group">
                                <div class="col col-md-4"><label for="section" class=" form-control-label">Section</label></div>
                                <div class="col-12 col-md-8"><input type="text" id="section" name="section" placeholder="Enter Section ..." class="form-control"><small class="form-text text-muted">ex. r1</small></div>
                             </div> 
                            <div class="row form-group">
                                <div class="col col-md-4"><label for="day" class=" form-control-label">Day</label></div>
                                <div class="col-12 col-md-8">
                                  <select name="day" id="day" class="form-control">
                                    <option value="">Please select</option>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                    <option value="Saturday">Saturday</option>
                                  </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-4"><label for="timestart" class=" form-control-label">Time Start</label></div>
                                <div class="col-12 col-md-8"><input type="time" id="timestart" name="time_start" class="form-control"><small class="form-text text-muted">ex. 00:00 AM</small></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-4"><label for="timestart" class=" form-control-label">Time End</label></div>
                                <div class="col-12 col-md-8"><input type="time" id="time_end" name="time_end" class="form-control"><small class="form-text text-muted">ex. 00:00 AM</small></div>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger btn-sm" data-dismiss="modal">
                            <i class="fa fa-ban"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm" id="btnadd" name="set_sched" >
                            <i class="fa fa-dot-circle-o"></i> Confirm
                        </button>
                            
                    </div>
                </div>
            </div>
        </div>
