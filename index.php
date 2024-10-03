<html>
    <head>
        <title>Crud PHP Mysql</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <h2 class="text-center"> Data Pasien Rumah Sakit </h2>
        <br>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Usia</th>
                    <th>Riwayat Penyakit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "SELECT * FROM pasien");
                while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['usia']; ?></td>
                        <td><?php echo $d['riwayat_penyakit']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php 
                } 
                ?>
            </tbody>
        </table>
        <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
    </div>
    </body>
</html>
