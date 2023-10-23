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

function tambahm($data)
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

function tambahd($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $nidn = htmlspecialchars($data['nidn']);

  $query = "INSERT INTO
              tb_dosen
            VALUES
            (null, '$nama', '$nidn');
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

function hapusd($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM tb_dosen WHERE id = $id") or die(mysqli_error($conn));
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

function ubahd($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama']);
  $nidn = htmlspecialchars($data['nidn']);

  $query = "UPDATE tb_dosen SET
              nama = '$nama',
              nidn = '$nidn'
            WHERE id = $id ";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function ubahn($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $E301 = htmlspecialchars($data['E301']);
  $E302 = htmlspecialchars($data['E302']);
  $E303 = htmlspecialchars($data['E303']);
  $E304 = htmlspecialchars($data['E304']);
  $E305 = htmlspecialchars($data['E305']);

  $query = "UPDATE tb_mahasiswa SET
              E301 = '$E301',
              E302 = '$E302',
              E303 = '$E303',
              E304 = '$E304',
              E305 = '$E305'
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

function carid($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM tb_dosen
              WHERE 
            nama LIKE '%$keyword%' OR
            nidn LIKE '%$keyword%'
          ";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  // cek dulu username 
  if ($user = query("SELECT * FROM user WHERE username = '$username' && password = '$password'")) {
    // cek password

    $_SESSION['login'] = true;

    header("Location: index.php");
    exit;
  }
  return [
    'error' => true,
    'pesan' => 'Username / Password salah!'
  ];
}
