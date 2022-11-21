<?php
$connect = new mysqli("localhost:3308", "root", "", "showroom_afif_table");

if (!$connect) {
  die("Koneksi Gagal: " . $connect->connect_error);
}