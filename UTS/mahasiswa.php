<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM tb_mahasiswa");

// ketika tombol cari diklik
if (isset($_POST['carim'])) {
  $mahasiswa = carim($_POST['keyword']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Daftar Mahasiswa</title>
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
  <h3>Daftar Mahasiswa</h3>
  <br>

  <form action="" method="POST">
    <button type="submit" name="carim">Cari!</button>
    <input type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian.." autocomplete="off" autofocus>
  </form>
  <br>

  <table align=center border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>

    <?php if (empty($mahasiswa)) : ?>
      <tr>
        <td colspan="4">
          <p style="color: red; font-style: italic;">data mahasiswa tidak ditemukan!</p>
        </td>
      </tr>
    <?php endif; ?>

    <?php $i = 1;
    foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $m['nim']; ?></td>
        <td><?= $m['nama']; ?></td>
        <td>
          <a href="detailm.php?id=<?= $m['id']; ?>">lihat detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>