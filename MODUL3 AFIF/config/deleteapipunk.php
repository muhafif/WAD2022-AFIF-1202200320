<?php
require './connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM showroom_afif WHERE id_mobil = $id";

if (mysqli_query($koneksi, $sql)) {
  header("location: ../pages/myitem.php?pesan=delete");
} else {
  echo "Gagal";
}
