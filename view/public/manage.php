<?php require_once $dir_public_requires.'header.php';?>
<!-- Body Section-->
               <div class="main-content">
               <div class="row">
              <div class="col-md-12">
                <ul class="nav nav-tabs">
                  <li class="hidden-md hidden-xs"><a href="#tab_students" data-toggle="tab"><i class="glyphicon glyphicon-table"></i>Students</a></li>
                  <li><a href="#tab_teachers" data-toggle="tab"><i class="glyphicon glyphicon-bar-chart"></i>Teachers</a></li>
                  <li class="hidden-md hidden-xs"><a href="#tab_faculties" data-toggle="tab"><i class="glyphicon glyphicon-table"></i> Faculties</a></li>
                  <li class="hidden-md hidden-xs"><a href="#tab_department" data-toggle="tab"><i class="glyphicon glyphicon-table"></i> Departments</a></li>
                  <li class="hidden-md hidden-xs"><a href="#tab_course" data-toggle="tab"><i class="glyphicon glyphicon-table"></i> Courses</a></li>
                  <li class="hidden-md hidden-xs"><a href="#tab_subject" data-toggle="tab"><i class="glyphicon glyphicon-table"></i> Subjects</a></li>
                </ul>
                <div class="tab-content bottom-margin">
                  <div class="tab-pane active" id="tab_students">
                    <div class="shadowed-bottom">
                   </div>
                    <div class="padded">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Course</th>
                          <th>Email Id</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        <?php
                        $Students= Sprofile::find_all();
                        foreach ($Students as $student) {
                          $cors = Course::find_by_id($student->course_id);
                          if($cors){$course=$cors->name;}
                          else{$course='Not Found';}
                          echo '<tr>
                          <td>'.$student->fname. $student->lname.'</td>
                          <td>'.$course.'</td>
                          <td>'.$student->email.'</td>
                         
                        </tr>';
                        }
                        ?>
                          
                      </tbody>
                    </table>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab_teachers">
                    <div class="shadowed-bottom">
                   </div>
                    <div class="padded">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Designaton</th>
                          <th>Office Room No.</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                           <?php
                        $teachers= Tprofile::find_all();
                        foreach ($teachers as $teacher) {
                          echo '<tr>
                          <td>'.$teacher->fname.' '.$teacher->lname.'</td>
                          <td>'.$teacher->designation.'</td>
                          <td>'.$teacher->oroom.'</td>
                        </tr>';
                        }
                        ?>
                      </tbody>
                    </table>
                    </div>
                  </div>

                  <div class="tab-pane" id="tab_faculties">
                    <div class="shadowed-bottom">
                    </div>
                    <div class="padded">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Faculty</th>
                          <th>Dean</th>
                          <th>No. Of Departments</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                        $faculties= Faculty::find_all();
                        foreach ($faculties as $faculty) {
                          echo '<tr>
                          <td>'.$faculty->name.'</td>
                          <td>'.$faculty->dean.'</td>
                          <td>'.$faculty->no_department.'</td>
                        </tr>';
                        }
                        ?>
                      </tbody>
                    </table>
                    </div>
                  </div>

                  <div class="tab-pane" id="tab_department">
                    <div class="shadowed-bottom">
                   </div>
                    <div class="padded">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Department</th>
                          <th>Head Of Department</th>
                          <th>Faculty</th>
                        </tr>
                      </thead>
                      <tbody>
                            <?php
                        $departments= Department::find_all();
                        foreach ($departments as $department) {
                          $faculty = Faculty::find_by_id($department->faculty_id);
                          echo '<tr>
                          <td>'.$department->name.'</td>
                          <td>'.$department->hod.'</td>
                          <td>'.$faculty->name.'</td>
                        </tr>';
                        }
                        ?>
                      </tbody>
                    </table>
                    </div>
                  </div>

                  <div class="tab-pane" id="tab_subject">
                    <div class="shadowed-bottom">
                    </div>
                    <div class="padded">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Subject</th>
                          <th>Subject Code</th>
                          <th>Course</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php
                        $subjects= Subject::find_all();
                        foreach ($subjects as $subject) {
                          $course = Course::find_by_id($subject->course_id);
                          if($course){$cos= $course->name;}else{$cos= 'Not fOund';}
                          echo '<tr>
                          <td>'.$subject->name.'</td>
                          <td>'.$subject->subject_code.'</td>
                          <td>'.$cos.'</td>
                        </tr>';
                        }
                        ?>
                      </tbody>
                    </table>
                    </div>
                  </div>

                  <div class="tab-pane" id="tab_course">
                    <div class="shadowed-bottom">
                   </div>
                    <div class="padded">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Course</th>
                          <th>Fee</th>
                          <th>Department</th>
                        </tr>
                      </thead>
                      <tbody>
                            <?php
                        $courses= Course::find_all();
                        foreach ($courses as $course) {
                          $department = Department::find_by_id($course->department_id);
                          if($department){
                            $department =$department->name;
                          }
                          else{$department = "Not Found";}
                          echo '<tr>
                          <td>'.$course->name.'</td>
                          <td>'.$course->fee.'</td>
                          <td>'.$department.'</td>
                        </tr>';
                        }
                        ?>
                      </tbody>
                    </table>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            </div?
<?php require_once $dir_public_requires.'footer.php';?>