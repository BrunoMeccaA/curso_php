<?php

include_once("db.php");

?>

<h1>INSIRA UM CARRO</h1>
<form action="process.php" method="post">
    <div>
        <label for="brand">Marca do Carro:</label>
        <input type="text" name="brand" placeholder="Insira a marca do carro">
    </div>
    <div>
        <label for="km">Quilometragem:</label>
        <input type="number" name="km" placeholder="Insira a quilometragem do carro">
    </div>
    <div>
        <label for="color">Cor do carro:</label>
        <input type="text" name="color" placeholder="Insira a cor do carro">
    </div>
    <div>
        <button type="submit">SALVAR</button>
    </div>
</form>