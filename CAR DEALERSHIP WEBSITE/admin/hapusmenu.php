<?php
include "../connect.php";

$result = mysqli_query($conn, "SELECT * FROM menu WHERE id = '$_GET[id]'");

$data = mysqli_fetch_assoc($result);

$fotoproduk = $data["gambar"];
var_dump($fotoproduk);
if(file_exists("../images/$fotoproduk"))
{
    unlink("../images/$fotoproduk");
}

mysqli_query($conn, "DELETE FROM menu WHERE id = '$_GET[id]'");

echo "<script>alert('produk telah dihapus');</script>";
echo "<script>location='index.php';</script>";
?>