<?php
if(isset($_GET['nome'])){
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
} else {
    $nome = "Não Informado";
    $idade = "Não Informado";
}

?>

<h1>O seu nome é <?= $nome ?>, e você tem <?= $idade ?> anos</h1>