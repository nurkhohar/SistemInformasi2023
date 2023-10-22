<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'sistem_informasi');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya 1 data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $nim = htmlspecialchars($data['nim']);

  $query = "INSERT INTO
              tb_mahasiswa
            VALUES
            (null, '$nim', '$nama', null, null, null, null, null, null);
          ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
