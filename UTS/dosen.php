<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$dosen = query("SELECT * FROM tb_dosen");

// ketika tombol cari diklik
if (isset($_POST['carid'])) {
  $dosen = carid($_POST['keyword']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Daftar Dosen</title>
</head>

<body align=center>
  <ul id="atas">
    <li style="float:left"><a class="home" href="index.php">Home</a></li>
    <li style="float:left"><a href="mahasiswa.php">Mahasiswa</a></li>
    <li style="float:left"><a href="tambahm.php">Tambah Data Mahasiswa</a>
    <li style="float:left"><a href="dosen.php">Dosen</a></li>
    <li style="float:left"><a href="tambahd.php">Tambah Data Dosen</a>
    <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
  </ul>
  <h3>Daftar Dosen</h3>
  <br>

  <form action="" method="POST">
    <button type="submit" name="carid">Cari!</button>
    <input type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian.." autocomplete="off" autofocus>
  </form>
  <br>

  <table align=center border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>NIDN</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>

    <?php if (empty($dosen)) : ?>
      <tr>
        <td colspan="4">
          <p style="color: red; font-style: italic;">data dosen tidak ditemukan!</p>
        </td>
      </tr>
    <?php endif; ?>

    <?php $i = 1;
    foreach ($dosen as $d) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $d['nidn']; ?></td>
        <td><?= $d['nama']; ?></td>
        <td><a href="ubahd.php?id=<?= $d['id']; ?>">Edit</a> | <a href="hapusd.php?id=<?= $d['id']; ?>" onclick="return confirm('apakah anda yakin ingin menghapus data?');">Hapus</a></li>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>