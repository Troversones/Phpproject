<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="base.js" type="text/javascript"></script>
    <title>Nyeremeny</title>
</head>

<body>

    <!-- BANNER -->
    <div class="banner">

    </div>

    <!-- CONTAINER -->
    <div class="container">
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
                                <a class="nav-link" href="Etlap.php">Étlap</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Kapcsolat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="Nyeremeny.php">Nyeremény</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Title Row -->
        <div class="row">
            <h1 class="my-5" id="felsocim"><b>Bespeckle - Nyeremények</b></h1>
            <hr class="feher">
        </div>


        <!-- Content Row -->
        <div class="row">
            <div class="col col-8">
                <br><br><br>
                <h2 class="feher">Irakozzon fel most, hogy nyerjen egy üdítő ital kupont.</h2>
                <p class="feher"> Bárhol beváltható egy bármilyen ingyenes üditő italra! </p>
                <br>
                <hr class="feher">
                <h3 class="feher">Melyik ország nem létezik az alábbiak közül?</h3><br><br>
                <form method="POST" name="form1">
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="valasz1" id="btnradio1" autocomplete="off" value='Románia' checked>
                        <label class="btn btn-outline-primary" for="btnradio1">Románia</label>

                        <input type="radio" class="btn-check" name="valasz1" id="btnradio2" autocomplete="off" value='Kína'>
                        <label class="btn btn-outline-primary" for="btnradio2">Kína</label>

                        <input type="radio" class="btn-check" name="valasz1" id="btnradio3" autocomplete="off" value='Magyarország'>
                        <label class="btn btn-outline-primary" for="btnradio3">Magyarország</label>
                    </div>
                    <!--</form>--->

                    <br>
                    <br>
                    <h3 class="feher">Melyik országból származik a margharitta pizza?</h3><br><br>
                    <!---<form method="POST" action="">--->
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="valasz2" id="btnradio4" autocomplete="off" value='Olaszország' checked>
                        <label class="btn btn-outline-primary" for="btnradio4">Olaszország</label>

                        <input type="radio" class="btn-check" name="valasz2" id="btnradio5" autocomplete="off" value='Nigéria'>
                        <label class="btn btn-outline-primary" for="btnradio5">Nigéria</label>

                        <input type="radio" class="btn-check" name="valasz2" id="btnradio6" autocomplete="off" value='Afganisztán'>
                        <label class="btn btn-outline-primary" for="btnradio6">Afganisztán</label>
                    </div>
                    <!--</form>--->
                    <br>
                    <hr class="feher">

            </div>
            <br>
            <br>
            <div class="col col-4">
                <!--- POST BUTTONS -->

                <button class="btn btn-warning" name="submit" type="submit" onclick="ValidateEmail(document.form1.email)" id="button-addon2"><b>Feliratkozás</b></button>
                <br>
                <hr>
                <div class="input-group mb-3">
                    <input type="text" name="email" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="button-addon2" id="inputValue" Required>
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Név" aria-label="nev" aria-describedby="button-addon2" id="namexd" Required>
                </div>
                <p id="elso"></p>
                <p id="masodik"></p>
                </form>
            </div>

        </div>

    </div>

    <!-- FOOTER -->
    <footer class="row">
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
    <?php
    include "Kapcs.php";

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $valasz1 = "asd1";
        $valasz2 = "asd2";
        if ($_POST['valasz1'] == 'Románia') {
            $valasz1 = "Románia";
        }
        else if ($_POST['valasz1'] == 'Kína') {
            $valasz1 = "Kína";
        }
        else{
            $valasz1 = "Magyarország";
        }

        if ($_POST['valasz2'] == 'Olaszország') {
            $valasz2 = "Olaszország";
        }
        else if($_POST['valasz2'] == 'Nigéria'){
            $valasz2 = "Nigéria";
        }
        else{
            $valasz2 = "Afganisztán";
        }

        $insert = mysqli_query($db, "INSERT INTO `nyeremeny`(`nev`, `email`,`valasz1`,`valasz2`) values ('$name','$email','$valasz1','$valasz2')");

        if (!$insert) {
            echo mysqli_error($db);
        } else {
        }
    }


    ?>
</body>

</html>