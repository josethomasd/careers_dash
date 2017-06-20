<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login - Jobs Dashboard</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

<link href="<?php echo base_url(); ?>css/font-awesome.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>css/pages/signin.css" rel="stylesheet" type="text/css">

</head>

<body>

	<div class="navbar navbar-fixed-top">

	<div class="navbar-inner">

		<div class="container">

			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>

			<a class="brand" href="index">
				Jobs Dashboard
			</a>
			<!--
			<div class="nav-collapse">
				<ul class="nav pull-right">

					<li class="">
						<a href="signup.html" class="">
							Don't have an account?
						</a>

					</li>

				</ul>

			</div>
			-->
			<!--/.nav-collapse -->

		</div> <!-- /container -->

	</div> <!-- /navbar-inner -->

</div> <!-- /navbar -->



<div class="account-container">

	<div class="content clearfix">

		<form method="post">

			<h1>Admin Login</h1>
			<div class="login-fields">

				<p>Please provide your details</p>
				<?php
				    if(!empty($success_msg)){
				        echo '<p class="statusMsg">'.$success_msg.'</p>';
				    }elseif(!empty($error_msg)){
				        echo '<p class="statusMsg">'.$error_msg.'</p>';
				    }
				?>
			    <form action="" method="post">

					<div class="field">
						<label for="username">Username</label>
						<input type="email" name="email" placeholder="Email" value="" class="login username-field">
						<?php echo form_error('email','<span class="help-block">','</span>'); ?>
					</div> <!-- /field -->

					<div class="field">
						<label for="password">Password:</label>
						<input type="password" class="login password-field" name="password" placeholder="Password">
				          <?php echo form_error('password','<span class="help-block">','</span>'); ?>
					</div> <!-- /password -->


					<div class="login-actions">

						<span class="login-checkbox">
							<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
							<label class="choice" for="Field">Keep me signed in</label>
						</span>
						<input type="submit" name="loginSubmit" class="button btn btn-success btn-large" value="Submit"/>
					</div> <!-- .actions -->

				</form>

	</div> <!-- /content -->

</div> <!-- /account-container -->


<script src="<?php echo base_url(); ?>js/jquery-1.7.2.min.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap.js"></script>

<script src="<?php echo base_url(); ?>js/signin.js"></script>

</body>

</html>
