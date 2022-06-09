<?php
include "koneksi.php";
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "DELETE FROM guestbook WHERE id=$id";
	$qry = mysqli_query($conn, $sql);
	if($qry){
		 header("Location:cetakGuestBook.php");
		} else {
			echo "Error". $sql. "" .mysqli_error($conn);
		}
}
?>