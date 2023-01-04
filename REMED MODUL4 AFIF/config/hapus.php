<?php

include("koneksi.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM pemesanan WHERE id_pesanan=$id";
    $query = mysqli_query($db, $sql);

    if ($update) {
        echo "<script>alert('Data telah ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../pages/pesananku.php'>";
        } else {
        echo "<script>alert('Data gagal ditambahkan')</script>";
        header('Location: ../pages/pesananku.php?status=gagal');
        }
    
}
?>