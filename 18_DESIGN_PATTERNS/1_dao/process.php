<?php

include_once("db.php");
include_once("dao/CarDAOMYSQL.php");

$carDAO = new CarDAO($conn);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $brand = $_POST["brand"];
    $km = $_POST["km"];
    $color = $_POST["color"];

    $newCar = new Car();
    $newCar->setBrand($brand);
    $newCar->setKm($km);
    $newCar->setColor($color);

    $carDAO->create($newCar);
    header("Location: index.php");
    exit();
}
