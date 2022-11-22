<?php
include 'index.php';
include 'koneksi.php';
?>
<div class="container mt-4">
<h1>Tambah Data Mahasiswa</h1>
</div>
<div class="container mt-4">
<form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
<!-- NIM -->
<div class="mb-3">
  <label for="nim" class="form-label">NIM</label>
  <input type="text" class="form-control" id="nim" name="nim" required="">
</div>
<!-- NAMA -->
<div class="mb-3">
  <label for="nama" class="form-label">Nama</label>
  <input type="text" class="form-control" id="nama" name="nama" required="">
</div>
<!-- Jenis Kelamin -->
<div class="mb-3">
  <label for="jk" class="form-label">Jenis Kelamin</label>
  <select class="form-control" id="jk" name="jk" required="">
  <option selected>Pilih Jenis Kelamin</option>
  <option value="Laki-laki">Laki-laki</option>
  <option value="Perempuan">Perempuan</option>
</select>
</div>
<!-- ALAMAT -->
<div class="mb-3">
  <label for="alamat" class="form-label">Alamat</label>
  <input type="text" class="form-control" id="alamat" name="alamat" required="">
</div>
<!-- Prodi -->
<div class="mb-3">
  <label for="prodi" class="form-label">Prodi</label>
  <select class="form-control" id="prodi" name="prodi" required="">
  <option selected>Pilih salah satu Prodi</option>
  <option value="Teknik Informatika">Teknik Informatika</option>
  <option value="Sistem Informasi">Sistem Informasi</option>
  <option value="Pendidikan Teknologi Informasi">Pendidikan Teknologi Informasi</option>
</select>
</div>
<!-- foto -->
<div class="mb-3">
  <label for="foto" class="form-label">Foto</label>
  <input class="form-control" type="file" id="foto" name="foto" required="">
</div>
<!-- Email -->
<div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input type="email" class="form-control" id="email" name="email" required="">
</div>
<!-- Tambah -->
<div class="col-12">
    <button type="submit" class="btn btn-primary">Tambah</button>
  </div>
</form>
</div>