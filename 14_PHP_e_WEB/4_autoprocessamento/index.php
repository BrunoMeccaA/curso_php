<?php

$method = $_SERVER['REQUEST_METHOD'];

if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
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
  <?php
  if($method == "GET"):
  ?>
  <form action="index.php" method="POST">
    <div>
        <input type="Text" name="nome" placeholder="DIGITE SEU NOME">
    </div>
    <div>
        <input type="submit" value=ENVIAR>
  </div>
  </form>
  <?php
    else:
  ?>
    <h1> O seu nome é <?= $nome ?></h1>
  <?php
    endif;
  ?>
</body>
</html>