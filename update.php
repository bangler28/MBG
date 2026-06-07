<?php

include 'koneksi.php';

$id = $_POST['id'];

mysqli_query($koneksi,"
UPDATE sekolah SET

nama_sekolah='$_POST[nama_sekolah]',
jumlah_siswa='$_POST[jumlah_siswa]',
alamat='$_POST[alamat]',
telepon='$_POST[telepon]',
kepala_sekolah='$_POST[kepala_sekolah]',
status_sekolah='$_POST[status_sekolah]'

WHERE id='$id'
");

header("Location:data_sekolah.php");

?>
