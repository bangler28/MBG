<?php
include 'koneksi.php';

$cari = "";

if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $query = mysqli_query($koneksi,"
    SELECT * FROM sekolah
    WHERE nama_sekolah LIKE '%$cari%'
    ORDER BY id DESC
    ");
}else{
    $query = mysqli_query($koneksi,"
    SELECT * FROM sekolah
    ORDER BY id DESC
    ");
}

$totalSekolah = mysqli_num_rows(
    mysqli_query($koneksi,"SELECT * FROM sekolah")
);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Data Sekolah</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-dark bg-primary">
<div class="container">
<a class="navbar-brand">
Data Sekolah Penerima MBG
</a>
</div>
</nav>

<div class="container mt-4">

<div class="row mb-3">

<div class="col-md-4">

<div class="card bg-primary text-white">
<div class="card-body">

<h5>Total Sekolah</h5>

<h2><?= $totalSekolah ?></h2>

</div>
</div>

</div>

</div>

<form method="GET">

<div class="input-group mb-3">

<input
type="text"
name="cari"
class="form-control"
placeholder="Cari sekolah..."
value="<?= $cari ?>"
>

<button class="btn btn-primary">
Cari
</button>

</div>

</form>

<a href="tambah.php" class="btn btn-success mb-3">
Tambah Data
</a>

<div class="table-responsive">

<table class="table table-bordered table-striped">

<thead class="table-primary">

<tr>

<th>No</th>
<th>Nama Sekolah</th>
<th>Jumlah Siswa</th>
<th>Alamat</th>
<th>Telepon</th>
<th>Kepala Sekolah</th>
<th>Status</th>
<th>Aksi</th>

</tr>

</thead>

<tbody>

<?php

$no=1;

while($d=mysqli_fetch_array($query)){

?>

<tr>

<td><?= $no++ ?></td>

<td><?= $d['nama_sekolah'] ?></td>

<td><?= $d['jumlah_siswa'] ?></td>

<td><?= $d['alamat'] ?></td>

<td><?= $d['telepon'] ?></td>

<td><?= $d['kepala_sekolah'] ?></td>

<td><?= $d['status_sekolah'] ?></td>

<td>

<a
href="edit.php?id=<?= $d['id'] ?>"
class="btn btn-warning btn-sm">
Edit
</a>

<a
href="hapus.php?id=<?= $d['id'] ?>"
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin hapus data?')">
Hapus
</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

<a href="index.php" class="btn btn-secondary">
Kembali
</a>

</div>

</body>
</html>
