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
                            <strong class="card-title">Set Previlege</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>Id No.</th>
                                    <th>Name</th>
                                    <th>College</th>
                                    <th>Department</th>
                                    <th>Position</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td></td>
                                    <td>Tiger Nixon</td>
                                    <td></td>
                                    <td></td>
                                    <td>System Architect</td>
                                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#setmodal" ">Set</button></td>
                                  </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        <div class="modal fade" id="setmodal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="smallmodalLabel">Set Privilege</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <form>
                         <table class="table table-bordered">
                             <thead>
                                 <tr>
                                     <th class="mr-auto"></th>
                                     <th class="mr-0">Add</th>
                                     <th class="mr-0">Update</th>
                                     <th class="mr-0">Edit</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>Users</td>
                                     <td><input type="checkbox" name="useradd"></td>
                                     <td><input type="checkbox" name="userupdate"></td>
                                     <td><input type="checkbox" name="userview"></td>
                                 </tr>
                                 <tr>
                                     <td>College</td>
                                     <td><input type="checkbox" name="collegeadd"></td>
                                     <td><input type="checkbox" name="collegeupdate"></td>
                                     <td><input type="checkbox" name="collegeview"></td>
                                 </tr>
                                 <tr>
                                     <td>Course</td>
                                     <td><input type="checkbox" name="courseadd"></td>
                                     <td><input type="checkbox" name="courseupdate"></td>
                                     <td><input type="checkbox" name="courseview"></td>
                                 </tr>
                                 <tr>
                                     <td>Subject</td>
                                     <td><input type="checkbox" name="subjectadd"></td>
                                     <td><input type="checkbox" name="subjectupdate"></td>
                                     <td><input type="checkbox" name="subjectview"></td>
                                 </tr>
                                 <tr>
                                     <td>Schedule</td>
                                     <td><input type="checkbox" name="scheduleadd"></td>
                                     <td><input type="checkbox" name="scheduleupdate"></td>
                                     <td><input type="checkbox" name="scheduleview"></td>
                                 </tr>
                                 <tr>
                                     <td>Attendance</td>
                                     <td><input type="checkbox" name="attendanceadd"></td>
                                     <td><input type="checkbox" name="attendanceupdate"></td>
                                     <td><input type="checkbox" name="attendanceview"></td>
                                 </tr>
                                 <tr>
                                     <td>Privileges</td>
                                     <td><input type="checkbox" name="privilegeadd"></td>
                                     <td><input type="checkbox" name="privilegeupdate"></td>
                                     <td><input type="checkbox" name="privilegeview"></td>
                                 </tr>
                             </tbody>
                         </table>
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
