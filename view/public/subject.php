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
               <div class="row">
              <div class="col-md-12">
                <ul class="nav nav-tabs">
                   <li class="hidden-md hidden-xs"><a href="#tab_subjects" data-toggle="tab"><i class="glyphicon glyphicon-bar-chart"></i>Subjects</a>
                   </li>
                 </ul>
                <div class="tab-content bottom-margin">
                  <div class="tab-pane active" id="tab_subjects">
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
                          if($course){
                            $course=$course->name;
                          }
                          else{
                            $course="Not Found";
                          }
                          echo '<tr>
                          <td>'.$subject->name.'</td>
                          <td>'.$subject->subject_code.'</td>
                          <td>'.$course.'</td>
                          <td class="text-right">
                          <a href="subject?id='.$subject->id.'&del=1" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-delete" name="delete"></i>Delete</a>
                      </td>
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