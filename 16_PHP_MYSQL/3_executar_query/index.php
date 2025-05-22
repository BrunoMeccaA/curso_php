<?php

$host = "localhost";
$user = "admin";
$pass = "admin";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// AULA

$sql = "SELECT * FROM itens";

$result = $conn->query($sql);
print_r($result);

$conn->close();
