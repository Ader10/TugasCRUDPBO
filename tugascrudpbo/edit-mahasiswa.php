<?php
include 'koneksi.php';
include 'index.php';

 // mengecek apakah di url ada nilai GET id
 if (isset($_GET['id'])) {
  // ambil nilai id dari url dan disimpan dalam variabel $id
  $id = ($_GET["id"]);

  // menampilkan data dari database yang mempunyai id=$id
  $query = "SELECT * FROM mahasiswa WHERE id='$id'";
  $result = mysqli_query($koneksi, $query);
  // jika data gagal diambil maka akan tampil error berikut
  if(!$result){
    die ("Query Error: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
  }
  // mengambil data dari database
  $data = mysqli_fetch_assoc($result);
    // apabila data tidak ada pada database maka akan dijalankan perintah ini
     if (!count($data)) {
        echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
     }
} else {
  // apabila tidak ada data GET id pada akan di redirect ke index.php
  echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
}         
 
?>
<div class="container mt-4">
<h1>Edit Data Mahasiswa <?php echo $data['nama']; ?></h1>
</div>
<div class="container mt-4">
<form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
<!-- NIM -->
<div class="mb-3">
  <label for="nim" class="form-label">NIM</label>
  <input type="text" class="form-control" name="nim" required="" value="<?php echo $data['nim']; ?>">
</div>
<!-- NAMA -->
<div class="mb-3">
  <label for="nama" class="form-label">Nama</label>
  <input type="text" class="form-control"  name="nama" required="" value="<?php echo $data['nama']; ?>">
</div>
<!-- Jenis Kelamin -->
<div class="mb-3">
  <label for="jk" class="form-label">Jenis Kelamin</label>
  <select class="form-control" name="jk" required="" value="<?php echo $data['jk']; ?>">
  <option selected>Pilih Jenis Kelamin</option>
  <option value="Laki-laki">Laki-laki</option>
  <option value="Perempuan">Perempuan</option>
</select>
</div>
<!-- ALAMAT -->
<div class="mb-3">
  <label for="alamat" class="form-label">Alamat</label>
  <input type="text" class="form-control" name="alamat" required="" value="<?php echo $data['alamat']; ?>">
</div>
<!-- Prodi -->
<div class="mb-3">
  <label for="prodi" class="form-label">Prodi</label>
  <select class="form-control" name="prodi" required="" value="<?php echo $data['prodi']; ?>">
  <option selected>Pilih salah satu Prodi</option> 
  <option value="Teknik Informatika">Teknik Informatika</option>
  <option value="Sistem Informasi">Sistem Informasi</option>
  <option value="Pendidikan Teknologi Informasi">Pendidikan Teknologi Informasi</option>
</select>
</div>
<!-- foto -->
<div class="mb-3">
  <label for="foto" class="form-label">Foto</label>
  <input class="form-control" type="file"  name="foto" required="" >
</div>
<!-- Email -->
<div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input type="email" class="form-control" name="email" required="" value="<?php echo $data['email']; ?>">
</div>
<!-- Tambah -->
<div class="col-12">
    <button type="submit" class="btn btn-primary">Update</button>
  </div>
</form>
</div>