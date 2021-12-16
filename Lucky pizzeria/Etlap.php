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
    <!-- NAVBAR TEMPLATE
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link active" href="index.html">Kezdőlap <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Étlap</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Akciók</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kapcsolat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nyeremény</a>
                </li>
            </ul>
        </div>
    </nav>
    -->

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
        </div>
        <!-- ROW 2 -->
        <div class="row">
            <div class="col col-8">
                <table class="table thedit table-hover table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Név</th>
                            <th scope="col">Feltét</th>
                            <th scope="col">Ár(méret szerint)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td></td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col col-4">
                <table>
                    <tr>
                        <th colspan="4" class="thedit"></th>
                    </tr>
                </table>
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
            <h2>Zámbó Jimmy merch sorsolás</h2>
            <p> Iratkozzon fel most!</p>
            <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="button-addon2" id="inputValue">
                <button class="btn btn-warning" type="submit" id="button-addon2"><b>Feliratkozás</b></button>
            </div>
        </div>
    </footer>
    <!-- BOOTSTRAP SCRIPT INSERT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>