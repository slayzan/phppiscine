<?php

$servername = "localhost:8080";
$dBusername = "root";
$dBpassword = "";
$dBname = "loginsystem";

$conn = mysqli_connect($servername, $dBusername, $dBpassword, $dBname);

if (!$conn)
{
    die("Connection failed ".mysqli_connect_error())
}