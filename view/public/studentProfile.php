<?php require_once $dir_public_requires.'header.php';?>
  <div class="main-content"> 
            <div class="row">
              <div class="col-md-12">
                <div class="widget">
                  <div class="widget-content-white glossed">
                    <div class="padded">
                      <form action="" role="form" method="POST">
                        <div class="widget-controls pull-right">
                          <a href="#" class="widget-link-remove"><i class="glyphicon glyphicon-sign"></i></a>
                          <a href="#" class="widget-link-remove"><i class="glyphicon glyphicon-remove"></i></a>
                        </div>
                        <h3 class="form-title form-title-first"><i class="glyphicon glyphicon-plus"></i> Creating New Student profile </h3>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>First Name</label>
                              <input type="text" class="form-control" placeholder="First Name" name="fname" required>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Last Name</label>
                              <input type="text" class="form-control" placeholder="Last Name" name="lname" required>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Course</label>
                              <select class="form-control" name="course" required>
                                 <?php
                              $coptions = Course::find_all();
                              foreach ($coptions as $coption) {
                                echo '<option value="'.$coption->id.'">'.$coption->name.'</option>';
                              }
                              ?>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Date Of Birth</label>
                              <input type="text" class="form-control" placeholder="DOB" name="dob" required>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Gender</label>
                              <select class="form-control" placeholder="Gender" name="gender" required>
                                <option><center>Select Your Gender</center></option>
                                <option><center>Male</center></option>
                                <option><center>Female</center></option>
                                <option><center>3rd Gender</center></option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Email Address</label>
                              <input type="text" class="form-control" placeholder="Email Address" name="email" required>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Mailing Address</label>
                              <textarea class="form-control" placeholder="Complete Mailing Address" name="address" rows="4" required></textarea>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Mobile No.</label>
                              <input type="text" class="form-control" placeholder="Mobile No." name="mobile" required>
                              <label>Telephone No.</label>
                              <input type="text" class="form-control" placeholder="Telephone No." name="telephone" required>
                            </div>
                          </div>
                          </div>
                          <center>
                            <button class="btn btn-primary" type="submit" name="create">Create Profile</button>
                        <button class="btn btn-default" type="reset">Cancel</button>
                          </center>
                        
                      </form>
                    </div>
                    <div class="col-md-6">
                    </div>
                  </div>
                </div>
              </div>

            </div>
            </div>
<?php require_once $dir_public_requires.'footer.php';?>