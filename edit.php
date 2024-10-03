<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM pasien WHERE id = '$id'");
$data = mysqli_fetch_array($query);

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
    $riwayat_penyakit = $_POST['riwayat_penyakit'];

    mysqli_query($koneksi, "UPDATE pasien SET nama='$nama', usia='$usia', riwayat_penyakit='$riwayat_penyakit' WHERE id='$id'");
    
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pasien</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2 class="text-center">Edit Data Pasien</h2>
    <form method="POST" action="">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>" required>
        </div>
        <div class="form-group">
            <label>Usia</label>
            <input type="number" class="form-control" name="usia" value="<?php echo $data['usia']; ?>" required>
        </div>
        <div class="form-group">
            <label>Riwayat Penyakit</label>
            <textarea class="form-control" name="riwayat_penyakit" required><?php echo $data['riwayat_penyakit']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-warning" name="submit">Update</button>
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</body>
</html>
