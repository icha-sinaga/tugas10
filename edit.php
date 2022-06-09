<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>Edit Data</title>
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
<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query = mysqli_query($conn, "SELECT * FROM guestbook WHERE id='$id'")or die(mysqli_error());
	while($hasil = mysqli_fetch_array($query)){
?>
	<br>
	<center><h1>EDIT DATA BUKU TAMU</h1></center> <br>
	<div class="container-md">
	<div class="row justify-content-center">
	<div class="col-md-5 align-self-center">
	<div class="card ">
		<div class="card-header">
			Edit Data Guest Book
		</div>
	<div class="card-body">
	<form action="update.php" method="post">		
		<table>
			<div class="form-group row">
				<label for="posted" class="col-md-5 col-form-label">Posted</label>
				<div class="col-md-7">
					<input type="hidden" name="id" value="<?php echo $hasil['id'] ?>">
					<input type="date" name="posted" class="form-control" id="posted" value="<?php echo $hasil['posted'] ?>">
				<br>
				</div>
			</div>

			<div class="form-group row">
				<label for="posted" class="col-md-5 col-form-label">Nama</label>
				<div class="col-md-7">
					<input type="text" name="name" class="form-control" id="name" value="<?php echo $hasil['name'] ?>">
				<br>
				</div>
			</div>

			<div class="form-group row">
				<label for="posted" class="col-md-5 col-form-label">Email</label>
				<div class="col-md-7">
					<input type="text" name="email" class="form-control" id="email" value="<?php echo $hasil['email'] ?>">
				<br>
				</div>
			</div>

			<div class="form-group row">
				<label for="posted" class="col-md-5 col-form-label">Alamat</label>
				<div class="col-md-7">
					<input type="text" name="address" class="form-control" id="address" value="<?php echo $hasil['address'] ?>">
				<br>
				</div>
			</div>

			<div class="form-group row">
				<label for="posted" class="col-md-5 col-form-label">Kota</label>
				<div class="col-md-7">
					<input type="text" name="city" class="form-control" id="city" value="<?php echo $hasil['city'] ?>">
				<br>
				</div>
			</div>

			<div class="form-group row">
				<label for="posted" class="col-md-5 col-form-label">Pesan</label>
				<div class="col-md-7">
					<input type="text" name="message" class="form-control" id="message" value="<?php echo $hasil['message'] ?>">
				<br>
				</div>
			</div>

			<div class="form-group row">
			<div class="col-md-12" align ="right">
			<button type="submit" class="btn btn-warning">Submit</button>
			</div>
			
			</div>			
		</table>
	</form>
	<?php } ?>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
