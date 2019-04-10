<?php

$host = "localhost";
$user = "freekiwt_darood";
$pass = "daroodapp123";
$database = "freekiwt_daroodapp";

$con = mysqli_connect($host, $user, $pass, $database);

if(mysqli_connect_errno())
{
    die("Database connection error. " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")");
}

?>