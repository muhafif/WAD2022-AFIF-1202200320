<?php

require "../config/koneksi.php";

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: homequiz.php");
}
 

        $name= $_POST['nama'];
        $mail = $_POST['email'];
        $no = $_POST['phone'];
        $adrs = $_POST['address'];
        $size = $_POST['size'];
       

        $query = "INSERT INTO pemesanan (nama_pemesan,email, nomor_hp, alamat, size) 
                    VALUE ('$name','$mail','$no','$adrs', '$size')";
        $insert =mysqli_query ($db,$query);

        if ($query) {
            echo "<script>alert('Berhasil melakukan pemesanan')</script>";
            echo "<meta http-equiv='refresh' content='1 url=../pages/homequiz.php'>";
            
        } else {
            echo "<script>alert('Data gagal ditambahkan')</script>";
            header('Location: ../pages/psn.php?status=gagal');
        }
    

?>
