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
                   <li class="hidden-md hidden-xs"><a href="#tab_courses" data-toggle="tab"><i class="glyphicon glyphicon-bar-chart"></i>Courses</a>
                   </li>
                 </ul>
                <div class="tab-content bottom-margin">
                  <div class="tab-pane active" id="tab_courses">
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
                          if($department){ $mam=$department->name;}
                          else{$mam= 'Not Found';} 
                          echo '<tr>
                          <td>'.$course->name.'</td>
                          <td>'.$course->fee.'</td>
                          <td>'.$mam.'</td>
                          <td class="text-right">
                        <a href="course?id='.$course->id.'&del=1" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-delete" name="delete"></i>Delete</a>
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