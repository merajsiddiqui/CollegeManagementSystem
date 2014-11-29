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
                   <li class="hidden-md hidden-xs"><a href="#tab_teachers" data-toggle="tab"><i class="glyphicon glyphicon-bar-chart"></i>Teachers</a>
                   </li>
                 </ul>
                <div class="tab-content bottom-margin">
                  <div class="tab-pane active" id="tab_teachers">
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
                          <td class="text-right">
                        <a href="tp?id='.$teacher->id.'" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-search"></i>view</a>
                        <a href="tp?id='.$teacher->id.'&del=1" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-delete" name="delete"></i>Delete</a>
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