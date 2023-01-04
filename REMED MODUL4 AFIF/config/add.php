<?php

if(include("koneksi.php")) {
    $fileName = $_FILES['foto']['name'];
    $tmpName = $_FILES['foto']['tmp_name'];
    $dirTarget = "../gambar/";
    $upload = move_uploaded_file($tmpName, $dirTarget.$fileName);

    if($upload) {
        $carr = $_POST['sepatu'];
        $ownr = $_POST['harga'];
        $merk = $_POST['jumlah'];
        $date = $_POST['size'];
        $desc = $_POST['deskripsi'];
        $imgs = $fileName;
      
        $query = "INSERT INTO penjualan_sepatu (merk_sepatu, harga, jumlah, size, deskripsi, foto_sepatu) 
                    VALUE ('$carr', '$ownr', '$merk','$date','$desc', '$imgs')";
        $insert =mysqli_query ($db,$query);

        if ($query) {
            echo "<script>alert('Data telah ditambahkan')</script>";
            echo "<meta http-equiv='refresh' content='1 url=../pages/list-sepatu.php'>";
            // header('Location: ../ListCarmobil.php?status=sukses');
        } else {
            echo "<script>alert('Data gagal ditambahkan')</script>";
            header('Location: ../pages/addmobil.php?status=gagal');
        }
    }
} else {
    die("masih salah");
}

?>