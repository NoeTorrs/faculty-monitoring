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
        <strong>Add Subject</strong> 
      </div>
      <div class="card-body card-block">
        <form id="form" action="" method="post" class="form-horizontal">
          <div class="row form-group">
            <div class="col col-md-2"><label for="subjectcode" class=" form-control-label">Subject Code</label></div>
            <div class="col-12 col-md-10"><input type="text" id="subjectcode" name="subject_code" placeholder="Enter Subject Code ... " class="form-control"></div>
          </div>
          <div class="row form-group">
            <div class="col col-md-2"><label for="subjectdesc" class=" form-control-label">Subject Description</label></div>
            <div class="col-12 col-md-10"><input type="text" id="subjectdesc" name="subject_description" placeholder="Enter Subject Description ... " class="form-control"></div>
          </div>
          <div class="row form-group">
              <div class="col col-md-2"><label for="collegeid" class=" form-control-label">Course</label></div>
              <div class="col-12 col-md-10">
                <select name="course_id" id="select" class="form-control">
                  <option value="">Please select</option>
                  <?php foreach($course as $row): ?>
                    <option value="<?= $row->course_id?>">
                        <?= $row->course_code?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
        </form>
      </div>
      <div class="card-footer">
        <div class="pull-right">
          <button type="submit" class="btn btn-primary btn-md " id="btnadd" name="add_subject">
            <i class="fa fa-dot-circle-o"></i> Submit
          </button>
          <button type="reset" class="btn btn-danger btn-md" id="btnback">
            <i class="fa fa-ban"></i> Reset
          </button>
        </div>
      </div>  
    </div>
  </div>  