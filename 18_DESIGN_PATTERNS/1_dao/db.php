<?php

$db = "daotest";
$host = "localhost";
$user = "admin";
$pass = "admin";

$conn = new PDO("mysql:dbname=$db;host=$host", $user, $pass);
