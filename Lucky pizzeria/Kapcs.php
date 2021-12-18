<?php
    $db = mysqli_connect("localhost","root","","pizzeria");

    if(!$db)
    {
        die("Failed to connect!" . mysqli_connect_error());
    }
?>
