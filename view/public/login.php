<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href="<?php echo $dir_assets_css.'template.css';?>">
  <link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700|Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
  <link href="assets/favicon.ico" rel="shortcut icon">
  <link href="assets/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    @javascript html5shiv respond.min
  <![endif]-->
  <title>Admin Login Panel</title>
</head>
<body>
  <div class="all-wrapper no-menu-wrapper">
    <div class="login-logo-w">
      <a href="index-2.html" class="logo" width="100px" height="100px">
      <img src="<?php echo $dir_assets_img.'jmiLogo.jpg'?>">
      <span>JMI UMS ADMIN</span>
      </a>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="content-wrapper bold-shadow">
          <div class="content-inner">
            <div class="main-content main-content-grey-gradient no-page-header">
              <div class="main-content-inner">
                <form action="" role="form" method="post">


                  <h3 class="form-title form-title-first"><i class="glyphicon glyphicon-lock"></i> Login Panel</h3>
                    <div class="form-group">
                      <label>Username</label><input type="email" class="form-control" placeholder="Enter email" required name="email">
                    </div>
                    <div class="form-group">
                      <label>Password</label><input type="password" class="form-control" placeholder="Password" required name="password">
                    </div>
                    <div class="form-group">
                    <div class="checkbox">
                      <label><input type="checkbox"> Remember me</label>
                    </div>
                  </div>
                 <input type="submit" class="btn btn-primary btn-lg" value="Sign In" name="login">
                 <a href="cancel" class="btn btn-link">Cancel</a>
                </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="<?php echo $dir_assets_js.'jquery-1.11.1.min.js';?>"></script>
<script src="<?php echo $dir_assets_js.'jqueryui.min.js';?>"></script>
<script src="<?php echo $dir_assets_js.'beautiful.js';?>"></script>
</body>
</html>