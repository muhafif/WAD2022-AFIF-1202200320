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

      <div class="container" style="text-align: center;">
            <div class="m-2">
            <p class="m-0" style="font-size:30px">Thank you <?php echo $credit;?> for Reserving</p>
                <p class="m-0" style="font-size:25px">Please double check your reservation detail</p>
            </div>
        </div>
        
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Booking Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Check-in</th>
                        <th scope="col">Check-out</th>
                        <th scope="col">Car Type</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Add Service(s)</th>
                        <th scope="col">Total Price</th>
                    </tr>
                </thead>
                <tbody class="bg-light">
                    <tr>
                        <td><?php echo "1202204067";?></td>
                        <td><?php echo $credit; ?></td>
                        <td><?php echo $event;?></td>
                        <td><?php echo $time;?></td>
                        <td><?php echo $mobil;?></td>
                        <td><?php echo $pone;?></td>
                        <td>
                            <?php
                                if (isset($_POST["harga"])){
                                    foreach ($_POST["harga"] as $pr ){
                                        echo "<li>$pr</li>";
                                    }
                                }
                                else{
                                    echo "no service";
                                }
                            ?>
                        </td>
                        <td>
                            <?php
                                if ($_POST["mobil"] == $car[0]["car"]){
                                    echo ($_POST["day"]*$car[0]["cost"])+$price;
                                }
                                else if ($_POST["mobil"] == $car[1]["car"]){
                                    echo ($_POST["day"]*$car[1]["cost"])+$price;
                                }
                                else if ($_POST["mobil"] == $car[2]["car"]){
                                    echo ($_POST["day"]*$car[2]["cost"])+$price;
                                }
                                else{
                                    echo "0";
                                }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <footer class="fixed-bottom text-center pt-3 bg-light">
            <p style="text-align: center; color: lightslategray;">
                Created by: <?php echo $credit;?>
            </p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>