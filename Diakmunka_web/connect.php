<?php

function dbcon()
{
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "diakmunka";
global $con;
if(!$con= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

die("Failed to connect!");

}
$con -> set_charset("utf8");
}
?>