<?php

include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_fetch_array(
mysqli_query($koneksi,"
SELECT * FROM sekolah
WHERE id='$id'
")
);

?>

<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">

<title>Edit Data</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-4">

<div class="card shadow">

<div class="card-body">

<h3>Edit Data Sekolah</h3>

<form action="update.php" method="POST">

<input
type="hidden"
name="id"
value="<?= $data['id'] ?>"
>

<div class="mb-3">
<label>Nama Sekolah</label>
<input
type="text"
name="nama_sekolah"
class="form-control"
value="<?= $data['nama_sekolah'] ?>"
required>
</div>

<div class="mb-3">
<label>Jumlah Siswa</label>
<input
type="number"
name="jumlah_siswa"
class="form-control"
value="<?= $data['jumlah_siswa'] ?>"
required>
</div>

<div class="mb-3">
<label>Alamat</label>
<textarea
name="alamat"
class="form-control"
required><?= $data['alamat'] ?></textarea>
</div>

<div class="mb-3">
<label>Telepon</label>
<input
type="text"
name="telepon"
class="form-control"
value="<?= $data['telepon'] ?>"
required>
</div>

<div class="mb-3">
<label>Kepala Sekolah</label>
<input
type="text"
name="kepala_sekolah"
class="form-control"
value="<?= $data['kepala_sekolah'] ?>"
required>
</div>

<div class="mb-3">

<label>Status Sekolah</label>

<select name="status_sekolah" class="form-select">

<option
<?= $data['status_sekolah']=="Negeri"?"selected":"" ?>
>
Negeri
</option>

<option
<?= $data['status_sekolah']=="Swasta"?"selected":"" ?>
>
Swasta
</option>

</select>

</div>

<button class="btn btn-primary">
Update Data
</button>

<a href="data_sekolah.php" class="btn btn-secondary">
Kembali
</a>

</form>

</div>

</div>

</div>

</body>
</html>
