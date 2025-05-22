<?php

$host = "localhost";
$user = "admin";
$pass = "admin";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

$table = "itens";
$nome = "Xicara";
$descricao = "Xicara da china de cor rosa";

$q = "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')";

$conn->query($q);
$conn->close();
