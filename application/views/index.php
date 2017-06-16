<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard - Admin </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>css/pages/dashboard.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.html">Jobs Dashboard </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">

          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> Admin<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Profile</a></li>
              <li><a href="javascript:;">Logout</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-search pull-right">
          <input type="text" class="search-query" placeholder="Search">
        </form>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="active"><a href="index"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        <li><a href="form_show"><i class="icon-plus-sign"></i><span>Add Job</span> </a></li>
        <li><a href="jobs_admin"><i class="icon-briefcase"></i><span>View Jobs</span> </a></li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span6">
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3> Today's Stats</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="widget big-stats-container">
                <div class="widget-content">
                  <h6 class="bigstats">A fully responsive premium quality admin template built on Twitter Bootstrap by <a href="http://www.egrappler.com" target="_blank">EGrappler.com</a>.  These are some dummy lines to fill the area.</h6>
                  <div id="big_stats" class="cf">
                    <div class="stat"> <i class="icon-anchor"></i> <span class="value">851</span> </div>
                    <!-- .stat -->
                    
                    <div class="stat"> <i class="icon-thumbs-up-alt"></i> <span class="value">423</span> </div>
                    <!-- .stat -->
                    
                    <div class="stat"> <i class="icon-twitter-sign"></i> <span class="value">922</span> </div>
                    <!-- .stat -->
                    
                    <div class="stat"> <i class="icon-bullhorn"></i> <span class="value">25%</span> </div>
                    <!-- .stat --> 
                  </div>
                </div>
                <!-- /widget-content --> 
                
              </div>
            </div>
          </div> 	
		  
          <!-- /widget --> 
        </div>
        <!-- /span6 -->
        <div class="span6">
          <div class="widget">
            <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3>Important Shortcuts</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="shortcuts"> <a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-list-alt"></i><span
                                        class="shortcut-label">Apps</span> </a><a href="javascript:;" class="shortcut"><i
                                            class="shortcut-icon icon-bookmark"></i><span class="shortcut-label">Bookmarks</span> </a><a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-signal"></i> <span class="shortcut-label">Reports</span> </a><a href="javascript:;" class="shortcut"> <i class="shortcut-icon icon-comment"></i><span class="shortcut-label">Comments</span> </a><a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-user"></i><span
                                                class="shortcut-label">Users</span> </a><a href="javascript:;" class="shortcut"><i
                                                    class="shortcut-icon icon-file"></i><span class="shortcut-label">Notes</span> </a><a href="javascript:;" class="shortcut"><i class="shortcut-icon icon-picture"></i> <span class="shortcut-label">Photos</span> </a><a href="javascript:;" class="shortcut"> <i class="shortcut-icon icon-tag"></i><span class="shortcut-label">Tags</span> </a> </div>
              <!-- /shortcuts --> 
            </div>
            <!-- /widget-content --> 
          </div>

          <!-- /widget -->
        </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->
<div class="extra">
  <div class="extra-inner">
    <div class="container">
      <div class="row">

        <div class="span3">
            <h4>
                Support</h4>
            <ul>
                <li><a href="javascript:;">Frequently Asked Questions</a></li>
                <li><a href="javascript:;">Ask a Question</a></li>
                <li><a href="javascript:;">Video Tutorial</a></li>
                <li><a href="javascript:;">Feedback</a></li>
            </ul>
        </div>
        <!-- /span3 -->
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /extra-inner --> 
</div>
<!-- /extra -->
<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> &copy; 2013-2017.
 <a href="#">Ignitho Technologies. All Rights Reserved</a>. </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="<?php echo base_url(); ?>js/jquery-1.7.2.min.js"></script> 
<script src="<?php echo base_url(); ?>js/excanvas.min.js"></script> 
<script src="<?php echo base_url(); ?>js/chart.min.js" type="text/javascript"></script> 
<script src="<?php echo base_url(); ?>js/bootstrap.js"></script>
 
<script src="js/base.js"></script> 

</body>
</html>
