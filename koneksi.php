<?php
$koneksi= mysqli_connect("localhost", "root", "", "hospital_db");


if(mysqli_connect_errno()) {
    echo "koneksi database gagal" . mysqli_connect_error();
} else{
    echo "koneksi terhubung";
}
?>

