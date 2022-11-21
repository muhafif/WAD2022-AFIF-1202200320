<?php
require '../config/connect.php';

$query = "SELECT * FROM showroom_afif";
$result = mysqli_query($koneksi, $query);

function onClick($result)
{
  if (mysqli_num_rows($result) > 0) {
    header("Location: ./pages/myitem.php");
  } else {
    header("Location: ./pages/myitem.php");
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home | Afif_1202200320</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include 'asset/style/modul3.css'; ?>
  </style>
</head>

<body>
  <!-- Nav -->
  <nav class="navbar navbar-expand-lg bg-warning">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav gap-3">
          <a class="nav-link" style="color: white;" href="#home">Home</a>
          <a class="nav-link" href="<?php if (mysqli_num_rows($result) > 0) {
                                      echo "./pages/myitem.php";
                                    } else {
                                      echo "./pages/add.php";
                                    } ?>">My Car</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Nav End -->

  <section id="home">
    <div class="container">
      <div class="d-flex gap-5 utama justify-content-center align-items-center">
        <div>
          <h1>Selamat Datang Di<br /> Show Room Apipunk</h1>
          <p class="mt-3">Showroom Apipunk adalah showroom mobil terpecaya.<br />Berlokasi di daerah Jogja </p>
          <a href="<?php if (mysqli_num_rows($result) > 0) {
                      echo "./pages/myitem.php";
                    } else {
                      echo "./pages/add.php";
                    } ?>" class="button btn-primary">My Car</a>
          <div class="d-flex align-items-center gap-5 mt-5">
            <img src="<?php echo "../asset/images/logo-ead.png" ?>" alt="logoead" style="width:100px;">
            <p style="margin-top: 20px; font-size:14px;">Afif_1202200320</p>
          </div>
        </div>
        <img src="<?php echo "../asset/images/mobil.jpeg" ?>" alt="mobil">
      </div>
    </div>
  </section>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>