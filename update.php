<?php
include "koneksi.php";
$id = $_POST['id'];
$vposted = $_POST['posted'];
$vname = $_POST['name'];
$vemail = $_POST['email'];
$vaddress = $_POST['address'];
$vcity = $_POST['city'];
$vmessage = $_POST['message'];

$sql="update guestbook set 
        posted='$vposted',
        name='$vname',
        email='$vemail',
	address='$vaddress',
        city='$vcity',
        message='$vmessage' WHERE id='$id'";
mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");

mysqli_close($conn);
header("location: cetakGuestBook.php")
?>
