<?php

require "../config/koneksi.php";

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: homequiz.php");
}
 

        $name= $_POST['nama'];
        $mail = $_POST['email'];
        $password = $_POST['password'];
        $no = $_POST['no_hp'];
       

        $query = "INSERT INTO users (nama,email, password,no_hp) 
                    VALUE ('$name','$mail','$password','$no')";
        $insert =mysqli_query ($db,$query);

        if ($query) {
            echo "<script>alert('Berhasil melakukan registrasi')</script>";
            echo "<meta http-equiv='refresh' content='1 url=../pages/masuk.php'>";
            // header('Location: ../ListCarmobil.php?status=sukses');
        } else {
            echo "<script>alert('Data gagal ditambahkan')</script>";
            header('Location: ../pages/dftr.php?status=gagal');
        }
    

?>
