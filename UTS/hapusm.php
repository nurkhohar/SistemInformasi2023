<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: mahasiswa.php");
  exit;
}

// mengambil id dari url
$id = $_GET['id'];

if (hapusm($id) > 0) {
  echo "<script>
          alert('data berhasil dihapus');
          document.location.href = 'mahasiswa.php';
       </script>";
} else {
  echo "data gagal dihapus!";
}
