<?php
include '../connect.php';
?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-default">
        <div class="panel-heading">
        Daftar Motor
        </div>
        <div class="panel-body">
            <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Merk</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Jenis Transmisi</th>
                        <th>Jarak Tempuh</th>
                        <th>Tahun Rilis</th>
                        <th>Warna Motor</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- query data -->
                    <?php $result = mysqli_query($conn, "SELECT * FROM menu ORDER BY id ASC"); ?>
                    <?php
                        $i = 1;
                        while($data = mysqli_fetch_assoc($result)) {
                    ?>
                    <!-- end of php -->
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $data["merk"]; ?></td>
                            <td>
                                <img src="../images/<?= $data["gambar"]; ?>" width="90" alt="...">
                            </td>
                            <td><?= $data["nama"]; ?></td>
                            <td><?= $data["harga"]; ?></td>
                            <td><?= $data["jenis"]; ?></td>
                            <td><?= $data["jarak"]; ?></td>
                            <td><?= $data["tahun"]; ?></td>
                            <td><?= $data["warna"]; ?></td>
                            <td>
                                <a href="index.php?halaman=ubahmenu&id=<?= $data["id"]; ?>" class="btn btn-warning btn-sm">Edit</a>

                                <a href="index.php?halaman=hapusmenu&id=<?= $data["id"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('yakin dihapus')">Hapus</a>
                            </td>
                        </tr>
                <?php $i++; } ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>