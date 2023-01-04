<?php

include("koneksi.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM penjualan_sepatu WHERE id_sepatu=$id";
    $query = mysqli_query($db, $sql);

    if ($update) {
        echo "<script>alert('Data telah ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../pages/list-sepatu.php'>";
        // header('Location: ../ListCarmobil.php?status=sukses');
        } else {
        echo "<script>alert('Data gagal ditambahkan')</script>";
        header('Location: ../pages/list-sepatu.php?status=gagal');
        }
    
}
?>