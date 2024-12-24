<?php
include '../connect.php';
?>

<?php

$result = mysqli_query($conn,"SELECT * FROM menu WHERE id='$_GET[id]'");

$data = mysqli_fetch_assoc($result);

if (isset($_POST['edit'])) {
    $merk = $_POST['merk'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $jenis = $_POST['jenis'];
    $jarak = $_POST['jarak'];
    $tahun = $_POST['tahun'];
    $warna = $_POST['warna'];

      $gambarLama = htmlspecialchars($_POST['gambarLama']);

      if ($_FILES['foto']['error'] === 4) {
            $foto = $gambarLama;
      }else {
            $foto = uploadImage();
      }
    
    $result = mysqli_query($conn,"UPDATE menu SET merk='$merk',gambar='$foto',nama='$nama',harga='$harga',jenis='$jenis',jarak='$jarak',tahun='$tahun',warna='$warna' WHERE id='$id'");

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('data produk telah diubah'); </script>";
        echo "<script> location='index.php'; </script>";
    }else {
        echo "<script> alert('data produk gagal diubah'); </script>";
        echo "<script> location='index.php'; </script>";
    }
}

?>


<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-dafault">
        <div class="panel-heading">
            Tambah Menu
        </div>  
        <div class="panel-boby">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-groub">
                    <label>Merk</label>
                    <input type="text" class="form-control" name="merk" value="<?= $data['merk'] ?>">
                </div>
                <div class="form-groub">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?>">
                </div>
                <div class="form-groub">
                    <label>Harga (Rp)</label>
                    <input type="number" class="form-control" name="harga" value="<?= $data['harga'] ?>">
                </div>
                <div class="form-groub">
                    <label>Jenis Transmisi</label>
                    <input type="text" class="form-control" name="jenis" value="<?= $data['jenis'] ?>"> 
                </div>
                <div class="form-groub">
                    <label>Jarak Tempuh</label>
                    <input type="text" class="form-control" name="jarak" value="<?= $data['jarak'] ?>"> 
                </div>
                <div class="form-groub">
                    <label>Tahun Rilis</label>
                    <input type="text" class="form-control" name="tahun" value="<?= $data['tahun'] ?>"> 
                </div>
                <div class="form-groub">
                    <label>Warna Motor</label>
                    <input type="text" class="form-control" name="warna" value="<?= $data['warna'] ?>"> 
                </div>
                <input type="hidden" name="gambarlama" value="<?= $data['gambar'] ?>">
                <div class="form-groub">
                    <label>Foto</label>
                    <img src="../images/<?php echo $data['gambar']; ?>" class="img-thumbnail" width="100">
                    <input type="file" class="form-control" name="foto">
                </div>
                <input type="hidden" name="id" value="<?= $data['id'] ?>">
                <button class="btn btn-primary" name="edit">Simpan</button>
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