<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel='stylesheet' href="<?php echo $dir_assets_css.'template.css';?>">

  <link href='http://fonts.googleapis.com/css?family=Oswald:300,400,700|Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

  <link href="assets/favicon.ico" rel="shortcut icon">
  <link href="assets/apple-touch-icon.png" rel="apple-touch-icon">
  <style type="text/css">body, a:hover {cursor: url(http://localhost/JmiAdmin/view/assets/img/sym55.cur),auto !important;}</style>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    @javascript html5shiv respond.min
  <![endif]-->

  <title>Admin DashBoard</title>
  <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
  <script src="<?php echo $dir_assets_js.'jquery-1.11.1.min.js';?>"></script>
   <script src="<?php echo $dir_assets_js.'rotate.js';?>"></script>
  <script src="<?php echo $dir_assets_js.'layout.js';?>"></script>
</head>

<body>

<div class="all-wrapper">
  <div class="row">
    <div class="col-md-3">
      <div class="text-center">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="glyphicon glyphicon-bar"></span>
    <span class="glyphicon glyphicon-bar"></span>
    <span class="glyphicon glyphicon-bar"></span>
  </button>
</div>
<div class="side-bar-wrapper collapse navbar-collapse navbar-ex1-collapse">
  <a href="#" class="logo hidden-sm hidden-xs">
    <img src="<?php echo $dir_assets_img.'jmiLogo.jpg'?>">
    <span>GBPEC CMS ADMIN</span>
  </a>

  <div class="relative-w">
    <ul class="side-menu">
      <li class='current'>
        <a class='current' href="home">
          <i class="glyphicon glyphicon-dashboard"></i> Dashboard
        </a>
      </li>
      <li>
        <a href="manage">
          <span class=" glyphicon glyphicon-eye-open"></span>
          <i class="glyphicon glyphicon-signin"></i> View Records
        </a>
      </li>
      

       <li>
        <a href="elements.html" class="is-dropdown-menu">
          <span class="badge pull-right"></span>
          <i class="glyphicon glyphicon-user"></i> Create New Profile
        </a>
        <ul>
          <li>
            <a href="studentProfile">
              <i class="glyphicon glyphicon-beaker"></i>
              Student Profile
            </a>
          </li>
          <li>
            <a href="teacherProfile">
              <i class=" "></i>
             Teacher Profile
            </a>
          </li>
        </ul>
      </li>

      <li>
        <a href="update">
          <span class="glyphicon glyphicon-list-alt"></span>
          <i class="glyphicon glyphicon-signin"></i> Add Details
        </a>
      </li>
    </ul>
  </div>
</div>
    </div>
    <div class="col-md-9">

      <div class="content-wrapper wood-wrapper">
        <div class="content-inner">
          <div class="page-header">
  <div class="header-links hidden-xs">
  <!--<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
    Dropdown
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
  </ul>
</div> -->
    <a href="settings"><i class="glyphicon glyphicon-cog"></i>Account Settings</a>
    <a href="home?task=logout"><i class="glyphicon glyphicon-signout"></i> Logout</a>
  </div>
  <h1><i class="glyphicon glyphicon-bar-chart"></i> Dashboard</h1>
</div>
<ol class="breadcrumb">
	<li><b>Today   : </b></li>
	<li id="date"></li>
	<li id="time"></li>
  <li class="pull-right">WELCOME<b style="color:blue"><?php echo $session->name;?></b></li>
  <li></li>
</ol>