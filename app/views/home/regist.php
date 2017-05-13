<!DOCTYPE html>
<html dir="ltr" lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>My Spacible</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
		<script type="text/javascript" src="assets/js/jquery/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
		<link href="assets/js/bootstrap/less/bootstrap.less" rel="stylesheet/less" />
		<script src="assets/js/bootstrap/less-1.7.4.min.js"></script>
		<link href="assets/js/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
		<link href="assets/js/summernote/summernote.css" rel="stylesheet" />
		<script type="text/javascript" src="assets/js/summernote/summernote.js"></script>
		<script src="assets/js/jquery/datetimepicker/moment.js" type="text/javascript"></script>
		<script src="assets/js/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<link href="assets/js/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />
		<link type="text/css" href="assets/css/stylesheet.css" rel="stylesheet" media="screen" />
		<link type="text/css" href="assets/css/login.css" rel="stylesheet" media="screen" />
		<script src="assets/js/common.js" type="text/javascript"></script>
	</head>
	<body>
		<div id="container">
			<header id="header" class="navbar navbar-static-top">
				<div class="navbar-header">
					<a href="#" class="navbar-brand"></a>
				</div>
			</header>
			<div id="content">
				<div class="container-fluid">
					
					<br />
					<br />
					<div class="row">
						<div class="col-sm-offset-4 col-sm-4">
							<div class="panel">
								<div class="panel-heading">
									<h1 class="panel-title"><i class="fa fa-file-text"></i>   Form Registration</h1>
								</div>
								<div class="panel-body">
									<?php if (Session::has('message')): ?>
									<div class="alert alert-danger">
										<i class="fa fa-exclamation-circle"></i><small> Username doesn't exist, please try again !!</small>
										<button type="button" class="close" data-dismiss="alert">
											×
										</button>
									</div>
									<?php EndIf; ?>
									<form action="<?php echo url();?>/regist" method="post" enctype="multipart/form-data">
										<div class="form-group">
											<label for="input-username">Company Name </label>
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-building"></i></span>
												<input type="text" name="company_name" value="" placeholder="Company Name" id="input-company" class="form-control" required/>
											</div>
										</div>
										<div class="form-group">
											<label for="input-username">Email</label>
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
												<input type="text" name="email" value="" placeholder="Email" id="input-email" class="form-control" required/>
											</div>
										</div>
										<div class="form-group">
											<label for="input-username">Username</label>
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-user"></i></span>
												<input type="text" name="username" value="" placeholder="Username" id="input-username" class="form-control" required/>
											</div>
										</div>
										<div class="form-group">
											<label for="input-password">Password</label>
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-lock"></i></span>
												<input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" required/>
											</div>
										</div>
										<div class="form-group">
											<label for="input-password">Re-type Password</label>
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-lock"></i></span>
												<input type="password" name="repassword" value="" placeholder="Re-type Password" id="input-repassword" class="form-control" required/>
											</div>
										</div>
										<div class="text-right">
											<button type="submit" name="submit" value="login" class="btn btn-default">
												<i class="fa fa-sign-in "></i> Submit
											</button>
										</div>
										
									</form>
										
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
						<div class="panel-body">
							<div class="row">
								<center>
									<a href="<?php echo url();?>/login" data-toggle="tooltip" title="Back To Grid" class="btn btn-default"><i class=" fa fa-user-circle-o"></i> Already Have Account?</a>
								</center>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer id="footer">
				<a href="<?php echo url();?>/">My Spacible</a> &copy; <?php echo date('Y');?> All Rights Reserved.
				<br />
			</footer>
		</div>
	</body>
</html>