<?php

$host = "localhost";
$user = "admin";
$pass = "admin";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$q = "SELECT * FROM itens";

$result = $conn->query($q);

$conn->close();

// UM RESULTADO
$item = $result->fetch_assoc();

// TODOS OS RESULTADOS

$itens = $result->fetch_all();

print_r($itens);
