<?php

include 'koneksi.php';

$nama = $_POST['nama_sekolah'];
$jumlah = $_POST['jumlah_siswa'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$kepala = $_POST['kepala_sekolah'];
$status = $_POST['status_sekolah'];

mysqli_query($koneksi,"
INSERT INTO sekolah
(
nama_sekolah,
jumlah_siswa,
alamat,
telepon,
kepala_sekolah,
status_sekolah
)

VALUES
(
'$nama',
'$jumlah',
'$alamat',
'$telepon',
'$kepala',
'$status'
)
");

header("Location:data_sekolah.php");

?>
