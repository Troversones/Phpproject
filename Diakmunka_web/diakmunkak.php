<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="diakmunka.css">
    <script src="hehealgohol.js"></script>
    <title>Diakmunkak</title>
</head>

<body>
    <div id="container">
        <header>

        </header>
        <div id="menu">
            <div id="menu">
                <table>
                    <tr>
                        <td><a href="index.html">Kezdőoldal</a></td>
                        <td><a href="diakmunkak.php">Diákmunkák</a></td>
                        <td><a href="">Cégek</a></td>
                        <td><a href="regisztracio.php">Regisztráció</a></td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="content">
            <img src="kepek/diakmunka6.jfif" alt="xd" class="small-img">
            <img src="kepek/diakmunka7.png" alt="asd" class="small-img">
            <img src="kepek/diakmunka1.jpg" alt="igen" class="small-img">
            <img src="kepek/diakmunka2.jpg" alt="nem" class="small-img">
            <?php
                require("connect.php");
                dbcon();
                $query = "SELECT * FROM munka";
                $eredm = mysqli_query($con, $query);

                echo "<table border='1'>
                        <tr><th>Munkakód</th><th>Név</th><th>munkaadókód</th>
                        <th>Kezdet</th>
                        <th>Fizetés</th><th>Szukséges</th> <th>Kép</th>";
                while ($sor = mysqli_fetch_array($eredm)) {
                    echo "<tr>";
                    echo "<td>" . $sor['munkakod'] . "</td>
                            <td>" . $sor['megnev'] . "</td>
                            <td>" . $sor['munkaadokod'] . "</td>
                            <td>" . $sor['kezdet'] . "</td>
                            <td>" . $sor['fizetes'] . "</td>
                            <td>" . $sor['szukseges'] . "</td>
                            <td>" . "<img class='small-img' src='kepek/" . $sor['kep'] ."'></td>";
                }
                echo "</table>";
            ?>
        </div>
        <div id="footer">
            <P>6900, Makó Posta utca 6.</p>
            <p> 06 (70) 555-5555 </p>
            <p> Nyitvatartás rend hétfőtől péntekig 10:00-18:00 óráig</P>
            <p id="gangstashit"></p>
        </div>
    </div>
    <script src="hehealgohol.js"></script>
</body>

</html>