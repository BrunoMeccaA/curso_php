<?php

$pessoas = [
    'Tutu' => 12,
    'Alin' => 63,
    'Merlin' => 77,
    'Casco' => 35,
    'Dav' => 41,
    'Art' => 17
];
?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($pessoas as $nome => $idade): ?>
        <tr>
            <td><?= $nome; ?></td>
            <td><?= $idade; ?></td>
        </tr>
<?php endforeach; ?>
</table>