<?php

$host = "localhost";
$user = "admin";
$pass = "admin";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// Verifica erros de conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// ID  do item que queremos buscar
$id = 4;

// Preparando a consulta
$stmt = $conn->prepare(("SELECT * FROM itens WHERE id > ?"));

// Vinculando o parâmetro (i = inteiro)
$stmt->bind_param("i", $id);

// Executa a consulta
$stmt->execute();

// Obtendo o resultado
$result = $stmt->get_result();

// Verifica se o resultado não está vazio
$data = $result->fetch_all();

print_r($data);
