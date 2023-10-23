<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambahd'])) {
  if (tambahd($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'dosen.php';
         </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Tambah Data Dosen</title>
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
  <h3>Form Tambah Data Dosen</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label id=lbl>
          Nama :
          <input type="text" name="nama" autofocus required>
        </label>
      </li>
      <li>
        <label id=lbl>
          NIDN :
          <input type="text" name="nidn" required>
        </label>
      </li>
      <li>
        <button type="submit" name="tambahd">Tambah Data!</button>
      </li>
    </ul>
  </form>
</body>

</html>