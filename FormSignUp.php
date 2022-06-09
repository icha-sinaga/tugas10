<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>Form Sign Up New User</title>
</head>
<style>
.warning {color: #FF0000;}
.card-header {background: #ffc107; color: #000000; text-align: center; font-style: bold;}
.card-body {background-color: #ffc107 style="--bs-bg-opacity: .1;"}
.form-group {align-content: center; background-color: #ffc107 style="--bs-bg-opacity: .1;"}
.container-md {align-content: center; vertical-align: midle;}
.card{align-content: center; align-self: center; vertical-align: middle; background-color: #ffc107 style="--bs-bg-opacity: .1;"}
.body{vertical-align: middle;}
</style>
<body>
	<br>
	<center><h1>FORM DAFTAR AKUN</h1></center> <br>
	<div class="container-md">
	<div class="row justify-content-center">
	<div class="col-md-5 align-self-center">
	<div class="card ">
		<div class="card-header">
			Form Sign Up
		</div>
	<div class="card-body">
	<form method="POST" action="SimpanSignUp.php">
		<div class="form-group row">
			<label for="nama" class="col-md-5 col-form-label">Nama</label>
			<div class="col-md-7">
				<input type="text" name="name" class="form-control" id="nama" placeholder="isi nama lengkap anda">
				<br>
			</div>
		</div>

		<div class="form-group row">
			<label for="address" class="col-md-5 col-form-label">Alamat</label>
			<div class="col-md-7">
				<input type="text" name="address" class="form-control" id="address" placeholder="isi alamat anda">
				<br>
			</div>
		</div>

		<div class="form-group row">
			<label for="email" class="col-md-5 col-form-label">Email</label>
			<div class="col-md-7">
				<input type="text" name="email" class="form-control" id="email" placeholder="isi email anda">
				<br>
			</div>
		</div>

		<div class="form-group row">
			<label for="homepage" class="col-md-5 col-form-label">Homepage</label>
			<div class="col-md-7">
				<input type="text" name="homepage" class="form-control" id="homepage" placeholder="isi homepage anda">
				<br>
			</div>
		</div>

		<div class="form-group row">
			<label for="username" class="col-md-5 col-form-label">Username</label>
			<div class="col-md-7">
				<input type="text" name="username" class="form-control" id="username" placeholder="isi username anda">
				<br>
			</div>
		</div>

		<div class="form-group row">
			<label for="nama" class="col-md-5 col-form-label">Password</label>
			<div class="col-md-7">
				<input type="password" name="password" class="form-control" id="password" placeholder="isi kata sandi anda">
				<br>
			</div>
		</div>

		<div class="form-group row">
		<div class="col-md-12" align="right">
			<button type="submit" class="btn btn-warning">Sign Up</button>
		</div>
	</div>

	</form>
	</div>
	</div>
	</div>
	</div>
</body>
</html>