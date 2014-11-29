<?php require_once $dir_public_requires.'header.php';?>
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
                      <form action="" role="form" class="form-horizontal" method="POST">
                        <div class="widget-controls pull-right">
                          <a href="#" class="widget-link-remove"><i class="glyphicon glyphicon-minus"></i></a>
                          <a href="#" class="widget-link-remove"><i class=" glyphicon glyphicon-remove-circle"></i></a>
                        </div>
                        <h3 class="form-title form-title-first"><i class="glyphicon glyphicon-refresh"></i> Add Faculty</h3>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Faculty Name</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Faculty Name" name="fname" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Faculty Dean</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Faculty Dean" name="fdean" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label"> Faculty Email</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Faculty Email Id" name="fnod" required>
                          </div>
                        </div>                   
                        <div class="form-group">
                          <div class="col-md-offset-4 col-md-8">
                            <button type="submit" class="btn btn-default" name="fupdate">Add</button>
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
                      <form action="" role="form" class="form-horizontal" method="POST">
                        <div class="widget-controls pull-right">
                          <a href="#" class="widget-link-remove"><i class="glyphicon glyphicon-minus"></i></a>
                          <a href="#" class="widget-link-remove"><i class=" glyphicon glyphicon-remove-circle"></i></a>
                        </div>
                        <h3 class="form-title form-title-first"><i class="glyphicon glyphicon-refresh"></i>Add Department</h3>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Department Name</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Department" name="dname" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Head Of Department</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Head Of Depatment" name="dhod" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Choose Faculty</label>
                          <div class="col-md-8">
                           <select class="form-control"  name="fid" required id="select">
                           <option id="option" value="">Select ...</option>
                             <?php
                                $foptions = Faculty::find_all();
                                foreach ($foptions as $foption) {
                                  echo '<option value="'.$foption->id.'">'.$foption->name.'</option>';
                                }
                             ?>
                           </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-offset-4 col-md-8">
                            <button type="submit" class="btn btn-default" name="dupdate" id="submit">Add</button>
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
                      <form action="" role="form" class="form-horizontal" method="POST">
                        <div class="widget-controls pull-right">
                          <a href="#" class="widget-link-remove"><i class="glyphicon glyphicon-minus"></i></a>
                          <a href="#" class="widget-link-remove"><i class=" glyphicon glyphicon-remove-circle"></i></a>
                        </div>
                        <h3 class="form-title form-title-first"><i class="glyphicon glyphicon-refresh"></i> Add Courses</h3>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Course Name</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Course Name" name="cname" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Course Fee</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Course fee" name="cfee" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Choose Department</label>
                          <div class="col-md-8">
                            <select  class="form-control" name="did" required>
                            <option>Select ...</option>
                              <?php
                                $doptions = Department::find_all();
                                foreach ($doptions as $doption) {
                                  echo '<option value="'.$doption->id.'">'.$doption->name.'</option>';
                                }
                                ?>
                            </select required>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-offset-4 col-md-8">
                            <button type="submit" class="btn btn-default" name="cupdate">Add</button>
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
                      <form action="" role="form" class="form-horizontal" method="POST">
                        <div class="widget-controls pull-right">
                          <a href="#" class="widget-link-remove"><i class="glyphicon glyphicon-minus"></i></a>
                          <a href="#" class="widget-link-remove"><i class=" glyphicon glyphicon-remove-circle"></i></a>
                        </div>
                        <h3 class="form-title form-title-first"><i class="glyphicon glyphicon-refresh"></i> Add Subjects</h3>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Subject Name</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Subject Name" name="sname" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Subject Code</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Subject Code" name="scode" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Choose Course</label>
                          <div class="col-md-8">
                            <select  class="form-control" name="cid" required>
                            <option>Select ...</option>
                             <?php
                              $coptions = Course::find_all();
                              foreach ($coptions as $coption) {
                                echo '<option value="'.$coption->id.'">'.$coption->name.'</option>';
                              }
                              ?>
                            </select required>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-offset-4 col-md-8">
                            <button type="submit" class="btn btn-default" name="supdate">Add</button>
                          </div>
                        </div>
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