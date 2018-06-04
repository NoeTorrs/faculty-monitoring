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
        <strong>Add College</strong> 
      </div>
      <div class="card-body card-block">
        <form id="form" action="" method="post" class="form-horizontal" role="post">
          <div class="row form-group">
            <div class="col col-md-2"><label for="collegecode" class=" form-control-label">College Code</label></div>
            <div class="col-12 col-md-10"><input type="text" id="collegecode" name="college_code" placeholder="Enter College Code ... " class="form-control" required></div>
          </div>
          <div class="row form-group">
            <div class="col col-md-2"><label for="collegedesc" class=" form-control-label">College Description</label></div>
            <div class="col-12 col-md-10"><input type="text" id="collegedesc" name="college_desc" placeholder="Enter College Description ... " class="form-control" required></div>
          </div>
        </form>
      </div>
      <div class="card-footer">
        <div class="pull-right">
          <button type="submit" class="btn btn-primary btn-md " id="btnadd" name="add_college">
            <i class="fa fa-dot-circle-o"></i> Submit
          </button>
          <button type="reset" class="btn btn-danger btn-md" id="btnback">
            <i class="fa fa-ban"></i> Reset
          </button>
        </div>
      </div>  
    </div>
  </div>  