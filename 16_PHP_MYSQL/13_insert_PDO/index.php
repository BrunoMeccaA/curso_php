<?php

$host = "localhost";
$db = "cursophp";
$user = "admin";
$pass = "admin";


$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");

$nome = "Monitor";
$descricao = "Monitor 24 polegadas";

$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();
