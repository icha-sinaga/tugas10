<?php
include "koneksi.php";

$vname = $_POST['name'];
$vaddress = $_POST['address'];
$vemail = $_POST['email'];
$vhomepage = $_POST['homepage'];
$vusername= $_POST['username'];
$vpassword = $_POST['password'];

$sql="insert user set name='$vname',
		address='$vaddress',
		email='$vemail',
        homepage='$vhomepage',
        username='$vusername',
        password='$vpassword'";
mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
mysqli_close($conn);
?>
<br>
<a href="FormSignUp.php">Kembali</a>
