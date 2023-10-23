<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$matakuliah = query("SELECT * FROM tb_matakuliah");

// ketika tombol cari diklik
if (isset($_POST['carimk'])) {
  $matakuliah = carimk($_POST['keyword']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Daftar Mata Kuliah</title>
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
  <h3>Daftar Mata Kuliah</h3>
  <br>

  <form action="" method="POST">
    <button type="submit" name="carimk">Cari!</button>
    <input type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian.." autocomplete="off" autofocus>
  </form>
  <br>

  <table align=center border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Kode MK</th>
      <th>Nama MK</th>
      <th>Jumlah SKS</th>
    </tr>

    <?php if (empty($matakuliah)) : ?>
      <tr>
        <td colspan="4">
          <p style="color: red; font-style: italic;">data mata kuliah tidak ditemukan!</p>
        </td>
      </tr>
    <?php endif; ?>

    <?php $i = 1;
    foreach ($matakuliah as $mk) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $mk['kode_mk']; ?></td>
        <td><?= $mk['nama_mk']; ?></td>
        <td><?= $mk['sks']; ?></td>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>