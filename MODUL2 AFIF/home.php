<?php
$credit = "Afif_1202200320";

$car = [
    [
        "car" => "Avanza",
        "cost" => 150000,
        "img" => "https://imgcdn.oto.com/large/gallery/color/38/1654/toyota-avanza-color-856858.jpg"
    ],
    [
        "car" => "Honda Jazz",
        "cost" => 250000,
        "img" => "https://imgcdn.oto.com/medium/gallery/color/14/1799/honda-jazz-color-757261.jpg"
    ],
    [
        "car" => "Honda CRV",
        "cost" => 250000,
        "img" => "https://imgcdn.oto.com/large/gallery/color/14/1734/honda-cr-v-color-287484.jpg"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>afif</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
          <div class="collapse navbar-collapse" >
            <ul class="navbar-nav  mx-auto">
              <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="book.php">Booking</a>
              </li>  
            </ul>
          </div>
        </div>
      </nav>

      <div >
        <h4 class="d-flex justify-content-center m-3">
          WELCOME TO EAD RENT
        </h4>
      </div>
      
      <div class="container">
        <h6 class="d-flex justify-content-center bg-dark text-white p-2">
          Find your best car, here!
        </h6>
      </div>
  
      <div class="container">
            <div class="d-flex justify-content-around">
                <div class="col-3 m-1">
                    <div class="card shadow-sm rounded" >
                        <img src="<?php echo $car[0]["img"];?>" alt="">
                        <div class="m-3">
                            <p class="m-0" style="font-size: 20px"><?php echo $car[0]["car"];?></p>
                            <p class="m-0" style="color: grey">$<?php echo $car[0]["cost"];?> / hari</p>
                        </div>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: green;">8 Kursi</p>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: green;">Sliver</p>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: green;">Manual</p>
                        <hr class="m-0">
                        <div class="text-center bg-light">
                            <button class="m-2 btn btn-primary" type="submit"><a href="booking.php?img=<?= $car[0]["img"];?>&car=<?= $car[0]["car"];?>" style="color: white; text-decoration: none;">Book Now</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-3 m-1 ms-2 me-2">
                    <div class="card shadow-sm rounded" >
                        <img src="<?php echo $car[1]["img"];?>" alt="">
                        <div class="m-3">
                            <p class="m-0" style="font-size: 20px"><?php echo $car[1]["car"];?></p>
                            <p class="m-0" style="color: grey">$<?php echo $car[1]["cost"];?> / hari</p>
                        </div>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: green;">5 Kursi</p>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: green;">Putih</p>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: green;">Matic</p>
                        <hr class="m-0">
                        <div class="text-center bg-light">
                            <button class="m-2 btn btn-primary" type="submit"><a href="booking.php?img=<?= $car[1]["img"];?>&car=<?= $car[1]["car"];?>" style="color: white; text-decoration: none;">Book Now</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-3 m-1">
                    <div class="card shadow-sm rounded" >
                        <img src="<?php echo $car[2]["img"];?>" alt="">
                        <div class="m-3">
                        <p class="m-0" style="font-size: 20px"><?php echo $car[2]["car"];?></p>
                            <p class="m-0" style="color: grey">$<?php echo $car[2]["cost"];?> / hari</p>
                        </div>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: red;">5 Kursi</p>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: red;">Hitam</p>
                        <hr class="m-0"><p class="m-2" style="text-align: center; color: red;">Matic</p>
                        <hr class="m-0">
                        <div class="text-center bg-light">
                          <div class="card-body text-center" style="background-color:rgb(238, 238, 238);">
                            <button class="m-2 btn btn-primary" type="submit"><a href="booking.php?img=<?= $car[2]["img"];?>&car=<?= $car[2]["car"];?>" style="color: white; text-decoration: none;">Book Now</a></button>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <footer class="flex-bottom text-center pt-3 bg-light">
            <p style="text-align: center; color: lightslategray;">
                Created by: <?php echo $credit;?>
            </p>
        </footer>

</body>
</html>