<!DOCTYPE html>
<html lang="en">
	<head> 
		<title>Admin</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="panel-heading">
					<div class="panel-title text-center">
						<h1 class="title">Form Pendaftaran</h1>
						<hr />
					</div>
				</div> 
				<div class="main-login main-center">
				<form class="form-horizontal" method="post" action="#">
					<div class="form-group">
						<label for="nama" class="cols-sm-2 control-label">Nama Lengkap</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="nama" id="nama"  placeholder="Masukkan Nama Lengkap"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="cols-sm-2 control-label">Email</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="email" id="email"  placeholder="Masukkan Email"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="handphone" class="cols-sm-2 control-label">No. Handphone</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="handphone" id="handphone"  placeholder="Masukkan No. Handphone"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="katasandi" class="cols-sm-2 control-label">Kata sandi</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
								<input type="password" class="form-control" name="katasandi" id="katasandi"  placeholder="Masukkan Katasandi"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-offset-3 col-xs-9">
							<label class="checkbox-inline">
								<input type="checkbox" value="Setuju">  Saya Setuju dengan <a href="#">Kebijakan dan Ketentuan</a> yang berlaku.
							</label>
						</div>
					</div>
					<div class="form-group ">
						<button type="button" class="btn btn-primary btn-lg btn-block login-button">Daftar</button>
					</div>
					<div class="login-register">
						<a href="index.php">Masuk</a>
					</div>
				</form>
				</div>
			</div>
		</div>
	</body>
</html>