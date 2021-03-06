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
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index">Jobs Dashboard </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">

          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> Admin<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Profile</a></li>
              <li><a href="logout">Logout</a></li>
            </ul>
          </li>
        </ul>
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
        <li><a href="index"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        <li class="active"><a href="form_show"><i class="icon-plus-sign"></i><span>Add Job</span> </a></li>
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
	       	<div class="span12">
	      		<div class="widget ">

	      			<div class="widget-header">
	      				<i class="icon-briefcase"></i>
	      				<h3>Add Job</h3>
	  				</div> <!-- /widget-header -->

					<div class="widget-content">
						<br>
						<div class="tab-content">
              <!--
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> Job added.
              </div>
              -->
							<?php echo form_open('Admin/data_submitted'); ?>
							<text class="form-horizontal">

									<div class="control-group">
										<label class="control-label" for="firstname">Job Title</label>
										<div class="controls">
											<input type="text" class="span6 disabled" id="job-title" name="title" placeholder="Job Name">
										</div> <!-- /controls -->
									</div>

									<div class="control-group">
										<label class="control-label" for="firstname">Experience</label>
										<div class="controls">
											<input type="text" class="span6 disabled" id="job-exp" name="experience" placeholder="Job Experience">
										</div> <!-- /controls -->
									</div>

									<div class="control-group">
										<label class="control-label" for="firstname">Location</label>
										<div class="controls">
																  <input type="text" class="span6 disabled" id="job-loc" name="location" placeholder="Job Location">          											</div> <!-- /controls -->
									</div>

									<div class="control-group">
										<label class="control-label" for="firstname">URL</label>
										<div class="controls">
											<input type="text" class="span6 disabled" id="job-url" name="url" placeholder="Job URL">
										</div> <!-- /controls -->
									</div> <!-- /control-group -->

									 <br />
									<div class="form-actions">
                  <?php echo form_submit('btnadd','Add job',"class='btn btn-primary'"); ?>
									<!--	<button type="submit" class="btn btn-primary" name="btn-add">Add</button> -->
									</div> <!-- /form-actions -->
							</text>

							<?php echo form_close(); ?>
						</div>
					</div>

				</div> <!-- /widget-content -->

			</div> <!-- /widget -->

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
                          <li><a href="mailto:admin@igintho.com">Ask a Question</a></li>
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
          <a target="_blank" href="https://www.ignitho.com">Ignitho Technologies. All Rights Reserved</a>. </div>
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

<script src="<?php echo base_url(); ?>js/base.js"></script>

</body>
</html>
