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

    <!-- BANNER -->
    <div class="banner">
    </div>
    
    <!-- CONTAINER -->
    <div class="container my-5">
        <div class="row">
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
        <div class="row">
            <h1 class="my-5" id="felsocim"><b>Bespeckle - Étlap</b></h1>
            <hr style="color: white;">
        </div>

        <!-- ROW 2 -->
        <div class="row">
            <form method="GET">
                <button class="btn btn-warning" name="submit" type="submit" id="button-addon2"><b>Alap pizzák</b></button>
                <button class="btn btn-warning" name="submit1" type="submit" id="button-addon2"><b>Hagyományos Pizzák</b></button>
                <button class="btn btn-warning" name="submit2" type="submit" id="button-addon2"><b>Extra pizzák</b></button>
                <button class="btn btn-warning" name="submit3" type="submit" id="button-addon2"><b>Ínyenc pizzák</b></button>
                <button class="btn btn-warning" name="submit4" type="submit" id="button-addon2"><b>Egyszerűbb pizzák</b></button>
                <button class="btn btn-warning" name="submit5" type="submit" id="button-addon2"><b>Gyros tálak</b></button>
                <br>
                <br>
            </form>
            <?php

            if (isset($_GET["submit"])) {

                require('Kapcs.php');

                $query = 'SELECT * FROM etlap WHERE id LIKE "ap%"';
                $eredm = mysqli_query($db, $query);
                echo "<br>";

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
            }

            if (isset($_GET["submit1"])) {

                require('Kapcs.php');

                $query = 'SELECT * FROM etlap WHERE id LIKE "hp%"';
                $eredm = mysqli_query($db, $query);
                echo "<br>";

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
            }

            if (isset($_GET["submit2"])) {

                require('Kapcs.php');

                $query = 'SELECT * FROM etlap WHERE id LIKE "ep%"';
                $eredm = mysqli_query($db, $query);
                echo "<br>";

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
            }

            if (isset($_GET["submit3"])) {

                require('Kapcs.php');

                $query = 'SELECT * FROM etlap WHERE id LIKE "ip%"';
                $eredm = mysqli_query($db, $query);
                echo "<br>";

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
            }

            if (isset($_GET["submit4"])) {

                require('Kapcs.php');

                $query = 'SELECT * FROM etlap WHERE id LIKE "egp%"';
                $eredm = mysqli_query($db, $query);
                echo "<br>";

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
            }

            if (isset($_GET["submit5"])) {

                require('Kapcs.php');

                $query = 'SELECT * FROM etlap WHERE id LIKE "gt%"';
                $eredm = mysqli_query($db, $query);
                echo "<br>";

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
            }
            ?>

        </div>

    </div>
    
    <!-- FOOTER -->
    <footer class="row mt-3">
        <div class="col-sm-6 col-lg-4 offset-lg-1">
            <br>
            <h2>Kapcsolat</h2>
            <ul>
                <li><img src="https://img.icons8.com/external-semi-solid-geotatah/25/000000/external-brand-corporate-image-and-brand-management-semi-solid-geotatah.png" /> Bespeckle Pizzéria</li>
                <li><img src="https://img.icons8.com/material-outlined/24/000000/domain.png" />
                    Bespeckle@Pizzéria.hu
                </li>
                <li><img src="https://img.icons8.com/material-rounded/24/000000/phone--v1.png" /> +36-1-555-5555</li>

            </ul>
        </div>
        <div class="col-sm-6 col-lg-4 offset-lg-1">
            <br>
            Nyitvatartás -- Héköznap 8:00 - 19:30 <br> Szombat 12:00 - 19:30 <br> Vasárnap - Zárva <br> <br>
            © 2021 BESPECKLE MAGYARORSZÁG <br>
            MINDEN JOG FENNTARTVA.
        </div>
    </footer>
    <!-- BOOTSTRAP SCRIPT INSERT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>