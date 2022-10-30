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

      <div class="container mt-4">
        <h6 class="text-center p-2 bg-dark text-white">
            Bawa Mobil pilihanmu
        </h6>
      </div>

      <div class="container card shadow-sm">
            <div class="d-flex justify-content-around">
                <div class="col-4 ps-5 pe-5 d-flex align-items-center">
                    <?php
                        if(isset($_GET["img"])){
                            ?><img class="" width="100%" src="<?= $_GET["img"];?>" alt="">
                    <?php
                        }else{
                            ?><img width="100%" src="https://imgcdn.oto.com/large/gallery/color/38/1654/toyota-avanza-color-856858.jpg" alt="">
                    <?php }?>
                </div>
                <div class="col-6 ps-5 pe-5">
                    <ul type="none">
                        <form action="mybook.php" method="post">
                            <li class="m-1">
                                <label for="nama">Name</label><br>
                                <input class="form-control" type="text" name="nama" id="nama" value="<?php echo $credit?>" readonly>
                            </li>
                            <li class="m-1">
                                <label for="event">Book Date</label><br>
                                <input class="form-control" type="date" name="event" id="event">
                            </li>
                            <li class="m-1">
                                <label for="time">Start Time</label><br>
                                <input class="form-control" type="time" name="time" id="time">
                            </li>
                            <li class="m-1">
                                <label for="day">Duration</label><br>
                                <input class="form-control" type="number" name="day" id="day" min="1" value="1">
                            </li>
                            <li class="m-1">
                                <label for="mobil">Car Type</label>
                                    <select class="form-select" name="mobil" id="mobil">
                                        <option selected>Choose...</option>
                                        <?php foreach ($car as $cr):?>
                                            <?php
                                                if($cr["car"]==$_GET["car"]){
                                                    ?><option selected="selected" value="<?= $cr["car"];?>"><?= $cr["car"];?></option>
                                            <?php
                                                }else{
                                                    ?><option value="<?= $cr["car"];?>"><?=$cr["car"];?></option>
                                            <?php }?>
                                        <?php endforeach; ?>
                                    </select>
                            </li>
                            <li class="m-1">
                                <label for="phone">Phone Number</label><br>
                                <input class="form-control" type="number" name="phone" id="phone" min="0">
                            </li>
                            <li class="m-1">
                                <label for="service">Add Service(s)</label><br>
                                <input class="form-check-input m-1" type="checkbox" name="harga[]" value="Health Protocol" id="hp"><label class="form-check-label" for="hp">Health Protocol / Rp 25000</label><br>
                                <input class="form-check-input m-1" type="checkbox" name="harga[]" value="Driver" id="supir"><label class="form-check-label" for="supir">Driver / Rp 100000</label><br>
                                <input class="form-check-input m-1" type="checkbox" name="harga[]" value="Fuel Filled" id="ff"><label class="form-check-label" for="ff">Fuel Filled / Rp 350000</label><br>
                            </li>
                            <li class="text-center">
                                <button class="btn btn-warning justify-content-around" type="submit">Book</button>
                            </li>
                        </form>
                    </ul>
                </div>
            </div>
        </div><br><br><br>

        <footer class="flex-bottom text-center bg-light">
            <p style="text-align: center; color: lightslategray;">
                Created by: <?php echo $credit;?>
            </p>
        </footer>

</body>
</html>      