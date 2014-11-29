<?php require_once $dir_public_requires.'header.php';?>
  <div class="main-content">
            <div class="row">
              <div class="col-md-12">
                <div class="widget">
                  <div class="widget-content-white glossed">
                    <div class="padded">
                      <form action="" method="POST" role="form">
                        <div class="widget-controls pull-right">
                          <a href="#" class="widget-link-remove"><i class="glyphicon glyphicpon-minus-sign"></i></a>
                          <a href="#" class="widget-link-remove"><i class="glyphicon glyphicpon-remove-sign"></i></a>
                        </div>
                        <h3 class="form-title form-title-first"><i class="glyphicon glyphicpon-terminal"></i> Creating New Teacher profile </h3>
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
                            <div class="col-md-12">
                            <div class="form-group">
                          <label>Choose Department</label>
                            <select  class="form-control" name="did" required>
                              <?php
                                $doptions = Department::find_all();
                                foreach ($doptions as $doption) {
                                  echo '<option value="'.$doption->id.'">'.$doption->name.'</option>';
                                }
                                ?>
                            </select>

                        </div>
                          </div> 
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Designation</label>
                              <input type="text" class="form-control" placeholder="Designation" name="designation" required>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Qualification</label>
                              <input type="text" class="form-control" placeholder="Maximum qualification" name="qualification" required>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Email Address</label>
                              <input type="text" class="form-control" placeholder="Email Address" name="email" required>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Contact No.</label>
                              <input type="text" class="form-control" placeholder="Contact Number" name="contact" required>
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
                              <label>Office Room nO.</label>
                              <input type="text" class="form-control" placeholder="Office Room No." name="oroom" required>
                              <label>Office Telephone No.</label>
                              <input type="text" class="form-control" placeholder="Office Telephone No." name="otelephone" required>
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