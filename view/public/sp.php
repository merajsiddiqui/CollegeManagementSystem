<?php require_once $dir_public_requires.'header.php';?>
<div class="main-content">
            <div class="row">
              <div class="col-md-6">
                <div class="widget">
                  <div class="widget-content-white glossed">
                    <div class="padded">
                      <form action="#" role="form" class="form-horizontal">
                        <h3 class="form-title form-title-first"><i class="glyphglyphicon glyphicon glyphglyphicon glyphicon-user"></i>Personal Detail</h3>
                        <div class="form-group">
                          <label class="col-md-4 control-label">First Name </label>
                          <div class="col-md-8">
                            <?php echo $student->fname;?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Last Name</label>
                          <div class="col-md-8">
                            <?php echo $student->lname;?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Gender</label>
                          <div class="col-md-8">
                            <?php echo $student->gender;?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Birthday</label>
                          <div class="col-md-8">
                            <?php echo $student->dob;?>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="col-md-6">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="widget">
                  <div class="widget-content-white glossed">
                    <div class="padded">
                      <form action="#" role="form" class="form-horizontal">
                        <h3 class="form-title form-title-first"><i class="glyphglyphicon glyphicon glyphglyphicon glyphicon-book"></i>Educational Details</h3>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Course</label>
                          <div class="col-md-8">
                            <?php 
                            echo $cours;?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Department</label>
                          <div class="col-md-8">
                            <?php 
                            echo $departmente;?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Faculty</label>
                          <div class="col-md-8">
                            <?php
                            echo $fac;?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Email</label>
                          <div class="col-md-7" style="text-decoration:underline;">
                            <?php echo $student->email;?>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="col-md-6">
                    </div>
                  </div>
                </div>
              </div>
              <center><a href="student"><button class="btn btn-primary">Return Home</button></a></center>
            </div>
            </div>
<?php require_once $dir_public_requires.'footer.php';?>