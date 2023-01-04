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
              <a class="nav-link" href="list-sepatu.php">Penjualan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pesanan.php">Pesananku</a>
            </li>
        
          </ul>
        </div>
      </div>
    </nav><br><br><br><br><br>

    <body>
<div class="container mt-5" style="width:100%">
  <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Nomor HP</th>
            <th scope="col">Alamat</th>
            <th scope="col">Size</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>

        <tbody>
            <?php
             include '../config/koneksi.php';
              $sql = "SELECT * FROM pemesanan";
               $query  = mysqli_query($db, $sql);
               if($query){
               while($select = mysqli_fetch_assoc($query)){
            ?>
            <tr>
                <th scope="row"><?= $select['id_pesanan']?></th>             
                <td><?= $select['nama_pemesan']?></td>
                <td><?= $select['email']?></td>
                <td><?= $select['nomor_hp']?></td>
                <td><?= $select['alamat']?></td>
                <td><?= $select['size']?></td>
                <td><a href="../config/hapus.php?id=<?=$select['id_pesanan']?>" type="button" class="btn btn-success rounded-pill">Selesai</a></td>
            </tr>
                <?php
                }
            }
            ?>
        </tbody>
        
  </table>
</div>
</body>
</html>