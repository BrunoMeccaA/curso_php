<?php

$host = "localhost";
$user = "admin";
$pass = "admin";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);
// Verifica se houve erro na conexão
if ($conn->connect_error) {
    echo "Erro de conexão! <br>";
    echo "Erro: " . $conn->connect_error;
}
