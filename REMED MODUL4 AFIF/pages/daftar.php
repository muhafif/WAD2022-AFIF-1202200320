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

  <style>  
    body {
      background-image: url("https://images.unsplash.com/photo-1552346154-21d32810aba3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80");
      background-size: cover;
    }
  </style>  

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
              <a class="nav-link" href="#">Notifikasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="keranjang.php">Keranjang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="daftar.php">Daftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="masuk.php">Masuk</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section style="padding-top: 50px;">
        <div class="container px-5 py-5">
            <div class="row align-items-center">
                <div class="col-sm">
                    <img src="https://www.pngmart.com/files/6/Shoe-PNG-Picture.png"  height = "330px"alt="...">    
                </div>
                <div class="col-sm">
                    <h1 style="color:white" class="fw-bold">Daftar</h1>
                    <form action="../config/dftr.php" method="POST" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label style="color:white" for="email" class="form-label fw-bold">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>

                        <div class="mb-3">
                            <label style="color:white" for="nama" class="form-label fw-bold">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>

                        <div class="mb-3">
                            <label style="color:white" for="no_hp" class="form-label fw-bold">Nomor Handphone</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp">
                        </div>
                        
                        <div class="mb-3">
                            <label style="color:white" for="passwordi" class="form-label fw-bold">Kata Sandi</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        
                        <div class="mb-3">
                            <label style="color:white" for="cpassword" class="form-label fw-bold">Konfirmasi Kata Sandi</label>
                            <input type="password" class="form-control" id="cpassword" name="cpassword">
                        </div>

                        <div class="mt-3 mb-1">
                            <button type="submit" class="btn btn-warning" name="daftar">Daftar</button>
                        </div>

                        <p style="color:white">Anda sudah punya akun? 
                            <a href="login.php">Login</a>
                        </p>
                    </form>
                </div>
            
            </div>
        </div>
    </section>
    </div><br>  

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
  
    <div class="copyright text-center text-white font-weight-bold pt-2"><p>Beli Sepatu by Muhammad Afif Aminuddin &copy; 2022</p></div>
  
  </body>
</html>   