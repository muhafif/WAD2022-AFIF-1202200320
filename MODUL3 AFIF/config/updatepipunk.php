<?php
require './connect.php';

$id = $_GET['id'];
$namamobil = $_POST['nama'];
$pemilik = $_POST['pemilik'];
$merk = $_POST['merk'];
$tanggalbeli = $_POST['tanggalbeli'];
$desc = $_POST['desc'];
$status = $_POST['status'];
$gambar = $_FILES['gambar']['name'];

$tempatGambar = "../asset/images/";

if (move_uploaded_file($_FILES['gambar']['tmp_name'], $tempatGambar . $gambar)) {
  $sql = "UPDATE showroom_afif SET nama_mobil = '$namamobil', pemilik_mobil = '$pemilik', merk_mobil = '$merk', tanggal_beli = '$tanggalbeli', deskripsi = '$desc', foto_mobil = '$gambar', status_pembayaran = '$status' WHERE id_mobil = $id";
  if (mysqli_query($koneksi, $sql)) {
    header("location: ../pages/myitem.php?pesan=update");
  } else {
    echo "Gagal";
  }
} else {
  echo "Gagal";
}
