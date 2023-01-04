<?php
include('../config/koneksi.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beli Sepatu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="quiz.css">
  </head>
  <body>  

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="../gambar/bs.png" alt="Logo" width="50" height="50" class="d-inline-block me-2">
          <strong>Beli Sepatu</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <form class="d-flex ms-auto">
            <input class="form-control me-2" type="search" placeholder="Cari Toko atau sepatu" aria-label="Cari">
            <button class="btn btn-warning" type="submit">Cari</button>
          </form>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="homequiz.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pesananku.php">Pesananku</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin.php">Jual Sepatu</a>
            </li>
          </ul>
        </div>
      </div>
    </nav><br><br><br><br><br>

    <div class="container py-5">
            <h1>Sepatu Yang Dijual</h1>
  
            <div class="row mb-5">
                <?php 
                $sql = "SELECT * FROM penjualan_sepatu";
                $query = mysqli_query($db, $sql);
                $count_row = mysqli_num_rows($query);
        
                while($item = mysqli_fetch_array($query)){
                ?>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="../gambar/<?=$item['foto_sepatu']?>" class="img-thumbnail">
                            <h4 class="mt-3"><?=$item['merk_sepatu'].' '.$item['harga']?></h4>
                            <div class="mb-4"><?=$item['deskripsi']?></div>
                            <a href="../pages/detail.php?id=<?=$item['id_sepatu']?>" class="btn btn-warning px-5 rounded-pill">Detail</a>
                            <a href="../config/delete.php?id=<?=$item['id_sepatu']?>" class="btn btn-danger px-5 rounded-pill">Delete</a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <p class="fw-bold">Jumlah Sepatu: <?=$count_row?></p>
        </div>

        <?php
        session_start();
        if (!empty($_SESSION['msg'])) {
        ?>
        <div class="toast show align-items-center text-bg-dark border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                Data berhasil ditambahkan.
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
        <?php
        unset($_SESSION['msg']);
        }
        ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>