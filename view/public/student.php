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
                   <li class="hidden-md hidden-xs"><a href="#tab_students" data-toggle="tab"><i class="glyphicon glyphicon-bar-chart"></i>Students</a>
                   </li>
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
                          if($cors){
                            $course=$cors->name;
                          }
                          else{$course="Not Found";}
                          echo '<tr>
                          <td>'.$student->fname.'&nbsp'. $student->lname.'</td>
                          <td>'.$course.'</td>
                          <td>'.$student->email.'</td>
                          <td class="text-right">
                        <a href="sp?id='.$student->id.'" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-search"></i>view</a>
                        <a href="sp?id='.$student->id.'&del=1" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-delete" name="delete"></i>Delete</a>
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