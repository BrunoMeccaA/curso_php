<?php

$host = "localhost";
$user = "admin";
$pass = "admin";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$id = 12;

$stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

$nome = "Sofa";
$descricao = "Sofa novo";

$stmt->bind_param("ssi", $nome, $descricao, $id);

$stmt->execute();

if ($stmt->error) {
    echo "Erro: " . $stmt->error;
}
