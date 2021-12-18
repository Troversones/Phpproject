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
    <?php
    include "Kapcs.php";

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $name = $_POST['name'];

        $insert = mysqli_query($db, "INSERT INTO `teszt`(`nev`, `email`) values ('$name','$email')");

        if (!$insert) {
            echo mysqli_error($db);
        }
        else{
            
        }
    }

    mysqli_close($db);
    ?>
    <!-- BANNER -->
    <div class="banner">

    </div>

    <!-- CONTAINER -->
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.html"><img src="kepek/logofasz.png" class="simage img-fluid" alt="anyas"></a>
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
            <hr style="color: white;">
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col col-8">
                <br><br><br>
                <h2 style="color: white;">Irakozzon fel most, hogy nyerjen egy üdítő ital kupont.</h2>
                <p style="color: white;"> Bárhol beváltható egy bármilyen ingyenes üditő italra! </p>
            </div>
            <div class="col col-4">
                <!--- POST BUTTONS -->
                <form method="POST" name="form1">
                    <button class="btn btn-warning" name="submit" type="submit" onclick="ValidateEmail(document.form1.email)" id="button-addon2"><b>Feliratkozás</b></button>
                    <br>
                    <hr>
                    <div class="input-group mb-3">
                        <input type="text" name="email" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="button-addon2" id="inputValue" Required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Név" aria-label="nev" aria-describedby="button-addon2" id="namexd" Required>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- FOOTER -->
    <footer class="row">
        <div class="col-sm-6 col-lg-4 offset-lg-1">
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
            <br>
            © 2021 BESPECKLE MAGYARORSZÁG <br>
            MINDEN JOG FENNTARTVA.
        </div>
    </footer>

    <!-- BOOTSTRAP SCRIPT INSERT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>