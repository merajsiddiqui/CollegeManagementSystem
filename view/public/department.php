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
                   <li class="hidden-md hidden-xs"><a href="#tab_departments" data-toggle="tab"><i class="glyphicon glyphicon-bar-chart"></i>Departments</a>
                   </li>
                 </ul>
                <div class="tab-content bottom-margin">
                  <div class="tab-pane active" id="tab_departments">
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
                          if($faculty){
                            $fac= $faculty->name;
                          }
                          else{
                            $fac="Not Found";
                          }
                          echo '<tr>
                          <td>'.$department->name.'</td>
                          <td>'.$department->hod.'</td>
                          <td>'.$fac.'</td>
                          <td class="text-right">
                        <a href="department?id='.$department->id.'&del=1" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-delete" name="delete"></i>Delete</a>
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