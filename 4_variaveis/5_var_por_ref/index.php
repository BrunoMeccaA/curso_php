<?php

$x = 10;

$y =& $x;

echo $x;
echo "<br>";
echo $y;
echo "<br>";

$y = 15;

echo "Atribuição apos ref";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$y = 20;

echo "Atribuição apos ref 2";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$nome = "Matheus";

$nome2 =& $nome;

echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";

$nome2 = "Joao";

?>