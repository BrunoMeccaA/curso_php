<?php

$host = "localhost";
$db = "cursophp";
$user = "admin";
$pass = "admnin";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$id = 5;

$stmt = $conn->prepare("SELECT * FGROM itens WHERE id > :id");

$stmt->bindParam(":id", $id);

$stmt->execute();

$data = $stmt->fecth(PDO::FETCH_ASSOC);

print_r($data);

$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($itens);
