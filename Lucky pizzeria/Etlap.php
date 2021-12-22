<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title></title>
</head>

<body>
    <div class="container hatterclass">
        <!-- BANNER -->
        <div class="banner">
        </div>

        <!-- CONTAINER -->

        <div class="row navrow">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href=""><img src="kepek/logofasz.png" class="simage img-fluid" alt="anyas"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="">Kezdőlap</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="Etlap.php">Étlap</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Kapcsolat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Nyeremeny.php">Nyeremény</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row navrow">
            <h1 class="my-5" id="felsocim"><b>Szicília - Étlap</b></h1>
            <hr style="color: white;">
        </div>

        <!-- ROW 2 -->
        <div class="row akciosigen">
            <div class="col col-8 leftrow">
                <h2 class="feher">Akciós ajánlatok</h2>
                <br>
                <table class="table-responsive">
                    <tr>
                        <td><img src="kepek/pulyeszxd.jpg" class="akckep" alt=""></td>
                        <td><img src="kepek/4sajt.jpg" class="akckep" alt=""></td>
                    </tr>
                    <tr>
                        <td><br>
                            <p class="feher"><b> Pulykás pizza </b></p>
                            <p class="feher"> 2390 Ft <s class="piros">3250 Ft</s> </p>
                        </td>
                        <td><br>
                            <p class="feher"><b> 4sajtos pizza </b></p>
                            <p class="feher"> 2130 Ft <s class="piros">2900 Ft</s> </p>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="kepek/vega.jpg" class="akckep" alt=""></td>
                        <td><img src="kepek/videki.jpg" class="akckep" alt=""></td>
                    </tr>
                    <tr>
                        <td><br>
                            <p class="feher"><b> Vega pizza </b></p>
                            <p class="feher"> 1750 Ft <s class="piros">2450 Ft</s> </p>
                        </td>
                        <td><br>
                            <p class="feher"><b> Vidéki pizza </b></p>
                            <p class="feher"> 1870 Ft <s class="piros">2660 Ft</s> </p>
                        </td>
                    </tr>
                </table>


                <br>


            </div>
            <div class="col col-4 rightrow">
                <br>
                <div class="col">
                    <form method="GET">
                        <button class="btn btn-warning" name="submit" type="submit" id="button-addon2"><b>Pizzák</b></button> <br> <br>
                        <button class="btn btn-warning" name="submit1" type="submit" id="button-addon2"><b>Frissen sültek</b></button> <br> <br>
                        <button class="btn btn-warning" name="submit2" type="submit" id="button-addon2"><b>Saláták</b></button> <br> <br>
                        <button class="btn btn-warning" name="submit3" type="submit" id="button-addon2"><b>Köretek</b></button> <br> <br>
                        <button class="btn btn-warning" name="submit4" type="submit" id="button-addon2"><b>Desszertek</b></button> <br> <br>
                        <button class="btn btn-warning" name="submit5" type="submit" id="button-addon2"><b>Italok</b></button> <br> <br>
                        <img src="kepek/nyitvatartas.png" alt="nyitvatartas">
                    </form>
                </div>

            </div>



        </div>
        <div class="row">
            <?php

            if (isset($_GET["submit"])) {

                require('Kapcs.php');

                $query = 'SELECT * FROM etlap WHERE id LIKE "ap%"';
                $eredm = mysqli_query($db, $query);
                echo "<br>";
                echo "<div class='table-responsive'>";
                echo "<table id='BOTOND' class='table-dark tablaxd'>
<thead>
<tr>
<th scope='col'>Pizza</th>
<th scope='col'>Ár</th>
<th scope='col'>Feltét</th>
<th scope='col'>Előnézet</th>
<th scope='col'>Méret</th>
</tr>
</thead>";
                while ($sor = mysqli_fetch_array($eredm)) {
                    echo "<tr>";
                    echo "<td>" . $sor["megnev"] . "</td><td>" . $sor["ar"] . " Ft</td><td>" . $sor["leiras"] . "</td><td><img class='tablazatkep' src='kepek/" . $sor["kep"] . "'></td><td>" . $sor["meret"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
            }

            if (isset($_GET["submit1"])) {

                require('Kapcs.php');

                $query = 'SELECT * FROM etlap WHERE id LIKE "hp%"';
                $eredm = mysqli_query($db, $query);
                echo "<br>";
                echo "<div class='table-responsive'>";
                echo "<table id='BOTOND' class='table-dark tablaxd'>
<thead>
<tr>
<th scope='col'>Pizza</th>
<th scope='col'>Ár</th>
<th scope='col'>Feltét</th>
<th scope='col'>Előnézet</th>
<th scope='col'>Méret</th>
</tr>
</thead>";
                while ($sor = mysqli_fetch_array($eredm)) {
                    echo "<tr>";
                    echo "<td>" . $sor["megnev"] . "</td><td>" . $sor["ar"] . " Ft</td><td>" . $sor["leiras"] . "</td><td><img class='tablazatkep' src='kepek/" . $sor["kep"] . "'></td><td>" . $sor["meret"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
            }

            if (isset($_GET["submit2"])) {

                require('Kapcs.php');

                $query = 'SELECT * FROM etlap WHERE id LIKE "ep%"';
                $eredm = mysqli_query($db, $query);
                echo "<br>";
                echo "<div class='table-responsive'>";
                echo "<table id='BOTOND' class='table-dark tablaxd'>
<thead>
<tr>
<th scope='col'>Pizza</th>
<th scope='col'>Ár</th>
<th scope='col'>Feltét</th>
<th scope='col'>Előnézet</th>
<th scope='col'>Méret</th>
</tr>
</thead>";
                while ($sor = mysqli_fetch_array($eredm)) {
                    echo "<tr>";
                    echo "<td>" . $sor["megnev"] . "</td><td>" . $sor["ar"] . " Ft</td><td>" . $sor["leiras"] . "</td><td><img class='tablazatkep' src='kepek/" . $sor["kep"] . "'></td><td>" . $sor["meret"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
            }

            if (isset($_GET["submit3"])) {

                require('Kapcs.php');

                $query = 'SELECT * FROM etlap WHERE id LIKE "ip%"';
                $eredm = mysqli_query($db, $query);
                echo "<br>";
                echo "<div class='table-responsive'>";
                echo "<table id='BOTOND' class='table-dark tablaxd'>
<thead>
<tr>
<th scope='col'>Pizza</th>
<th scope='col'>Ár</th>
<th scope='col'>Feltét</th>
<th scope='col'>Előnézet</th>
<th scope='col'>Méret</th>
</tr>
</thead>";
                while ($sor = mysqli_fetch_array($eredm)) {
                    echo "<tr>";
                    echo "<td>" . $sor["megnev"] . "</td><td>" . $sor["ar"] . " Ft</td><td>" . $sor["leiras"] . "</td><td><img class='tablazatkep' src='kepek/" . $sor["kep"] . "'></td><td>" . $sor["meret"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
            }

            if (isset($_GET["submit4"])) {

                require('Kapcs.php');

                $query = 'SELECT * FROM etlap WHERE id LIKE "egp%"';
                $eredm = mysqli_query($db, $query);
                echo "<br>";
                echo "<div class='table-responsive'>";
                echo "<table id='BOTOND' class='table-dark tablaxd'>
                    <thead>
                    <tr>
                    <th scope='col'>Pizza</th>
                    <th scope='col'>Ár</th>
                    <th scope='col'>Feltét</th>
                    <th scope='col'>Előnézet</th>
                    <th scope='col'>Méret</th>
                    </tr>
                    </thead>";
                while ($sor = mysqli_fetch_array($eredm)) {
                    echo "<tr>";
                    echo "<td>" . $sor["megnev"] . "</td><td>" . $sor["ar"] . " Ft</td><td>" . $sor["leiras"] . "</td><td><img class='tablazatkep' src='kepek/" . $sor["kep"] . "'></td><td>" . $sor["meret"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
            }

            if (isset($_GET["submit5"])) {

                require('Kapcs.php');

                $query = 'SELECT * FROM etlap WHERE id LIKE "gt%"';
                $eredm = mysqli_query($db, $query);
                echo "<br>";
                echo "<div class='table-responsive'>";
                echo "<table id='BOTOND' class='table-dark tablaxd'>
                    <thead>
                    <tr>
                    <th scope='col'>Pizza</th>
                    <th scope='col'>Ár</th>
                    <th scope='col'>Feltét</th>
                    <th scope='col'>Előnézet</th>
                    <th scope='col'>Méret</th>
                    </tr>
                    </thead>";
                while ($sor = mysqli_fetch_array($eredm)) {
                    echo "<tr>";
                    echo "<td>" . $sor["megnev"] . "</td><td>" . $sor["ar"] . " Ft</td><td>" . $sor["leiras"] . "</td><td><img class='tablazatkep' src='kepek/" . $sor["kep"] . "'></td><td>" . $sor["meret"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
            }
            ?>
        </div>

        <br>
        <!-- FOOTER -->
        <footer class="bg-dark text-white pt-3 pb-2">
            <div class="container text-center text-md-left">
                <div class="row text-center text-md-left">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h2 class="text-uppercase mb-4 font-weight-bold text-warning">Kapcsolat</h5>
                            <ul>
                                <li><img src="https://img.icons8.com/external-semi-solid-geotatah/25/000000/external-brand-corporate-image-and-brand-management-semi-solid-geotatah.png" /> Szicília Pizzéria</li>
                                <li><img src="https://img.icons8.com/material-outlined/24/000000/domain.png" />
                                    Szicilia@Pizzéria.hu
                                </li>
                                <li><img src="https://img.icons8.com/material-rounded/24/000000/phone--v1.png" /> +36-1-555-5555</li>

                            </ul>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h2 class="text-uppercase mb-4 font-weight-bold text-warning">Nyitvatartás</h2>
                        <p>Héköznap 10:00 - 23:00 <br> Szombat 10:00 - 23:00 <br> Vasárnap 11:00 - 22:30 <br></p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xd-2 mx-auto mt-3">
                        <p><br> © 2021 SZICILIA MAGYARORSZÁG <br>
                            MINDEN JOG FENNTARTVA.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- BOOTSTRAP SCRIPT INSERT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>