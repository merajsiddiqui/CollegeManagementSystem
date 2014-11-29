<?php require_once $dir_public_requires.'public_header.php';?>
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
                            <?php echo $teacher->fname;?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Last Name</label>
                          <div class="col-md-8">
                            <?php echo $teacher->lname;?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Email ID</label>
                          <div class="col-md-8">
                            <?php echo $teacher->email;?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Room No.</label>
                          <div class="col-md-8">
                            <?php echo $teacher->oroom;?>
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
                        <h3 class="form-title form-title-first"><i class="glyphglyphicon glyphicon glyphglyphicon glyphicon-book"></i>Official Details</h3>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Designation</label>
                          <div class="col-md-8">
                            <?php 
                            echo $teacher->designation;?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Qualification</label>
                          <div class="col-md-8">
                            <?php 
                            echo $teacher->qualification;?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Department</label>
                          <div class="col-md-8">
                            <?php
                            echo $department->name;?>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Department</label>
                          <div class="col-md-8">
                            <?php
                            echo $faculty->name;?>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="col-md-6">
                    </div>
                  </div>
                </div>
              </div>
              <center><a href="public_home"><button class="btn btn-primary">Return Home</button></a></center>
            </div>
            </div>
            <?php require_once $dir_public_requires.'footer.php';?>