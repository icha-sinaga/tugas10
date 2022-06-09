<center>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Cetak Guest Book</title>
</head>
<style>
    .table{
        text-align: left;
        font-family: times new roman;
    }
    
</style>
<body>
<br>
    <center><h1>DATA BUKU TAMU</h1></center> <br>
<?php
include "koneksi.php";
echo "Semua data pada database Guest Book";
$sql="select * from  guestbook order by id;";
$qry=mysqli_query($conn, $sql) or die("Proses cetak gagal");
echo "<table width='80%' cellpadding='5' cellspacing='5' border='1'>
<tr>
    <th>Id</th>
    <th>Posted</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Alamat</th>
    <th>Kota</th>
    <th>Pesan</th>
    <th>Hapus</th>
    <th>Edit</th>";
while($hasil=mysqli_fetch_row($qry)){ 
echo "<tr>
    <td>$hasil[0]</td>
    <td>$hasil[1]</td>
    <td>$hasil[2]</td>
    <td>$hasil[3]</td>
    <td>$hasil[4]</td>
    <td>$hasil[5]</td>
    <td>$hasil[6]</td>
    <td><a href='hapus.php?id=".$hasil[0]."'>Hapus</a></td>
    <td><a href='edit.php?id=".$hasil[0]."'>Edit</a></td>
    </tr>";
}
echo "</table>";
?>
<br>
<a href="FormGuestBook.php">Kembali</a>

</body>
</html>
</center>
