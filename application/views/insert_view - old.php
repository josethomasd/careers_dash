<!DOCTYPE html>
<head>
	<meta charset="utf-8">

	<title> Add Career</title>
	
	<!-- Favicons -->

	<link rel="icon" type="image/png" href="https://www.ignitho.com/images/favicon-16x16.png" sizes="16x16">

	<!-- Style sheets --> 

	<link rel="stylesheet" type="text/css" href="https://www.ignitho.com/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="https://www.ignitho.com/css/style.css">


	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"> <!-- Google fonts stylesheet -->

	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css"> <!-- Google fonts stylesheet -->

<body>

	<section class="common-container contact-container">
	<div class="container">
	
		<div class="row">
		
		<div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">

		<div class="left-colum">
			
		<h1 style="font-size: 36px; color: #5b2d64; margin-bottom: 30px; ">Add new job</h1>
		<br><br>

		<div class="clearfix"></div>
		<text class="contact-form">	
		<?php echo form_open('Admin/data_submitted'); ?>

			<div class="form-group">
		
					<label>Job Title</label>
					<input type="text" class="form-control" id="job-title" name="title">
				  </div>
				  <div class="row">
					  <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<label>Experience</label>
						<input type="text" class="form-control" id="job-exp" name="experience">
					  </div>
					  <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<label>Location</label>
						<input type="text" class="form-control" id="job-loc" name="location">
					  </div>
				  </div>
				  <div class="form-group">
					  <label>Job URL</label>
					<input type="text" class="form-control" id="job-url" name="url">
				  </div>
					<button type="submit"  class="btn btn-send" >Submit</button>
		<?php echo form_close(); ?>
		</text>
			</div>
		</div>
	</div>
</section>
	
</body>
</html>
