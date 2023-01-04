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
              <a class="nav-link" href="pesananku.php">Pesananku</a>
            </li>
        
          </ul>
        </div>
      </div>
    </nav><br><br><br><br><br>

    <center><h6><strong>Jumlah Barang Yang Kamu Jual Saat Ini</strong></h6></center>

  
    <div class="progress" style="margin-left: 10px; margin-right: 10px;">
        <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45 Barang</div>
    </div><br>

    <section id='form'>
    <div class="container">
      <center><h1 class="tambahh1">Tambah Produk</h1>
      <p class="tambahp">Masukan Sepatu Baru Anda</p></center>
      <form method="post" action="../config/add.php" enctype="multipart/form-data">
                <label for="sepatu" class="fw-bold">Merk Sepatu</label>
                <input type="text" id="sepatu" class="form-control mb-3" name="sepatu" placeholder="Merk Sepatu" required>
                <label for="harga" class="fw-bold">Harga</label>
                <input type="text" id="harga" class="form-control mb-3" name="harga" placeholder="Harga Sepatu" required>
                <label for="jumlah" class="fw-bold">Jumlah</label>
                <input type="number" id="jumlah" class="form-control mb-3" name="jumlah" placeholder="Jumlah" required>
                <label for="size" class="fw-bold">Size</label>
                <input type="number" id="size" class="form-control mb-3" name="size" required>
                <label for="deskripsi" class="fw-bold">Deskripsi</label>
                <textarea id="deskripsi" class="form-control mb-3" name="deskripsi"></textarea>
                <label for="foto" class="fw-bold">Foto</label>
                <input type="file" id="foto" class="form-control mb-3" name="foto">
                
                <button type="submit" class="form-control btn btn-warning"name='selesai'>Submit</button>
            </form>
    </div>
  </section><br>    

    <footer class="bg-dark text-white p-5">
        <div class="row">
          <div class="col-md-3"><h6>Layanan Pelanggan</h6><ul><li>Pusat Bantuan</li></ul></div>
          <div class="col-md-3"><h6>Tentang Kami</h6><ul><li>Sebagai platform penjualan sepatu terpercaya, dengan kerja sama resmi</li></ul></div>
          <div class="col-md-3"><h6>Alamat Kami</h6><ul><li>Jl. Mondorakan No. 6, Kotagede, Yogyakarta</li></ul></div>
          <div class="col-md-3"><h6>Hubungi Kami</h6>
            <ul><li>0876666</li>
                <li>belisepatu@gmail.com</li>
            </ul></div>
        </div>
      </footer>
    
      <div class="copyright text-center dark font-weight-bold pt-2"><p>Beli Sepatu by Muhammad Afif Aminuddin &copy; 2022</p></div>

</body>
</html>