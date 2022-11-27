<?php

include("koneksi.php");


$name= $_POST['nama'];
$mail = $_POST['email'];
$password = $_POST['password'];
$no = $_POST['no_hp'];


    $sql = "UPDATE users
        SET nama_mobil='$carr', pemilik_mobil='$ownr', merk_mobil='$merk', tanggal_beli='$date', deskripsi='$desc', status_pembayaran='$paym' 
        WHERE id_mobil=$id";


$update = mysqli_query($db, $sql);
    if ($update) {
    echo "<script>alert('Data telah diupdate')</script>";
    echo "<meta http-equiv='refresh' content='1 url=../pages/list.php'>";

    } else {
    echo "<script>alert('Data gagal diupdate')</script>";
    header('Location: ../pages/additem.php?status=gagal');
    }


?>