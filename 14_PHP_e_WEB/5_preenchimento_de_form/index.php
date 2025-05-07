<?php

$usuario = [
    'nome' => 'Matheus',
    'idade' => 29,
    'profissão' => 'Programador'
];

if($usuario){
    $nome = $usuario['nome'];
    $idade = $usuario['idade'];
    $profissao = $usuario['profissao'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <div>
        <input type="text" name="nome" placeholder="DIGITE SEU NOME" value="<?= $nome ?>">
        </div>
        <div>
        <input type="text" name="idade" placeholder="DIGITE SUA IDADE" value="<?= $idade ?>">
        </div>
        <div>
        <input type="text" name="profissao" placeholder="DIGITE SUA PROFISSÃO" value="<?= $profissao ?>">
        </div>
        <input type="submit" value="ENVIAR"
    </form>
</body>
</html>