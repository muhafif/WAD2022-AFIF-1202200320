<?php

include "../config/koneksi.php";

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
 

        $name= $_POST['nama'];
        $mail = $_POST['email'];
        $password = $_POST['password'];
        $no = $_POST['no_hp'];
       

        $query = "INSERT INTO users (nama,email, password,no_hp) 
                    VALUE ('$name','$mail','$password','$no')";
        $insert =mysqli_query ($db,$query);

        if ($query) {
            echo "<script>alert('Data telah ditambahkan')</script>";
            echo "<meta http-equiv='refresh' content='1 url=../pages/login.php'>";
            // header('Location: ../list.php?status=sukses');
        } else {
            echo "<script>alert('Data gagal ditambahkan')</script>";
            header('Location: ../login.php?status=gagal');
        }
    

?>
