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
              <a class="nav-link active" aria-current="page" href="homequiz.php">Beranda</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="daftar.php">Daftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="masuk.php">Masuk</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  <div class="container" style="margin-top:30px ;">   
    <div id="carouselExampleControls" class="carousel slide mt-5" data-bs-ride="carousel">
      <div class="carousel-inner pt-5">
        <div class="carousel-item active">
          <img src="../gambar/Frame 2.png" class="d-block" width="1200px" alt="...">
        </div>
        <div class="carousel-item active">
          <img src="../gambar/Frame 3.png" class="d-block" width="1200px" alt="...">
        </div>
        <div class="carousel-item active">
          <img src="../gambar/Frame 4.png" class="d-block" width="1200px" alt="...">
        </div>
        <div class="carousel-item active">
          <img src="../gambar/Frame 5.png" class="d-block" width="1200px" alt="...">
        </div>
        <div class="carousel-item active">
          <img src="../gambar/Frame 6.png" class="d-block" width="1200px" alt="...">
        </div>
        <div class="carousel-item active">
          <img src="../gambar/Frame 7.png" class="d-block" width="1200px" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>  

  <div class="container mt-4">
    <div class="judul-kategori" style="background-color: orange ; padding: 5px, 10px; border-radius: 10px;">
      <h5 class="text-center" style="margin-top:5px;">Kategori</h5>
    </div>

    <div class="row text-center row-container mt-2">
      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-kategori">
          <a href="#"><img src="../gambar/vans.png" class="img-category mt-3" style="width: 150px;"></a>
          <p class="mt-2">Vans</p>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-kategori">
          <a href="#"><img src="../gambar/nike.png" class="img-category mt-3" style="width: 150px;"></a>
          <p class="mt-2">Nike</p>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-kategori">
          <a href="#"><img src="../gambar/adidas.png" class="img-category mt-3" style="width: 150px;"></a>
          <p class="mt-2">Adidas</p>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-kategori">
          <a href="#"><img src="https://static.thenounproject.com/png/560147-200.png" class="img-category mt-3" style="width: 150px;"></a>
          <p class="mt-2">Converse</p>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-kategori">
          <a href="#"><img src="https://cdn.icon-icons.com/icons2/2845/PNG/512/puma_logo_icon_181343.png" class="img-category mt-3" style="width: 150px;"></a>
          <p class="mt-2">Puma</p>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-kategori">
          <a href="#"><img src="https://img.icons8.com/ios/500/air-jordan.png" class="img-category mt-3" style="width: 150px;"></a>
          <p class="mt-2">Jordan</p>
        </div>
      </div>

    </div>
  </div>

  <div class="container mt-5 pb-3">
      <div class="judul-kategori" style="background-color: orange ; padding-left: 5px; padding-right: 10px; padding-bottom: 10px; border-radius: 10px;">
        <h5 class="text-center pt-3" style="margin-top:15px ;">Rekomendasi</h5>
        
      <div class="row mx-auto">  
        <div class="d-flex justify-content-around">

          <div class="card mr-2 ml-2" style="width: 15rem;">
              <img src="https://d5ibtax54de3q.cloudfront.net/eyJidWNrZXQiOiJraWNrYXZlbnVlLWFzc2V0cyIsImtleSI6InByb2R1Y3RzLzEwMDUvOGU2OGQyN2MtMDZiMi00ZjdlLTg0YjYtZjk5YTNmMDc0ZDVkLmpwZWciLCJlZGl0cyI6eyJyZXNpemUiOnsid2lkdGgiOjE0MDB9fX0="  alt="Avanza">
              <div class="card-body">
                  <h5 class="card-text">Converse CT All-Star 70S Cdg Play Black</h5>
                <p class="card-text">Rp. 2.500.000 ,-</p>
                <a href="#" class="btn btn-success" data-bs-target="#produk1" data-bs-toggle="modal">Beli</a>
              </div>
              <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
          </div>

              <div class="card mr-2 ml-2" style="width: 15rem;">
                  <img src="https://d5ibtax54de3q.cloudfront.net/eyJidWNrZXQiOiJraWNrYXZlbnVlLWFzc2V0cyIsImtleSI6InByb2R1Y3RzLzI2NzcxL2QyYmNhZDI4ZDZmM2U0NTA0OTMxNDY3MzcxZTMyYzdlLnBuZyIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6MTQwMH19fQ=="  alt="Jazz";>
                  <div class="card-body">
                      <h5 class="card-text">Puma Clyde Def Jam White C</h5>
                    <p class="card-text">Rp. 700.000,-</p>
                    <a href="#" class="btn btn-success" data-bs-target="#produk2" data-bs-toggle="modal">Beli</a>
                  </div>
                  <div class="card-footer">
                      <small class="text-muted">Last updated 5 mins ago</small>
                    </div>
              </div>

              <div class="card mr-2 ml-2" style="width: 15rem;">
              <img src="https://d5ibtax54de3q.cloudfront.net/eyJidWNrZXQiOiJraWNrYXZlbnVlLWFzc2V0cyIsImtleSI6InByb2R1Y3RzLzM3NDkyL2VlN2RlYWY5MjQyNzk1ZWQyYWIzNzYwMGI2MjJjZjNlLnBuZyIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6MTQwMH19fQ=="  alt="Freed">
              <div class="card-body">
                  <h5 class="card-text">Adidas Yeezy Boost 350 V2 Slate</h5>
                <p class="card-text">Rp. 4300.000,-</p>
                <a href="#" class="btn btn-success" data-bs-target="#produk3" data-bs-toggle="modal">Beli</a>
              </div>
              <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>

            <div class="card mr-2 ml-2" style="width: 15rem;">
              <img src="https://d5ibtax54de3q.cloudfront.net/eyJidWNrZXQiOiJraWNrYXZlbnVlLWFzc2V0cyIsImtleSI6InByb2R1Y3RzLzk5MC80MGM0ZDQ0Yi1lNWMxLTRjMTgtYWYwYS00YjkxNWNiMTA0MWEuanBlZyIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6MTQwMH19fQ=="  alt="Freed">
              <div class="card-body">
                  <h5 class="card-text">Vans Old Skool Yacht Club</h5>
                <p class="card-text">Rp. 2.100.000,-</p>
                <a href="#" class="btn btn-success" data-bs-target="#produk4" data-bs-toggle="modal">Beli</a>
              </div>
              <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>  
      </div>   
      
      <div class="row mx-auto mt-5">  
        <div class="d-flex justify-content-around">
          <div class="card mr-2 ml-2" style="width: 15rem;">
              <img src="https://d5ibtax54de3q.cloudfront.net/eyJidWNrZXQiOiJraWNrYXZlbnVlLWFzc2V0cyIsImtleSI6InByb2R1Y3RzLzM3NjcxL2Q5MDhjODBiMDc4ZjFkZmNjMWU1MjM1ZTgxY2Y3Zjc4LnBuZyIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6MTQwMH19fQ=="  alt="Avanza">
              <div class="card-body">
                  <h5 class="card-text">Vans Style 36 Stranger Things</h5>
                <p class="card-text">Rp. 2.400.000 ,-</p>
                <a href="#" class="btn btn-success" data-bs-target="#produk5" data-bs-toggle="modal">Beli</a>
              </div>
              <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
          </div>

              <div class="card mr-2 ml-2" style="width: 15rem;">
                  <img src="https://d5ibtax54de3q.cloudfront.net/eyJidWNrZXQiOiJraWNrYXZlbnVlLWFzc2V0cyIsImtleSI6InByb2R1Y3RzLzE3MzkvZTdhOTI1YzAtZWZiZS00Y2UyLThkZDgtMGU1Y2IyODQzYjA3LmpwZWciLCJlZGl0cyI6eyJyZXNpemUiOnsid2lkdGgiOjE0MDB9fX0="  alt="Jazz";>
                  <div class="card-body">
                      <h5 class="card-text">Puma Thunder Spectra Grey Yellow</h5>
                    <p class="card-text">Rp. 3300.000,-</p>
                    <a href="#" class="btn btn-success" data-bs-target="#produk6" data-bs-toggle="modal">Beli</a>
                  </div>
                  <div class="card-footer">
                      <small class="text-muted">Last updated 5 mins ago</small>
                    </div>
              </div>

              <div class="card mr-2 ml-2" style="width: 15rem;">
              <img src="https://d5ibtax54de3q.cloudfront.net/eyJidWNrZXQiOiJraWNrYXZlbnVlLWFzc2V0cyIsImtleSI6InByb2R1Y3RzLzM2MzQxL2E3OGM2N2UxNWI3NzA1OTY3NTFhNjFmNmIyZjlmNjQ1LnBuZyIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6MTQwMH19fQ=="  alt="Freed">
              <div class="card-body">
                  <h5 class="card-text">Jordan 1 Low New Emerald</h5>
                <p class="card-text">Rp. 1.700.000,-</p>
                <a href="#" class="btn btn-success" data-bs-target="#produk1" data-bs-toggle="modal">Beli</a>
              </div>
              <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>

            <div class="card mr-2 ml-2" style="width: 15rem;">
              <img src="https://d5ibtax54de3q.cloudfront.net/eyJidWNrZXQiOiJraWNrYXZlbnVlLWFzc2V0cyIsImtleSI6InByb2R1Y3RzLzMzMTI2L2VmYjRjNzZjZTUxZTkxZGNiMzMwMjEwNjdhODJhN2ZjLnBuZyIsImVkaXRzIjp7InJlc2l6ZSI6eyJ3aWR0aCI6MTQwMH19fQ=="  alt="Freed">
              <div class="card-body">
                  <h5 class="card-text">adidas Adilette 22 Slides Black Grey</h5>
                <p class="card-text">Rp. 870.000,-</p>
                <a href="#" class="btn btn-success" data-bs-target="#produk1" data-bs-toggle="modal">Beli</a>
              </div>
              <div class="card-footer">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>    
      </div> 

      <div class="modal fade" id="produk1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Beli Sepatu Ini?</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Converse CT All-Star 70S Cdg Play Black</p>
              <p>Rp. 2500,0000</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <a href=pesan.php class="btn btn-warning">Beli Sekarang</a>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="produk2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Beli Sepatu Ini?</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Puma Clyde Def Jam White C</p>
              <p>Rp. 700,000</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-warning">Beli Sekarang</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="produk3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Beli Sepatu Ini?</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Adidas Yeezy Boost 350 V2 Slate</p>
              <p>Rp. 4300,000</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-warning">Beli Sekarang</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="produk4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Beli Sepatu Ini?</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Vans Old Skool Yacht Club</p>
              <p>Rp. 2100,000</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-warning">Beli Sekarang</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="produk5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Beli Sepatu Ini?</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Vans Style 36 Stranger Things</p>
              <p>Rp. 2400,0000</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-warning">Beli Sekarang</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="produk6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Beli Sepatu Ini?</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Puma Thunder Spectra Grey Yellow</p>
              <p>Rp. 3300,000</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-warning">Beli Sekarang</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="produk7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Beli Sepatu Ini?</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Jordan 1 Low New Emerald</p>
              <p>Rp. 1700,000</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-warning">Beli Sekarang</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="produk8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Beli Sepatu Ini?</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>adidas Adilette 22 Slides Black Grey</p>
              <p>Rp. 870,000</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-warning">Beli Sekarang</button>
            </div>
          </div>
        </div>
      </div>

      </div>
  </div> <br>

  <div class="lokasi">
    <center><h5>LOKASI TOKO KAMI</h5></center>
    <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15807.411242289078!2d110.36421191882351!3d-7.910440555907017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a553c9469cc55%3A0xd0ef5d333c260774!2sWarung%20Bu%20Yuli!5e0!3m2!1sid!2sid!4v1666857718899!5m2!1sid!2sid" 
      height="450" width="70%" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"></iframe></center>
      <br><br>
  </div>    

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

  <div class="copyright text-center text-black font-weight-bold pt-2"><p>Beli Sepatu by Muhammad Afif Aminuddin &copy; 2022</p></div>

  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>