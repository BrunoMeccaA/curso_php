<?php

$validacoes = [];

if(count($_POST) > 0){

    if($_POST['nome'] === ""){
        $validacoes[] = "Por favor, preencha o nome do usuário!";
    }

    if($_POST['email'] === ""){
        $validacoes[] = "Por favor, preencha o email do usuário!";
    }

    if ($_POST['senha'] != $_POST['confirmacao']){
        $validacoes[] = "As senhas devem ser iguais!";
    }
    
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
    <?php if(count($validacoes)) : ?>
       <ul>
        <?php foreach($validacoes as $validacao) : ?>
            <li><?= $validacao ?></li>
        <?php endforeach; ?>
       </ul>
    <?php endif; ?>
    <form action="index.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="DIGITE SEU NOME">
        </div>
        <div>
            <input type="text" name="email" placeholder="DIGITE SEU EMAIL">
        </div>
        <div>
            <input type="password" name="senha" placeholder="DIGITE SUA SENHA">
        </div>
        <div>
            <input type="password" name="confirmacao" placeholder="CONFIRME SUA SENHA">
        </div>
        <div>
            <input type="submit" value="ENVIAR">
        </div>
    </form>
</body>
</html>