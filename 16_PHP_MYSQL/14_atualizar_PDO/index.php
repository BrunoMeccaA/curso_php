<?php

$host = "localhost";
$db = "cursophp";
$user = "admin";
$pass = "admin";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

$id = 5;
$nome = "Teclado Microsoft";
$descricao = "este teclado é novo";

$stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

$stmt->bindParam(':id', $id);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':descricao', $descricao);

$stmt->execute();
