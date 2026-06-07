<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">

<title>Tambah Sekolah</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-dark bg-primary">
<div class="container">
<a class="navbar-brand">
Tambah Data Sekolah
</a>
</div>
</nav>

<div class="container mt-4">

<div class="card shadow">

<div class="card-body">

<form action="proses_tambah.php" method="POST">

<div class="mb-3">
<label>Nama Sekolah</label>
<input type="text" name="nama_sekolah" class="form-control" required>
</div>

<div class="mb-3">
<label>Jumlah Siswa</label>
<input type="number" name="jumlah_siswa" class="form-control" required>
</div>

<div class="mb-3">
<label>Alamat</label>
<textarea name="alamat" class="form-control" required></textarea>
</div>

<div class="mb-3">
<label>Nomor Telepon</label>
<input type="text" name="telepon" class="form-control" required>
</div>

<div class="mb-3">
<label>Kepala Sekolah</label>
<input type="text" name="kepala_sekolah" class="form-control" required>
</div>

<div class="mb-3">
<label>Status Sekolah</label>

<select name="status_sekolah" class="form-select">

<option value="Negeri">Negeri</option>

<option value="Swasta">Swasta</option>

</select>

</div>

<button type="submit" class="btn btn-primary">
Simpan Data
</button>

<a href="index.php" class="btn btn-secondary">
Kembali
</a>

</form>

</div>

</div>

</div>

</body>
</html>
