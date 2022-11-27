<?php
$db = mysqli_connect("localhost:3308", "root", "", "modul3");

    $email = $_POST["email"];
    $password = $_POST["password"];
    $querygetakun = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $getakun = mysqli_query($db, $querygetakun);
    $row = mysqli_fetch_assoc($getakun);
    if ( $password == $row["password"]){
        $_SESSION["newlogin"] = true;
        if (isset($_POST["remember"])){
            setcookie('id', $row["id"], strtotime('+7 days'), '/');
            header('Location: ../pages/homeapipunk.php');
            exit;
        }else{
            $_SESSION["sementara"] = $row["id"];
            header('Location: ../pages/homeapipunk.php');
            exit;
        }
    }else{
        
        echo "<script>alert('Data gagal ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../pages/login.php'>";
        
    }

?>