<?php
session_start();
include "koneksi.php";
if(!isset($_SESSION['username'])){
	header("Location : FormLogin.php");
	die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Beranda</title>
</head>
<style>
.warning {color: #FF0000;}
.card-header {background: #ffc107; color: #000000; text-align: center; font-style: bold;}
.card-body {background-color: #ffc107 style="--bs-bg-opacity: .1;"}
.form-group {align-content: center; background-color: #ffc107 style="--bs-bg-opacity: .1;"}
.container-md {align-content: center; vertical-align: middle;}
.card{align-content: center; align-self: center; vertical-align: middle; background-color: #ffc107 style="--bs-bg-opacity: .1;"}
.body{vertical-align: middle;}
.leftlinks{
	font-family: Cambria;
	word-spacing: 3px;
	letter-spacing: 1px;
	border:1px solid #000000; padding:5px; width: 200px; line-height: 40px;
	text-align:middle; background-color: black;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
	border-bottom-left-radius: 10px;
	border-bottom-right-radius: 10px;
}
.leftlinks a{
	font-family: Cambria;
	word-spacing: 3px;
	letter-spacing: 1px;
	width: 200px; line-height: 40px;
	text-align:middle; background-color: black;
	color: #000000; text-decoration: none;
}
.leftlinks a:link{
	color: white;
}
.leftlinks a:visited{
	color: gold;
}
.leftlinks a:hover {
	font-family: Cambria;
	word-spacing: 3px;
	letter-spacing: 1px;
	border:1px solid #000000; padding:5px; width: 200px; line-height: 40px;
	text-align:middle; background-color: #000000;
	color: white;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
	border-bottom-left-radius: 10px;
	border-bottom-right-radius: 10px;
	}

</style>
<body>
	<center>
	<br>
	<br>
	<center><h1>BERANDA</h1></center> <br>
	<center>Selamat datang <?php echo $_SESSION['username']?> pada hari <?php date_default_timezone_set("Asia/Jakarta"); echo date ("D, d M Y")?> </center> <br> <br>
	<table>
		<tr>
			<td align="center">
		<div class="leftlinks">
			<a href="http://localhost/kuis/FormGuestBook.php">Isi Data Tamu</a>
		</div>
	</td>
	<td align="center">
		<div class="leftlinks">
			<a href="http://localhost/kuis/CetakGuestBook.php">Lihat Data Tamu</a>
		</div>
	</td>
	<td align="center">
		<div class="leftlinks">
			<a href="http://localhost/kuis/FormLogin.php">Log Out</a>
		</div>
	</td>
		</tr>
	</table>
	</center>
	
</body>
</html>
