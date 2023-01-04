<?php
include('../config/koneksi.php');
if(isset($_GET['id'])) {
    $id_sepatu = $_GET['id'];
    $sql = "SELECT * FROM penjualan_sepatu WHERE id_sepatu=$id_sepatu";
    $query = mysqli_query($db, $sql);
    $item = mysqli_fetch_assoc($query);
}
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
    </nav><br><br><br>

    <div class="container py-5">
            <h1><?=$item['merk_sepatu'].' '.$item['harga']?></h1>
            <p>Detail sepatu <?=$item['merk_sepatu'].' '.$item['harga']?></p>
            <div class="row">
                <div class="col-lg-6">
                    <img src="../gambar/<?=$item['foto_sepatu']?>" class="img-fluid">
                </div>
                <div class="col-lg-6">
              <form method="post" action="../config/editsepatu.php" enctype="multipart/form-data">
                <label for="sepatu" class="fw-bold">Merk Sepatu</label>
                <input type="text" id="sepatu" class="form-control mb-3" name="sepatu" value="<?=$item['merk_sepatu']?>">
                <label for="harga" class="fw-bold">Harga</label>
                <input type="text" id="harga" class="form-control mb-3" name="harga" value="<?=$item['harga']?>">
                <label for="jumlah" class="fw-bold">Jumlah</label>
                <input type="number" id="jumlah" class="form-control mb-3" name="jumlah" value="<?=$item['jumlah']?>">
                <label for="size" class="fw-bold">Size</label>
                <input type="number" id="size" class="form-control mb-3" name="size" value="<?=$item['size']?>">
                <label for="deskripsi" class="fw-bold">Deskripsi</label>
                <textarea id="deskripsi" class="form-control mb-3" name="deskripsi"><?=$item['deskripsi']?></textarea>
                <label for="foto" class="fw-bold">Foto</label>
                <input type="file" id="foto" class="form-control mb-3" name="foto" value="<?=$item['foto_sepatu']?>">
                        
                <button type="submit" class="btn btn-warning px-5">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
    
</html>  