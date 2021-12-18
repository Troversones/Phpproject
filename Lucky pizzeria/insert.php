<?php
include "Kapcs.php";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];

    $insert = mysqli_query($db,"INSERT INTO `teszt`(`nev`, `email`) values ('$name','$email')");

    if (!$insert) {
        echo mysqli_error($db);
    }
    else{
        echo "Sikeres feliratkozás!";   
    }
}



mysqli_close($db);
?>