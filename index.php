<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Filmek felvezetése:</h1>
            <hr>
        </div>
        <div class="row content">
            <div class="col col-4">
                <b> Vonalkód: </b> <br>
                <b> FilmCím: </b> <br>
                <b> Kategória: </b> <br>
                <b> Nyelv: </b> <br>
                <b> Rendező1: </b> <br>
                <b> Rendező2: </b> <br>
                <b> Színész1: </b> <br>
                <b> Színész2: </b> <br>
                <b> Színész3: </b> <br>
                <b> Gyártó nemzet: </b> <br>
                <b> Adathordozó1: </b> <br>
                <b> Adathordozó2: </b> <br>
                <b> Adathordozó3: </b> <br>
                <b> Hossza: </b> <br>
                <b> Példány: </b> <br>
                
            </div>
            <div class="col col-8">
                <?php
                echo "<input type='text' name='vonalkod'> <br>";
                echo "<input type='text' name='filmcim'> <br>";
                generate_select("SELECT `kkod`, `megnev` FROM `kategoria`", "kategoria", "kkod", "megnev");
                generate_select("SELECT `nykod`, `megnev` FROM `nyelv`", "nyelv", "nykod", "megnev");
                generate_select("SELECT `rkod`, `nev` FROM `rendezo`", "rendezo", "rkod", "nev");
                generate_select("SELECT `rkod`, `nev` FROM `rendezo`", "rendezo", "rkod", "nev");
                generate_select("SELECT `szkod`, `nev` FROM `szinesz`", "szinesz", "szkod", "nev");
                generate_select("SELECT `szkod`, `nev` FROM `szinesz`", "szinesz", "szkod", "nev");
                generate_select("SELECT `szkod`, `nev` FROM `szinesz`", "szinesz", "szkod", "nev");
                generate_select("SELECT `gykod`, `megnev` FROM `gyarto`", "gyarto", "gykod", "megnev");
                generate_select("SELECT `akod`, `megnev` FROM `adathordozo`", "adathordozo", "akod", "megnevnev");
                generate_select("SELECT `akod`, `megnev` FROM `adathordozo`", "adathordozo", "akod", "megnevnev");
                generate_select("SELECT `akod`, `megnev` FROM `adathordozo`", "adathordozo", "akod", "megnevnev");
                echo "<input type='text' name='Hossz'> <br>";
                echo "<input type='text' name='Peldany'> <br>";
                ?>
            </div>
        </div>
    </div>
    <?php
    function generate_select($query, $variable_name, $key, $value)
    {
        include "kapcs.php";
        $eredm = mysqli_query($db, $query);
        if (!$eredm) return;
        $rowcount = mysqli_num_rows($eredm);
        echo "<select name='$variable_name'>";
        for ($i = 0; $i < $rowcount; $i++) {
            $row = mysqli_fetch_array($eredm);
            echo "<option value='$row[$key]'>$row[$value]</option>";
        }
        echo "</select> <br>";
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>