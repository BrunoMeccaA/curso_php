<?php

$host = "localhost"; // (servidor) Host do banco de dados;
$user = "admin"; // (usuário) Usuário do banco de dados;
$pass = "admin"; // (senha) Senha do banco de dados;
$db = "cursophp"; // (banco de dados) ou (Data Base) Nome do banco de dados;


// Com variaveis
$conn = new mysqli($host, $user, $pass, $db);

// Sem Variáveis
// $conn = new mysqli("localhost", "admin", "admin", "cursophp");
