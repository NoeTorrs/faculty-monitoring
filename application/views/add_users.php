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
                    <li><a href="#">Forms</a></li>
                    <li class="active">Basic</li>
                </ol>
            </div>
        </div>
    </div>
  </div>
  <div class="content mt-3">
   <div class="card"> 
      <div class="card-header">
        <strong>Add User</strong> 
      </div>
      <div class="card-body card-block">
        <form id="form" action="" method="" class="form-horizontal">
          <div class="row form-group">
          </div>
          <div class="row form-group">
            <div class="col col-md-2"><label for="username" class=" form-control-label">Username</label></div>
            <div class="col-12 col-md-10"><input type="text" id="username" name="username" class="form-control" placeholder="Enter Username"><small class="form-text text-muted">for faculty: preferred username is id no.</small></div>
          </div>
          <div class="row form-group">
            <div class="col col-md-2"><label for="userpass" class=" form-control-label">Password</label></div>
            <div class="col-12 col-md-10"><input type="password" id="userpass" name="userpass" class="form-control"  value="123"><small class="form-text text-muted">default password is 123</small></div>
          </div>
          <div class="row form-group">
            <div class="col col-md-2"><label for="usertype" class=" form-control-label">User Type</label></div>
            <div class="col-12 col-md-10">
              <select name="user_type" id="usertype" class="form-control">
                <option value="">Please select</option>
                <option value="Super Admin">Super Admin</option>
                <option value="Admin">Admin</option>
                <option value="Faculty">Faculty</option>
              </select>
            </div>
          </div>
          <div class="row form-group">
            <div class="col col-md-2"><label for="course" class=" form-control-label">Course</label></div>
            <div class="col-12 col-md-10">
              <select name="course_id" id="courseid" class="form-control">
                <option value="">Please select</option>
                <option value="N/A">N/A</option>
                <?php foreach($course as $row): ?>
                  <option value="<?= $row->course_id?>">
                      <?= $row->course_code?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="row form-group">
            <div class="col col-md-2"><label for="college" class=" form-control-label">College</label></div>
            <div class="col-12 col-md-10">
              <select  id="collegeid" class="form-control">
                <option value="">Please select</option>
                <option value="N/A">N/A</option>
                <?php foreach($course as $row): ?>
                  <option value="<?= $row->college_id?>">
                      <?= $row->college_code?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="row form-group">
            <div class="col col-md-2"><label for="fname" class=" form-control-label">First Name</label></div>
            <div class="col-12 col-md-10"><input type="text" id="fName" name="fName" placeholder="Enter First Name..." class="form-control"></div>
          </div>
          <div class="row form-group">
            <div class="col col-md-2"><label for="mname" class=" form-control-label">Middle Name</label></div>
            <div class="col-12 col-md-10"><input type="text" id="mname" name="mName" placeholder="Enter Middle Name..." class="form-control"></div>
          </div>
          <div class="row form-group">
            <div class="col col-md-2"><label for="lname" class=" form-control-label">Last Name</label></div>
            <div class="col-12 col-md-10"><input type="text" id="lname" name="lName" placeholder="Enter Last Name..." class="form-control"></div>
          </div>
          <div class="row form-group">
            <div class="col col-md-2"><label for="number" class=" form-control-label">Contact Number</label></div>
            <div class="col-12 col-md-10"><input type="number" id="number" name="contact_number" maxlength="11" placeholder="Enter Phone No..." class="form-control"><small class="form-text text-muted">ex. 09951093862</small></div>
          </div>

          <div class="row form-group">
            <div class="col col-md-2"><label for="address" class=" form-control-label">Address</label></div>
            <div class="col-12 col-md-10"><input type="text" id="address" name="address" placeholder="Enter Street..." class="form-control"><small class="form-text text-muted">ex. Z1 Kauswagan, CDOC</small></div>
          </div>
        </form>
      </div>
      <div class="card-footer">
        <div class="pull-right">
          <button type="submit" class="btn btn-primary btn-md" id="btnadd" name="add_users">
            <i class="fa fa-dot-circle-o"></i> Submit
          </button>
          <button type="reset" class="btn btn-danger btn-md" id="btnreset">
            <i class="fa fa-ban"></i> Reset
          </button>
        </div>
      </div>  
    </div>
  </div>  