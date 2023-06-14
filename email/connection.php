<?php


$host = "localhost";
$user = "root";
$pass = "";
$dbName = "my_project";

$conn = new mysqli($host, $user, $pass, $dbName);


if ($conn->connect_error) {
    die("Connection Failed");
}
