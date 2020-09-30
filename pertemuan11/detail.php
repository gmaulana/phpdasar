<?php
require 'functions.php';

//ambil id dari url

$id = $_GET['id'];

//query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>DETAIL MAHASISWA</h3>
  <ul>
    <li><img src="img/<?= $m['gambar']; ?>" width="60"></li>
    <li>NRP : <?= $m['nrp']; ?> </li>
    <li>Nama : <?= $m['nama']; ?></li>
    <li>Email : <?= $m['email']; ?></li>
    <li>Jurusan : <?= $m['jurusan']; ?></li>
    <li><a href="ubah.php?id= <?= $m['id']; ?>">Ubah</a> | <a href="hapus.php?id= <?= $m['id']; ?>" onclick="return confirm('Apakah Anda Yakin?');">Hapus </a></li>
    <li><a href=" index.php">Kembali</a></li>
  </ul>
</body>

</html>