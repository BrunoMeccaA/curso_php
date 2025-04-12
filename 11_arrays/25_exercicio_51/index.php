<?php

$ranking = [
    'Alun' => 251,
    'Padu' => 83,
    'Tot' => 477,
    'Volm' => 132,
    'Aldo' => 18,
    'Faz' =>  41
];

asort($ranking);

?>

<h1>Ranking:</h1>
<ol>
<?php foreach($ranking as $pessoa => $pontuacao): ?>
    <li><?= $pessoa ?> -> <?= $pontuacao ?> pontos</li>
<?php endforeach; ?>
</ol>
