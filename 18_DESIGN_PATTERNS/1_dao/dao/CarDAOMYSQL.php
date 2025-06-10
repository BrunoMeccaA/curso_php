<?php

include_once("models/Car.php");

class CarDAO implements CarDAOInterface
{
    private $conn;
    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function findAll()
    {
        $stmt = $this->conn->query("SELECT * FROM cars");
        $cars = $stmt->fetchAll(PDO::FETCH_CLASS, "Car");
        return $cars;
    }

    public function create(Car $car)
    {
        $stmt = $this->conn->prepare("INSERT INTO cars (brand, km, color) VALUES (:brand, :km, :color)");
        $stmt->bindParam(':brand', $car->getBrand());
        $stmt->bindParam(':km', $car->getKm());
        $stmt->bindParam(':color', $car->getColor());
        $stmt->execute();
    }
}
