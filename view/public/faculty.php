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
                   <li class="hidden-md hidden-xs"><a href="#tab_faculties" data-toggle="tab"><i class="glyphicon glyphicon-bar-chart"></i>Faculties</a>
                   </li>
                 </ul>
                <div class="tab-content bottom-margin">
                  <div class="tab-pane active" id="tab_faculties">
                    <div class="shadowed-bottom">
                   </div>
                    <div class="padded">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Faculty</th>
                          <th>Dean</th>
                          <th>Faculty Email</th>
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
                          <td class="text-right">
                        <a href="faculty?id='.$faculty->id.'&del=1" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-delete" name="delete"></i>Delete</a>
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