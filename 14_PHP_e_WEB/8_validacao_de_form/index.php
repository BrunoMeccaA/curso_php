<?php
$validacoes = [];

if (count($_POST) > 0) {
    // Validações
    if (empty($_POST['nome'])) {
        $validacoes[] = "Por favor, preencha o nome do usuário!";
    }

    if (empty($_POST['email'])) {
        $validacoes[] = "Por favor, preencha o email do usuário!";
    }

    if ($_POST['senha'] !== $_POST['confirmacao']) {
        $validacoes[] = "As senhas devem ser iguais!";
    }

    // Se não houver erros, aqui você pode inserir no banco, por exemplo
    if (count($validacoes) === 0) {
        // Código para inserir no banco ou outra ação
        echo "Formulário válido e pronto para processar!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Formulário de Cadastro</title>
</head>

<body>

    <?php if (count($validacoes) > 0) : ?>
        <ul style="color:red;">
            <?php foreach ($validacoes as $validacao) : ?>
                <li><?= htmlspecialchars($validacao) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="" method="POST">
        <div>
            <input type="text" name="nome" placeholder="DIGITE SEU NOME" value="<?= htmlspecialchars($_POST['nome'] ?? '') ?>" />
        </div>
        <div>
            <input type="email" name="email" placeholder="DIGITE SEU EMAIL" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" />
        </div>
        <div>
            <input type="password" name="senha" placeholder="DIGITE SUA SENHA" />
        </div>
        <div>
            <input type="password" name="confirmacao" placeholder="CONFIRME SUA SENHA" />
        </div>
        <div>
            <input type="submit" value="ENVIAR" />
        </div>
    </form>

</body>

</html>