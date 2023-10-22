<?php
require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$m = query("SELECT * FROM tb_mahasiswa WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li>NIM : <?= $m['nim']; ?></li>
    <li>Nama : <?= $m['nama']; ?></li>
    <li>Pembimbing Akademik : <?= $m['pa']; ?></li>
    <li><a href="">ubah</a> | <a href="">hapus</a></li>
    <li><a href="index.php">Kembali ke daftar mahasiswa</a></li>
  </ul>
</body>

</html>