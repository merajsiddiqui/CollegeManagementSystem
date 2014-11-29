<?php require_once $dir_public_requires.'header.php';?>
<!-- Body Section-->
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

            <div class="widget"  id="home-widget">
              <h3 class="section-title first-title"><i class="glyphicon glyphicon-home"></i>DashBoard Home</h3>
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                  <div class="widget-content-blue-wrapper changed-up">
                    <div class="widget-content-blue-inner padded" id="ctaccount">
                        <div class="pre-value-block">
                        <img id="image-icon" href="teacherProfile" src="<?php echo $dir_assets_img.'teacher_icon.jpg';?>">
                      </div> Create Account
                      </div>

                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                  <div class="widget-content-blue-wrapper changed-up">
                    <div class="widget-content-blue-inner padded">
                        <div class="pre-value-block">
                        <img id="image-icon" href="studentProfile" src="<?php echo $dir_assets_img.'student_icon.png';?>">
                      </div>Create Account
                      </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                  <div class="widget-content-blue-wrapper changed-up">
                    <div class="widget-content-blue-inner padded">
                        <div class="pre-value-block">
                        <img id="image-icon" href="teacher" src="<?php echo $dir_assets_img.'teachers.jpg';?>">
                      </div>View Teachers
                      </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                  <div class="widget-content-blue-wrapper changed-up">
                    <div class="widget-content-blue-inner padded">
                        <div class="pre-value-block">
                        <img id="image-icon" href="student" src="<?php echo $dir_assets_img.'student.jpg';?>">
                      </div>View Students
                      </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                  <div class="widget-content-blue-wrapper changed-up">
                    <div class="widget-content-blue-inner padded">
                        <div class="pre-value-block">
                        <img id="image-icon" href="faculty" src="<?php echo $dir_assets_img.'faculty_icon.jpg';?>">
                      </div>View Faculties
                      </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                  <div class="widget-content-blue-wrapper changed-up">
                    <div class="widget-content-blue-inner padded">
                        <div class="pre-value-block">
                        <img id="image-icon" href="department" src="<?php echo $dir_assets_img.'departments_icon.jpg';?>">
                      </div>View Departments
                      </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                  <div class="widget-content-blue-wrapper changed-up">
                    <div class="widget-content-blue-inner padded">
                        <div class="pre-value-block">
                        <img id="image-icon" href="course" src="<?php echo $dir_assets_img.'course_icon.jpg';?>">
                      </div>View Courses
                      </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 text-center">
                  <div class="widget-content-blue-wrapper changed-up">
                    <div class="widget-content-blue-inner padded">
                        <div class="pre-value-block">
                        <img id="image-icon" href="subject" src="<?php echo $dir_assets_img.'subject_icon.jpg';?>">
                      </div>View Subjects
                      </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<?php require_once $dir_public_requires.'footer.php';?>