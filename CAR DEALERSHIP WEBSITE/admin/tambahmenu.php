<?php
include '../connect.php';
?>

<?php

if (isset($_POST['save'])) {
    $merk = $_POST['merk'];
    $foto = uploadimage();
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $jenis = $_POST['jenis'];
    $jarak = $_POST['jarak'];
    $tahun = $_POST['tahun'];
    $warna = $_POST['warna'];

    if (!$foto){
        return false;
    }
    //menu??
    $result = mysqli_query($conn,"INSERT INTO menu (merk,gambar,nama,harga,jenis,jarak,tahun,warna) VALUES ('$merk','$foto','$nama','$harga','$harga','$jenis','$jarak','$tahun','$warna')" );

    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php'>";
}
?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-default">
        <div class="panel-deading">Tambah Menu</div>
        <div class="panel-body">
            <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label>Merk</label>
            <input type="text" class="form-control" name="merk">
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="Deskripsi" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label>Harga (Rp)</label>
            <input type="number" class="form-control" name="harga">
        </div>
        <div class="form-group">
            <label>Jenis Transmisi</label>
            <input type="text" class="form-control" name="jenis">
        </div>
        <div class="form-group">
            <label>Jarak Tempuh</label>
            <input type="text" class="form-control" name="jarak">
        </div>
        <div class="form-group">
            <label>Tahun Rilis</label>
            <input type="text" class="form-control" name="tahun">
        </div>
        <div class="form-group">
            <label>Warna Motor</label>
            <input type="text" class="form-control" name="warna">
        </div>
        <div class="form-group">
            <label>Foto</label>
            <input type="file" class="form-control" name="foto">
        </div>
        <button class="btn btn-primary" name="save">Simpan Menu</button>
        </form>
        </div>
    </div>   
</div>

<?php

function uploadimage(){
    $namafile = $_FILES['foto']['name'];
    $sizefile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpname = $_FILES['foto']['tmp_name'];

    if ($error === 4){
        echo "<script>alert(\"Silahkan Upload Gambar\");</script>";
        return false;
    }

    $allowextensions = ['jpg','jpeg','png'];
    $extension = explode(".",$namafile);
    $extension = strtolower
    (end($extension));

    if (!in_array($extension,$allowextensions)) {
        echo "<script>alert(\"extensi yang diperbolehkan jpg,jpeg,png\");</script>";
        return false;
    }

    if (sizefile > 1000000) {
        echo "<script>alert('ukuran file terlalu besar')</script>";
        return false;
    }

    $newname = uniqid().".".$extension;

    move_uploaded_file($tmpname, '../images/'. $newname);

    return $newname;
}

?>