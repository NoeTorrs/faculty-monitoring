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
        <strong>Add Course</strong> 
      </div>
      <div class="card-body card-block">
        <form id="form" action="" method="post" class="form-horizontal">
          <div class="row form-group">
            <div class="col col-md-2"><label for="coursecode" class=" form-control-label">Course Code</label></div>
            <div class="col-12 col-md-10"><input type="text" id="coursecode" name="course_code" placeholder="Enter Course Code ... " class="form-control"></div>
          </div>
          <div class="row form-group">
            <div class="col col-md-2"><label for="coursedesc" class=" form-control-label">Course Description</label></div>
            <div class="col-12 col-md-10"><input type="text" id="coursedesc" name="course_desc" placeholder="Enter Course Description ... " class="form-control"></div>
          </div>
          <div class="row form-group">
              <div class="col col-md-2"><label for="collegeid" class=" form-control-label">College</label></div>
              <div class="col-12 col-md-10">
                <select name="college_id" id="collegeid" class="form-control">
                  <option value="">Please select</option>
                  <?php foreach($college as $row): ?>
                    <option value="<?= $row->college_id?>">
                        <?= $row->college_code?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
        </form>
      </div>
      <div class="card-footer">
        <div class="pull-right">
          <button type="submit" class="btn btn-primary btn-md " id="btnadd" name="add_course">
            <i class="fa fa-dot-circle-o"></i> Submit
          </button>
          <button type="reset" class="btn btn-danger btn-md" id="btnback">
            <i class="fa fa-ban"></i> Reset
          </button>
        </div>
      </div>  
    </div>
  </div>  