<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$m = query("SELECT * FROM tb_mahasiswa WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubahm'])) {
  if (ubahm($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'mahasiswa.php';
         </script>";
  } else {
    echo "data gagal diubah!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Ubah Data Mahasiswa</title>
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
  <h3>Form Ubah Data Mahasiswa</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $m['id']; ?>">
    <table align=center border="1" cellpadding="5" cellspacing="0">
      <tr>
        <td>Nama</td>
        <td>NIM</td>
      </tr>
      <tr>
        <td> <input type="text" name="nama" autofocus required value="<?= $m['nama']; ?>"></td>
        <td> <input type="text" name="nim" required value="<?= $m['nim']; ?>"></td>
      </tr>
    </table>
    <br>
    <button type="submit" name="ubahm">Ubah Data!</button>
  </form>
</body>

</html>