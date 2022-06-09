<?php
include "koneksi.php";

$vusername = $_POST['username'];
$vpassword = $_POST['password'];

$query = mysqli_query($conn, "select * from user where username='$vusername' and password='$vpassword'");
$cek = mysqli_num_rows($query);
echo $cek;

if($cek > 0){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
    header("location:beranda.php");
} else {
    echo 'alert("Login gagal! username dan password salah!")';
    header("location:Formlogin.php");
}

?>
<br>
<a href="Formlogin.php">Kembali</a>
