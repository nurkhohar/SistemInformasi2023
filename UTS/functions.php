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

function hapusm($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM tb_mahasiswa WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubahm($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $nim = htmlspecialchars($data['nim']);

  $query = "UPDATE tb_mahasiswa SET
              nama = '$nama',
              nim = '$nim'
            WHERE id = $id ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function carim($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM tb_mahasiswa
              WHERE 
            nama LIKE '%$keyword%' OR
            nim LIKE '%$keyword%'
          ";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
