<?php

include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"
DELETE FROM sekolah
WHERE id='$id'
");

header("Location:data_sekolah.php");

?>
