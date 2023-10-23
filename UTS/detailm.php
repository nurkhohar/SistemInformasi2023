<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

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
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Detail Mahasiswa</title>
</head>

<body align=center>
  <ul id="atas">
    <li style="float:left"><a class="home" href="index.php">Home</a></li>
    <li style="float:left"><a href="mahasiswa.php">Mahasiswa</a></li>
    <li style="float:left"><a href="tambahm.php">Tambah Data Mahasiswa</a>
    <li style="float:left"><a href="dosen.php">Dosen</a></li>
    <li style="float:left"><a href="tambahd.php">Tambah Data Dosen</a>
    <li style="float:left"><a href="matakuliah.php">Mata Kuliah</a>
    <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
  </ul>
  <h3>Data Nilai Mahasiswa</h3>
  <table align=center border="1" cellpadding="10" cellspacing="0">
    <tr>
      <td>NIM</td>
      <td>Nama</td>
      <td>Antena dan Propagasi</td>
      <td>Sistem Tertanam dan Periferal</td>
      <td>Pengolahan Isyarat Digital</td>
      <td>Algoritma dan Struktur Data</td>
      <td>Sistem Informasi</td>
    </tr>
    <tr>
      <td> <?= $m['nim']; ?></td>
      <td> <?= $m['nama']; ?></td>
      <td> <?= $m['E301']; ?></td>
      <td> <?= $m['E302']; ?></td>
      <td> <?= $m['E303']; ?></td>
      <td> <?= $m['E304']; ?></td>
      <td> <?= $m['E305']; ?></td>
    </tr>
  </table>
  <br>
  <a href="ubahm.php?id=<?= $m['id']; ?>">Ubah Data</a> | <a href="editnilai.php?id=<?= $m['id']; ?>">Edit Nilai</a> | <a href="hapusm.php?id=<?= $m['id']; ?>" onclick="return confirm('apakah anda yakin ingin menghapus data?');">Hapus Data</a></li>
</body>

</html>