<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>Login</title>
	<style>	
	</style>
</head>
<style>
.warning {color: #FF0000;}
.card-header {background: #ffc107; color: #000000; text-align: center; font-style: bold;}
.card-body {background-color: #ffc107 style="--bs-bg-opacity: .1;"}
.form-group {align-content: center; background-color: #ffc107 style="--bs-bg-opacity: .1;"}
.container-md {align-content: center; vertical-align: middle;}
.card{align-content: center; align-self: center; vertical-align: middle; background-color: #ffc107 style="--bs-bg-opacity: .1;"}
</style>
<body>
	<br>
	<center><h1>LOG IN AKUN</h1></center> <br>
	<div class="container-md">
	<div class="row justify-content-center">
	<div class="col-md-4 align-self-center">
	<div class="card ">
		<div class="card-header">
			L O G I N
		</div>
	<div class="card-body">
	<form method="post" action="ceklogin.php">
	<div class="form-group row">
		<label for="username" class="col-md-4 col-form-label">Username</label>
		<div class="col-md-8">
			<input type="text" name="username" class="form-control" id="username" placeholder = "masukkan username"> <br>
	</div> 
	</div>
	<div class="form-group row">
		<label for="password" class="col-md-4 col-form-label">Passsword</label>
		<div class="col-md-8">
			<input type="password" name="password" class="form-control" id="password" placeholder = "password"> <br>
	</div>
	</div> 
	<div class="form-group row">
		<div class="col-md-12" align="right">
			<button type="submit" class="btn btn-warning">Log In</button>
		</div>
	</div>
	</form>
	</div>
	</div>
	</div>
</div>
</div>
</body>
</html>