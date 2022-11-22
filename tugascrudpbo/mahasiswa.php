<?php
include 'index.php';
include 'koneksi.php';
?>

<div class="container mt-4">
<h1>Data Mahasiswa</h1>
<a href="tambah-mahasiswa.php"class="btn btn-primary mb-3">Tambah</a>
 <table class="table table-bordered table-sm">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Kelamin</th>
                <th>Alamat</th>
                <th>Prodi</th>
                <th>Foto</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * FROM mahasiswa ORDER BY id ASC";
                $result = mysqli_query($koneksi, $query);

                if(!$result){
                    die("Query Error : ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
                }

                $no = 1;

                while ($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['nim']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['jk']; ?></td>
                    <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo $row['prodi']; ?></td>
                    <td><img style="width: 60px;" src ="gambar/<?php echo $row['foto']; ?>"></td>
                    <td><?php echo $row['email']; ?></td>
                    <td width="15%" class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a href="edit-mahasiswa.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="proses_hapus.php?id=<?php echo $row['id']; ?>"class="btn btn-danger"onclick="return confirm('Anda yakin ingin hapus data mahasiswa ini?')">Hapus</a>
                        </div>
                    </td>
                </tr>
                <?php
                $no++;
                }
                ?>
        </tbody>
    </table>
</div>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>