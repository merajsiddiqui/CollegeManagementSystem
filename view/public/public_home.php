<?php require_once $dir_public_requires.'public_header.php';?>
<div class="main-content">
<?php if(!empty($session->message)){
              echo '<div class="widget">
              <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <center><i class="glyphicon glyphicon-ok"></i><b>  &nbsp&nbsp'.$session->message.'</b></center>
              </div>
            </div>';
              }
              ?>
            <div class="row">
              <div class="col-md-6">
                <div class="widget">
                  <div class="widget-content-white glossed">
                    <div class="padded">
                        <h3 class="form-title form-title-first"><i class="glyphicon glyphicon-bookmark"></i>About Us</h3>
                        This Project is about University Management System. Which contains details about Student, Professors,
                        Courses, Departments etc.Anyone can lookup here for Professor Details While to lookup On student profile You must enter 
                        valid email address (email address which isregistered with us) of the student in order to know about them.
                    </div>
                    <div class="col-md-12">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="widget">
                  <div class="widget-content-white glossed">
                  <h3 class="section-title"><i class="glyphicon glyphicon-search"></i>Search</h3>
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_professors" data-toggle="tab"><i class="glyphicon glyphicon-hand-right"></i>Professors</a></li>
                    <li><a href="#tab_students" data-toggle="tab"><i class="glyphicon glyphicon-hand-right"></i>Students</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab_professors">
                      <div class="padded">
                      <form action="" role="form" class="form-horizontal" method="POST">
                        <div class="form-group">
                          <label class="col-md-4 control-label">Choose Department</label>
                          <div class="col-md-8">
                            <select class="form-control" name="department_id">
                            <option>Select A Department</option>
                              <?php
                                $doptions = Department::find_all();
                                foreach ($doptions as $doption) {
                                  echo '<option value="'.$doption->id.'">'.$doption->name.'</option>';
                                }
                                ?>
                            </select>
                          </div>
                        </div>
                  
                        <div class="form-group">
                          <div class="col-md-offset-6 col-md-8">
                            <button type="submit" class="btn btn-default" name="psearch">Search</button>
                          </div>
                        </div>
                      </form>
                      </div>
                    </div>
                    <div class="tab-pane" id="tab_students"> 
                      <div class="padded">
                        <form action="sprofile" role="form" class="form-horizontal" method="GET">
                        <div class="form-group">
                          <label class="col-md-4 control-label">Student Email</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="For maintaining privacy" name="semail">
                          </div>
                        </div>
                  
                        <div class="form-group">
                          <div class="col-md-offset-6 col-md-8">
                            <button type="submit" class="btn btn-default" name="ssearch">Search</button>
                          </div>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>
                    <div class="col-md-6">
                    </div>
                  </div>
                </div>
              </div>
              <?php if (isset($_POST['psearch'])) {
              echo '
              <div class="widget">
              <h3 class="section-title first-title"><i class="glyphicon glyphicon-user"></i>Professer\'s List</h3>
              <div class="widget-content-white glossed">
                <div class="padded">
                <table class="table table-striped table-bordered table-hover">
                  <thead>

                    <tr>
                      <th>Professor\'s Name</th>
                      <th>Last Name</th>
                      <th>Profile</th>
                    </tr>

                  </thead>
                  <tbody>';
                  $plists= Tprofile::find_department($did);
                  //var_dump($plists);
                  foreach($plists as $plist){
                    echo '<tr>
                      <td>'.$plist->fname.'</td>
                      <td>'.$plist->lname.'</td>
                      <td class="text-right">
                        <a href="tprofile?id='.$plist->id.'" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-pencil"></i>view</a>
                      </td>
                    </tr>';
                  }
                  echo '</tbody>
                </table>
                </div>
              </div>
            </div>';
              }?>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<?php require_once $dir_public_requires.'footer.php';?>