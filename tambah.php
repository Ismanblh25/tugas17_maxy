<?php
include 'koneksi.php';

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $riwayat_penyakit = $_POST['riwayat_penyakit'];

    $query = "INSERT INTO pasien (nama, usia, riwayat_penyakit) VALUES ('$nama', '$usia', '$riwayat_penyakit')";
    mysqli_query($koneksi, $query);

    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Pasien</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2 class="text-center">Tambah Data Pasien</h2>
    <form method="POST" action="">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" required>
        </div>
        <div class="form-group">
            <label>Usia</label>
            <input type="number" class="form-control" name="usia" required>
        </div>
        <div class="form-group">
            <label>Riwayat Penyakit</label>
            <textarea class="form-control" name="riwayat_penyakit" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Tambah</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
