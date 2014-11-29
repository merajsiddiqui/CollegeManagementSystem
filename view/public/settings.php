<?php require_once $dir_public_requires.'header.php';?>
<style type="text/css">
  .meraj {
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
       -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
          transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.meraj:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
          box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, .6);
}
.meraj::-moz-placeholder {
  color: #999;
  opacity: 1;
}
.meraj:-ms-input-placeholder {
  color: #999;
}
.meraj::-webkit-input-placeholder {
  color: #999;
}
</style>

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

            <div class="widget">
              <h3 class="section-title first-title"><i class="glyphicon glyphicon-cog"></i>Account Settings</h3>
              <div class="row">
              <div class="col-md-12">
                <div class="widget">
                  <div class="widget-content-white glossed">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_cna" data-toggle="tab"><i class="glyphicon glyphicon-hand-right"></i>Create New Admin</a></li>
                    <li><a href="#tab_cyp" data-toggle="tab"><i class="glyphicon glyphicon-hand-right"></i>Change Your Password</a></li>
                  </ul>
                  <div class="tab-content bottom-margin">
                    <div class="tab-pane active" id="tab_cna">
                      <div class="padded">
                      <form action="" role="form" class="form-horizontal" method="POST">
                        <div class="form-group">
                          <label class="col-md-4 control-label">Admin Name</label>
                          <div class="col-md-8">                        
                            <input type="text" class="form-control" style="text-transform:uppercase" placeholder="Admin Full Name" name="aname">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Admin Email</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="For maintaining privacy" name="aemail">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Admin Passowrd</label>
                          <div class="col-md-8">
                            <input type="password" class="form-control" id="apass" placeholder="create new admin password" name="apass">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Confirm Passowrd</label>
                          <div class="col-md-8">
                            <input type="password" class="form-control" id="cpass" placeholder="Confirm admin password" name="cpass"><i id="msg"></i>
                          </div>
                        </div>
                        <script type="text/javascript">
                        $('#cpass').keyup(function(){
                          var opass= $('#apass').val();
                          var cpass= $('#cpass').val();
                          if(opass==cpass){
                            $('#btn').attr('disabled', false);
                            $('#msg').css('color','green');
                              $('#msg').html(" Passwords Matched");
                          }

                                else if(cpass==''){
                                  $('#msg').html(" ");
                                  $('#btn').attr('disabled', true);
                                }
                                else{
                              $('#msg').css('color','red');
                              $('#msg').html(" Passwords do not Mach");
                              $('#btn').attr('disabled', true);
                            }

                        });
                        </script>
                        <div class="form-group">
                          <div class="col-md-offset-6 col-md-8">
                            <button type="submit" class="btn btn-default" id="btn" name="cadmin" disabled="">Create New Admin</button>
                            <span></span>
                          </div>
                        </div>
                      </form>

                      
                        <div id="piechart" style=""></div>
                      </div>
                    </div>
                    <div class="tab-pane" id="tab_cyp"> 
                      <div class="padded">
                        <form action="" role="form" class="form-horizontal" method="POST">
                        <div class="form-group">
                          <label class="col-md-4 control-label">Your Email</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control" placeholder="Enter Your Email ID" name="email">
                          </div>
                        </div>
                  
                         <div class="form-group">
                          <label class="col-md-4 control-label">Current Password</label>
                          <div class="col-md-8">
                            <input type="password" class="form-control" placeholder="Enter password used to login" name="opass">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label">New Password</label>
                          <div class="col-md-8">
                            <input type="password" class="form-control" placeholder="Create new Password" name="npass">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-md-4 control-label">Verify Human</label>
                          <div class="col-md-4" >
                          <i id="a"></i><i id="op"></i><i id="b" style="display:inline"></i>
                            <input type="text" class="meraj"  placeholder="Solve This To enable button" id="npass" >
                          </div>
                        </div>
                        <script type="text/javascript">
                        // random function to verify human
                        $(document).ready( function(){
                              var a = Math.floor(Math.random() * 10) + 1;
                              var b = Math.floor(Math.random() * 10) + 1;
                              var op = ["*", "+", "-"][Math.floor(Math.random()*3)];
                              $('#a').html(a);$('#op').html(op);$('#b').html(b);
                              var result= eval( a + op + b);
                              $('#npass').keyup( function(){
                                var soln= $('#npass').val();
                                if(soln==result){
                                  $('#cpa').attr('disabled', false);
                                }
                                else{
                                 $('#cpa').attr('disabled', true); 
                                }
                              });
                        });
                            
                        </script>
                  
                        <div class="form-group">
                          <div class="col-md-offset-6 col-md-8">
                            <button type="submit" class="btn btn-default" id="cpa" name="cpass" disabled="">Change Password</button>
                          </div>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>
                    <div class="col-md-6">
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
</div>
<?php require_once $dir_public_requires.'footer.php';?>