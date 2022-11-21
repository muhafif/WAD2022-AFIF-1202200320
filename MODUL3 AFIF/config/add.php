<?php
require './connect.php';

$namamobil = $_POST['nama'];
$pemilik = $_POST['pemilik'];
$merk = $_POST['merk'];
$tanggalbeli = $_POST['tanggalbeli'];
$desc = $_POST['desc'];
$status = $_POST['status'];

$gambar = $_FILES['gambar']['name'];

$tempatGambar = "../asset/images/";

if (move_uploaded_file($_FILES['gambar']['tmp_name'], $tempatGambar . $gambar)) {
  $sql = "INSERT INTO showroom_afif (nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$namamobil', '$pemilik', '$merk', '$tanggalbeli', '$desc', '$gambar', '$status')";
  if (mysqli_query($koneksi, $sql)) {
    header("location: ../pages/myitem.php?pesan=succes");
  } else {
    echo "Gagal";
  }
} else {
  echo "Gagal";
}
