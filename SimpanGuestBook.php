<?php
include "koneksi.php";

$vposted = $_POST['posted'];
$vname = $_POST['name'];
$vemail = $_POST['email'];
$vaddress = $_POST['address'];
$vcity = $_POST['city'];
$vmessage = $_POST['message'];

$sql="insert guestbook set 
        posted='$vposted',
        name='$vname',
        email='$vemail',
		address='$vaddress',
        city='$vcity',
        message='$vmessage'";
mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");

mysqli_close($conn);
header("location: cetakGuestBook.php")
?>
