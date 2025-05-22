<?php

$host = "localhost";
$user = "admin";
$pass = "admin";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

//$q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

$q = "DROP TABLE teste";

$conn->query($q);

$conn->close();
